<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //id (primary key) name (название продукта) calories (количество калорий) protein (количество белка) 
    //carbohydrates (количество углеводов) fat (количество жира) и другие характеристики продукта
    public function up(): void
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->string('prod_name', 50);
            $table->smallInteger('calories');
            $table->smallInteger('protein');
            $table->smallIncrements('carbohydrates');
            $table->smallInteger('fat');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Products');
    }
};
