<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no');
            $table->string('series');
            $table->string('code');
            $table->string('treatmentName');
            $table->integer('generation');
            $table->string('category');
            $table->string('problem');
            $table->string('problem_code');
            $table->string('consult_advice');
            $table->string('consult_advice_code');
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
        Schema::dropIfExists('treatments');
    }
}
