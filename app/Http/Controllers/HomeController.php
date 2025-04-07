<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $banner = Banner::where('is_active',true)->orderBy('created_at', 'desc')->get();
        // dd($banner);
        return view('home', compact('banner'));
    }
}
