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
        Schema::create('our_stories', function (Blueprint $table) {
            $table->id();
            $table->string('sub_title');
            $table->string('title');
            $table->longText('desp');
            $table->string('staff');
            $table->string('vegetable')->nullable();
            $table->string('bread')->nullable();
            $table->string('shape')->nullable();
            $table->string('signature')->nullable();
            $table->string('opt')->nullable();
            $table->string('opt1')->nullable();
            $table->string('opt2')->nullable();
            $table->string('opt3')->nullable();
            $table->string('opt4')->nullable();
            $table->string('opt5')->nullable();
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
        Schema::dropIfExists('our_stories');
    }
};
