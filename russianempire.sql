-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2023 às 12:43
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `russianempire`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tartitems`
--

CREATE TABLE `tartitems` (
  `idart` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tartitems`
--

INSERT INTO `tartitems` (`idart`, `image_url`, `description`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Utro_v_sosnovom_lesu.jpg/1200px-Utro_v_sosnovom_lesu.jpg', 'Ivan Shishkin - Morning in a Pine Forest (1889)'),
(2, 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Ilia_Efimovich_Repin_%281844-1930%29_-_Volga_Boatmen_%281870-1873%29.jpg', 'Ilya Repin - Barge Haulers on the Volga (1870-1873)'),
(3, 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Kuindzhi_Moonlit_night_on_the_Dnieper_1880_grm_x2.jpg', 'Arkhip Kuindzhi - Moonlit Night on the Dnieper (1880)'),
(4, 'https://upload.wikimedia.org/wikipedia/commons/1/17/Christ_in_the_Wilderness_-_Ivan_Kramskoy_-_Google_Cultural_Institute.jpg', 'Ivan Kramskoy - Christ in the Wilderness (1872)'),
(5, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Vrubel_Demon.jpg/1200px-Vrubel_Demon.jpg', 'Mikhail Vrubel - The Demon Seated (1890)'),
(6, 'https://upload.wikimedia.org/wikipedia/commons/6/64/Walentin_Alexandrowitsch_Serow_Girl_with_Peaches.jpg', 'Valentin Serov - Girl with Peaches (1887)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `taudio`
--

CREATE TABLE `taudio` (
  `idaudio` int(11) NOT NULL,
  `audio_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `taudio`
--

INSERT INTO `taudio` (`idaudio`, `audio_url`) VALUES
(1, 'Tchaikovsky - Swan Lake.mp3'),
(2, 'Alexander Borodin - Polovtsian Dances.mp3'),
(3, 'Anton Arensky - Piano Trio No. 1 in D Minor.mp3'),
(4, 'Rachmaninov - Prelude in C Sharp Minor.mp3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tlogin`
--

CREATE TABLE `tlogin` (
  `idlogin` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tlogin`
--

INSERT INTO `tlogin` (`idlogin`, `user`, `pass`) VALUES
(1, 'diogo', 'ee9a23acbdf0746a52a2807df6f07778da7d8e98'),
(2, 'ana22', '92159ac5d2f9c183f394fb766a9d9966e7f7b58e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tquotes`
--

CREATE TABLE `tquotes` (
  `idquote` int(11) NOT NULL,
  `quote` text NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tquotes`
--

INSERT INTO `tquotes` (`idquote`, `quote`, `author`) VALUES
(1, 'All, everything that I understand, I understand only because I love.', 'Leo Tolstoy'),
(2, 'If you want to be happy, be.', 'Leo Tolstoy'),
(3, 'The greatest happiness you can have is knowing that you do not necessarily require happiness.', 'Fyodor Dostoevsky'),
(4, 'Man is a mystery. It needs to be unravelled, and if you spend your whole life unravelling it, don\'t say that you\'ve wasted time. I am studying that mystery because I want to be a human being.', 'Fyodor Dostoevsky'),
(5, 'Don\'t tell me the moon is shining; show me the glint of light on broken glass.', 'Anton Chekhov'),
(6, 'Any idiot can face a crisis; it\'s this day-to-day living that wears you out.', 'Anton Chekhov'),
(7, 'We sit in the mud, my friend, and reach for the stars.', 'Ivan Turgenev'),
(8, 'If we wait for the moment when everything, absolutely everything, is ready, we shall never begin.', 'Ivan Turgenev'),
(9, 'The longer and more carefully we look at a funny story, the sadder it becomes.', 'Nikolai Gogol'),
(10, 'It is no use to blame the looking glass if your face is awry.', 'Nikolai Gogol');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tartitems`
--
ALTER TABLE `tartitems`
  ADD PRIMARY KEY (`idart`);

--
-- Índices para tabela `taudio`
--
ALTER TABLE `taudio`
  ADD PRIMARY KEY (`idaudio`);

--
-- Índices para tabela `tlogin`
--
ALTER TABLE `tlogin`
  ADD PRIMARY KEY (`idlogin`);

--
-- Índices para tabela `tquotes`
--
ALTER TABLE `tquotes`
  ADD PRIMARY KEY (`idquote`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tartitems`
--
ALTER TABLE `tartitems`
  MODIFY `idart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `taudio`
--
ALTER TABLE `taudio`
  MODIFY `idaudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tlogin`
--
ALTER TABLE `tlogin`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tquotes`
--
ALTER TABLE `tquotes`
  MODIFY `idquote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
