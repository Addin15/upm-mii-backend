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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('c_id');
            $table->string('c_name');
            $table->string('c_phone');
            $table->string('c_email');
            $table->string('c_address');
            $table->string('c_website');
            $table->string('c_img_url');
            $table->string('c_bg_img_url');
            $table->text('c_about');
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
        Schema::dropIfExists('companies');
    }
};
