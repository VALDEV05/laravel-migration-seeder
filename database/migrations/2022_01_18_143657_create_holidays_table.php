<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('city_destination', 20);
            $table->string('city_departure', 20);
            $table->decimal('price', 6, 2)->nullable();
            $table->smallInteger('max_n_person');
            $table->date('date_departure')->nullable();
            $table->date('date_destination')->nullable();
            $table->boolean('discount')->default(false);
            $table->boolean('is_available')->default(true);
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
        Schema::dropIfExists('holidays');
    }
}
