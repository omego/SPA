<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGoalUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('goal_user', function(Blueprint $table)
		{
			$table->foreign('goal_id')->references('id')->on('goals')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('goal_user', function(Blueprint $table)
		{
			$table->dropForeign('goal_user_goal_id_foreign');
			$table->dropForeign('goal_user_user_id_foreign');
		});
	}

}
