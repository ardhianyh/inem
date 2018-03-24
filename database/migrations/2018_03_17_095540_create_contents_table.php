<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idx');
            $table->string('content_id');
            $table->string('title');
            $table->string('type');
            $table->string('category_1');
            $table->string('category_2');
            $table->string('category_3');
            $table->string('province');
            $table->string('city');
            $table->string('place');
            $table->date('incident');
            $table->text('desc');
            $table->text('chronology');
            $table->text('note');
            $table->string('image');
            $table->string('status')->default('1');
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
        Schema::dropIfExists('contents');
    }
}
