<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Faq;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalBlogs = Blog::count();
        $totalServices = Service::count();
        $totalFaqs = Faq::count();

        // recent users (latest 5)
        $recentUsers = User::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalBlogs',
            'totalServices',
            'totalFaqs',
            'recentUsers'
        ));
    }
}
