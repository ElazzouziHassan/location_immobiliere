<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['libelle'];

    public function immobilieres()
    {
        return $this->hasMany(Immobiliere::class);
    }
}
