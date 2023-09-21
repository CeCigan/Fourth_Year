<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //  id (primary key) name (название рецепта) description (описание рецепта) 
    //  instructions (инструкции по приготовлению) и другие характеристики рецепта
    public function up(): void
    {
        Schema::create('Recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->char('description');
            $table->char('instructions');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Recipes');
    }
};
