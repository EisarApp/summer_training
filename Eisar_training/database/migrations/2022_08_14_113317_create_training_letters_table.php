<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainingLettersTable extends Migration {

	public function up()
	{
		Schema::create('training_letters', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('file', 200);
			$table->enum('status', array('inprocess', 'completed', 'declined'));
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('training_letters');
	}
}