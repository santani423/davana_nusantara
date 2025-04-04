<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TypePaket;
use Illuminate\Http\Request;

class TypePaketController extends Controller
{
    public function index(Request $request)
    {
        try {
            $page = $request->input('page', 1);
            $size = $request->input('size', 10);
            $query = TypePaket::query();
            $paket = $query->paginate($size, ['*'], 'page', $page);
            return response()->json([
                'message' => 'List Paket',
                'data' => $paket,
                'wilayah' => $request->input('wilayah_id'),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to retrieve paket',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
