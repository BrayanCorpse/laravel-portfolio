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
        Schema::create('code_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color1');
            $table->string('color2');
            $table->string('color3');
            $table->string('color4');
            $table->integer('shade_id')->unsigned();

            $table->foreign('shade_id')->references('id')->on('shades')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
