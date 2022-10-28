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
        Schema::create('documentalistes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_documentaliste');
            $table->string('prenom_documentaliste');
            $table->string('email_documentaliste');
            $table->string('lieu_habitation_documentaliste');
            $table->string('numero_telephone_documentaliste');
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
        Schema::dropIfExists('documentalistes');
    }
};
