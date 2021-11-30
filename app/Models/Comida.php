<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
//relación de muchos a muchos
    public function alimentocomidas(){
        return $this->hasMany(AlimentoComidas::class);
    }
    public function comidarecetas(){
        return $this->hasMany(ComidaRecetas::class);
    }
}
