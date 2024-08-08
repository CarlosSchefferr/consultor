<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultoresTable extends Migration
{
    public function up()
    {
        Schema::create('consultores', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->float('valor_hora');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultores');
    }
}

