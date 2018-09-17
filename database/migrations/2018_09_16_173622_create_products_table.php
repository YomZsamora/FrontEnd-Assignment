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
        Schema::create('mycart', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->string('product_name');
            $table->string('product_amount');
            $table->string('product_image');
            $table->date('purchase_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mycart');
    }
}
