<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notice', function(Blueprint $table)
		{
			$table->integer('notice_id', true);
			$table->string('title', 45);
			$table->string('description', 45);
			$table->string('published_date', 45);
			$table->integer('user_id')->index('fk_notice_user');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notice');
	}

}
