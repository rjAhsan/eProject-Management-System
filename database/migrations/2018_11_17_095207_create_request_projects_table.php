<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('Domain');
            $table->string('Project_Type');
            $table->string('Supervisor_email');
            $table->string('member_email_1');
            $table->string('member_email_2')->nullable();
            $table->string('member_email_3')->nullable();
            $table->longText('descriptioin');
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
        Schema::dropIfExists('request_projects');
    }
}
