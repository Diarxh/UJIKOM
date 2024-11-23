<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject',
        'hire_date',
        'phone',
        'email',
        'gaji_pokok',
        'tunjangan',
        'potongan',
        'total_gaji'
    ];


    public function classes()
    {
        return $this->hasMany(SchoolClass::class);
    }
}