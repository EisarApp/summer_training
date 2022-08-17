<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCompaniesTable extends Migration {

	public function up()
	{
		Schema::create('user_companies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('logo', 200);
			$table->string('header', 200);
			$table->text('description');
			$table->string('domain', 150);
			$table->integer('city_id')->unsigned();
			$table->integer('region_id')->unsigned();
			$table->integer('facility_size');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('user_companies');
	}
}