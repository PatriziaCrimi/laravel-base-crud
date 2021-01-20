<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('bouquet_name', 50);
            $table->tinyInteger('size');
            $table->float('price', 6, 2);
            $table->string('flowers_types', 100)->nullable();
            $table->string('foliage_type', 100)->nullable();
            $table->string('colors', 50)->nullable();
            $table->tinyInteger('season')->nullable();
            $table->string('bouquet_type', 30)->nullable();
            $table->float('rating', 3, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('notes')->nullable();
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
