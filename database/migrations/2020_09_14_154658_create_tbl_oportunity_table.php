<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOportunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_oportunity', function (Blueprint $table) {
            $table->increments('oportunity_id');
            $table->string('title');
            $table->string('type_job');
            $table->string('category');
            $table->string('work_time');
            $table->string('location');
            $table->text('description');
            $table->integer('publication_satus');
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
        Schema::dropIfExists('tbl_oportunity');
    }
}
