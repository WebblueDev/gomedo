<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_testers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('website', 255);
            $table->unsignedTinyInteger('order');
            $table->string('text', 500);
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
        Schema::table('product_testers', function(Blueprint $table) {
            $table->dropForeign(['created_user_id']);
        });
        Schema::dropIfExists('product_testers');
    }
}
