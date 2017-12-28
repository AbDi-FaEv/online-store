<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesCoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_cover', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->unsignedInteger('cover_id');
            $table->foreign('cover_id')->references('id')->on('covers')->onDelete('cascade');
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
        Schema::dropIfExists('device_cover');
    }
}
