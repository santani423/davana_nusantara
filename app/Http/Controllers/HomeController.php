<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Paket;
use App\Models\RuangMedia;
use App\Models\TourPackage;
use App\Models\TypePaket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $aboutAs = AboutUs::first();
        $typePaket = TypePaket::get();
        $count = [];
        foreach ($typePaket as $key => $value) {
            $paket = DB::table('pakets')
                ->where('type_paket_id', $value->id)
                ->count();
            $count[$key]['type_paket'] = $value->name;
            $count[$key]['count'] = $paket;
            $count[$key]['id'] = $value->id;
        } 
        return view('about-as', compact('aboutAs', 'typePaket', 'count'));
    }
}
