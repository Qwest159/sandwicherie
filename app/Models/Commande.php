<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    /** @use HasFactory<\Database\Factories\CommandeFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function sandwichs()
    // {
    //     return $this->belongsTo(Sandwich::class);
    // }
    public function commandeSandwich()
    {
        return $this->hasMany(CommandeSandwich::class);
    }
}
