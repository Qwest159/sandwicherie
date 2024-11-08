<?php

namespace Database\Seeders;

use App\Models\Commande;
use App\Models\CommandeSandwich;
use App\Models\Sandwich;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoleSeeder::class,
            UsersTableSeeder::class,
            CommandeSeeder::class,
            SandwichSeeder::class,
            CommandeSandwichSeeder::class,

        ]);
    }
}
