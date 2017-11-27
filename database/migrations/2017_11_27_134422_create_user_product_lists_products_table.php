<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProductListsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_product_lists_products', function (Blueprint $table) {
            $table->primary(['user_product_list_id', 'product_id'], 'user_product_lists_products_primary');
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->integer('user_product_list_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->double('price_alarm')->nullable();
            $table->timestamps();

            $table->foreign('created_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('user_product_list_id')->references('id')->on('user_product_lists')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_product_lists_products', function(Blueprint $table) {
            $table->dropForeign(['created_user_id', 'user_product_list_id', 'product_id']);
        });
        Schema::dropIfExists('user_product_lists_products');
    }
}
