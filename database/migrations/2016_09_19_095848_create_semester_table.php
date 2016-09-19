<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemesterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semester', function(Blueprint $table)
		{
			$table->integer('semester_id', true);
			$table->string('semester_name');
			$table->integer('faculty_id')->index('fk_semester_faculty');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('semester');
	}

}
