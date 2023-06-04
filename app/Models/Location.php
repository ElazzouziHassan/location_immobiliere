<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['imobilier_id' , 'client_id' , 'date_debut' , 'date_fin'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function immobiliere()
    {
        return $this->belongsTo(Immobiliere::class);
    }
}
