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
        Schema::create('tblcategories', function (Blueprint $table) {
            //table tblcategories fields by zain
            
            $table->id();           //own unique table id
                                         
            $table->string('name');
            $table->string('slug');
            $table->string('slidercat');
            $table->string('des');
            $table->string('meta');
            $table->string('meta_des');
            $table->string('meta_key');

            $table->string('image');
            $table->string('img_alt');
            $table->string('Slider');
            $table->string('manurl');

            $table->integer('featured');
            $table->string('featured_icon');
            $table->string('update_date');
            $table->string('icon'); 

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
        Schema::dropIfExists('tblcategories');
    }
};
