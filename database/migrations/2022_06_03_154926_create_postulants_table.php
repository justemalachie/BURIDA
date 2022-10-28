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
        Schema::create('postulants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_postulant');
            $table->string('prenom_postulant');
            $table->integer('numero_telephone_postulant');
            $table->string('email_postulant');
            $table->string('lieu_habitation_postulant');
            $table->string('date_naissance_postulant');
            $table->string('lieu_naissance_postulant');
            $table->string('sexe_postulant');
            $table->string('cni_postulant');
            $table->enum('sexe', ['homme', 'femme']);
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
        Schema::dropIfExists('postulants');
    }
};
