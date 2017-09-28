<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActionPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('action_plans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('action_plan_title', 191);
			$table->text('action_plan_updates');
			$table->text('action_plan_risks');
			$table->text('action_plan_resources');
			$table->date('action_plan_start');
			$table->date('action_plan_end');
			$table->string('action_plan_approval', 191);
			$table->integer('initiative_id')->unsigned()->nullable()->index('action_plans_initiative_id_foreign');
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
		Schema::drop('action_plans');
	}

}
