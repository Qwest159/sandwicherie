<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeSandwich extends Model
{
    /** @use HasFactory<\Database\Factories\CommandeSandwichFactory> */
    use HasFactory;
    public function Commande()
    {
        return $this->belongsTo(Commande::class);
    }
    public function Sandwich()
    {
        return $this->belongsTo(Sandwich::class);
    }
}
