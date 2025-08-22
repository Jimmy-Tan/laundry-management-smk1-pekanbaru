<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
class ListCucianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select(DB::raw("select * from list_harga"));
        return view('listcucian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('listcucian.create');
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
            'harga' => 'required'         
          ]);
         
           DB::insert("INSERT INTO `list_harga` (`id_list`,`jenis_cucian`,`harga`)values (uuid(),?,?)",
           [$request->jenis_cucian,$request->harga]);
           return redirect()->route('listcucian.index')->with(['success' => 'data berhasil disimpan']);
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
        $data = DB::table('list_harga')->where('id_list', $id)->first();
    
        if (!$data) {
            return redirect()->route('listcucian.index')->with(['error' => 'Data tidak ditemukan']);
        }
    
        return view('listcucian.edit', compact('data'));
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
            'harga' => 'required'
        ]);        

 DB::update("UPDATE `list_harga` SET `jenis_cucian`=?, `harga`=? WHERE id_list =?",
[$request->jenis_cucian,$request->harga,$id]);
return redirect()->route('listcucian.index')->with(['success' => 'data berhasil di update!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('list_harga')->where('id_list',$id)->delete();

        //redirect to index
        return redirect()->route('listcucian.index')->with(['success'=>' data berhasil dihapus']);
        

    }
    
    
    
}         