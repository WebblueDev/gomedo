<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFieldDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_field_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value');
            $table->unsignedTinyInteger('order');
            $table->integer('product_field_id')->unsigned();
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('product_field_id')->references('id')->on('product_fields')->onDelete('cascade');
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
        Schema::table('product_field_data', function(Blueprint $table) {
            $table->dropForeign(['created_user_id','product_field_id']);
        });
        Schema::dropIfExists('product_field_data');
    }
}
