<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsProductGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_product_groups', function (Blueprint $table) {
            $table->primary(['product_group_id', 'product_id']);
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('product_group_id')->unsigned();
            $table->foreign('product_group_id')->references('id')->on('product_groups')->onDelete('cascade');

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
        Schema::table('products_product_groups', function(Blueprint $table) {
            $table->dropForeign(['product_id', 'product_group_id']);
        });
        Schema::dropIfExists('products_product_groups');
    }
}
