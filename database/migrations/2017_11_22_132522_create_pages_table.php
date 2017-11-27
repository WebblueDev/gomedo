<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_description', 255)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->text('text')->nullable();
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->integer('page_layout_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('created_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('page_layout_id')->references('id')->on('page_layouts')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function(Blueprint $table) {
            $table->dropForeign(['created_user_id', 'page_layout_id']);
        });

        Schema::dropIfExists('pages');
    }
}
