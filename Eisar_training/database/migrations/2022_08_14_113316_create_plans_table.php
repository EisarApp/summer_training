<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlansTable extends Migration {

	public function up()
	{
		Schema::create('plans', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 150);
			$table->integer('created_by')->unsigned();
			$table->integer('supervisor_id')->unsigned();
			$table->text('description');
			$table->string('department');
			$table->enum('training_type', array('cooperative', 'summer'));
			$table->enum('training_method', array('on-site', 'remote'));
			$table->integer('students_number')->unsigned();
			$table->datetime('starting_time');
			$table->integer('certificate_id')->unsigned();
			$table->datetime('ending_date');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('plans');
	}
}