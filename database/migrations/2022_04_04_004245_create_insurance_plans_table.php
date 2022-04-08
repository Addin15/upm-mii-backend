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
        Schema::create('insurance_plans', function (Blueprint $table) {
            $table->id('i_id');
            $table->string('i_name');
            $table->string('i_type');
            $table->integer('i_company');
            $table->string('i_description');
            $table->integer('i_rate');
            $table->string('i_increasing_sum');
            $table->string('i_min_sum');
            $table->string('i_entry_age');
            $table->integer('i_max_coverage');
            $table->string('i_no_lapse_benefit');
            $table->string('i_cover_term');
            $table->string('i_premium_type');
            $table->string('i_income_tax_relief');
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
        Schema::dropIfExists('insurance_plans');
    }
};
