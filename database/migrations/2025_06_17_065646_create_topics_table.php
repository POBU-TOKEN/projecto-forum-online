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
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('idtopic');
            $table->unsignedBigInteger('author');
            $table->foreign('author')->references('iduser')->on('users')->onDelete('cascade');
            $table->string('title',100);
            $table->text('description');
            $table->date('date_share');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('idcategory')->on('categorys')->onDelete('cascade');
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
        Schema::dropIfExists('topics');
    }
};
