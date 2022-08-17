<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateDailyReportsTasksTable extends Migration {

	public function up()
	{
		Schema::create('daily_reports_tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('daily_report_id')->unsigned();
			$table->integer('task_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('daily_reports_tasks');
	}
}