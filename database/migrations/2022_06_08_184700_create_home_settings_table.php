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
        Schema::create('home_settings', function (Blueprint $table) {
            //table category_settings fields by zain
            $table->id();//own unique table id
            $table->string('meta_title');
            $table->string('meta_desc');
            $table->string('meta_key');
            $table->string('webmaster');
            $table->string('google_analytics');
            $table->string('facebook');
            $table->string('google_plus');
            $table->string('twitter');
            $table->string('pinterest');
            $table->string('instagram');
            $table->string('stumbleupon');
            $table->string('home_banner');
            $table->string('home_banner_alt');
            $table->string('home_banner_hd');
            $table->string('home_banner_btn');
            $table->string('home_banner_track');
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
        Schema::dropIfExists('home_settings');
    }
};
