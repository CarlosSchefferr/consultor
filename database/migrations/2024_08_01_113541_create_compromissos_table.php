<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompromissosTable extends Migration
{
    public function up()
    {
        Schema::create('compromissos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultor_id')->constrained('consultores'); 
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->time('intervalo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('compromissos');
    }
}

