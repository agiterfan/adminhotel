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
        JenisKamar::create([
            'Jenis_Kamar'   => $request->Jenis_Kamar,
            'Fasilitas'     => $request->Fasilitas,
            'Harga'         => $request->Harga
        ]);

        return redirect()->route('roomType.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        
        return view('RoomType.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = JenisKamar::findOrFail($id);

        $data->update([
            'Jenis_Kamar'   => $request->Jenis_Kamar,
            'Fasilitas'     => $request->Fasilitas,
            'Harga'         => $request->Harga
        ]);

        return redirect()->route('roomType.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JenisKamar::destroy($id);
        return redirect()->route('roomType.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
