<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari_pelajaran extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $table = 'hari_pelajaran';

    public function pelajaran()
    {
        return $this->belongsToMany(Pelajaran::class);
    }
    
}
