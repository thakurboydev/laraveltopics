<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCascadeDeletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cascad_deletes', function (Blueprint $table) {
            $table->id();
        $table->integer('rollno');
        $table->integer('soft_delete_id');
        $table->foreign('soft_delete_id')->references('id')->on('soft_deletes')->onDelete('cascade');
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
        Schema::dropIfExists('cascade_deletes');
    }
}
