<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
//relación de muchos a muchos
    public function alimentos(){
        return $this->belongsToMany(Alimento::class);
    }
    public function recetas(){
        return $this->belongsToMany(Receta::class);
    }
}
