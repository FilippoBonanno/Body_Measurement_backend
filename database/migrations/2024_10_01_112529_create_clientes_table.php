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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('img')->nullable();
            $table->string('nome');
            $table->string('cognome');
            $table->string('cellulare');
            $table->string('email');
            $table->integer('eta');
            $table->float('peso');
            $table->float('altezza');
            $table->float('massa_magra');
            $table->float('massa_grassa');
            $table->float('massa_ossea');
            $table->float('testa');
            $table->float('collo');
            $table->float('spalle');
            $table->float('petto');
            $table->float('bicipite_dx');
            $table->float('bicipite_sx');
            $table->float('avambraccio_dx');
            $table->float('avambraccio_sx');
            $table->float('polso_dx');
            $table->float('polso_sx');
            $table->float('vita');
            $table->float('fianchi');
            $table->float('coscia_dx');
            $table->float('coscia_sx');
            $table->float('polpaccio_dx');
            $table->float('polpaccio_sx');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
