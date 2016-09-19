<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessageBoxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message_box', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('boxtype_id')->index('fk_message_box_boxtype');
			$table->integer('msg_id')->index('fk_message_box_tbl_message');
			$table->integer('user_id')->index('fk_message_box_user');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message_box');
	}

}
