<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaiementsTable extends Migration {

	public function up()
	{
		Schema::create('paiements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('panier_id');
		});
	}

	public function down()
	{
		Schema::drop('paiements');
	}
}