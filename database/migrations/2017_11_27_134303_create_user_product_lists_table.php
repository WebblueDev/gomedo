<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProductListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_product_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->boolean('public');
            $table->boolean('default');
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('user_product_lists', function(Blueprint $table) {
            $table->dropForeign(['created_user_id', 'user_id']);
        });
        Schema::dropIfExists('user_product_lists');
    }
}
