<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssginExternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assgin_externals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Project_Title');
            $table->string('SupervisorEmail');
            $table->string('Session');
            $table->string('INTERNAL');
            $table->string('External');
            $table->string('INTERNAL_Grades')->nullable();
            $table->string('External_Grades')->nullable();
            $table->longText('External_Comments')->nullable();
            $table->longText('INTERNAL_Comments')->nullable();
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
        Schema::dropIfExists('assgin_externals');
    }
}
