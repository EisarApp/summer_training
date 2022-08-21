<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 150);
			$table->integer('region_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}