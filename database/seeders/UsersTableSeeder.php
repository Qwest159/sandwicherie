<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // On crée un admin
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
            'role_id' => 1,
        ]);

        // On crée notre utilisateur de test qui sera maintenant un utilisateur lambda
        User::factory()->create([
            'name' => 'Responsable',
            'email' => 'responsable@example.com',
            'password' => 'password',
            'role_id' => 2,
        ]);


        User::factory()->create([
            'name' => 'User',
            'email' => 'test@example.com',
            'password' => 'password',
            'role_id' => 3,
        ]);
    }
}
