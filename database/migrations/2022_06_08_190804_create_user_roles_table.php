<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            //table user_roles fields by zain

            $table->id();             //own unique table id 

            $table->integer('userid');
            $table->integer('add_user');
            $table->integer('edit_user');
            $table->integer('add_network');

            $table->integer('edit_network');
            $table->integer('add_categories');
            $table->integer('edit_categories');
            $table->integer('add_stores');

            $table->integer('edit_stores');
            $table->integer('add_coupons');
            $table->integer('edit_coupons');
            $table->integer('add_deals');

            $table->integer('edit_deals');
            $table->integer('add_blog');
            $table->integer('edit_blog');
            $table->integer('settings');

            //timestamp
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
        Schema::dropIfExists('user_roles');
    }
};
