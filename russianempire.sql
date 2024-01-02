-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Dez-2023 às 13:57
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `trasp`
--

CREATE TABLE `trasp` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quote` text DEFAULT NULL,
  `legacy_and_influence_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `trasp`
--

INSERT INTO `trasp` (`id`, `title`, `content`, `image`, `quote`, `legacy_and_influence_video`) VALUES
(1, 'Early Life and Background', 'Grigori Rasputin was born on January 21, 1869, in the Siberian village of Pokrovskoye to a peasant family. Raised in humble surroundings, Rasputin experienced a religious awakening during his late teens, reportedly after a vision of the Virgin Mary. His family\'s devout background and his own religious fervor led him to a connection with the Russian Orthodox Church. Rasputin married Praskovia Dubrovina in 1889, and the couple had three children. The early years of Rasputin\'s life are marked by a lack of detailed historical records, contributing to the mystique and uncertainty surrounding his early background.', 'rasputin.jpg', NULL, NULL),
(2, 'Mystical and Spiritual Beliefs', 'Grigori Rasputin\'s mystical and spiritual beliefs were deeply rooted in Russian Orthodox mysticism and ascetic practices. Embracing a devout lifestyle, he engaged in self-flagellation and other forms of self-mortification in pursuit of spiritual purity. Rasputin claimed a unique connection with the divine, considering himself a holy man with the ability to heal and provide spiritual guidance. Despite his unconventional methods, he identified strongly with the Russian Orthodox Church, often portraying himself as a starets, or spiritual elder. This mystical persona played a crucial role in his influence over the Russian imperial family, particularly with Tsarina Alexandra, who sought his assistance for the health of her hemophiliac son, Tsarevich Alexei.', 'rasputinMysticalAndSpiritualBeliefs.jpg', NULL, NULL),
(3, 'Connection with the Romanovs', 'Grigori Rasputin\'s connection with the Romanovs was marked by his influence over Tsarina Alexandra and her son Alexei. Rasputin entered the royal court due to his perceived ability to alleviate the symptoms of Alexei\'s hemophilia, a hereditary condition that impaired the heir\'s blood-clotting ability. Tsarina Alexandra, desperate for a cure, came to trust Rasputin, believing him to possess mystical healing powers. His growing influence over the royal family fueled rumors and discontent among the Russian nobility, contributing to the decline in the Romanovs\' popularity. Rasputin\'s proximity to the imperial family, combined with his unconventional behavior and perceived control over key decisions, played a significant role in the destabilization of the Russian monarchy and ultimately contributed to the downfall of the Romanov dynasty during the Russian Revolution in 1917.', 'rasputinRomanovs.jpg', NULL, NULL),
(4, 'Political Intrigue', 'Grigori Rasputin\'s political intrigue centered around his controversial influence over the Russian imperial family during the final years of the Romanov dynasty. His connection with Tsarina Alexandra and the perceived control he wielded over decisions of state led to widespread speculation and discontent. Rasputin\'s opposition accused him of exploiting his relationship with the Tsarina to advance personal and political interests. He was often blamed for influencing key appointments, promoting individuals loyal to him, and interfering in government affairs. The monk\'s unpredictable behavior, scandalous reputation, and rumors of his alleged debauchery further fueled public and aristocratic resentment. Rasputin\'s involvement in political matters intensified the existing dissatisfaction with the Romanov rule, contributing to the perception of an ineffective and misguided monarchy. Ultimately, Rasputin\'s role in the imperial court became a symbol of corruption and incompetence, adding to the factors that fueled the Russian Revolution of 1917 and the eventual overthrow of the Romanovs.', 'rasputinPoliticalIntrigue.jpg', 'I am not a saint; I am a sinner and Christ came into the world to save sinners.', NULL),
(5, 'Personal Life and Scandals', 'Grigori Rasputin\'s personal life was marred by scandals and controversies, notably his hedonistic lifestyle, heavy drinking, and allegations of sexual misconduct. Despite presenting himself as a religious mystic, Rasputin faced persistent rumors of engaging in promiscuous behavior, seducing women, and participating in orgies. His controversial relationships with women, both within and outside the royal court, added to the perception of him as a morally questionable figure. Multiple attempts were made on Rasputin\'s life, reflecting the widespread disapproval of his behavior and influence. The combination of these scandals and his political involvement contributed significantly to his notorious reputation and played a role in the broader discontent that led to the downfall of the Romanov dynasty during the Russian Revolution of 1917.', NULL, NULL, NULL),
(6, 'Assassination Attempts', 'Grigori Rasputin faced several assassination attempts due to his controversial influence over the Russian imperial family and his perceived negative impact on political affairs. The most infamous assassination occurred on the night of December 29-30, 1916, orchestrated by a group of nobles who believed Rasputin\'s presence was detrimental to the monarchy. Led by Prince Felix Yusupov, Grand Duke Dmitri Pavlovich, and others, the conspirators lured Rasputin to Yusupov\'s palace, where they offered him poisoned wine and cakes. Surprisingly, Rasputin appeared unaffected, prompting Yusupov to shoot him. Believing him dead, the conspirators left the room, only for Rasputin to later regain consciousness and attempt to escape. He was shot multiple times, severely beaten, and finally drowned in the Neva River. The murder intensified the political turmoil surrounding the Romanovs, as Rasputin\'s death failed to alleviate the challenges facing the monarchy, ultimately contributing to its downfall during the Russian Revolution in 1917.', 'rasputinLegacyAndBeliefs.jpg', NULL, NULL),
(7, 'Legacy and Influence', 'Grigori Rasputin\'s legacy is a complex tapestry of mystique and controversy, with a profound impact on Russian history. His role in the downfall of the Romanovs, marked by scandalous personal behavior and political intrigue, symbolized the corruption and excesses of the monarchy, contributing significantly to the discontent that fueled the Russian Revolution in 1917. Rasputin\'s image as a mystic with alleged healing powers, intertwined with accusations of debauchery, left an indelible mark on the perception of Russian Orthodoxy. While his influence was significant during his lifetime, Rasputin\'s legacy extends beyond his death, embodying the tensions and challenges that ultimately led to the transformation of Russia\'s political and social landscape.', NULL, NULL, 'https://www.youtube.com/embed/NZOHQwzA0bM?si=Qw16Etn72-JJTns3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tsuggestions`
--

CREATE TABLE `tsuggestions` (
  `id` int(11) NOT NULL,
  `books` varchar(255) NOT NULL,
  `movies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tsuggestions`
--

INSERT INTO `tsuggestions` (`id`, `books`, `movies`) VALUES
(19, '', 'Anna Karenina'),
(20, 'The Russian Empire: A Multi-ethnic History', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `war_slider`
--

CREATE TABLE `war_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `iframe_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `war_slider`
--

INSERT INTO `war_slider` (`id`, `title`, `content`, `image_url`, `iframe_url`) VALUES
(1, '1914: Outbreak of War', 'In 1914, Russia found itself thrust into the turmoil of World War I as a key member of the Triple Entente. Swiftly mobilizing its forces, Russia joined the Eastern Front to combat the Central Powers, primarily Germany and Austria-Hungary. The early stages of the war saw Russian successes, notably in the Battle of Tannenberg. However, logistical challenges and organizational issues within the Russian military hinted at the difficulties the country would face in the years to come.', 'outbreakOfTheWar.jpg', ''),
(2, '1915: Setbacks and Challenges', 'The year 1915 proved challenging for Russia on multiple fronts. The Gorlice-Tarnów Offensive witnessed the Central Powers gaining ground, pushing Russian forces back. Simultaneously, the strain of war began affecting the Russian economy, leading to shortages and inflation. Internally, political unrest and food shortages started to surface, foreshadowing the turbulent times that lay ahead for the nation.', 'gorliceTarnówOffensive.jpg', ''),
(3, '1916: Brusilov Offensive', 'In 1916, Russia launched the Brusilov Offensive in an attempt to regain the initiative on the Eastern Front. While achieving some successes, the campaign came at a considerable cost, with high casualties. The offensive did not alter the overall trajectory of the war but highlighted the toll it was taking on Russia, contributing to growing war weariness and discontent among the populace.', 'brusilovOffensive.jpg', ''),
(4, '1917: Russian Revolution', 'The year 1917 witnessed a seismic shift in Russia\'s history. In February (Julian calendar; March in the Gregorian calendar), widespread discontent erupted into the February Revolution, leading to the abdication of Tsar Nicholas II. The Provisional Government, which took charge, faced challenges from both internal and external forces. The October Revolution (Julian calendar; November in the Gregorian calendar) saw the Bolsheviks, led by Vladimir Lenin, seizing power. This event marked the beginning of the Soviet era and Russia\'s withdrawal from World War I.', 'russianRevolution.jpg', ''),
(5, '1918: Treaty of Brest-Litovsk', 'In March 1918, the newly established Bolshevik government signed the Treaty of Brest-Litovsk with the Central Powers, officially ending Russia\'s involvement in World War I. The treaty came at a great cost, with significant territorial losses, including Ukraine, Belarus, and the Baltic states. This marked a turning point for Russia as it shifted focus inward, grappling with the challenges of the Russian Civil War and the consolidation of power under Bolshevik rule.', 'treatyOfBrestLitovsk.jpg', ''),
(6, 'Aftermath: Civil War and Red Army', 'The aftermath of World War I saw Russia plunged into a devastating civil conflict. The Red Army, loyal to the Bolsheviks, clashed with anti-Bolshevik White forces in a protracted struggle that lasted from 1918 to 1922. Foreign intervention by Allied powers complicated the situation, but the Red Army ultimately emerged victorious, solidifying Bolshevik control and laying the groundwork for the establishment of the Soviet Union. The experience of World War I had profound and enduring effects on Russia, shaping its political landscape and societal structures for decades to come.', 'aftermathCivilWarAndRedArmy.png', ''),
(7, 'WW1 From Russia\'s Perspective', '\"The Armchair Historian presents a captivating animated history titled \'WW1 From Russia\'s Perspective.\' In this insightful video, The Armchair Historian delves into the complexities of World War I, offering a unique focus on Russia\'s role during this tumultuous period. Through engaging animations and historical context, the video explores key events, the impact of the war on Russia, and the significance of the nation\'s contributions to the broader conflict. Viewers can expect a rich narrative that brings the historical era to life, all credit to The Armchair Historian\'s dedication to making history accessible and compelling through the art of animation.\"', '', 'https://www.youtube.com/embed/6vwF6EWIAKk');

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
-- Índices para tabela `trasp`
--
ALTER TABLE `trasp`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tsuggestions`
--
ALTER TABLE `tsuggestions`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `war_slider`
--
ALTER TABLE `war_slider`
  ADD PRIMARY KEY (`id`);

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

--
-- AUTO_INCREMENT de tabela `trasp`
--
ALTER TABLE `trasp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tsuggestions`
--
ALTER TABLE `tsuggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `war_slider`
--
ALTER TABLE `war_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
