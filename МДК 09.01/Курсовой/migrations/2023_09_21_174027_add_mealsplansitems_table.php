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
            $table->unsignedBigInteger('mpi_plan_id', false);   // meal_plan_id (внешний ключ, связывающий с таблицей "MealPlans")
            $table->unsignedBigInteger('mpi_product_id', false); // product_id (внешний ключ, связывающий с таблицей "Products")
            $table->unsignedBigInteger('mpi_recipe_id', false);    // recipe_id (внешний ключ, связывающий с таблицей "Recipes")
            $table->char('quantity');                // quantity (количество продукта или порция рецепта в рационе)

            $table->foreign('mpi_plan_id')->references('id')->on('MealPlans');
            $table->foreign('mpi_product_id')->references('id')->on('Products');
            $table->foreign('mpi_recipe_id')->references('id')->on('Recipes');
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
