<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalReviewAssginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_review_assgins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('projecttitle');
            $table->string('Filetype');
            $table->string('Supervisoremail');
            $table->string('SelectFaculty');
            $table->longText('descriptioin')->nullable();
            $table->longText('Comments')->nullable();
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
        Schema::dropIfExists('proposal_review_assgins');
    }
}
