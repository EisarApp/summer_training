<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateUserTraineesTable extends Migration {

	public function up()
	{
		Schema::create('user_trainees', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('region_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->integer('university_id')->unsigned();
			$table->integer('department_id')->unsigned();
			$table->string('major', 150);
			$table->bigInteger('student_number')->nullable();
			$table->float('gpa');
			$table->enum('gpa_type', array('4', '5'));
			$table->enum('training_date', array('firstsemester', 'secondsemester', 'thirdsemester', 'summersemester'))->nullable();
			$table->integer('training_hours')->nullable();
			$table->integer('graduation_year')->nullable();
			$table->enum('academic_degree', array('bachelor', 'diploma'));
			$table->string('graduation_certificate', 200)->nullable();
			$table->string('academic_transaction', 200);
			$table->string('cv', 200);
			$table->tinyInteger('is_graduate');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('user_trainees');
	}
}