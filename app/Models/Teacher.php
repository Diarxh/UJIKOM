<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',  // Nama guru
        'subject',  // Mata pelajaran
        'gender',  // Jenis kelamin
        'hire_date',  // Tanggal bergabung
        'phone',  // Nomor telepon
        'email',  // Email
        'gaji_pokok',  // Gaji pokok
        'tunjangan',  // Tunjangan
        'potongan',  // Potongan
        'total_gaji'  // Total gaji
    ];

    public function classes()
    {
        return $this->hasMany(SchoolClass::class);
    }
}
