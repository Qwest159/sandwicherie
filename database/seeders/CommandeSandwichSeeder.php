<?php

namespace Database\Seeders;

use App\Models\CommandeSandwich;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandeSandwichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        CommandeSandwich::factory()
            ->count(5)
            ->create();
    }
}
