<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('empFirstName')->nullable(false);
            $table->string('empLastName')->nullable(false);
            $table->unsignedBigInteger('deptID')->nullable(false);
            $table->foreign('deptID')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade')->nullable(false);
            $table->string('empPicture')->nullable();
            $table->string('empContactNo');
            $table->string('empEmail');
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
        Schema::dropIfExists('employees');
    }
}
