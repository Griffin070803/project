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
        Schema::create('marine_creatures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('categorys_id')->nullable();
            $table->foreign('categorys_id')->references('id')->on('categorys');
            $table->rememberToken();
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
        Schema::dropIfExists('marine_creatures');
    }
};
