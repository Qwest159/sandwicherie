<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\Role;
use App\Models\Sandwich;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CommandeSandwich>
 */
class CommandeSandwichFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity' => fake()->numberBetween(1, 2),
            'commande_id' => Commande::get()->random()->id,
            'sandwich_id' => Sandwich::get()->random()->id,
        ];
    }
}
