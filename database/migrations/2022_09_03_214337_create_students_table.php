<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('document_type');
            $table->integer('document_number');
            $table->string('identify_document', null);
            $table->date('expedition_date');
            // $table->string('exped_country');
            // $table->string('exped_depart');
            $table->string('exped_muni');
            $table->string('names', 45);
            $table->string('last_name1', 45);
            $table->string('last_name2', 45);
            $table->string('gender');
            $table->date('birth_date');
            // $table->string('birth_country');
            // $table->string('birth_depart');
            $table->string('birth_muni');
            $table->integer('stratum');
            $table->string('course');
            $table->timestamps();
            //A continuación se indica hacia donde apuntan estas foráneas
            // $table->foreign('id_exped_muni')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
            // $table->foreign('id_birth_muni')->references('id')->on('municipalities')->onDelete('cascade')->onUpdate('cascade');;
            // $table->foreign('id_course')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
