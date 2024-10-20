<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKamar;
use Illuminate\Support\Facades\DB;

class JenisKamarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $jeniskamars = JenisKamar::get();
        return view('RoomType.index', ['jeniskamars' => $jeniskamars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = DB::table('jenis_Kamars')
        ->get([
            'jenis_kamars.*',
        ]);
        return view('RoomType.display', ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = JenisKamar::create($request->all());
        return response()->json([
            'data' => $data,
            'message' => 'Berhasil menambahkan data Kamar',
            'status' => $data ? 200 : 400,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = JenisKamar::findOrFail($id);
        return response()->json([
            'data' => $data,
            'status' => $data ? 200 : 400,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = JenisKamar::findOrFail($id);
        $data->update($request->all());

        return response()->json([
            'data' => $data,
            'message' => 'Berhasil mengubah data Kamar',
            'status' => $data ? 200 : 400,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JenisKamar::destroy($id);
        return response()->json([
            'data' => $id,
            'message' => 'Berhasil menghapus data Kamar',
            'status' => 200,
        ]);
    }
}
