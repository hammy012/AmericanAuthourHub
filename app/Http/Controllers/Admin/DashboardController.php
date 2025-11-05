<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // آپ اپنی logic یہاں رکھیں
        return view('admin.dashboard');
    }
}
