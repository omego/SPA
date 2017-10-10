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
			$table->text('action_plan_updates')->nullable();
			$table->text('action_plan_risks')->nullable();
			$table->text('action_plan_resources')->nullable();
			$table->date('action_plan_start');
			$table->date('action_plan_end');
			$table->string('action_plan_approval', 191)->nullable();
			$table->integer('initiative_id')->unsigned()->nullable()->index('action_plans_initiative_id_foreign');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id');
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
