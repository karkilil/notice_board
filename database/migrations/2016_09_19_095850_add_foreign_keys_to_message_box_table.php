<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessageBoxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('message_box', function(Blueprint $table)
		{
			$table->foreign('boxtype_id', 'fk_message_box_boxtype')->references('id')->on('boxtype')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('msg_id', 'fk_message_box_tbl_message')->references('id')->on('tbl_message')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_message_box_user')->references('user_id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('message_box', function(Blueprint $table)
		{
			$table->dropForeign('fk_message_box_boxtype');
			$table->dropForeign('fk_message_box_tbl_message');
			$table->dropForeign('fk_message_box_user');
		});
	}

}
