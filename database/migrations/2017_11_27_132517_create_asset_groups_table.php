<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('code', 100)->unique();
            $table->boolean('unique');
            $table->boolean('system');
            $table->enum('type', ['product', 'user', 'provider', 'category', 'payment_method', 'product_testers']);
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
        Schema::table('asset_groups', function(Blueprint $table) {
            $table->dropForeign(['created_user_id']);
        });
        Schema::dropIfExists('asset_groups');
    }
}
