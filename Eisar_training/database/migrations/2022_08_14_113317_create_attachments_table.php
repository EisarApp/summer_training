<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttachmentsTable extends Migration {

	public function up()
	{
		Schema::create('attachments', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 150);
			$table->string('type', 150);
			$table->string('link', 200);
			$table->integer('model_id')->unsigned();
			$table->string('model_name', 150);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('attachments');
	}
}