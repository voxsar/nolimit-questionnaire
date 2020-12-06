<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('date_appraisal');
            $table->string('evaluator');
            $table->string('direct_supervisor');
            $table->string('service_period');
            $table->string('department_head');
            $table->foreignId('quiz_id')
              ->nullable()
              ->constrained()
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->foreignId('user_id')
              ->nullable()
              ->constrained()
              ->onUpdate('cascade')
              ->onDelete('cascade');
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
        Schema::dropIfExists('answers');
    }
}
