<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinesTable extends Migration {

	public function up()
	{
		Schema::create('lines', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('panier_id');
			$table->integer('product_id');
			$table->float('prix');
			$table->integer('qte');
		});
	}

	public function down()
	{
		Schema::drop('lines');
	}
}