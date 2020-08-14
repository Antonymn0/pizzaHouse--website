<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroppedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropped_orders', function (Blueprint $table) {
            $table-> id();
            $table-> timestamps();
            $table-> string('name');
            $table-> string('type');
            $table-> string('size');
            $table-> string('toppings');
            $table-> string('email');
            $table-> string('phone');
            $table-> string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dropped_orders');
    }
}
