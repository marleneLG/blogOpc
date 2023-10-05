-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 05, 2023 at 12:37 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_opc`
--
CREATE DATABASE IF NOT EXISTS `blog_opc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog_opc`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT '0',
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `message`, `created_at`, `updated_at`, `is_approved`, `post_id`) VALUES
(1, 'Bonjour', '2023-06-06', NULL, 1, 1),
(3, 'Hey', '2023-06-30', NULL, 1, 2),
(14, 'commentaire: premier post', '2023-07-30', '2023-07-30', 1, 1),
(16, 'commentaire: second post', '2023-07-30', '2023-07-30', 1, 2),
(17, 'commentaire: troisième post', '2023-07-30', '2023-07-30', 1, 3),
(18, 'commentaire: quatrième post', '2023-07-30', '2023-07-30', 1, 4),
(20, 'beau contenu', '2023-08-07', '2023-08-07', 1, 3),
(21, 'ajout d\'un commentaire', '2023-08-07', '2023-08-07', 1, 1),
(22, 'Post intéressant ', '2023-08-07', '2023-08-07', 1, 3),
(23, 'coucou', '2023-08-18', '2023-08-18', 1, 1),
(24, 'superbe post!', '2023-08-19', '2023-08-19', 1, 1),
(25, 'Sympa', '2023-08-19', '2023-08-19', 1, 3),
(26, 'hey', '2023-08-19', '2023-08-19', 1, 3),
(27, 'Hey Bonjour', '2023-09-01', '2023-09-01', 1, 13),
(29, 'coucou', '2023-09-01', '2023-09-01', 1, 1),
(30, 'heyhey je test encore et toujours', '2023-09-22', '2023-09-22', 1, 13),
(32, 'bonjour c\'est moi', '2023-09-29', '2023-09-29', 1, 1),
(49, 'dkzadZQF', '2023-09-29', '2023-09-29', 1, 2),
(54, 'riquiquqi', '2023-09-29', '2023-09-29', 0, 2),
(55, 'zaoekzed', '2023-09-29', '2023-09-29', 0, 2),
(57, 'azed', '2023-09-29', '2023-09-29', 0, 1),
(58, 'zezaE', '2023-09-29', '2023-09-29', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `message` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `message`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'essai!', 'essai d\'affichage!', '2023-04-10', '2023-08-19', 1),
(2, 'Post!!!', 'Test post!!!', '2023-06-16', '2023-09-24', 1),
(3, 'coucou', 'coucou', '2023-07-07', '2023-07-07', 1),
(4, 'hey ', 'hey hey', '2023-07-07', '2023-07-07', 1),
(9, 'Essai une nouvelle fois', 'Je teste encore', '2023-08-10', '2023-08-10', 1),
(11, 'je croise les doigts', 'je croise les doigts et les orteils', '2023-08-10', '2023-08-10', 1),
(12, 'cette fois c\'est la bonne', 'Aller Aller', '2023-08-10', '2023-08-10', 1),
(13, 'New post', 'Un post de folie', '2023-08-19', '2023-08-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `is_validated` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `is_admin`, `created_at`, `updated_at`, `is_validated`) VALUES
(1, 'jo', '$2y$10$X2sxQKNSyE6DgIbmHNDhq.rOiw59qMy1qhDClxSoVbuwJ2eLDZNdi', 'jo@yopmail.com', 1, '2023-04-10', NULL, 1),
(2, 'jean', '$2y$10$X2sxQKNSyE6DgIbmHNDhq.rOiw59qMy1qhDClxSoVbuwJ2eLDZNdi', 'jean@yopmail.com', 1, '2023-05-25', NULL, 1),
(3, 'marlene', '789', 'marlene.mlg53@gmail.com', 1, '2023-09-08', '2023-09-08', 1),
(4, 'test', '369', 'koukou@yopmail.com', 0, '2023-09-08', '2023-09-08', 1),
(5, 'louisette', '147', 'louisette@yopmail.com', 0, '2023-09-08', '2023-09-08', 1),
(6, 'essai', '7898', 'essai@yopmail.com', 0, '2023-09-10', '2023-09-10', 1),
(7, 'test2', '789', 'test2@yopmail.com', 0, '2023-09-10', '2023-09-10', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`user_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `posts_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
