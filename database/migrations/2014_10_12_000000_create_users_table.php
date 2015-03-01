<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->increments('id'); //we need enroll number too
			$table->string('name');
			$table->string('enroll_no')->unique(); //we'll change this to bigInteger
			$table->string('course');
			$table->string('majors');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
