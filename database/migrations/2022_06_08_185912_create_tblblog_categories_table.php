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
        Schema::create('tblblog_categories', function (Blueprint $table) {
            //table tblblog_categories fields by zain
            
            $table->id();           //own unique table id
                                         
            $table->string('name');
            $table->string('slug');
            $table->string('img');
            $table->string('img_alt');
            $table->string('des');
            $table->string('featured');
            $table->string('meta');
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
        Schema::dropIfExists('tblblog_categories');
    }
};
