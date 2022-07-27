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
        Schema::create('blog_kategoris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blogs_id');
            $table->unsignedBigInteger('kategoris_id');
            $table->timestamps();

            $table->foreign('blogs_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->foreign('kategoris_id')->references('id')->on('kategoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_kategoris');
    }
};
