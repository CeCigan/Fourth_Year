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
        Schema::create('MealPlanItems', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('meal_plan_id');   // meal_plan_id (внешний ключ, связывающий с таблицей "MealPlans")
            $table->unsignedInteger('mpi_product_id'); // product_id (внешний ключ, связывающий с таблицей "Products")
            $table->unsignedInteger('r_recipe_id');    // recipe_id (внешний ключ, связывающий с таблицей "Recipes")
            $table->char('quantity');                // quantity (количество продукта или порция рецепта в рационе)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MealPlanItems');
    }
};
