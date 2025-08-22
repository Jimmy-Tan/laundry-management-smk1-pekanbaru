<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select(DB::raw("select * from laporan"));
        return view('laporan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_laporan' => 'required',
            'barang_masuk' => 'required',
            'barang_keluar' => 'required'         
          ]);
         
           DB::insert("INSERT INTO `laporan` (`id_laporan`,`nama_laporan`,`barang_masuk`,`barang_keluar`)values (uuid(),?,?,?)",
           [$request->nama_laporan,$request->barang_masuk,$request->barang_keluar]);
           return redirect()->route('laporan.index')->with(['success' => 'data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('laporan')->where('id_laporan', $id)->first();
        return view('laporan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_laporan' => 'required',
            'barang_masuk' => 'required',
            'barang_keluar' => 'required',            
        ]);

 DB::update("UPDATE `laporan` SET `nama_laporan`=?, `barang_masuk`=?, `barang_keluar`=? WHERE id_laporan =?",
[$request->nama_laporan,$request->barang_masuk,$request->barang_keluar,$id]);
return redirect()->route('laporan.index')->with(['success' => 'data berhasil di update!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
