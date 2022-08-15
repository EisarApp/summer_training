<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniversitesTable extends Migration {

	public function up()
	{
		Schema::create('universites', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 150);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('universites');
	}
}