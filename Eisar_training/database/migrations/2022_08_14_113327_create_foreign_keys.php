<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('type_id')->references('id')->on('user_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('region_id')->references('id')->on('regions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->foreign('region_id')->references('id')->on('regions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->foreign('university_id')->references('id')->on('universites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->foreign('department_id')->references('id')->on('departments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departments', function(Blueprint $table) {
			$table->foreign('university_id')->references('id')->on('universites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('training_requests', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('training_requests', function(Blueprint $table) {
			$table->foreign('created_by')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('training_requests', function(Blueprint $table) {
			$table->foreign('plan_id')->references('id')->on('plans')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('plans', function(Blueprint $table) {
			$table->foreign('created_by')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('plans', function(Blueprint $table) {
			$table->foreign('supervisor_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('plans', function(Blueprint $table) {
			$table->foreign('certificate_id')->references('id')->on('certificates')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->foreign('created_by')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('daily_reports', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('daily_reports', function(Blueprint $table) {
			$table->foreign('plan_id')->references('id')->on('plans')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('final_reports', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('final_reports', function(Blueprint $table) {
			$table->foreign('plan_id')->references('id')->on('plans')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('daily_reports_tasks', function(Blueprint $table) {
			$table->foreign('daily_report_id')->references('id')->on('daily_reports')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('daily_reports_tasks', function(Blueprint $table) {
			$table->foreign('task_id')->references('id')->on('tasks')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->foreign('created_by')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->foreign('plan_id')->references('id')->on('plans')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('attendances', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('attendances', function(Blueprint $table) {
			$table->foreign('plan_id')->references('id')->on('plans')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('training_letters', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_companies', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_companies', function(Blueprint $table) {
			$table->foreign('region_id')->references('id')->on('regions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_employees', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_tasks', function(Blueprint $table) {
			$table->foreign('targeted_user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_tasks', function(Blueprint $table) {
			$table->foreign('targeted_user_type')->references('id')->on('user_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_tasks', function(Blueprint $table) {
			$table->foreign('task_id')->references('id')->on('tasks')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('created_by')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('training_controls', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('user_companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('training_controls', function(Blueprint $table) {
			$table->foreign('attachment_id')->references('id')->on('attachments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('communications', function(Blueprint $table) {
			$table->foreign('targeted_user_type')->references('id')->on('user_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('communications', function(Blueprint $table) {
			$table->foreign('sender_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('communications', function(Blueprint $table) {
			$table->foreign('receiver_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('communications', function(Blueprint $table) {
			$table->foreign('reply_to')->references('id')->on('communications')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_academics', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_academics', function(Blueprint $table) {
			$table->foreign('university_id')->references('id')->on('universites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_academics', function(Blueprint $table) {
			$table->foreign('department_id')->references('id')->on('departments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sections', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('students_sections', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('students_sections', function(Blueprint $table) {
			$table->foreign('section_id')->references('id')->on('sections')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_certificates', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users_certificates', function(Blueprint $table) {
			$table->foreign('certificate_id')->references('id')->on('certificates')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_type_id_foreign');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_region_id_foreign');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->dropForeign('user_trainees_user_id_foreign');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->dropForeign('user_trainees_region_id_foreign');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->dropForeign('user_trainees_city_id_foreign');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->dropForeign('user_trainees_university_id_foreign');
		});
		Schema::table('user_trainees', function(Blueprint $table) {
			$table->dropForeign('user_trainees_department_id_foreign');
		});
		Schema::table('departments', function(Blueprint $table) {
			$table->dropForeign('departments_university_id_foreign');
		});
		Schema::table('training_requests', function(Blueprint $table) {
			$table->dropForeign('training_requests_user_id_foreign');
		});
		Schema::table('training_requests', function(Blueprint $table) {
			$table->dropForeign('training_requests_created_by_foreign');
		});
		Schema::table('training_requests', function(Blueprint $table) {
			$table->dropForeign('training_requests_plan_id_foreign');
		});
		Schema::table('plans', function(Blueprint $table) {
			$table->dropForeign('plans_created_by_foreign');
		});
		Schema::table('plans', function(Blueprint $table) {
			$table->dropForeign('plans_supervisor_id_foreign');
		});
		Schema::table('plans', function(Blueprint $table) {
			$table->dropForeign('plans_certificate_id_foreign');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->dropForeign('certificates_created_by_foreign');
		});
		Schema::table('daily_reports', function(Blueprint $table) {
			$table->dropForeign('daily_reports_user_id_foreign');
		});
		Schema::table('daily_reports', function(Blueprint $table) {
			$table->dropForeign('daily_reports_plan_id_foreign');
		});
		Schema::table('final_reports', function(Blueprint $table) {
			$table->dropForeign('final_reports_user_id_foreign');
		});
		Schema::table('final_reports', function(Blueprint $table) {
			$table->dropForeign('final_reports_plan_id_foreign');
		});
		Schema::table('daily_reports_tasks', function(Blueprint $table) {
			$table->dropForeign('daily_reports_tasks_daily_report_id_foreign');
		});
		Schema::table('daily_reports_tasks', function(Blueprint $table) {
			$table->dropForeign('daily_reports_tasks_task_id_foreign');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->dropForeign('tasks_created_by_foreign');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->dropForeign('tasks_plan_id_foreign');
		});
		Schema::table('attendances', function(Blueprint $table) {
			$table->dropForeign('attendances_user_id_foreign');
		});
		Schema::table('attendances', function(Blueprint $table) {
			$table->dropForeign('attendances_plan_id_foreign');
		});
		Schema::table('training_letters', function(Blueprint $table) {
			$table->dropForeign('training_letters_user_id_foreign');
		});
		Schema::table('user_companies', function(Blueprint $table) {
			$table->dropForeign('user_companies_city_id_foreign');
		});
		Schema::table('user_companies', function(Blueprint $table) {
			$table->dropForeign('user_companies_region_id_foreign');
		});
		Schema::table('user_employees', function(Blueprint $table) {
			$table->dropForeign('user_employees_user_id_foreign');
		});
		Schema::table('users_tasks', function(Blueprint $table) {
			$table->dropForeign('users_tasks_targeted_user_id_foreign');
		});
		Schema::table('users_tasks', function(Blueprint $table) {
			$table->dropForeign('users_tasks_targeted_user_type_foreign');
		});
		Schema::table('users_tasks', function(Blueprint $table) {
			$table->dropForeign('users_tasks_task_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_created_by_foreign');
		});
		Schema::table('training_controls', function(Blueprint $table) {
			$table->dropForeign('training_controls_company_id_foreign');
		});
		Schema::table('training_controls', function(Blueprint $table) {
			$table->dropForeign('training_controls_attachment_id_foreign');
		});
		Schema::table('communications', function(Blueprint $table) {
			$table->dropForeign('communications_targeted_user_type_foreign');
		});
		Schema::table('communications', function(Blueprint $table) {
			$table->dropForeign('communications_sender_id_foreign');
		});
		Schema::table('communications', function(Blueprint $table) {
			$table->dropForeign('communications_receiver_id_foreign');
		});
		Schema::table('communications', function(Blueprint $table) {
			$table->dropForeign('communications_reply_to_foreign');
		});
		Schema::table('user_academics', function(Blueprint $table) {
			$table->dropForeign('user_academics_user_id_foreign');
		});
		Schema::table('user_academics', function(Blueprint $table) {
			$table->dropForeign('user_academics_university_id_foreign');
		});
		Schema::table('user_academics', function(Blueprint $table) {
			$table->dropForeign('user_academics_department_id_foreign');
		});
		Schema::table('sections', function(Blueprint $table) {
			$table->dropForeign('sections_user_id_foreign');
		});
		Schema::table('students_sections', function(Blueprint $table) {
			$table->dropForeign('students_sections_user_id_foreign');
		});
		Schema::table('students_sections', function(Blueprint $table) {
			$table->dropForeign('students_sections_section_id_foreign');
		});
		Schema::table('users_certificates', function(Blueprint $table) {
			$table->dropForeign('users_certificates_user_id_foreign');
		});
		Schema::table('users_certificates', function(Blueprint $table) {
			$table->dropForeign('users_certificates_certificate_id_foreign');
		});
	}
}