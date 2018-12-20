<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('is_active')->default(1)->nullable();
            $table->string('name', 100);
            $table->string('address');
            $table->string('phone', 20);
            $table->string('email', 32)->nullable();
            $table->integer('provinces_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('provinces_id')->references('id')->on('provinces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
