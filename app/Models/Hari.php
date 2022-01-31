<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    protected $fillable = ['hari'];

    public function getRouteKeyName()
    {
        return 'hari';   
    }
    public function pelajaran()
    {
        return $this->belongsToMany(Pelajaran::class);
    }
}
