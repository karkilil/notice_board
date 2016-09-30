<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSemesterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('semester', function(Blueprint $table)
		{
			$table->foreign('faculty_id', 'fk_semester_faculty')->references('faculty_id')->on('faculty')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('semester', function(Blueprint $table)
		{
			$table->dropForeign('fk_semester_faculty');
		});
	}

}
