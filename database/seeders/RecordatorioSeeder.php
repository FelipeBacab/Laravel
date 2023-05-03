<?php

namespace Database\Seeders;

use App\Models\Recordatorio;
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
        Recordatorio::factory()
        ->count(20)
        ->create();
    }
}
