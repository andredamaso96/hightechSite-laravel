<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSpecificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_specification', function (Blueprint $table) {
            $table->increments('specification_id');
            $table->integer('product_id');
            $table->string('specification_name');
            $table->string('specification_serie');
            $table->string('specification_image');
            $table->string('specification_url');

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
        Schema::dropIfExists('tbl_specification');
    }
}
