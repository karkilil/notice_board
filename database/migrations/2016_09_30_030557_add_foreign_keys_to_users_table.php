<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->foreign('role_type', 'fk_user_role')->references('role_id')->on('role')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('semester_id', 'fk_user_semester')->references('semester_id')->on('semester')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_role');
			$table->dropForeign('fk_user_semester');
		});
	}

}
