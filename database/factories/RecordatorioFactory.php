<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordatorioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        return [
            'titulo' => fake()->word(),
            'contenido' => fake()->paragraph(),
            'importancia' => fake()->word(),

            'id_usuario' => $user->id,
        ];
    }
}
