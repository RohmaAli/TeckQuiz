<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_events', function (Blueprint $table) {
            $table->increments('quiz_event_id');
            $table->string('quiz_event_name')->nullable();
            $table->integer('questionnaire_id')->unsigned()->nullable();
            $table->string('class_id', 5)->nullable()->default('3KMMR');
            $table->integer('quiz_event_status')->nullable();//0 = upcoming, 1 = pending, 2 = finished
            $table->timestamps();
        });
        Schema::table('quiz_events', function(Blueprint $table){
            $table->foreign('class_id')->references('class_id')->on('classes')->onDelete('cascade');
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
        Schema::dropIfExists('quiz_events');
    }
}
