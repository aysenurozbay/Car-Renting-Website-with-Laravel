<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('category_id',)->nullable();
            $table->string('title', 150);
            $table->string('keywords',)->nullable();
            $table->string('description',)->nullable();
            $table->string('image', 100)->nullable();
            $table->text('detail', 100)->nullable();
            $table->float('price',)->nullable();
            $table->string('brand', 100)->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('model', 100)->nullable();
            $table->string('type', 100)->nullable();
            $table->integer('year')->nullable();
            $table->string('gear_type', 100)->nullable();
            $table->string('numberplate', 100)->nullable();
            $table->integer('user_id',)->nullable();
            $table->string('status', 10)->default('False');


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
        Schema::dropIfExists('cars');
    }
}
