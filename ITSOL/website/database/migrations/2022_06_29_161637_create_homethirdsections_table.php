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
        Schema::create('homethirdsections', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->string('main_title');
            $table->string('tab_one_name');
            $table->string('tab_two_name');
            $table->string('tab_three_name');
            $table->string('tab_one_heading');
            $table->string('tab_one_desc');
            $table->string('tab_one_sub_heading_one');
            $table->string('tab_one_sub_heading_one_desc');
            $table->string('tab_one_sub_heading_two');
            $table->string('tab_one_sub_heading_two_desc');
            $table->string('tab_one_sub_heading_three');
            $table->string('tab_one_sub_heading_three_desc');
            $table->string('tab_two_heading');
            $table->string('tab_two_desc');
            $table->string('tab_two_sub_heading_one');
            $table->string('tab_two_sub_heading_one_desc');
            $table->string('tab_two_sub_heading_two');
            $table->string('tab_two_sub_heading_two_desc');
            $table->string('tab_two_sub_heading_three');
            $table->string('tab_two_sub_heading_three_desc');
            $table->string('tab_thr_heading');
            $table->string('tab_thr_desc');
            $table->string('tab_thr_sub_heading_one');
            $table->string('tab_thr_sub_heading_one_desc');
            $table->string('tab_thr_sub_heading_two');
            $table->string('tab_thr_sub_heading_two_desc');
            $table->string('tab_thr_sub_heading_three');
            $table->string('tab_thr_sub_heading_three_desc');

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
        Schema::dropIfExists('homethirdsections');
    }
};
