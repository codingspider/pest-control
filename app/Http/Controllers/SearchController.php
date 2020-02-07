<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class SearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $result=Blog::where('title', 'LIKE', "%{$request->input('query')}%")->get();

        foreach ($result as $hsl)
            {
                $data[] = $hsl->title;
                
            }
        return response()->json($data);
   
       
    }
}
