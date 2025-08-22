<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'title' => 'Halaman Barang Keluar',
            'barang' => Barang::all(),
        );

        return view('barang.barang-keluar', $data);
    }

    public function history()
    {
        $data = array(
            'title' => 'History Barang Keluar',
            'barang_keluar' => BarangKeluar::all(),
        );

        return view('barang.history-barang-keluar', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {   
        
        BarangKeluar::create([
            'nama' => $request->nama,
            'quantity' => $request->stock_keluar,
            'satuan' => $request->satuan,
            'tanggal_keluar' => $request->tanggal_keluar,
        ]);

        $barang = Barang::find($id);

        if ($barang) {
            $barang->quantity -= $request->stock_keluar;
            $barang->save();
        }
        Alert::success('Success', 'Data Berhasil Ditambah!');

        return redirect('/barang-keluar');
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarangKeluar $barangKeluar)
    {
        //
    }
}