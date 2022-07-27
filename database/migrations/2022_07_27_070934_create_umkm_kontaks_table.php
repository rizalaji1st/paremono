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
        Schema::create('umkm_kontaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('umkms_id');
            $table->string('kontak');
            $table->boolean('in_wa');
            $table->boolean('in_phone');
            $table->timestamps();

            $table->foreign('umkms_id')->references('id')->on('umkms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umkm_kontaks');
    }
};
