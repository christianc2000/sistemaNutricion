<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlimentoNutriente extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
//relación inversa de 1 a muchos
    public function nutriente()
    {
        return $this->BelongsTo(Nutriente::class);
    }
//relación inversa de 1 a muchos
    public function alimento()
    {
        return $this->BelongsTo(Alimento::class);
    }
//relación inversa de 1 a muchos
    public function unidadmedida()
    {
        return $this->belongsTo(UnidadMedida::class);
    }
}
