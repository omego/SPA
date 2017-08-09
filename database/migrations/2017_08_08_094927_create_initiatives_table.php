<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInitiativesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('initiatives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('initiative_title', 191);
			$table->text('initiative_description');
			$table->string('kpi_previous', 11);
			$table->string('kpi_current', 11);
			$table->string('kpi_target', 11);
			$table->string('status', 22)->nullable();
			$table->text('why_if_not', 65535)->nullable();
			$table->text('dod_note', 65535)->nullable();
			$table->integer('project_id')->unsigned()->nullable()->index('initiatives_project_id_foreign');
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
		Schema::drop('initiatives');
	}

}
