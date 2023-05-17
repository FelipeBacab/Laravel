<?php

namespace Database\Seeders;

use App\Models\Nota;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach ($users as $user) {
            $temas = Tema::whereHas('asignaturas', function ($query) use ($user) {
                $query->where('carrera', $user->carrera);
            })->inRandomOrder()->limit(10)->get();
            foreach ($temas as $tema) {
                Nota::factory()
                    ->create([
                        'id_usuario' => $user->id,
                        'id_tema' => $tema->id
                    ]);
            }
    
        }
    }
}
