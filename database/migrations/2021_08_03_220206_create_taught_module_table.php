<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaughtModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taught_module', function (Blueprint $table) {
            $table->id();
            //Foreign Keys
            $table->foreignId('module_id')->references('id')->on('module');
            $table->foreignId('teacher_id')->references('id')->on('teacher');
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
        Schema::dropIfExists('taught_module');
    }
}
