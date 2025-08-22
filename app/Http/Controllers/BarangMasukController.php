<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'title' => 'Halaman Barang Masuk',
            'barang' => Barang::all(),
        );

        return view('barang.barang-masuk', $data);
    }

    public function history()
    {
        $data = array(
            'title' => 'History Barang Masuk',
            'barang_masuk' => BarangMasuk::all(),
        );

        return view('barang.history-barang-masuk', $data);
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
        $request->validate([
            'nama' => 'required',
            'tambahStock' => 'required|numeric|min:1', // Menambahkan aturan untuk memastikan nilai numerik dan minimal 1
            'satuan' => 'required',
            'tanggal_masuk' => 'required|date',
        ]);
        
        BarangMasuk::create([
            'nama' => $request->nama,
            'quantity' => $request->tambahStock,
            'satuan' => $request->satuan,
            'tanggal_masuk' => $request->tanggal_masuk,
        ]);

        $barang = Barang::find($id);

        if ($barang) {
            $barang->quantity += $request->tambahStock;
            $barang->save();
        }
        Alert::success('Success', 'Data Berhasil Ditambah!');

        return redirect('/barang-masuk');
    }

    /**3
     *Display the specified resource.
     */
    public function show(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangMasuk $barangMasuk)
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
    public function destroy(BarangMasuk $barangMasuk)
    {
        //
    }
}