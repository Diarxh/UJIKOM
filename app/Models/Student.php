<?php
namespace App\Models;

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

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function getGenderAttribute($value)
    {
        return $value === 'L' ? 'Laki-laki' : ($value === 'P' ? 'Perempuan' : 'N/A');
    }
}
