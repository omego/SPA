<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInitiativeAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('initiative_attachments', function(Blueprint $table)
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
		Schema::table('initiative_attachments', function(Blueprint $table)
		{
			$table->dropForeign('initiative_attachments_initiative_id_foreign');
		});
	}

}
