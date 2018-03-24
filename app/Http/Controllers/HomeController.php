<?php

namespace App\Http\Controllers;

use Auth;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $content = Content::orderBy('id','desc')->get();

        return view('home', compact('content'));
    }
}
