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
        Schema::create('blog_stores', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_category_id');
            $table->string('today_date')->nullable();
            $table->string('month_name')->nullable();
            $table->string('blog_title');
            $table->string('short_text');
            $table->longText('desp');
            $table->string('short_img')->nullable();
            $table->string('long_img')->nullable();
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
        Schema::dropIfExists('blog_stores');
    }
};
