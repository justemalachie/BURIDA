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
        Schema::create('bureau_urbains', function (Blueprint $table) {
            $table->id();
            $table->string('code_bureau_urbain');
            $table->string('libelle_bureau_urbain');
            $table->string('localite_bureau_urbain');
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
        Schema::dropIfExists('bureau_urbains');
    }
};
