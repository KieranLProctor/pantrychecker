<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->unsignedBigInteger('item_type_id');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('size_id')->nullable();
            $table->string('sku')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('item_type_id')
                ->references('id')
                ->on('item_types');

            $table->foreign('company_id')
                ->references('id')
                ->on('companies');

            $table->foreign('size_id')
                ->references('id')
                ->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
