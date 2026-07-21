<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetting;
use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    //BUSINESS SETTING
    public function business_setting()
    {
        $data = BusinessSetting::first();
        if (!$data) {
            return back()->with('success', 'Not Found');
        }
        return view('admin.business.add-page', compact('data'));
    }


    public function business_setting_store(Request $request)
    {
        $existingData = BusinessSetting::first();

        $data = [
            'company_name' => $request->input('company_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'ceo' => $request->input('ceo'),
        ];

        if ($existingData) {
            $existingData->update($data);
        } else {
            BusinessSetting::create($data);
        }

        return redirect()->back()->with('success', 'Business Settings Updated Successfully');
    }


    // ADMIN PROFILE
    public function profile_view()
    {
        return view('admin.profile.profile-view');
    }

    public function profile_update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable|string',
        ]);

        $admin = Admin::find($id);

        // Check if the admin exists
        if (!$admin) {
            return back()->with('error', 'Admin not found.');
        }

        // Check if the provided password matches the stored hash
        if ($request->password && !Hash::check($request->password, $admin->password)) {
            return redirect()->route('admin.dashboard');
        }

        // Update the admin details
        $admin->name = $request->name;
        $admin->email = $request->email;

        // Update the password if a new one is provided
        if ($request->npassword) {
            $admin->password = Hash::make($request->npassword);
        }

        $admin->save();

        return back()->with('success', 'Profile updated successfully.');
    }
    
    // contact list
    public function contact_list()
    {
        $contacts = Contact::latest()->paginate(15); // adjust per page
        return view('admin.contacts.index', compact('contacts'));
    }

    // contact view
    public function contact_view($id)
    {
        $contact = Contact::findOrFail($id);

        // optionally mark as read here if you have is_read column
        // $contact->update(['is_read' => 1]);

        return view('admin.contacts.view', compact('contact'));
    }

    // optional: delete contact
    public function contact_delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact-list')->with('success', 'Contact deleted successfully.');
    }
}
