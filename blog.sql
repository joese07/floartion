-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 08:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `commenter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `commenter`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 40, 'Fransasisi', 'fransasisi7@gmail.com', 'informasinya akurat dan terperpercaya', '2017-01-17 04:20:14', '2017-01-17 04:20:14'),
(2, 40, 'Fransasisi', 'fransasisi7@gmail.com', 'informasinya akurat dan terperpercaya', '2017-01-17 04:20:14', '2017-01-17 04:20:14'),
(3, 39, 'Jose RIo', 'fransasisi7@gmail.com', 'sangat bagus tempatnya', '2017-01-17 04:20:53', '2017-01-17 04:20:53'),
(4, 37, 'Joese', 'fransasisi7@gmail.com', 'TET', '2017-02-06 01:10:50', '2017-02-06 01:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(255) NOT NULL,
  `visual` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`nama`, `email`, `pesan`, `id`) VALUES
('Joese Rio Telysana', 'fransasisi7@yahoo.com', 'mudah mudah ga bisa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_06_111058_buat_table_post', 1),
('2015_05_06_111129_buat_table_comments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `read_more` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_count` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `read_more`, `content`, `image`, `comment_count`, `created_at`, `updated_at`) VALUES
(43, 'wwcecec', 'cwcwcwc', 'cwcwcwc', 'uploads/79692.png', 0, '2017-02-07 00:09:25', '2017-02-07 00:09:25'),
(37, 'Flora Information', 'Flora, dari bahasa Latin, alam tumbuhan atau nabatah adalah khazanah segala macam jenis tanaman atau tumbuhan. Biasanya ditulis di depan nama geografis. Misalnya, nabatah Jawa, nabatah Asia atau nabatah Australia.\r\n\r\nUnt', 'Flora, dari bahasa Latin, alam tumbuhan atau nabatah adalah khazanah segala macam jenis tanaman atau tumbuhan. Biasanya ditulis di depan nama geografis. Misalnya, nabatah Jawa, nabatah Asia atau nabatah Australia.\r\n\r\nUntuk hewan hal ini disebut fauna/alam hewan. Alam tumbuhan dan hewan berarti semua khazanah kehidupan tanpa mikroba.\r\n\r\nFlora, fauna dan bentuk-bentuk kehidupan yang lain semisal fungi, semuanya dikelompokkan sebagai biota. Pada sisi yang lain, kelompok-kelompok bakteria, alga, dan beberapa macam jasad renik yang lain, juga acap disebut flora[1][2][3]; sehingga dikenal adanya flora bakteria, flora alga, flora pohon dan lain-lain.\r\n\r\nFlora berbeda, namun sering dikelirukan, dengan vegetasi; di mana flora secara ringkas berisi (daftar) kekayaan jenis tetumbuhan, sedangkan vegetasi berarti kelompok-kelompok tetumbuhan yang berinteraksi membentuk suatu komunitas tertentu (misalnya hutan, sabana, padang rumput, dan lain-lain).', 'uploads/63026.jpg', 1, '2017-01-17 00:04:22', '2017-02-06 01:10:50'),
(38, 'Cengkih', 'Cengkih (Syzygium aromaticum, syn. Eugenia aromaticum), dalam bahasa Inggris disebut cloves, adalah tangkai bunga kering beraroma dari keluarga pohon Myrtaceae. Cengkih adalah tanaman asli Indonesia, banyak digunakan seb', 'Cengkih (Syzygium aromaticum, syn. Eugenia aromaticum), dalam bahasa Inggris disebut cloves, adalah tangkai bunga kering beraroma dari keluarga pohon Myrtaceae. Cengkih adalah tanaman asli Indonesia, banyak digunakan sebagai bumbu masakan pedas di negara-negara Eropa, dan sebagai bahan utama rokok kretek khas Indonesia. Cengkih ditanam terutama di Indonesia (Kepulauan Banda) dan Madagaskar; nokia di budidayakan di Zanzibar, India, & Sri Lanka.', 'uploads/33905.jpg', 0, '2017-01-17 00:06:07', '2017-01-17 00:06:07'),
(39, 'Cagar Alam', 'Cagar alam adalah suatu kawasan suaka alam yang karena keadaan alamnya mempunyai kekhasan tumbuhan, satwa, dan ekosistemnya atau ekosistem tertentu yang perlu dilindungi dan perkembangannya berlangsung secara alami.[1]\r\n', 'Cagar alam adalah suatu kawasan suaka alam yang karena keadaan alamnya mempunyai kekhasan tumbuhan, satwa, dan ekosistemnya atau ekosistem tertentu yang perlu dilindungi dan perkembangannya berlangsung secara alami.[1]\r\n\r\nContoh kawasan yang dijadikan cagar alam di Indonesia adalah Cagar Alam Pananjung Pangandaran di Jawa Barat, Cagar Alam Nusakambangan Barat dan Cagar Alam Nusakambangan Timur di Jawa Tengah.\r\n\r\nDi Indonesia, cagar alam adalah bagian dari dari kawasan konservasi (Kawasan Suaka Alam), maka kegiatan wisata atau kegiatan lain yang bersifat komersial, tidak boleh dilakukan di dalam area cagar alam. Sebagaimana kawasan konservasi lainnya, untuk memasuki cagar alam diperlukan SIMAKSI (Surat Izin Masuk Kawasan Konservasi). SIMAKSI bisa diperoleh di kantor Balai Konservasi Sumber Daya Alam (BKSDA) setempat.\r\n\r\nDengan dibangunnya cagar alam maka sumber daya alam berupa flora dan fauna dapat dilindungi dengan baik oleh negara.', 'uploads/91710.jpg', 1, '2017-01-17 00:07:11', '2017-01-17 04:20:53'),
(40, 'Kebun Raya Bogor', 'Kebun Raya Bogor atau Kebun Botani Bogor adalah sebuah kebun botani besar yang terletak di Kota Bogor, Indonesia. Luasnya mencapai 87 hektaree dan memiliki 15.000 jenis koleksi pohon dan tumbuhan.\r\n\r\nSaat ini Kebun Raya ', 'Kebun Raya Bogor atau Kebun Botani Bogor adalah sebuah kebun botani besar yang terletak di Kota Bogor, Indonesia. Luasnya mencapai 87 hektaree dan memiliki 15.000 jenis koleksi pohon dan tumbuhan.\r\n\r\nSaat ini Kebun Raya Bogor ramai dikunjungi sebagai tempat wisata, terutama hari Sabtu dan Minggu. Di sekitar Kebun Raya Bogor tersebar pusat-pusat keilmuan yaitu Herbarium Bogoriense, Museum Zoologi Bogor, dan PUSTAKA.', 'uploads/96552.jpg', 3, '2017-01-17 00:08:53', '2017-02-02 17:17:42'),
(41, 'Flora Itu ?', 'Plants are grouped into floras based on region (floristic regions), period, special environment, or climate. Regions can be geographically distinct habitats like mountain vs. flatland. Floras can mean plant life of a his', 'Plants are grouped into floras based on region (floristic regions), period, special environment, or climate. Regions can be geographically distinct habitats like mountain vs. flatland. Floras can mean plant life of a historic era as in fossil flora. Lastly, floras may be subdivided by special environments:\r\n\r\nNative flora. The native and indigenous flora of an area.\r\nAgricultural and horticultural flora (garden flora). The plants that are deliberately grown by humans.\r\nWeed flora. Traditionally this classification was applied to plants regarded as undesirable, and studied in efforts to control or eradicate them. Today the designation is less often used as a classification of plant life, since it includes three different types of plants: weedy species, invasive species (that may or may not be weedy), and native and introduced non-weedy species that are agriculturally undesirable. Many native plants previously considered weeds have been shown to be beneficial or even necessary to various ecosystems.', 'uploads/27484.jpg', 0, '2017-02-06 20:30:27', '2017-02-06 20:30:27'),
(42, 'NEver', 'The flora of a particular area or time period can be documented in a publication also known as a "flora" (often capitalized as "Flora" to distinguish the two meanings when they might be confused). Floras may require spec', 'The flora of a particular area or time period can be documented in a publication also known as a "flora" (often capitalized as "Flora" to distinguish the two meanings when they might be confused). Floras may require specialist botanical knowledge to use with any effectiveness. Traditionally they are books, but some are now published on CD-ROM or websites.\r\n\r\nIt is said that the Flora Sinensis by the Polish Jesuit Michał Boym was the first book that used the name "Flora" in this meaning, a book covering the plant world of a region.[6] However, despite its title it covered not only plants, but also some animals of the region.\r\n\r\nA published flora often contains diagnostic keys. Often these are dichotomous keys, which require the user to repeatedly examine a plant, and decide which one of two alternatives given best applies to the plant.', 'uploads/68220.jpg', 0, '2017-02-06 20:31:55', '2017-02-06 20:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Akhmad Dharma Kasman', 'akhmad_dharma@yahoo.com', '$2y$10$3biVk/k8dIyTPvxw5kLbB.1KTCgId/YHGqJWRtL0GP5hosIwK2oGm', 'WzC2WIBqfHAjFIWVLhmES9YIWrEWZI4nB8wmWZcystTdHYcrq6xmyhQaMHQn', '2015-05-08 19:24:30', '2017-01-11 08:28:28'),
(2, 'Administrator', 'admin@admin.com', '$2y$10$nDA8X0fl80Dzz7TRbGWRm.KhlEIgcrLua7l6OGDs00Jsv1DXddGdG', 'qdZVoAMDe8T1jkl0qeNJHM4SMPlyEkliPjZgiAQgcO5GytnEoJaWFbEoWLNC', '2015-05-12 05:26:49', '2017-02-07 00:03:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `posts` ADD FULLTEXT KEY `search` (`title`,`content`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
