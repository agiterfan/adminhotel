<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jenis_Kamar;
use Illuminate\Http\Request;
use App\Models\Kamar;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kamars = Kamar::get();
        return view('Room.index', compact('kamars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = DB::table('kamar')
        ->join('jenis_kamar', 'jenis_kamar.Jenis_Kamar', '=', 'kamar.Jenis_Kamar')
        ->get([
            'kamar.*',
            'jenis_kamar.Jenis_Kamar'
        ]);
        return view('Room.display', ["data" => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Kamar::create($request->all());
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
        $data = Kamar::findOrFail($id);
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
        $data = Kamar::findOrFail($id);
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
        Kamar::destroy($id);
        return response()->json([
            'data' => $id,
            'message' => 'Berhasil menghapus data Kamar',
            'status' => 200,
        ]);
    }
}
