<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('item_id');
            $table->dateTime('purchase_date')->nullable();
            $table->dateTime('expiration_date')->nullable();
            $table->unsignedBigInteger('retailer_id');
            $table->dateTime('last_used')->nullable();
            $table->integer('purchase_price');
            $table->integer('msrp')->nullable();
            $table->unsignedBigInteger('location_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('item_id')
                ->references('id')
                ->on('items');

            $table->foreign('retailer_id')
                ->references('id')
                ->on('companies');

            $table->foreign('location_id')
                ->references('id')
                ->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_infos');
    }
}
