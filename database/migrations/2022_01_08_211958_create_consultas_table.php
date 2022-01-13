<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("especialidade");
            $table->text("nome");
            $table->string("localidade");
            $table->string("horario");
            $table->dateTime("data");

        });
    }

    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
