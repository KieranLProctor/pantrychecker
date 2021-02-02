<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('length', 2)->nullable();
            $table->decimal('width', 2)->nullable();
            $table->decimal('height', 2)->nullable();
            $table->decimal('volume', 2)->nullable();
            $table->unsignedBigInteger('shape_id');
            $table->timestamps();

            $table->foreign('shape_id')
                ->references('id')
                ->on('shapes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes');
    }
}
