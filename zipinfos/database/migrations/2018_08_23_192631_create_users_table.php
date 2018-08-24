<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('username');
			$table->string('email');
			$table->string('password');
			$table->enum('role', array('user', 'admin', 'gestionnaire'));
			$table->string('remember_token');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}