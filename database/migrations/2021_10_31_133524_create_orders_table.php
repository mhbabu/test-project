<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('city_name')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('postcode')->nullable();
            $table->string('address')->nullable();
            $table->string('notes')->nullable();
            $table->integer('three_bedroom')->nullable();
            $table->integer('two_bedroom')->nullable();
            $table->float('amount',10,2)->nullable();
            $table->string('status')->nullable();
            $table->string('currency')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
