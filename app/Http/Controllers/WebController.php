<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about_us()
    {
        return view('about-us');
    }

    public function service ($slug)
    {
        // load all services (small table) and match by slugified title
        $service = Service::all()->first(function ($s) use ($slug) {
            return Str::slug($s->title) === $slug;
        });
    
        if (! $service) {
            abort(404);
        }
    
        // optionally you may want related services or other data:
        $otherServices = Service::where('id', '!=', $service->id)->take(6)->get();
    
        return view('book-promotions', compact('service', 'otherServices'));
    }
    
    public function blogss(Request $request)
    {
        // paginate (9 per page) — change per your design
        $blogs = Blog::orderBy('date', 'desc')->paginate(9);

        // recent posts for sidebar
        $recentPosts = Blog::orderBy('date', 'desc')->take(5)->get();

        return view('blogs', compact('blogs', 'recentPosts'));
    }

    // single blog page (slug)
    public function blog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // optional: recent posts for sidebar
        $recentPosts = Blog::orderBy('date', 'desc')->take(5)->get();

        return view('blog', compact('blog', 'recentPosts'));
    }
    public function faqs()
    {
        $faqs = Faq::orderBy('created_at', 'desc')->get();
        return view('faq', compact('faqs'));
    }
    public function contact_us()
    {
        return view('contact-us');
    }
    public function book_video_trailer()
    {
        return view('book-video-trailer');
    }
    public function term_condition()
    {
        return view('terms');
    }
    public function privacy_policy()
    {
        return view('privacy-policy');
    }
}
