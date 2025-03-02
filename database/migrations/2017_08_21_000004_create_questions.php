<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->integer('questionnaire_id')->unsigned()->nullable();
            $table->string('question_name')->nullable();
            $table->integer('question_type')->nullable();
            $table->string('choices')->nullable();
            $table->string('answer')->nullable();
            $table->integer('points')->default(1)->nullable();
        });
        Schema::table('questions', function(Blueprint $table){
            $table->foreign('questionnaire_id')->references('questionnaire_id')->on('questionnaires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
