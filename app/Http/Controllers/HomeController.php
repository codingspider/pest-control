<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        $data = DB::table('sliders')->get();
        $blogs = DB::table('blogs')->orderBy('id', 'desc')->paginate(3);
        $testimonials = DB::table('testimonials')->get();
        $companies = DB::table('companies')->get();
        return view('intro', compact('data', 'blogs', 'testimonials', 'companies'));
    }

    public function about(){
        $testimonials = DB::table('testimonials')->get();
       
        return view('about', compact('testimonials'));
    }
}
