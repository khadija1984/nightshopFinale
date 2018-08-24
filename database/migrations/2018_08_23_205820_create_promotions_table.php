<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('product_id');
            $table->float('prix');
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();
             
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
