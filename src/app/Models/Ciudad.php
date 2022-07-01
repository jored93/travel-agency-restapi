<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model{
    protected $table="ciudad";
    use HasFactory;

    public function paises(){
        return $this->belongsTo(Pais::class, 'pais_id');
    }

    public function vuelos(){
        return $this->hasMany(Vuelo::class, 'id');
    }
}
