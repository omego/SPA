<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActionPlanAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('action_plan_attachments', function(Blueprint $table)
		{
			$table->foreign('action_plan_id')->references('id')->on('action_plans')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('action_plan_attachments', function(Blueprint $table)
		{
			$table->dropForeign('action_plan_attachments_action_plan_id_foreign');
		});
	}

}
