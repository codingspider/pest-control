<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function details($id){

        $data = DB::table('blogs')->where('id', $id)->first();
        $blogs = DB::table('blogs')->orderBy('id', 'desc')->paginate(8);

        return view('details_blog', compact('data', 'blogs'));
    }
    public function blogs (){

        //$data = DB::table('blogs')->where('id', $id)->first();
        $blogs = DB::table('blogs')->orderBy('id', 'desc')->paginate(9);

        return view('blog', compact('blogs'));
    }
}
