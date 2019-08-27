<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostionHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postion_holders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Session');
            $table->string('Title');
            $table->string('Postion');
            $table->string('Supervisor');
            $table->string('StudentS');
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
        Schema::dropIfExists('postion_holders');
    }
}
