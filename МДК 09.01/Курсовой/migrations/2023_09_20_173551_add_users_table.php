<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //id (primary key) username (имя пользователя) email (адрес электронной почты) password (хешированный пароль) Другие поля по необходимости (имя, фамилия, возраст и т. д.)
    public function up(): void
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->id();
            $table->char('username', 30);
            $table->char('password', 50);
            $table->boolean('idAdmin')->default(false);

            // $table->foreign('id')->references()
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Users');
    }
};
