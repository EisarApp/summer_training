<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinalReportsTable extends Migration {

	public function up()
	{
		Schema::create('final_reports', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('plan_id')->unsigned();
			$table->string('report_file', 200);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('final_reports');
	}
}