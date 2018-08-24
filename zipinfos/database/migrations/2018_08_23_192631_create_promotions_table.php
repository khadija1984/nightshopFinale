<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionsTable extends Migration {

	public function up()
	{
		Schema::create('promotions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('product_id');
			$table->float('prix');
			$table->timestamps();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('promotions');
	}
}