<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('nota');
            $table->text('p_clave');
            $table->text('resumen');
            $table->timestamps();

            $table->foreignId('id_usuario')
                ->constrained('users')
                ->cascadeOnUpdate();
            $table->foreignId('id_tema')
                ->constrained('temas')
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
};
