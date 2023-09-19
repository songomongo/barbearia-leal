<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    /**
     * Cliente migarte
     */

    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 120)->nullable(false);
            $table->string('celular',11)->nullable(false);

            //unique
            $table->integer('e-mail',120)->unique()->nullable(false);
            $table->decimal('cpf',11)->unique()->nullable(false);

            $table->string('datadeNascimento')->nullable(false);
            $table->string('cidade',120)->nullable(false);
            $table->integer('estado',2)->nullable(false);
            $table->decimal('pais')->nullable(false);
            $table->string('cep', 80)->nullable(false);
            $table->string('rua',120)->nullable(false);
            $table->integer('bairro',100)->nullable(false);
            $table->decimal('numero',10)->nullable(false);
            $table->decimal('complemento',150)->nullable(false);
            $table->decimal('')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};