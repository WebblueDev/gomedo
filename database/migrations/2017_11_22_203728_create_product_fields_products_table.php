<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFieldsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_fields_products', function (Blueprint $table) {
            $table->primary(['product_field_id', 'product_id']);
            $table->integer('product_field_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('product_field_data_id')->unsigned()->nullable();
            $table->string('string_value', 100)->nullable();
            $table->text('text_value')->nullable();
            $table->double('number_value')->nullable();
            $table->boolean('boolean_value')->nullable();
            $table->date('date_value')->nullable();
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('product_field_id')->references('id')->on('product_fields')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('product_field_data_id')->references('id')->on('product_field_data')->onDelete('cascade');
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
        Schema::table('product_fields_products', function(Blueprint $table) {
            $table->dropForeign(['created_user_id','product_field_id','product_id','product_field_data_id']);
        });
        Schema::dropIfExists('product_fields_products');
    }
}
