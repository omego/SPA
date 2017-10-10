<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInitiativeAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('initiative_attachments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file_name', 191);
			$table->integer('initiative_id')->unsigned()->nullable()->index('initiative_attachments_initiative_id_foreign');
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
		Schema::drop('initiative_attachments');
	}

}
