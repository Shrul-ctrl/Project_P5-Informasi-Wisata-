<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_lokasi', 'alamat_lengkap','provinsi','kabupaten'];
    public $timestamps = true;
    
    public function event()
    {
        return $this->hasMany(E_COMPILE_ERRORvent::class);
    }
}
