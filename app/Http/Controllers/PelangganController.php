<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function showStatus()
    {
        // Retrieve currently authenticated user
        $user = Auth::user();
    
        // Retrieve orders for the user with user name
        $data_pesanan = DB::table('pesanan')
            ->join('users', 'pesanan.user_id', '=', 'users.id')
            ->where('pesanan.user_id', $user->id)
            ->select('pesanan.*', 'users.name as user_name') 
            ->get();
    
        return view('pelanggan.status', compact('user', 'data_pesanan'));
    }

    public function editPelanggan($id)
    {
        // Retrieve the pelanggan based on the provided ID
        $pelanggan = User::find($id);
    
        // Return the edit view with the pelanggan data
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

        // Update the pelanggan record
        $pelanggan = User::find($id);
        $pelanggan->update($validatedData);

        // Redirect to the index page with a success message
        return redirect('/pelanggan')->with('success', 'Pelanggan updated successfully');
    }

    public function destroy($id)
{
    try {
        // Find the pelanggan based on the provided ID
        $pelanggan = User::find($id);

        // Set foreign key value to null in pesanan table
        DB::table('pesanan')->where('user_id', $id)->update(['user_id' => null]);

        // Delete the pelanggan
        $pelanggan->delete();

        // Redirect to the index page with a success message
        return redirect('/pelanggan')->with('success', 'Pelanggan deleted successfully');
    } catch (QueryException $e) {
        // Handle the exception, e.g., display an error message
        return redirect('/pelanggan')->with('error', 'Error deleting pelanggan: ' . $e->getMessage());
    }
}

    public function listHarga()
    {
        $data=DB::select(DB::raw("select * from list_harga"));
        return view('Customer.list', compact('data'));
    }
}