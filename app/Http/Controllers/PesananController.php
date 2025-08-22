<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pesanan')
            ->join('users', 'pesanan.user_id', '=', 'users.id')
            ->select('pesanan.*', 'users.name as user_name')
            ->get();
    
        return view('pesanan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $users = User::all(); // Assuming you have a User model

    return view('pesanan.create', compact('users'));
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
            'jenis_cucian' => 'required',
            'status' => 'required',
            'tanggal_pemesanan' => 'required',
            'berat' => 'required',
            'user_id' => 'required'
        ]);
    
        $hargaJenisCucian = $this->getHargaJenisCucian($request->jenis_cucian);
    
        $totalHarga = $hargaJenisCucian * $request->berat;
    
        DB::insert("INSERT INTO `pesanan` (`id_pesanan`, `user_id`, `jenis_cucian`, `status`, `tanggal_pemesanan`, `berat`, `harga`)
            VALUES (uuid(), ?, ?, ?, ?, ?, ?)",
            [$request->user_id, $request->jenis_cucian, $request->status, $request->tanggal_pemesanan, $request->berat, $totalHarga]);
    
        return redirect()->route('pesanan.index')->with(['success' => 'data berhasil disimpan']);
    }
    
    // Helper function to get harga from the selected jenis_cucian
    private function getHargaJenisCucian($jenisCucian)
    {
        switch ($jenisCucian) {
            case 'curtain withoutring':
                return 15000;
            case 'curtain with ring':
                return 25000;
            case 'bed cover single':
                return 35000;
            case 'bed cover double':
                return 50000;
            case 'towel_ biasa':
                return 10000;
            case 'towel jumbo':
                return 15000;
            case 'blanket single':
                return 10000;
            case 'blanket double':
                return 15000;
            case 'table clothkecil':
                return 5000;
            case 'table cloth besar':
                return 15000;
            case 'sheet single':
                return 7000;
            case 'sheet rimple':
                return 20000;
            case 'sheet double':
                return 10000;
            case 'pillow case':
                return 2000;
            case 'washing drying pressing':
                return 7000;
            case 'washing drying folding':
                return 5000;
            case 'pressing folding':
                return 4000;
            default:
                return 0;
        }
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
        $data=DB::table('pesanan')->where('id_pesanan',$id)->first();
        return view('pesanan.edit',compact('data'));
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
        $this->validate($request, [
            'jenis_cucian' => 'required',
            'status' => 'required',
            'tanggal_pemesanan' => 'required',
            'berat' => 'required'
        ]);
    
        $hargaJenisCucian = $this->getHargaJenisCucian($request->jenis_cucian);
    
        $totalHarga = $hargaJenisCucian * $request->berat;
    
        DB::update("UPDATE `pesanan` SET `jenis_cucian`=?, `status`=?, `tanggal_pemesanan`=?, `berat`=?, `harga`=? WHERE id_pesanan =?",
            [$request->jenis_cucian, $request->status, $request->tanggal_pemesanan, $request->berat, $totalHarga, $id]);
    
        return redirect()->route('pesanan.index')->with(['success' => 'data berhasil diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pesanan')->where('id_pesanan',$id)->delete();

        //redirect to index
        return redirect()->route('pesanan.index')->with(['success'=>' data berhasil dihapus']);
        

    }
    
    
    
}         