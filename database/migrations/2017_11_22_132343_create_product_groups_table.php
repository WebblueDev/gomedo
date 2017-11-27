<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->integer('product_group_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('created_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('product_group_type_id')->references('id')->on('product_group_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_groups', function(Blueprint $table) {
            $table->dropForeign(['created_user_id', 'product_group_type_id']);
        });
        Schema::dropIfExists('product_groups');
    }
}
