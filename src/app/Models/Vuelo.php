<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model{
    protected $table="vuelo";
    use HasFactory;

    public function aerolineas(){
        return $this->belongsTo(Aerolinea::class, 'aerolinea_id');
    }

    public function ciudadOrigen(){
        return $this->belongsTo(Ciudad::class, 'ciudad_origen_id');
    }

    public function ciudadDestino(){
        return $this->belongsTo(Ciudad::class, 'ciudad_destino_id');
    }
}
