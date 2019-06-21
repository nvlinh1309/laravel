<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->string('imglink');
            $table->unsignedInteger('parentid');
            $table->unsignedInteger('orders');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_product');
    }
}
