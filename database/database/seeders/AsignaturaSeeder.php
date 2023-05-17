<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = ['ISC', 'II', 'IEM', 'IE', 'IER'];
        foreach ($carreras as $carrera) {
            Asignatura::factory()
                ->count(6)
                ->create([
                    'carrera' => $carrera
                ]);
        }
    }
}
