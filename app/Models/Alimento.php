<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

//relación inversa de 1 a muchos
    public function tipoalimento()
    {
        return $this->belongsTo(TipoAlimento::class);
    }
// relaciones de muchos a muchos
    public function comidas()
    {
        return $this->belongsToMany(Comida::class)->withTimestamps();
    }
    public function recetas()
    {
        return $this->belongsToMany(Receta::class);
    }
    public function nutrientes()
    {
        return $this->belongsToMany(Nutrientes::class)->withTimestamps();
    }
    ///
}
