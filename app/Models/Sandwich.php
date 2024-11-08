<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sandwich extends Model
{
    /** @use HasFactory<\Database\Factories\SandwichFactory> */
    use HasFactory;

    public function CommandeSandwich()
    {
        return $this->hasMany(CommandeSandwich::class);
    }
}
