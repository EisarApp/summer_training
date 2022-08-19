<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 150);
			$table->integer('type_id')->unsigned();
			$table->string('email', 100);
			$table->string('password', 200);
			$table->enum('gender', array('f', 'm'));
			$table->bigInteger('mobile')->unsigned();
			$table->tinyInteger('is_active')->unsigned()->default('1');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}