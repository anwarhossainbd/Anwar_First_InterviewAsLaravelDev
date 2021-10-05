<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tables', function (Blueprint $table) {
            $table->id();
            $table->string('student_Name');
            $table->string('father_Name');
            $table->integer('student_id');
            $table->string('division');
            $table->string('district');
            $table->text('details');
             $table->string('image');
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
        Schema::dropIfExists('student_tables');
    }
}
