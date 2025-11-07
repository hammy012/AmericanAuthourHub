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
            'tags' => 'nullable|string', // comma-separated input
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        // thumbnail
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('blogs/thumbnails', 'public');
        }

        // multiple images
        $imagesArr = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imagesArr[] = $img->store('blogs/images', 'public');
            }
        }
        $data['images'] = !empty($imagesArr) ? $imagesArr : null;

        // tags: convert comma-separated string to array, trim
        if (!empty($request->input('tags'))) {
            $tags = array_filter(array_map('trim', explode(',', $request->input('tags'))));
            $data['tags'] = array_values($tags);
        } else {
            $data['tags'] = null;
        }

        // slug (optional override) and description kept as-is
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

        // thumbnail replace
        if ($request->hasFile('thumbnail')) {
            if ($blog->thumbnail && Storage::disk('public')->exists($blog->thumbnail)) {
                Storage::disk('public')->delete($blog->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('blogs/thumbnails', 'public');
        }

        // images: append new images to existing array
        $existing = $blog->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $existing[] = $img->store('blogs/images', 'public');
            }
        }
        $data['images'] = !empty($existing) ? $existing : null;

        // tags
        if (!empty($request->input('tags'))) {
            $tags = array_filter(array_map('trim', explode(',', $request->input('tags'))));
            $data['tags'] = array_values($tags);
        } else {
            $data['tags'] = null;
        }

        // update slug only if empty (you may change logic)
        if (empty($blog->slug)) {
            $data['slug'] = Str::slug($data['title']) . '-' . Str::random(6);
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // delete files if exist
        if ($blog->thumbnail && Storage::disk('public')->exists($blog->thumbnail)) {
            Storage::disk('public')->delete($blog->thumbnail);
        }
        if (!empty($blog->images) && is_array($blog->images)) {
            foreach ($blog->images as $img) {
                if (Storage::disk('public')->exists($img)) {
                    Storage::disk('public')->delete($img);
                }
            }
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
