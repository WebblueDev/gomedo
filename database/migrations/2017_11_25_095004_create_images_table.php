<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('extension', 5);
            $table->string('path', 255);
            $table->string('source', 500);
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->integer('image_transform_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('created_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('image_transform_id')->references('id')->on('image_transforms')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function(Blueprint $table) {
            $table->dropForeign(['created_user_id', 'image_transform_id']);
        });
        Schema::dropIfExists('images');
    }
}
