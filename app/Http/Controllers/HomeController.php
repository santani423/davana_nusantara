<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Paket;
use App\Models\RuangMedia;
use App\Models\TourPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $banner = Banner::where('is_active', true)->orderBy('created_at', 'desc')->get();
        // dd($banner);
        $package = TourPackage::first();
        $paket = Paket::orderBy('created_at', 'desc')
            ->select('*')
            ->paginate(10);
        $ruangMedia = RuangMedia::orderBy('created_at', 'desc')
            ->select('*')
            ->paginate(10);
        return view('home', compact('banner', 'package','paket','ruangMedia'));
    }

    function abautAs()
    {
        return view('about-as');
    }
}
