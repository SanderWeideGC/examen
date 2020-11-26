<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lanes', function (Blueprint $table) {
            $table->id();
            $table->string('LaneName');
            $table->string('LaneCategory');
            $table->string('LanePositioning');
            $table->string('LaneLenght');
            $table->string('LaneWidth');
            $table->string('LaneFlooring');
            $table->date('LaneLastCheck');
            $table->date('LaneLastService');
            $table->string('LaneStatus');
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
        Schema::dropIfExists('lanes');
    }
}
