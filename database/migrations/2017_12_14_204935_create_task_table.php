<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('priority');
            $table->string('title');
            $table->integer('assignedTo');
            $table->string('status');
            $table->integer('total_time');
            $table->integer('time_used');
            $table->longText('description');
            $table->integer('customer_id');
            $table->integer('created_by');
            $table->integer('updated_by');
//            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('task');
    }
}
