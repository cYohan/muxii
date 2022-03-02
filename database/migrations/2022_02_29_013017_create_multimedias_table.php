<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultimediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedias', function (Blueprint $table) {
            $table->id();

            $table->text('name');
            $table->text('rute')->nullable();
            $table->text('body')->nullable();

            $table->foreignId('file_id')
                ->constrained()
                ->onDelete('cascade');

            $table->foreignId('subtype_id')
                ->constrained()
                ->onDelete('cascade');

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
        Schema::dropIfExists('multimedias');
    }
}