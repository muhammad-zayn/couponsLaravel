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
        Schema::create('tblcoupons', function (Blueprint $table) {
            //table coupons fields by zain
            $table->id();
            // $table->id('coupons_id'); //own unique table id
            // $table->bigIncrements('coupons_id'); //own unique table id
            $table->integer('offer_id');
            $table->string('name');
            $table->string('offer'); 
            $table->longText('offer_desc'); //text field
            $table->string('coupon_code');
            $table->string('chk_active');
            $table->string('startdate');
            $table->string('expdate');
            $table->string('tracking_url');
            $table->string('store');
            $table->string('logo');
            $table->string('country');
            $table->string('website');
            $table->integer('featured');
            $table->string('Deal');
            $table->integer('likes');
            $table->integer('used');
            $table->integer('sort');
            $table->string('enterby');
            $table->integer('trending');
            $table->bigInteger('new_arrival');
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
        Schema::dropIfExists('tblcoupons');
    }
};
