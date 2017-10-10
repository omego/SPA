<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActionPlanAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('action_plan_attachments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file_name', 191);
			$table->integer('action_plan_id')->unsigned()->nullable()->index('action_plan_attachments_action_plan_id_foreign');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('action_plan_attachments');
	}

}
