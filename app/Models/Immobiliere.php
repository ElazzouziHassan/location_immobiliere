<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immobiliere extends Model
{
    use HasFactory;
    protected $fillable = ['titre' , 'adresse' , 'prix' , 'disponible' ,'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function location()
    {
        return $this->hasMany(Location::class);
    }
}
