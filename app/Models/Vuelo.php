<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    public function Empleado(){
        return $this->hasOne(Empleado::class);
    }
    public function Pasajeros(){
        return $this->belongsTo(Pasajero::class);
    }
    public function Rutas(){
        return $this->hasOne(Ruta::class);
    }
    public function Avion(){
        return $this->hasOne(Avion::class);
    }
}
