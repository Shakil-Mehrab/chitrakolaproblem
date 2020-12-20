<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_news', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('heading');
            $table->text('description')->nullable();
            $table->boolean('status')->default(0);
            $table->string('image')->default('images/default.jpg');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art_news');
    }
}
