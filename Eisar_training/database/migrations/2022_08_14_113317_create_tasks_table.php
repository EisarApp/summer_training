<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration {

	public function up()
	{
		Schema::create('tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('created_by')->unsigned();
			$table->string('name', 200);
			$table->text('description');
			$table->datetime('deadline');
			$table->enum('status', array('inprocess', 'done', 'to-do', 'waitingforreview'));
			$table->integer('plan_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tasks');
	}
}