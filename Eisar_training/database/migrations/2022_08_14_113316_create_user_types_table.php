<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypesTable extends Migration {

	public function up()
	{
		Schema::create('user_types', function(Blueprint $table) {
			$table->increments('id', true);
			$table->string('name', 150);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('user_types');
	}
}