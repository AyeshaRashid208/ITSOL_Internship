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
        Schema::create('aboutfourthsections', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->string('title');
            $table->string('description');
            $table->string('first_heading');
            $table->string('first_description');
            $table->string('second_heading');
            $table->string('second_description');
            $table->string('third_heading');
            $table->string('third_description');
            $table->string('image');
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
        Schema::dropIfExists('aboutfourthsections');
    }
};
