<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ClientTestimonials;
use App\Models\Services;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $blogs = Blog::where('status', 1)->latest()->limit(5)->get();
        return view ('index');
    }
}
