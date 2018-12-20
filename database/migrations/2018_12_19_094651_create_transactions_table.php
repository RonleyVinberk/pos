<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stuff_id')->unsigned();
            $table->integer('purchase_order')->unsigned();
            $table->integer('purchase_request')->unsigned();
            $table->timestamps();

            $table->foreign('stuff_id')->references('id')->on('stuffs')->onDelete('cascade');
            $table->foreign('purchase_order', 'purchase_request')->references('id')->on('stuffs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
