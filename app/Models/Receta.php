<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    //relaciones de muchos a muchos
    public function alimentos()
    {
        return $this->belongsToMany(Alimento::class);
    }
    public function comidas()
    {
        return $this->belongsToMany(Comida::class);
    }
}
