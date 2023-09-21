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
        Schema::create('MealPlans', function (Blueprint $table) {
            $table->id();
            $table->string('name');               // name (название рациона)
            $table->char('description');          // description (описание рациона) 
            $table->bigIncrements('mp_user_id');  // user_id (внешний ключ, связывающий с таблицей "Users")
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MealPlans');
    }
};
