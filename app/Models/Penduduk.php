<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function kartukeluarga()
    {
        return $this->belongsTo(Kartukeluarga::class);
    }

    public function suratketeranganusaha(){
        return $this->hasMany(Suratketeranganusaha::class);
    }

    public function suratketerangandomisli(){
        return $this->hasMany(Suratketerangandomisili::class);
    }

    public function sktkis(){
        return $this->hasMany(Sktkis::class);
    }

    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }

}
