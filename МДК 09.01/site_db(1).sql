-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2023 г., 05:31
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `MealsPlans`
--

CREATE TABLE `MealsPlans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prod` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_09_18_173658_add_products_table', 1),
(18, '2023_09_19_173200_add_recipes_table', 1),
(19, '2023_09_19_173551_add_users_table', 1),
(20, '2023_09_20_174009_add_mealsplans_table', 1),
(21, '2023_10_19_151251_add_users_meals_plans', 1),
(22, '2023_11_21_175531_create_users_products_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `id` bigint UNSIGNED NOT NULL,
  `prod_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripton` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protein` smallint NOT NULL,
  `fat` smallint NOT NULL,
  `carbohydrates` smallint NOT NULL,
  `vitamins` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minerals` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`id`, `prod_name`, `image`, `descripton`, `protein`, `fat`, `carbohydrates`, `vitamins`, `minerals`) VALUES
(1, 'Курица с лимоном и зеленью', '/resources/images/chiken_with_lemon.jpg', 'Вкусно наверное...', 55, 21, 18, '13', '12'),
(2, 'Салат \"Наполеон\"', '/resources/images/Salat-Napoleon-690x430.jpg', 'Салатик', 23, 22, 21, '20', '19'),
(3, 'Курица с лимоном и зеленью', '/resources/images/chiken_with_lemon.jpg', 'Вкусно наверное...', 55, 21, 18, '13', '12'),
(4, 'Салат \"Наполеон\"', '/resources/images/Salat-Napoleon-690x430.jpg', 'Салатик', 23, 22, 21, '20', '19');

-- --------------------------------------------------------

--
-- Структура таблицы `Recipes`
--

CREATE TABLE `Recipes` (
  `id` bigint UNSIGNED NOT NULL,
  `id_prod` bigint UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructions` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `username`, `email`, `password`, `remember_token`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.ru', '$2y$12$aOsiAH5Vv.pvMlMrYVZQhubbBNStHGaSfw2O8HzsCufNXyGPoWn/O', NULL, 1, '2023-11-21 15:22:21', '2023-11-21 15:22:21'),
(3, 'nikita', 'nikita@mail.ru', '$2y$12$q3AD8UsX85ZuKBUBFswY6u49iMsPfc4c.WRh1N2x60hudvuYTla..', NULL, 1, '2023-11-22 14:58:41', '2023-11-22 14:58:41');

-- --------------------------------------------------------

--
-- Структура таблицы `UsersMealsPlans`
--

CREATE TABLE `UsersMealsPlans` (
  `id` bigint UNSIGNED NOT NULL,
  `id_mp` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_products`
--

CREATE TABLE `users_products` (
  `id` bigint UNSIGNED NOT NULL,
  `id_users` bigint UNSIGNED NOT NULL,
  `id_products` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_products`
--

INSERT INTO `users_products` (`id`, `id_users`, `id_products`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `MealsPlans`
--
ALTER TABLE `MealsPlans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mealsplans_id_prod_foreign` (`id_prod`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Recipes`
--
ALTER TABLE `Recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_id_prod_foreign` (`id_prod`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `UsersMealsPlans`
--
ALTER TABLE `UsersMealsPlans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersmealsplans_id_user_foreign` (`id_user`),
  ADD KEY `usersmealsplans_id_mp_foreign` (`id_mp`);

--
-- Индексы таблицы `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_products_id_users_foreign` (`id_users`),
  ADD KEY `users_products_id_products_foreign` (`id_products`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `MealsPlans`
--
ALTER TABLE `MealsPlans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Recipes`
--
ALTER TABLE `Recipes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `UsersMealsPlans`
--
ALTER TABLE `UsersMealsPlans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `MealsPlans`
--
ALTER TABLE `MealsPlans`
  ADD CONSTRAINT `mealsplans_id_prod_foreign` FOREIGN KEY (`id_prod`) REFERENCES `Products` (`id`);

--
-- Ограничения внешнего ключа таблицы `Recipes`
--
ALTER TABLE `Recipes`
  ADD CONSTRAINT `recipes_id_prod_foreign` FOREIGN KEY (`id_prod`) REFERENCES `Products` (`id`);

--
-- Ограничения внешнего ключа таблицы `UsersMealsPlans`
--
ALTER TABLE `UsersMealsPlans`
  ADD CONSTRAINT `usersmealsplans_id_mp_foreign` FOREIGN KEY (`id_mp`) REFERENCES `MealsPlans` (`id`),
  ADD CONSTRAINT `usersmealsplans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_id_products_foreign` FOREIGN KEY (`id_products`) REFERENCES `Products` (`id`),
  ADD CONSTRAINT `users_products_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `Users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
