<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->command->info("Таблица пользователей загружено УСПЕШНО!");

        $this->call(PostTableSeeder::class);
        $this->command->info('Таблица постов блога загружено УСПЕШНО!');
    }
}
