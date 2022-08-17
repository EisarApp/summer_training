<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainingRequestsTable extends Migration {

	public function up()
	{
		Schema::create('training_requests', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('created_by')->unsigned();
			$table->enum('status', array('approved', 'declined', 'inprocess', 'waiting', 'waitingforconfirm', 'finished', 'onhold', 'interviewcandidate'));
			$table->string('notes', 200);
			$table->integer('plan_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('training_requests');
	}
}