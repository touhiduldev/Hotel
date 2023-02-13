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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('pcat_id')->nullable();
            $table->integer('psubcat_id')->nullable();
            $table->string('title');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->string('after_discount');
            $table->longText('short_desp')->nullable();
            $table->longText('long_desp');
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('tag')->nullable();
            $table->string('deleted_at')->nullable();
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
        Schema::dropIfExists('products');
    }
};
