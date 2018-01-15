<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctorprofiles', function (Blueprint $table) {
            $table->increments('id');





            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')
                ->references('id')->on('doctors')
                ->onDelete('cascade');

            $table->string('name');
            $table->text('experience');

            $table->integer('specification_id')->unsigned();
            $table->foreign('specification_id')
                ->references('id')->on('specifications')
                ->onDelete('cascade');

            $table->string('Education');
            $table->integer('Cost');


            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')
                ->references('id')->on('locations')
                ->onDelete('cascade');

            $table->integer('phonenumber');
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
        Schema::dropIfExists('doctorprofiles');
    }
}
