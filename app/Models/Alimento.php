<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
//relación 1 a muchos
    public function alimentonutrientes(){
        return $this->hasMany(alimentonutrientes::class);
    }
}
