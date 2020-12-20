<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('artist_id');
            $table->string('name');
            $table->string('slug');
            $table->string('code');
            $table->float('price');
            $table->string('size');
            $table->string('year');
            $table->string('media');
            $table->text('description')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('featured')->default(0);
            $table->string('image')->default('images/default.jpg');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art');
    }
}