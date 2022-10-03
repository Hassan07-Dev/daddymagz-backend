<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\ClientTestimonials;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){
        $categories = BlogCategory::withCount('blog')->orderBy('blog_count', 'desc')->where('status', 1)->get();
        return view ('index', compact ('categories'));
    }

    public function contactForm (Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name'		=> 'required',
                'email'	=> 'required|email',
                'message_data'	=> 'required',
            ]);
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput($request->all());
            }

            Mail::send('email_template.contact-us', ['name' => $request->name, 'email' => $request->email, 'message_data' => $request->message_data], function ($m) use ($request) {
                $m->from($request->email, $request->name);
                $m->to('info@daddymagz.com', 'Daddy Magzz')->subject('Contact Form');
            });

            Session::flash('success', 'Mail Send Successfully.');
            return redirect()->route('contactUs.index');

        } catch (\Exception $e){
            return $e;
        }
    }

    public function test (Request $request)
    {
        return view ('test');
    }
}
