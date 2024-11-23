<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    use HasFactory;
    protected $table = 'SPP';

    protected $fillable = [
        'siswa_id', // ID siswa yang membayar SPP (foreign key ke tabel siswa)
        'tahun_ajaran', // Tahun ajaran
        'bulan', // Bulan pembayaran (misalnya, 1 untuk Januari, 2 untuk Februari, dll.)
        'jumlah_bayar', // Jumlah yang dibayar
        'tanggal_bayar', // Tanggal pembayaran
        'status_bayar', // Status pembayaran (misalnya, 'Lunas', 'Belum Lunas', 'Terlambat')
        'bukti_bayar', // Nama file bukti pembayaran (jika ada)
    ];


    public function siswa()
    {
        return $this->belongsTo(Student::class); // Hubungan dengan model Siswa
    }
}