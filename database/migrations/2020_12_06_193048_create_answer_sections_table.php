<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_sections', function (Blueprint $table) {
            $table->id();
            $table->string("answer");
            $table->string("category")->nullable();;
            $table->string("section")->nullable();;
            $table->string("type")->nullable();;
            $table->foreignId('answer_id')
              ->nullable()
              ->constrained()
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->foreignId('question_id')
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
        Schema::dropIfExists('answer_sections');
    }
}
