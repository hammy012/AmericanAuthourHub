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

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        if ($request->hasFile('icon_image')) {
            $data['icon_image'] = $request->file('icon_image')->store('services/icons', 'public');
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

        if ($request->hasFile('image')) {
            // delete old
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        if ($request->hasFile('icon_image')) {
            if ($service->icon_image && Storage::disk('public')->exists($service->icon_image)) {
                Storage::disk('public')->delete($service->icon_image);
            }
            $data['icon_image'] = $request->file('icon_image')->store('services/icons', 'public');
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    // destroy
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }
        if ($service->icon_image && Storage::disk('public')->exists($service->icon_image)) {
            Storage::disk('public')->delete($service->icon_image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
