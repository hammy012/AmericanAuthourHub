<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(12);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
            'date' => 'nullable|date',
            'description' => 'nullable|string',
            'tags' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);
    
        // thumbnail save (in /blogs/thumbnails)
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('blogs/thumbnails'), $filename);
            $data['thumbnail'] = 'blogs/thumbnails/' . $filename;
        }
    
        // multiple images save (in /blogs/images)
        $imagesArr = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imgName = time() . '_' . $img->getClientOriginalName();
                $img->move(public_path('blogs/images'), $imgName);
                $imagesArr[] = 'blogs/images/' . $imgName;
            }
        }
        $data['images'] = !empty($imagesArr) ? $imagesArr : null;
    
        // tags convert
        if (!empty($request->input('tags'))) {
            $tags = array_filter(array_map('trim', explode(',', $request->input('tags'))));
            $data['tags'] = array_values($tags);
        } else {
            $data['tags'] = null;
        }
    
        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(6);
    
        Blog::create($data);
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
    
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
            'date' => 'nullable|date',
            'description' => 'nullable|string',
            'tags' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);
    
        // ✅ Replace thumbnail (if new uploaded)
        if ($request->hasFile('thumbnail')) {
            // delete old thumbnail
            if ($blog->thumbnail && file_exists(public_path($blog->thumbnail))) {
                unlink(public_path($blog->thumbnail));
            }
    
            $file = $request->file('thumbnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('blogs/thumbnails'), $filename);
            $data['thumbnail'] = 'blogs/thumbnails/' . $filename;
        }
    
        // ✅ Add new images to existing
        $existing = $blog->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imgName = time() . '_' . $img->getClientOriginalName();
                $img->move(public_path('blogs/images'), $imgName);
                $existing[] = 'blogs/images/' . $imgName;
            }
        }
        $data['images'] = !empty($existing) ? $existing : null;
    
        // ✅ Tags
        if (!empty($request->input('tags'))) {
            $tags = array_filter(array_map('trim', explode(',', $request->input('tags'))));
            $data['tags'] = array_values($tags);
        } else {
            $data['tags'] = null;
        }
    
        // ✅ Slug (only if empty)
        if (empty($blog->slug)) {
            $data['slug'] = Str::slug($data['title']) . '-' . Str::random(6);
        }
    
        $blog->update($data);
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
    
        // ✅ Delete thumbnail if exists
        if ($blog->thumbnail && file_exists(public_path($blog->thumbnail))) {
            unlink(public_path($blog->thumbnail));
        }
    
        // ✅ Delete all images if exist
        if (!empty($blog->images) && is_array($blog->images)) {
            foreach ($blog->images as $img) {
                if (file_exists(public_path($img))) {
                    unlink(public_path($img));
                }
            }
        }
    
        $blog->delete();
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
