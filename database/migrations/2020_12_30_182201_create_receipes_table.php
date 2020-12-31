<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipes', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_fr');
            $table->text('ingradients_en');
            $table->text('ingradients_fr');
            $table->text('directions_en');
            $table->text('directions_fr');
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
        Schema::dropIfExists('receipes');
    }
}
