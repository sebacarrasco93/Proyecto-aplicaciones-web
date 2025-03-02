<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('tiposolicitud');
            $table->string('user_name')->nullable();
            $table->string('apellidopaterno')->nullable();
            $table->string('apellidomaterno')->nullable();
            $table->string('user_dni')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('fechanacimiento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('user_address')->nullable();
            $table->string('comuna')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('region')->nullable();
            $table->string('tipodepropiedad')->nullable();
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->string('concentimiento')->nullable();
            $table->string('tipoasegurado');
            $table->string('pensionado')->nullable();
            $table->string('pagadorapension')->nullable();
            $table->text('mensaje')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
