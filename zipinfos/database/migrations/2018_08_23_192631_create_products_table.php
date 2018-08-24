<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('slug');
			$table->string('description');
			$table->string('qte');
			$table->string('prix');
			$table->integer('category_id');
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}