<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActionPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('action_plans', function(Blueprint $table)
		{
			$table->foreign('initiative_id')->references('id')->on('initiatives')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('action_plans', function(Blueprint $table)
		{
			$table->dropForeign('action_plans_initiative_id_foreign');
		});
	}

}
