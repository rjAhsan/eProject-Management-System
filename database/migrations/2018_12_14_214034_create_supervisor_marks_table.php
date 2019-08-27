<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisorMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisor_marks', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Title');
            $table->string('Type');
            $table->string('Importance');
            $table->string('existing work');
            $table->string('objectives');
            $table->string('architecture');
            $table->string('presentation');
            $table->string('TotalMarks');
            $table->longText('Comments');
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
        Schema::dropIfExists('supervisor_marks');
    }
}
