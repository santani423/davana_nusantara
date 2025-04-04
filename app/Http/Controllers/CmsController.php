<?php

namespace App\Http\Controllers;

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
}
