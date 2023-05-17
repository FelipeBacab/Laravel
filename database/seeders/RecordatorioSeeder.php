<?php

namespace Database\Seeders;

use App\Models\Recordatorio;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RecordatorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=User::all();
        foreach ($users as $user){
            Recordatorio::factory()
            ->count(20)
            ->create(
                ['id_usuario'=> $user->id]
            );
        }
    }
}
