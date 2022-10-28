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
        Schema::create('cellules', function (Blueprint $table) {
            $table->id();
            $table->string('code_cellule');
            $table->text('libelle_cellule');
            $table->enum('status', ['ACTIVE', 'DESACTIVE', 'SUPPRIME']);
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
        Schema::dropIfExists('cellules');
    }
};
