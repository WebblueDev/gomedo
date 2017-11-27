<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('code', 100)->unique();
            $table->enum('type', ['string', 'number', 'text', 'data', 'boolean', 'date']);
            $table->boolean('is_filter');
            $table->boolean('is_nullable');
            $table->unsignedTinyInteger('order');
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
        Schema::table('product_fields', function(Blueprint $table) {
            $table->dropForeign(['created_user_id']);
        });
        Schema::dropIfExists('product_fields');
    }
}
