<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTransformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_transforms', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('width')->nullable();
            $table->smallInteger('height')->nullable();
            $table->boolean('aspect_ratio');
            $table->boolean('crop_fit');
            $table->boolean('greyscale');
            $table->smallInteger('rotate')->nullable();
            $table->smallInteger('pixelate')->nullable();
            $table->char('flip', 1)->nullable();
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('created_user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('image_transforms', function(Blueprint $table) {
            $table->dropForeign(['created_user_id']);
        });
        Schema::dropIfExists('image_transforms');
    }
}
