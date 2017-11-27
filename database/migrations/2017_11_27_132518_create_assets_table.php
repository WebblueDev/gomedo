<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->morphs('assetable');
            $table->morphs('mediable');
            $table->unsignedTinyInteger('order');
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->integer('asset_group_id')->unsigned();
            $table->timestamps();

            $table->foreign('created_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('asset_group_id')->references('id')->on('asset_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets', function(Blueprint $table) {
            $table->dropForeign(['created_user_id', 'asset_group_id']);
        });
        Schema::dropIfExists('assets');
    }
}
