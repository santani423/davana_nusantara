<?php

namespace App\Http\Controllers;

use App\Models\ItemDesc;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function index()
    {
        return view('cms.index');
    }

    public function create()
    {
        return view('cms.create');
    }

    public function store(Request $request)
    {
        // Logic to store data
    }

    public function edit($id)
    {
        return view('cms.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update data
    }

    public function destroy($id)
    {
        // Logic to delete data
    }
    public function show($id)
    {
        return view('cms.show', compact('id'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        // Logic to search data
        return view('cms.search', compact('query'));
    }


    function paket($code)
    { 
        return view('cms.paket.index', compact('code'));
    }

    function paketCreate($code)
    { 
        $wilayah = Wilayah::all();
        $ItemDesc = ItemDesc::all();
        return view('cms.paket.create', compact('code','wilayah','ItemDesc'));
    }

    function paketStore(Request $request, $code)
    { 
        // Logic to store data
        // return redirect()->route('cms.paket', ['code' => $code]);
    } 

    function paketEdit($code, $id)
    { 
        $wilayah = Wilayah::all();
        $ItemDesc = ItemDesc::all();
        return view('cms.paket.edit', compact('code','id','wilayah','ItemDesc'));
    }
    function paketShow($code, $id)
    { 
        return view('cms.paket.show', compact('code','id'));
    }
    function paketDelete($code, $id)
    { 
        return view('cms.paket.delete', compact('code','id'));
    }
}
