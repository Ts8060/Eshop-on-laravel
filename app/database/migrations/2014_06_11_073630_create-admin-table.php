<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($collection)
		{
		    $collection->integer('id')->index();
		    $collection->string('name');
		    $collection->string('username')->unique();
		    $collection->string('email')->unique();
		    $collection->integer('phone');
		    $collection->integer('role');
		    $collection->string('password');
		    $collection->dateTime('registered');
		    $collection->dateTime('lastlogged');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("users");
	}

}
