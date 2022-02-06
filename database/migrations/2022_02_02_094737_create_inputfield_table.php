<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputfieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputfield', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('name')->default('1');
            $table->tinyInteger('email')->default('1');
            $table->tinyInteger('mobile_no')->default('1');
            $table->tinyInteger('employee_code')->default('0');
            $table->tinyInteger('firm_name')->default('0');
            $table->tinyInteger('city')->default('0');
            $table->tinyInteger('country')->default('0');
            $table->tinyInteger('type')->default('0');
            $table->tinyInteger('multioption')->default('0');
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
        Schema::dropIfExists('inputfield');
    }
}
