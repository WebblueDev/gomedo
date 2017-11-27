<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('summary', 500);
            $table->string('website', 500);
            $table->string('rating', 50);
            $table->tinyInteger('weighting');
            $table->integer('product_id')->unsigned();
            $table->integer('product_tester_id')->unsigned();
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('product_tester_id')->references('id')->on('product_testers')->onDelete('cascade');
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
        Schema::table('product_tests', function(Blueprint $table) {
            $table->dropForeign(['created_user_id','product_id','product_tester_id']);
        });
        Schema::dropIfExists('product_tests');
    }
}
