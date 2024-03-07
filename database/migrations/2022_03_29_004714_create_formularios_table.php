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
            $table->string('user_name');
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            $table->string('user_dni');
            $table->string('nacionalidad');
            $table->string('fechanacimiento');
            $table->string('sexo');
            $table->string('user_address');
            $table->string('region');
            $table->string('tipodepropiedad');
            $table->string('email');
            $table->string('telefono');
            $table->string('concentimiento');
            $table->string('tipoasegurado');
            $table->string('tipoCesantia');
            $table->string('pensionado')->nullable();
            $table->string('pagadorapension')->nullable();
            $table->string('Emp_rut')->nullable();
            $table->string('Emp_nombre')->nullable();
            $table->string('Emp_direccion')->nullable();
            $table->string('Emp_tel')->nullable();
            $table->string('Emp_RentaMensual')->nullable();
            $table->string('Emp_ContratoInicio')->nullable();
            $table->string('Emp_ContratoTermino')->nullable();
            $table->string('Renta_Total')->nullable();
            $table->string('EstabIns')->nullable();
            $table->string('Salud_establecimiento')->nullable();
            $table->string('establecimientoComuna')->nullable();
            $table->string('establecimeintoRegion')->nullable();
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
