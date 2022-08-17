<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateCommunicationsTable extends Migration {

	public function up()
	{
		Schema::create('communications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('targeted_user_type')->unsigned();
			$table->integer('sender_id')->unsigned();
			$table->integer('receiver_id')->unsigned();
			$table->integer('reply_to')->unsigned();
			$table->text('text');
			$table->string('subject', 200);
			$table->datetime('is_read')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('communications');
	}
}