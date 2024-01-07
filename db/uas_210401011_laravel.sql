-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 07:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_210401011_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakategori` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `namakategori`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'Laptop kerja', '2024-01-07 10:57:29', '2024-01-07 10:57:29'),
(2, 'Proyektor', 'Infocus', '2024-01-07 10:57:41', '2024-01-07 10:57:41'),
(3, 'Handphone', 'Telepon Seluler', '2024-01-07 10:57:52', '2024-01-07 10:57:52'),
(4, 'Tablet', 'Tablet Protabel', '2024-01-07 11:10:30', '2024-01-07 11:10:30'),
(5, 'Smart Watch', 'Jam Pintar', '2024-01-07 11:12:40', '2024-01-07 11:12:40'),
(6, 'Speaker', 'Speaker', '2024-01-07 11:16:02', '2024-01-07 11:16:02'),
(7, 'Controller', 'Controller', '2024-01-07 11:27:39', '2024-01-07 11:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `mereks`
--

CREATE TABLE `mereks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namamerek` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mereks`
--

INSERT INTO `mereks` (`id`, `namamerek`, `nohp`, `pemilik`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'hp', '23109231', 'Budi', 'Amerika', '2024-01-07 10:51:13', '2024-01-07 10:51:13'),
(2, 'Apple', '348734', 'Dimas', 'Amerika', '2024-01-07 10:54:52', '2024-01-07 10:54:52'),
(3, 'Lenovo', '3434834', 'Asep', 'China', '2024-01-07 10:55:15', '2024-01-07 10:55:15'),
(4, 'Asus', '439349', 'Ucok', 'Pekanbaru', '2024-01-07 10:55:42', '2024-01-07 10:55:42'),
(5, 'Epson', '4329832', 'Ridho', 'Zimbabwe', '2024-01-07 10:56:25', '2024-01-07 10:56:25'),
(6, 'View Sonic', '4307892', 'Dewi', 'Korea', '2024-01-07 10:57:00', '2024-01-07 10:57:00'),
(7, 'Samsung', '23123123', 'LI chon Wei', 'China', '2024-01-07 11:10:16', '2024-01-07 11:10:16'),
(8, 'Xiaomi', '43234', 'Wu Chin Liaw', 'China', '2024-01-07 11:13:27', '2024-01-07 11:13:27'),
(9, 'NYK', '232319', 'Doni', 'Pekanbaru', '2024-01-07 11:15:45', '2024-01-07 11:15:45'),
(10, 'Rexus', '12309', 'Defri', 'Belanda', '2024-01-07 11:27:24', '2024-01-07 11:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_11_15_150055_create_kategoris_table', 1),
(4, '2023_12_07_082102_create_mereks_table', 1),
(5, '2023_12_07_082304_create_produks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_merek` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `judul`, `id_merek`, `id_kategori`, `harga`, `stok`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Laptop Hp 13u8i', 1, 1, 'Rp. 8.900.000', '12', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650354075-64ccb2559d908f42222b598a-hp-pavilion-13-3-fhd-intel-core-i3.jpg', '2024-01-07 10:59:14', '2024-01-07 10:59:14'),
(2, 'Asus Zenphone 5', 4, 3, 'Rp. 4.000.000', '23', 'consectetur adipiscing elit. Nullam sodales euismod nisi, a efficitur orci ullamcorper ac. Nulla facilisi. Duis tristique mauris at libero vehicula consequat. Sed pulvinar velit sit amet sapien tincidunt ullamcorper. Vivamus nec lectus sit amet odio posuere fringilla. Nunc eu tellus ac urna interdum ullamcorper nec a libero. Sed pretium euismod tortor, vitae feugiat quam facilisis eget. Sed convallis convallis velit, vitae bibendum lorem tincidunt vel. Fusce gravida, leo ac auctor placerat, justo justo fermentum mi, id ultrices sapien lorem nec tortor. Sed viverra mi et est tristique, eu eleifend lorem consequat. Integer rhoncus dui vitae leo convallis,', '1704650530009-616a70e07cccc.jpg', '2024-01-07 11:02:10', '2024-01-07 11:02:10'),
(3, 'HP printer 566s', 1, 2, 'Rp. 2.000.000', '13', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650573745-hero-banner-mobile.jpg', '2024-01-07 11:02:53', '2024-01-07 11:02:53'),
(4, 'Iphone 14 Pro MAX', 2, 3, 'Rp. 18.000.000', '23', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650608724-HP-iPhone-14-Pro-Max.jpg', '2024-01-07 11:03:28', '2024-01-07 11:03:28'),
(5, 'Asus Vivobook 15x OLED', 4, 1, 'Rp. 9.090.000', '123', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650646998-index.png', '2024-01-07 11:04:07', '2024-01-07 11:04:07'),
(6, 'Epson K292', 5, 2, 'Rp. 1.200.000', '99', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650676622-L18050-(4).jpg', '2024-01-07 11:04:36', '2024-01-07 11:04:36'),
(7, 'Lenovo IP 2892 Phone 22', 3, 3, 'Rp. 3.400.000', '55', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650762202-lenovo-a7000-6.jpg', '2024-01-07 11:06:02', '2024-01-07 11:06:02'),
(8, 'Lenovo Ideapad 320 14 AST', 3, 1, 'Rp. 4.000.000', '34', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650801348-lenovo-AMD-Ryzen-3-7000-Series.png', '2024-01-07 11:06:41', '2024-01-07 11:06:41'),
(9, 'Macbook M1 Pro', 2, 1, 'Rp. 8.800.000', '74', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650848383-MacBook_Pro_15_inch_(2017)_Touch_Bar.jpg', '2024-01-07 11:07:28', '2024-01-07 11:07:28'),
(10, 'Epson K929278', 5, 2, 'Rp. 6.600.000', '34', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650880869-Printer-All-In-One-yang-Bagus.jpg', '2024-01-07 11:08:00', '2024-01-07 11:08:00'),
(11, 'View Sonic K9329', 6, 2, 'Rp. 2.300.000', '66', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650945972-proyektor.jpeg', '2024-01-07 11:09:05', '2024-01-07 11:09:05'),
(12, 'View Sonic KC2929', 6, 2, 'Rp. 3.398.000', '11', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704650974902-viewsonic-m1-proyektor-portable-hadir-dengan-sokongan-harman-kardon_m_.jpg', '2024-01-07 11:09:34', '2024-01-07 11:09:34'),
(13, 'Samsung Galaxy Tab S6 Lite', 7, 4, 'Rp. 2.300.000', '77', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704651108940-98018_L_1.jpg', '2024-01-07 11:11:48', '2024-01-07 11:11:48'),
(14, 'Samsung Tab S7', 7, 4, 'Rp. 5.666.000', '97', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704651142615-7022bbcd-1acb-44e7-95e6-d8b892d50f36.jpg', '2024-01-07 11:12:22', '2024-01-07 11:12:22'),
(15, 'Xiaomi Mi band 5', 8, 5, 'Rp. 3.430.000', '45', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704651259627-298ffbef-785d-4645-b6d8-9c3a739650b7.png', '2024-01-07 11:14:19', '2024-01-07 11:14:19'),
(16, 'Xiaomi Mi band 6', 8, 5, 'Rp. 5.520.000', '69', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1704651289261-32B87259-FA70-2479-E342-B0A42C8F7B27!800x800!85.jpg', '2024-01-07 11:14:49', '2024-01-07 11:14:49'),
(17, 'NYK K2923', 9, 6, 'Rp. 300.000', '34', 'ullamcorper ac. Nulla facilisi. Duis tristique mauris at libero vehicula consequat. Sed pulvinar velit sit amet sapien tincidunt ullamcorper. Vivamus nec lectus sit amet odio posuere fringilla. Nunc eu tellus ac urna interdum ullamcorper nec a libero. Sed pretium euismod tortor, vitae feugiat quam facilisis eget. Sed convallis convallis velit, vitae bibendum lorem tincidunt vel. Fusce gravida, leo ac auctor placerat, justo justo fermentum mi, id ultrices sapien lorem nec tortor. Sed viverra mi et est tristique, eu eleifend lorem consequat. Integer rhoncus dui vitae leo convallis, vel mattis libero bibendum. Suspendisse potenti. Curabitur posuere justo a justo aliquam, id sodales velit placerat. Sed in ipsum nec lectus hendrerit interdum.', '1704651445519-nyk_nyk_x50_kronos_dual_mode_bluetooth_rgb_speaker_usb_powered_full15_vk5dyhwq.jpg', '2024-01-07 11:17:25', '2024-01-07 11:17:25'),
(18, 'NYK 3249392KSJSG', 9, 6, 'Rp. 500.000', '37', 'ullamcorper ac. Nulla facilisi. Duis tristique mauris at libero vehicula consequat. Sed pulvinar velit sit amet sapien tincidunt ullamcorper. Vivamus nec lectus sit amet odio posuere fringilla. Nunc eu tellus ac urna interdum ullamcorper nec a libero. Sed pretium euismod tortor, vitae feugiat quam facilisis eget. Sed convallis convallis velit, vitae bibendum lorem tincidunt vel. Fusce gravida, leo ac auctor placerat, justo justo fermentum mi, id ultrices sapien lorem nec tortor. Sed viverra mi et est tristique, eu eleifend lorem consequat. Integer rhoncus dui vitae leo convallis, vel mattis libero bibendum. Suspendisse potenti. Curabitur posuere justo a justo aliquam, id sodales velit placerat. Sed in ipsum nec lectus hendrerit interdum.', '1704651472025-TEMPLATE-DESKRIPSI-SIREN1.png', '2024-01-07 11:17:52', '2024-01-07 11:17:52'),
(19, 'Rexus GX300', 10, 7, 'Rp. 289.000', '55', 'Sed pulvinar velit sit amet sapien tincidunt ullamcorper. Vivamus nec lectus sit amet odio posuere fringilla. Nunc eu tellus ac urna interdum ullamcorper nec a libero. Sed pretium euismod tortor, vitae feugiat quam facilisis eget. Sed convallis convallis velit, vitae bibendum lorem tincidunt vel. Fusce gravida, leo ac auctor placerat, justo justo fermentum mi, id ultrices sapien lorem nec tortor. Sed viverra mi et est tristique, eu eleifend lorem consequat. Integer rhoncus dui vitae leo convallis, vel mattis libero bibendum. Suspendisse potenti. Curabitur posuere justo a justo aliquam, id sodales velit placerat. Sed in ipsum nec lectus hendrerit interdum.', '1704652129327-GX300.png', '2024-01-07 11:28:49', '2024-01-07 11:28:49'),
(20, 'Rexus Gy27281', 10, 7, 'Rp. 780.000', '67', 'Sed pulvinar velit sit amet sapien tincidunt ullamcorper. Vivamus nec lectus sit amet odio posuere fringilla. Nunc eu tellus ac urna interdum ullamcorper nec a libero. Sed pretium euismod tortor, vitae feugiat quam facilisis eget. Sed convallis convallis velit, vitae bibendum lorem tincidunt vel. Fusce gravida, leo ac auctor placerat, justo justo fermentum mi, id ultrices sapien lorem nec tortor. Sed viverra mi et est tristique, eu eleifend lorem consequat. Integer rhoncus dui vitae leo convallis, vel mattis libero bibendum. Suspendisse potenti. Curabitur posuere justo a justo aliquam, id sodales velit placerat. Sed in ipsum nec lectus hendrerit interdum.', '1704652159005-d46bd3c6-463c-474c-bc5f-dd6541504fdc.jpg', '2024-01-07 11:29:19', '2024-01-07 11:29:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mereks`
--
ALTER TABLE `mereks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_id_merek_foreign` (`id_merek`),
  ADD KEY `produks_id_kategori_foreign` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mereks`
--
ALTER TABLE `mereks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produks_id_merek_foreign` FOREIGN KEY (`id_merek`) REFERENCES `mereks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
