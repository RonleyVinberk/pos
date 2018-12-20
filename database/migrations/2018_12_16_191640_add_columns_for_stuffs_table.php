<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsForStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stuffs', function (Blueprint $table) {
            $table->integer('type_stuff_id')->unsigned();
            
            $table->foreign('type_stuff_id')->references('id')->on('types_stuff')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('type_stuff_id');
        $table->dropColumn('type_stuff_id');
    }
}
