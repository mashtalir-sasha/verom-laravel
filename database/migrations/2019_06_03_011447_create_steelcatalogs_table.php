<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSteelcatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steelcatalogs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('numb')->nullable();
            $table->text('name')->nullable();
            $table->text('image')->nullable();
            $table->text('text')->nullable();
            $table->text('table')->nullable();
            $table->text('price')->nullable();
            $table->text('link')->nullable();
            $table->text('item1')->nullable();
            $table->text('item2')->nullable();
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
        Schema::dropIfExists('steelcatalogs');
    }
}
