<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('user_id', true);
			$table->string('fname');
			$table->string('lname');
			$table->string('image')->nullable();
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
		Schema::drop('user');
	}

}
