<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RuangMedia;
use Illuminate\Http\Request;

class RuangMediaController extends Controller
{
    public function index(Request $request)
    {
        try {
            $page = $request->input('page', 1);
            $size = $request->input('size', 10);
            $query = RuangMedia::query();
 

            $ruangMedia = $query->paginate($size, ['*'], 'page', $page);

            return response()->json([
                'message' => 'List Ruang Media',
                'data' => $ruangMedia, 
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to retrieve ruang media',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
