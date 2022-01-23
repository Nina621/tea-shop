<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teas', function (Blueprint $table) {
            $table->id();
            $table->string('tea_name', 50);
            $table->foreignId('tea_flavor_id')->nullable() ->constrained('tea_flavors') ->onDelete('set null');
            $table->decimal('price');
            $table->string('description', 255);
            $table->string('image', 255);
            $table->foreignId('nature_category_id')->nullable() ->constrained('nature_categories')->onDelete('set null');
            $table->foreignId('city_id')->nullable() ->constrained('cities')->onDelete('set null');
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
        Schema::dropIfExists('teas');
    }
}
