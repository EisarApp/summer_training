<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainingControlsTable extends Migration {

	public function up()
	{
		Schema::create('training_controls', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('company_id')->unsigned();
			$table->integer('attachment_id')->unsigned();
			$table->text('description');
			$table->float('gpa');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('training_controls');
	}
}