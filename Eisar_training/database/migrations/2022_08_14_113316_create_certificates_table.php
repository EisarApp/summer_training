<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration {

	public function up()
	{
		Schema::create('certificates', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 150);
			$table->datetime('release_time');
			$table->integer('created_by')->unsigned();
			$table->string('image');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('certificates');
	}
}