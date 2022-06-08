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
        Schema::create('tblstores', function (Blueprint $table) {

            //table coupons fields by zain

            $table->id();             //own unique table id 

            $table->string('name');
            $table->longText('long_desc'); //text field
            $table->string('country'); 
            $table->string('offer_id'); 
            $table->string('commission');
            $table->string('store_url');
            $table->string('direct_url');
            $table->text('tracking_url');   //text field
            $table->string('meta');
            $table->string('meta_des');
            $table->string('meta_key');
            $table->string('img');
            $table->string('img_alt');
            $table->string('network');
            $table->string('Category');
            $table->string('featured');
            $table->string('dis_store');
            $table->string('enterby');
            $table->integer('status');
            $table->string('heading');
            $table->longText('short_desc');  //text field

            $table->string('publish_date');
            $table->integer('top_sort');
            $table->string('top');

            $table->integer('views');
            $table->integer('editor_choice');

            $table->string('facebook');
            $table->string('pinterest');
            $table->string('wikipedia');
            $table->string('twitter'); 
            $table->string('google');
            $table->string('android');
            $table->string('ios');
            $table->string('add_time');
            $table->string('edit_time');
            $table->string('banners');

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
        Schema::dropIfExists('tblstores');
    }
};
