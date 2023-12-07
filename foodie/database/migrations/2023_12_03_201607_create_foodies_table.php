<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foodies', function (Blueprint $table) {
            $table->id();
            $table->string("dish_name");
            $table->string("cat_title");
            $table->boolean("veg_or_nonveg");
            $table->float("price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foodies');
    }
};
