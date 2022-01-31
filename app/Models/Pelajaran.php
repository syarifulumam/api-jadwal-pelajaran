<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    protected $fillable = ['mata_pelajaran','waktu_mulai','waktu_akhir'];
    // public function getRouteKeyName()
    // {
    //     return 'mata_pelajaran';   
    // }
    public function hari()
    {
        return $this->belongsToMany(Hari::class);
    }

    public function hari_pelajaran()
    {
        return $this->hasMany(Hari_pelajaran::class);
    }
}
