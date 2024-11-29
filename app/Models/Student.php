<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dob', 'class_id', 'gender', 'address', 'phone', 'email'];

    public function class()
    {
        return $this->belongsTo(SchoolClass::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
    // Accessor untuk menghitung umur
    public function getAgeAttribute()
    {
        if (!$this->dob) {
            return 'Tanggal lahir tidak tersedia';
        }

        $dob = Carbon::parse($this->dob);

        // Deteksi jika DOB di masa depan
        if ($dob->isFuture()) {
            return 'Tanggal lahir tidak valid';
        }

        $today = Carbon::now();
        $years = $today->year - $dob->year;

        if ($today->month < $dob->month || ($today->month == $dob->month && $today->day < $dob->day)) {
            $years--;
        }

        return $years;
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}