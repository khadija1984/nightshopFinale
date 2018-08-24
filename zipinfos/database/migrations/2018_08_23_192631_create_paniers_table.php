<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaniersTable extends Migration {

	public function up()
	{
		Schema::create('paniers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id');
			$table->float('total');
		});
	}

	public function down()
	{
		Schema::drop('paniers');
	}
}