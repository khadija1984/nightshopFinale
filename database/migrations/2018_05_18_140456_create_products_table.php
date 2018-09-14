<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
$table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->float('prix');
            $table->integer('qte');
            $table->string('image');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                    ->references('id')
                     ->on('categories')
                     ->onDelete('restrict')
                     ->onUpdate('restrict');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
