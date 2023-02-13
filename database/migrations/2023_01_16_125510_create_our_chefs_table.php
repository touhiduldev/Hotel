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
        Schema::create('our_chefs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('expertise')->nullable();
            $table->string('experience')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('twtr_url')->nullable();
            $table->string('insta_url')->nullable();
            $table->text('short_desp')->nullable();
            $table->longText('long_desp')->nullable();
            $table->text('skills')->nullable();
            $table->string('image');
            $table->string('slug');
            $table->string('tag')->nullable();
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
        Schema::dropIfExists('our_chefs');
    }
};