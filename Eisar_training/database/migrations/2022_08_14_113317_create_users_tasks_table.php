<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTasksTable extends Migration {

	public function up()
	{
		Schema::create('users_tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('targeted_user_id')->unsigned();
			$table->integer('targeted_user_type')->unsigned();
			$table->integer('task_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('users_tasks');
	}
}