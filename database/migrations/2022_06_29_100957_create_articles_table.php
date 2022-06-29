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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_date');
            $table->string('post_author');
            $table->string('post_readtime');
            $table->string('hashtag');
            $table->longText('post_abstract');
            $table->longText('post_text');
            $table->string('img_01');
            $table->string('img_01_credits');
            $table->string('img_01_caption');
            $table->string('img_02');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
