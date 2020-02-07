<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ServiceController extends Controller
{
    public function cockroach(){
        $data =DB::table('cockroaches')->first();

        return view('cockroach', compact('data'));
    }
    public function termite (){
        $data =DB::table('termites')->first();

        return view('termites', compact('data'));
    }
    public function bedbug (){
        $data =DB::table('bedbugs')->first();

        return view('bedbugs', compact('data'));
    }
    public function rat (){
        $data =DB::table('rats')->first();

        return view('rats', compact('data'));
    }
}
