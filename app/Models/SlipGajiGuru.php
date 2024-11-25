<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlipGajiGuru extends Model
{
    use HasFactory;

    protected $table = 'slip_gaji_guru';
    protected $fillable = [
        'guru_id', // ID guru (foreign key ke tabel guru)
        'bulan', // Bulan gaji
        'tahun', // Tahun gaji
        'gaji_pokok', // Gaji pokok
        'tunjangan', // Tunjangan
        'potongan', // Potongan
        'total_gaji', // Total gaji
        'tanggal_pembayaran', // Tanggal pembayaran gaji
        'status_pembayaran', // Status pembayaran ('Dibayar', 'Belum Dibayar')
    ];

    public function guru()
    {
        return $this->belongsTo(Teacher::class); // Hubungan dengan model Guru
    }
}
