<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInitiativesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('initiatives', function(Blueprint $table)
		{
			$table->foreign('project_id')->references('id')->on('projects')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('initiatives', function(Blueprint $table)
		{
			$table->dropForeign('initiatives_project_id_foreign');
		});
	}

}
