<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;
    public const ADMIN = 'Administrateur';
    public const RESPONSABLE_COMMANDES = 'Responsable_commandes';
    public const USER = 'User';

    public static function roles(): array
    {
        return [
            self::ADMIN,
            self::RESPONSABLE_COMMANDES,
            self::USER,
        ];
    }
    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }
}
