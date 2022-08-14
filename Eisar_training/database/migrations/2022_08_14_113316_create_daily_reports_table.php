<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDailyReportsTable extends Migration {

	public function up()
	{
		Schema::create('daily_reports', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id')->unsigned();
			$table->integer('plan_id')->unsigned();
			$table->string('title', 200);
			$table->text('notes')->nullable();
			$table->date('date');
		});
	}

	public function down()
	{
		Schema::drop('daily_reports');
	}
}