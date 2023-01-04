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
            $table->string('item_id')->index();
            $table->text('path');
            $table->bigInteger('size')->nullable(true)->default(0);
            $table->bigInteger('type')->index()->unsigned();
            $table->string('parent_id');
            $table->integer('public')->default(0);
            $table->timestamps();
            $table->primary(['item_id']);
            $table->foreign('type')->references('id')->on('filetypes')->onDelete('cascade');
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
