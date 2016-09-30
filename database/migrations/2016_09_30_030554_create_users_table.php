<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('user_id', true);
			$table->string('fname');
			$table->string('mname');
			$table->string('lname');
			$table->string('address')->nullable();
			$table->string('email')->nullable();
			$table->string('username');
			$table->string('password');
			$table->integer('semester_id')->index('fk_user_semester');
			$table->integer('role_type')->nullable()->index('fk_user_role');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
