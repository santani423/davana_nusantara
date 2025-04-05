<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\TypePaket;
use Illuminate\Http\Request;
use Mockery\Matcher\Type;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $page = $request->input('page', 1);
            $size = $request->input('size', 10);
            $query = Paket::query();

            if ($request->has('paket_id')) {
                $query->where('id', $request->input('paket_id'));
            }

            if ($request->has('wilayah_id') && $request->input('wilayah_id') != null) {
                $query->join('wilayahs', 'pakets.wilayah_id', '=', 'wilayahs.id')
                    ->where('wilayahs.id', $request->input('wilayah_id'));
            }

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json([
            'message' => 'List Paket',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validasi data
            // $validated = $request->validate([
            //     'wilayah_id' => 'required|integer|exists:wilayahs,id', 
            //     'name' => 'required|string|max:255',
            //     'start_date_departure' => 'required|date',
            //     'end_date_departure' => 'required|date|after_or_equal:start_date_departure',
            //     'price' => 'required|numeric|min:0',
            //     'thumbnail_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // ]);

            // Upload gambar jika ada
            $thumbnailPath = 'assets/item/group126.png'; // Default thumbnail
            if ($request->hasFile('thumbnail_img')) {
                $file = $request->file('thumbnail_img');
                $thumbnailPath = $file->store('uploads/thumbnails', 'public');
            }

            // Cari TypePaket berdasarkan code
            $typePaket = TypePaket::where('code', $request->code)->first();

            if (!$typePaket) {
                return response()->json([
                    'message' => 'Invalid Type Paket code',
                    'code' => $request->code,
                ], 400);
            }

            // Simpan data paket
            $paket = new Paket();
            $paket->wilayah_id = $request->wilayah_id;
            $paket->type_paket_id = $typePaket->id;
            $paket->name = $request->name;
            $paket->thumbnail_img = $thumbnailPath;
            $paket->start_date_departure = $request->start_date_departure;
            $paket->end_date_departure = $request->end_date_departure;
            $paket->hotel_bintang_1 = $request->hotel_bintang_1 ?? 1;
            $paket->hotel_bintang_2 = $request->hotel_bintang_2 ?? 1;
            $paket->hotel_bintang_3 = $request->hotel_bintang_3 ?? 1;
            $paket->hotel_bintang_4 = $request->hotel_bintang_4 ?? 1;
            $paket->hotel_bintang_5 = $request->hotel_bintang_5 ?? 0;
            $paket->transportation_ticket = $request->transportation_ticket ?? 1;
            $paket->code = $request->code . '_' . $request->wilayah_id . '_' . date('YmdHis') . '_' . rand(1000, 9999);
            $paket->description = $request->description ?? null;
            $paket->price = (int) $request->price;

            $paket->save();

            return response()->json([
                'data' => $paket,
                'typePaket' => $typePaket,
                'message' => 'Paket successfully created',
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $ve) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $ve->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to store paket',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json([
            'message' => 'Detail Paket'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
