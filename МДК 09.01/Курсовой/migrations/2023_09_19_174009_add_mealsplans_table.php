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
            $table->string('name', 50);               // name (название рациона)
            $table->char('description', 255);         // description (описание рациона) 
            $table->bigInteger('mp_user_id')->unsigned();      // user_id (внешний ключ, связывающий с таблицей "Users")

            $table->foreign('mp_user_id')->references('id')->on('Users');
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
