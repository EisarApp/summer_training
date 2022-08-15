<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('user_employees', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('department', 200);
			$table->string('job_title', 150);
			$table->string('nationality', 150);
			$table->date('birth_date');
			$table->string('qualification', 150);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('user_employees');
	}
}