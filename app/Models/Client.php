<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['CIN' , 'Nom' , 'Prenom' , 'user_id'];

    public function location()
    {
        return $this->hasMany(Location::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
