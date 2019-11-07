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
            $table->bigIncrements('id');
            $table->integer('catagory_id')->unsignd();
            $table->integer('brand_id')->unsignd();
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->integer('quantity')->default(1);
            $table->tinyInteger('status')->default(0);
            $table->BigInteger('price');
            $table->integer('offer_price')->nullable();
            $table->integer('admin_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
