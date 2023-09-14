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
        /*Под вопросом???*/
        Schema::create('dishs', function (Blueprint $table) {
            $table->id('dish_id');
            $table->text('image_uri');
            $table->tinyText('dish_name');
            $table->string();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Dishs');
    }
};
