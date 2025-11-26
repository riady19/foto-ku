-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Nov 2025 pada 08.29
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foto_ku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catagory_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `is_tranding` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `slug`, `image`, `content`, `catagory_id`, `author_id`, `is_tranding`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Semangat ke Sekolah', 'semangat ke sekolah', 'image/01KAWFNXVDW5HQZTVSVYPKBECZ.jpg', '<p>Jalan Dari Dalam Tanah</p>', 3, 1, 'yes', 'draft', '2025-11-23 06:31:46', '2025-11-24 23:09:59'),
(3, 'antara foto dan cerita', 'antara foto dan cerita', 'image/01KAWFVPDJGST86HCJZGCPY9HD.jpg', '<p>ADAKNDKSNDKA ajdkakda kanfkanfkanfa nkdankdjnak</p>', 3, 1, 'yes', 'publish', '2025-11-24 12:02:06', '2025-11-24 22:38:18'),
(4, 'Testing', 'Testing', 'image/01KAWGAMB5QM49P9Z13DQ74JTC.jpg', '<p>Demo Anarkis di Kabupaten Karimun, Provincie Kepri dan batam</p>', 2, 1, 'yes', 'publish', '2025-11-24 19:55:00', '2025-11-24 22:46:24'),
(5, 'COba', 'coba', 'image/01KAWPEV3ACRXBG0TDW915BY5H.jpg', '<p><strong>As well as allowing a static value, the </strong><code>telRegex()</code><strong> method also accepts a function to dynamically calculate it. You can inject </strong></p>', 1, 1, 'yes', 'publish', '2025-11-24 20:21:57', '2025-11-24 22:32:11'),
(6, 'Cerita Dia', 'cerita dia', 'image/01KAWPMHJV7XEV2RN6V6HQ2TAH.jpg', '<p>Images may be uploaded to the editor. They will always be uploaded to a publicly available URL with public storage permissions, since generating temporary file upload URLs is not supported in static content. You may customize where images are uploaded using configuration methods:</p>', 1, 1, 'yes', 'publish', '2025-11-24 22:09:01', '2025-11-25 00:10:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `name`, `occupation`, `avatar`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Riadi', 'owner', 'image/01KAWG34122YVEPPV98W7TPHD1.jpg', 'riadi', '2025-11-23 06:09:13', '2025-11-24 20:14:38'),
(2, 'Dian Anagram', 'Fotografer', 'image/01KAWG3MPYB6Q3F442PEMSJZW9.jpg', 'dian anurgrah', '2025-11-23 06:09:54', '2025-11-24 20:14:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('foto-ku-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1764047387),
('foto-ku-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1764047387;', 1764047387),
('foto-ku-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6', 'i:1;', 1764038507),
('foto-ku-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer', 'i:1764038507;', 1764038507),
('foto-ku-cache-livewire-rate-limiter:9a85c7d25d4828b60e211b83318cc879a9769002', 'i:1;', 1763910218),
('foto-ku-cache-livewire-rate-limiter:9a85c7d25d4828b60e211b83318cc879a9769002:timer', 'i:1763910218;', 1763910218),
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1763904687),
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1763904687;', 1763904687),
('laravel-cache-livewire-rate-limiter:9a85c7d25d4828b60e211b83318cc879a9769002', 'i:2;', 1763903192),
('laravel-cache-livewire-rate-limiter:9a85c7d25d4828b60e211b83318cc879a9769002:timer', 'i:1763903192;', 1763903192);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catagories`
--

INSERT INTO `catagories` (`id`, `nama`, `slug`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Street', 'street', 'image/01KAWFY9GA55JVVD9V7D4983GP.jpg', '2025-11-23 06:06:27', '2025-11-24 20:12:00'),
(2, 'Portrait', 'potrait', '01KARD625V5EFFHXB1GFYZN1R0.jpg', '2025-11-23 06:06:51', '2025-11-23 06:06:51'),
(3, 'Peristiwa', 'peristiwa', '01KARD6ZSH8QKJPXTPXFP5GAX9.jpg', '2025-11-23 06:07:22', '2025-11-23 06:07:22'),
(4, 'Humans', 'humans', '01KARD86PA9HY5SQYWSK13BS2K.png', '2025-11-23 06:08:01', '2025-11-23 06:08:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '0001_01_01_000000_create_users_table', 1),
(14, '0001_01_01_000001_create_cache_table', 1),
(15, '0001_01_01_000002_create_jobs_table', 1),
(16, '2025_11_23_052832_create_catagories_table', 1),
(17, '2025_11_23_075118_create_authors_table', 1),
(18, '2025_11_23_080754_create_artikels_table', 1),
(19, '2025_11_23_154550_add_status_column_to_artikels_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('squb8yyPPmKixq4QvBi0e5ITOCUSPGXzjAxqn73I', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.6 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid1FCMDNBY0Z4TmswaXVlT2pPbHg1MEFyTFUyS21LOTc3U3NCc1F4WCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly9mb3RvLWt1LnRlc3QiO3M6NToicm91dGUiO047fX0=', 1764055396);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'RIadi', 'riadi@gmail.com', NULL, '$2y$12$PMnC25RgbjX0jPOM8lgEkeI//xvoqZzuz833edMSZ0WRhKTNO/j1G', NULL, '2025-11-23 06:05:43', '2025-11-23 06:05:43'),
(2, 'Dian Anugrah', 'dian_ang@gmail.com', NULL, '$2y$12$0YJuRt7fxX3waIffWe.2G.2vVg9oHgaUOXCq71fOR6aQNtxvC5auq', NULL, '2025-11-23 08:02:39', '2025-11-23 08:02:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
