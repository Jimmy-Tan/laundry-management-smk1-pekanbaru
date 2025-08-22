<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        $totalUsers = User::count(); 
        $totalBarangKeluar = BarangKeluar::count();
    $totalBarangMasuk = BarangMasuk::count();
    $totalPesananBelumSelesai = DB::table('pesanan')->where('status', 'belum selesai')->count();
    $monthlySalesData = $this->getMonthlySalesData();

        return view('layouts.home', [
            
            'totalUsers' => $totalUsers,
            'totalBarangKeluar' => $totalBarangKeluar,
        'totalBarangMasuk' => $totalBarangMasuk,
        'totalPesananBelumSelesai' => $totalPesananBelumSelesai,
        'monthlySalesData' => $monthlySalesData, 
        ]);

      
}   
public function getMonthlySalesData()
{
    $monthlyData = []; // Initialize an array to store monthly data

    // Add logic to fetch data based on your requirements
    $pesananBelumSelesai = Pesanan::where('status', 'belum selesai')->get();

    // Loop through each pesanan and extract necessary data
    foreach ($pesananBelumSelesai as $pesanan) {
        $userName = $pesanan->user->name ?? 'Unknown User';

        $monthlyData[] = [
            'label' => $userName,
            'value' => $pesanan->tanggal_pemesanan,
            // You can add more fields as needed
        ];
    }

    return $monthlyData;
}

    public function dashboard()
    {
        return view('layouts.home'); 
    }
    public function cust(){
        return view('home');
    }
 
}
