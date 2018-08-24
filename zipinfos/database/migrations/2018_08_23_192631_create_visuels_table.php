<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVisuelsTable extends Migration {

	public function up()
	{
		Schema::create('visuels', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('url');
			$table->integer('product_id');
		});
	}

	public function down()
	{
		Schema::drop('visuels');
	}
}