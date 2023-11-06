<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    use HasFactory;
    public function Rutas(){
        return $this->hasMany(Ruta::class);
    }
    public function Vuelos(){
        return $this->hasOne(Vuelo::class);
    }
}
