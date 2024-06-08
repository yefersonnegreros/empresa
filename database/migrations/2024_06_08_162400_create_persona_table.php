<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->char('cPerApellido', 50)->nullable();
            $table->char('cPerNombre', 50)->nullable();
            $table->string('cPerDireccion', 100)->nullable();
            $table->date('dPerFecNac')->nullable(false);
            $table->integer('nPerEdad')->nullable(false);
            $table->char('cPerSexo', 15)->default('Masculino')->nullable();
            $table->decimal('nPerSueldo', 6, 2)->nullable(false);
            $table->string('cPerRnd', 50)->nullable(false);
            $table->char('nPerEstado', 1)->default('1')->nullable(false);
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
