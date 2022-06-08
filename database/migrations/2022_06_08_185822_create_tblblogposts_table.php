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
        Schema::create('tblblogposts', function (Blueprint $table) {
            
            //table tblblogposts fields by zain
            
            $table->id();           //own unique table id
                                         
            $table->string('name');
            $table->string('slug');

            $table->text('long_des');
            $table->text('short_des');
            $table->text('image');

            $table->string('image_alt');
            $table->string('meta_title');
            $table->string('meta_des');
            $table->string('meta_key');

            $table->integer('category');
            $table->integer('store');

            $table->string('publish_date');

            $table->integer('status');
            $table->integer('featured');

            $table->string('name_your');
            $table->integer('views');

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
        Schema::dropIfExists('tblblogposts');
    }
};
