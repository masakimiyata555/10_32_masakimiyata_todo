-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-07-24 05:38:31
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsf_d06_db32`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `image`, `created_at`, `updated_at`) VALUES
(6, '遊びに行く', '2020-06-20', NULL, '2020-06-20 16:23:30', '2020-06-30 08:09:39'),
(7, 'いい食材を買う', '2020-06-27', NULL, '2020-06-20 16:32:49', '2020-06-29 23:40:50'),
(10, '宮田正樹', '2020-06-26', NULL, '2020-06-25 14:54:41', '2020-06-25 14:54:41'),
(12, '東京', '2020-06-30', NULL, '2020-06-25 15:04:22', '2020-06-25 15:04:22'),
(17, 'mmmm', '2020-06-30', NULL, '2020-07-11 14:57:08', '2020-07-11 14:57:08'),
(18, 'ddd', '2020-07-16', NULL, '2020-07-15 15:25:22', '2020-07-15 15:25:22'),
(19, 'いい食材を買う', '2020-07-21', 'upload/202007210238557513c9446024e0294ae14ac5344c35f8.png', '2020-07-21 09:38:55', '2020-07-21 09:38:55'),
(20, 'test15', '2020-07-21', 'upload/20200721025609d35936ec0c70485d7a39b970db9ccd36.png', '2020-07-21 09:56:09', '2020-07-21 09:56:09'),
(21, '宮田正樹', '2020-07-24', NULL, '2020-07-24 11:06:50', '2020-07-24 11:06:50'),
(22, '宮田正樹', '2020-07-24', NULL, '2020-07-24 11:08:08', '2020-07-24 11:08:08'),
(23, '宮田正樹', '2020-07-24', NULL, '2020-07-24 11:08:49', '2020-07-24 11:08:49'),
(24, '宮田正樹', '2020-07-24', NULL, '2020-07-24 11:10:06', '2020-07-24 11:10:06'),
(25, '宮田正樹', '2020-07-24', NULL, '2020-07-24 11:10:10', '2020-07-24 11:10:10'),
(26, '宮田正樹', '2020-07-24', NULL, '2020-07-24 11:12:03', '2020-07-24 11:12:03');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
