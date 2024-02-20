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
        Schema::create('achievment_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("achievment_id")->unsigned();
            $table->string("image");
            $table->foreign("achievment_id")->references("id")->on("achievments")->onDelete("cascade");
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
        Schema::dropIfExists('achievment_images');
    }
};
