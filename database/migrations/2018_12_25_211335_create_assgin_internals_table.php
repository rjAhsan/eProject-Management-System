<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssginInternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assgin_internals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Project_Title');
            $table->string('SupervisorEmail');
            $table->string('Session');
            $table->string('INTERNAL');
            $table->string('Grades')->nullable();
            $table->longText('Comments')->nullable();
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
        Schema::dropIfExists('assgin_internals');
    }
}
