<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerolinea extends Model
{
    protected $table="aerolinea";
    use HasFactory;

    public function vuelos(){
        return $this->hasMany(Vuelo::class, 'id');
    }
}
