<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('owner_id');
            $table->string('house_id');
            $table->string('location');
            $table->string('title');
            $table->string('image');
            $table->integer('price')->default(0);
            $table->string('for');
            $table->string('status');
            $table->integer('bed_rooms');
            $table->integer('bath_rooms');
            $table->string('size');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
