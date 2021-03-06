<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteredProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Project_Title');
            $table->string('Supervisor_email');
            $table->string('Domain');
            $table->string('Project_Type');
            $table->string('Member_1_email');
            $table->string('Member_2_email')->nullable();
            $table->string('Member_3_email')->nullable();
            $table->string('Session')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('registered_projects');
    }
}
