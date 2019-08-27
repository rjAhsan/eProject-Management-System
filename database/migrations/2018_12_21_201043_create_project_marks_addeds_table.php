<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectMarksAddedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_marks_addeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('Report_1')->nullable();
            $table->string('Report_2')->nullable();
            $table->string('internal_1')->nullable();
            $table->string('internal_2')->nullable();
            $table->string('Supervisor_Internal')->nullable();
            $table->string('Supervisor_exxternal')->nullable();
            $table->string('External')->nullable();
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
        Schema::dropIfExists('project_marks_addeds');
    }
}
