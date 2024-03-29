<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionsTable extends Migration {

	public function up()
	{
		Schema::create('sections', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('section_number');
			$table->integer('user_id')->unsigned();
			$table->integer('semester');
		});
	}

	public function down()
	{
		Schema::drop('sections');
	}
}