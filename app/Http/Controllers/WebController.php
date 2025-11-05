<?php

namespace App\Http\Controllers;

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

    public function book_promotions()
    {
        return view('book-promotions');
    }
    public function blogs()
    {
        return view('blogs');
    }
    public function faqs()
    {
        return view('faq');
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
