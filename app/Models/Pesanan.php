<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan'; // Nama tabel sesuai dengan struktur database
    protected $primaryKey = 'id_pesanan'; // Nama primary key sesuai dengan struktur database
    public $timestamps = false; // Nonaktifkan timestamps jika tabel tidak memiliki kolom created_at dan updated_at

    // Definisikan kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'jenis_cucian',
        'status',
        'tanggal_pemesanan',
        'berat',
        'user_id',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
