<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;
    public function Avion(){
        return $this->hasOne(Avion::class);
    }
    public function Vuelos(){
        return $this->hasMany(Vuelo::class);
    }
}
