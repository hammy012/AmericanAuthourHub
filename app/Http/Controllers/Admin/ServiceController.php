<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    // index - list
    public function index()
    {
        $services = Service::latest()->paginate(12);
        return view('admin.services.index', compact('services'));
    }

    // create form
    public function create()
    {
        return view('admin.services.create');
    }

    // store
    public function store(Request $request)
{
    $data = $request->validate([
        'sub_title' => 'nullable|string|max:255',
        'title' => 'required|string|max:255',
        'short_desc' => 'nullable|string',
        'sec_title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        'icon_image' => 'nullable|image|mimes:svg,png,jpg,jpeg,webp|max:2048',
    ]);

    // ✅ Main image
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('services'), $filename);
        $data['image'] = 'services/' . $filename;
    }

    // ✅ Icon image
    if ($request->hasFile('icon_image')) {
        $file = $request->file('icon_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('services/icons'), $filename);
        $data['icon_image'] = 'services/icons/' . $filename;
    }

    Service::create($data);

    return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
}

    // edit form
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    // update
    public function update(Request $request, $id)
{
    $service = Service::findOrFail($id);

    $data = $request->validate([
        'sub_title' => 'nullable|string|max:255',
        'title' => 'required|string|max:255',
        'short_desc' => 'nullable|string',
        'sec_title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        'icon_image' => 'nullable|image|mimes:svg,png,jpg,jpeg,webp|max:2048',
    ]);

    // ✅ Replace main image
    if ($request->hasFile('image')) {
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('services'), $filename);
        $data['image'] = 'services/' . $filename;
    }

    // ✅ Replace icon image
    if ($request->hasFile('icon_image')) {
        if ($service->icon_image && file_exists(public_path($service->icon_image))) {
            unlink(public_path($service->icon_image));
        }

        $file = $request->file('icon_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('services/icons'), $filename);
        $data['icon_image'] = 'services/icons/' . $filename;
    }

    $service->update($data);

    return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
}

    // destroy
    public function destroy($id)
{
    $service = Service::findOrFail($id);

    // ✅ Delete main image
    if ($service->image && file_exists(public_path($service->image))) {
        unlink(public_path($service->image));
    }

    // ✅ Delete icon image
    if ($service->icon_image && file_exists(public_path($service->icon_image))) {
        unlink(public_path($service->icon_image));
    }

    $service->delete();

    return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
}
}
