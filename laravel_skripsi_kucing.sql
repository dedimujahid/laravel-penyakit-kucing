-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Agu 2023 pada 15.35
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_skripsi_kucing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_publikasi` date NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `created_at`, `updated_at`, `judul`, `penulis`, `konten`, `tanggal_publikasi`, `gambar`) VALUES
(1, '2023-08-02 03:09:54', '2023-08-02 03:26:22', 'Penyebab Kucing Muntah', 'Borjuis', 'xsxanjbcwo\r\nmdmnc', '2023-08-02', '/storage/gambar_artikel/FoVkd4qnmMF01q8chqoB2vUPwbyRiwke33nqCqM7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnoses`
--

CREATE TABLE `diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gejala_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_deteksi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `diagnoses`
--

INSERT INTO `diagnoses` (`id`, `cat_name`, `age`, `gejala_ids`, `hasil_deteksi`, `created_at`, `updated_at`) VALUES
(1, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:27:49', '2023-07-29 08:27:49'),
(2, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:35:20', '2023-07-29 08:35:20'),
(3, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:38:01', '2023-07-29 08:38:01'),
(4, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:38:05', '2023-07-29 08:38:05'),
(5, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:38:49', '2023-07-29 08:38:49'),
(6, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:43:05', '2023-07-29 08:43:05'),
(7, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:43:07', '2023-07-29 08:43:07'),
(8, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:43:24', '2023-07-29 08:43:24'),
(9, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:43:31', '2023-07-29 08:43:31'),
(10, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:45:46', '2023-07-29 08:45:46'),
(11, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:45:49', '2023-07-29 08:45:49'),
(12, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:45:59', '2023-07-29 08:45:59'),
(13, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:51:17', '2023-07-29 08:51:17'),
(14, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:51:25', '2023-07-29 08:51:25'),
(15, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:51:30', '2023-07-29 08:51:30'),
(16, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:51:31', '2023-07-29 08:51:31'),
(17, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:51:33', '2023-07-29 08:51:33'),
(18, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:51:34', '2023-07-29 08:51:34'),
(19, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:51:34', '2023-07-29 08:51:34'),
(20, 'garong', 9, 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Gejala yang dipilih:', '2023-07-29 08:51:35', '2023-07-29 08:51:35'),
(21, 'Nama Kucing', 12, '1', 'Gejala yang dipilih: Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', '2023-07-30 12:32:32', '2023-07-30 12:32:32'),
(22, 'Nama Kucing', 12, '14', 'Gejala yang dipilih: Batuk, Napas serak atau dispnea, Asma, Muntah, Penurunan berat badan, Kurang nafsu makan', '2023-07-30 12:33:19', '2023-07-30 12:33:19'),
(23, 'Nama Kucing', 12, '3', 'Gejala yang dipilih: Bersin, Peyumbatan, Batuk, Tersedak, Demam, Depresi, Pernapasan mulut terbuka', '2023-07-30 12:34:30', '2023-07-30 12:34:30'),
(24, 'Nama Kucing', 12, '14', 'Gejala yang dipilih: Batuk, Napas serak atau dispnea, Asma, Muntah, Penurunan berat badan, Kurang nafsu makan', '2023-07-30 12:44:34', '2023-07-30 12:44:34'),
(25, 'Nama Kucing', 12, '14', 'Gejala yang dipilih: Batuk, Napas serak atau dispnea, Asma, Muntah, Penurunan berat badan, Kurang nafsu makan', '2023-07-30 12:44:51', '2023-07-30 12:44:51'),
(26, 'Nama Kucing', 12, '14', 'Gejala yang dipilih: Batuk, Napas serak atau dispnea, Asma, Muntah, Penurunan berat badan, Kurang nafsu makan', '2023-07-30 12:53:28', '2023-07-30 12:53:28'),
(27, 'Nama Kucing', 12, '14', 'Gejala yang dipilih: Batuk, Napas serak atau dispnea, Asma, Muntah, Penurunan berat badan, Kurang nafsu makan', '2023-07-30 12:54:55', '2023-07-30 12:54:55'),
(28, 'Nama Kucing', 12, '2', 'Gejala yang dipilih: Mengosok mata berlebihan, Mata berair, Mata kemerahan', '2023-07-30 12:55:10', '2023-07-30 12:55:10'),
(29, 'Nama Kucing', 12, '7', 'Gejala yang dipilih: Kemerahan pada daun telinga, Saluran telinga tertutup sebagian, Telinga membengkak, Adanya kotoran dalam saluran telinga, Sering menggelengkan kepala, Mengosok telinga berlebihan', '2023-07-30 12:58:14', '2023-07-30 12:58:14'),
(30, 'Nama Kucing', 12, '7', 'Gejala yang dipilih: Kemerahan pada daun telinga, Saluran telinga tertutup sebagian, Telinga membengkak, Adanya kotoran dalam saluran telinga, Sering menggelengkan kepala, Mengosok telinga berlebihan', '2023-07-30 13:07:36', '2023-07-30 13:07:36'),
(31, 'Nama Kucing', 12, '7', 'Gejala yang dipilih: Kemerahan pada daun telinga, Saluran telinga tertutup sebagian, Telinga membengkak, Adanya kotoran dalam saluran telinga, Sering menggelengkan kepala, Mengosok telinga berlebihan', '2023-07-30 13:11:48', '2023-07-30 13:11:48'),
(32, 'Nama Kucing', 12, '7', 'Gejala yang dipilih: Kemerahan pada daun telinga, Saluran telinga tertutup sebagian, Telinga membengkak, Adanya kotoran dalam saluran telinga, Sering menggelengkan kepala, Mengosok telinga berlebihan', '2023-07-30 13:12:52', '2023-07-30 13:12:52'),
(33, 'Nama Kucing', 12, '7', 'Gejala yang dipilih: Kemerahan pada daun telinga, Saluran telinga tertutup sebagian, Telinga membengkak, Adanya kotoran dalam saluran telinga, Sering menggelengkan kepala, Mengosok telinga berlebihan', '2023-07-30 13:14:41', '2023-07-30 13:14:41'),
(34, 'Nama Kucing', 12, '16', 'Gejala yang dipilih: Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', '2023-07-30 13:29:27', '2023-07-30 13:29:27');

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
-- Struktur dari tabel `gejala_kucing`
--

CREATE TABLE `gejala_kucing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanganan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala_kucing`
--

INSERT INTO `gejala_kucing` (`id`, `nama_penyakit`, `gejala`, `penanganan`, `created_at`, `updated_at`) VALUES
(1, 'Kanker', 'Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.', NULL, NULL),
(2, 'Iritasi mata ', 'Mengosok mata berlebihan, Mata berair, Mata kemerahan', 'Penyakit mata pada kucing ini umumnya mudah ditangani dengan cara membilasmata kucing dengan larutan pencuci mata hingga dia merasa cukup nyaman. Namun, jika kondisi iritasi mata tidak membaik, segera bawa kucing ke dokter hewan untuk mendapatkan pemeriksaan dan penanganan yang tepat.', NULL, NULL),
(3, 'Infeksi saluran pernapasan atas (ISPA)', 'Bersin, Peyumbatan, Batuk, Tersedak, Demam, Depresi, Pernapasan mulut terbuka', 'Jika kucing anda terinfeksi, penyakit yang dialami kucing tersebut dapat menjadi pembawa seumur hidup dan selalu menularkan infeksi ini ke kucing lain. Pemilik kucing dapat mencegah hal ini dengan menjaga kucing mereka dengan kunjungan dokter hewan dan melakukan vaksinasi setiap tahun. Karena penyakit ini hanya menular antara kucing, lakukan isolasi pada kucing bila memungkinkan dan batasi waktunya diluar rumah.', NULL, NULL),
(4, 'Diabetes', 'Konsumsi air yang berlebihan, Dehidrasi, Peningkatan buang air kecil, Infeksi saluran kemih, Perilaku lesu', 'Mencegah diabetes pada kucing bisa dilakukan dengan melakukan diet rendah karbohidrat secara teratur. Dengan mengontrol kadar gula yang masuk kedalam tubuh kucing, akan sangat membantunya untuk membuatnya agar tidak terkena panyakit diabetes.', NULL, NULL),
(5, 'Cacingan', 'Perut membesar dan bagian tubuh lainya kurus, Nafsu makan berkurang, Penurunan berat badan, Bulu terasa kasar,Bulu terlihat kusam, Bulu rontok, Diare, Adanya cacing pada kotoran kucing, Muntah, Lesu,Dehidrasi, Menyeret pantat ke tanah ', 'Salah satu cara paling umum yang bisa dilakukan untuk mengobati kucing cacingan adalah dengan memberikan obat cacing khusus kucing. Jika gejala semakin parah dan kondisi tidak membaik, segera bawa kucing ke dokter hewan untuk mendapatkan pemeriksaan dan penanganan yang tepat.', NULL, NULL),
(6, 'Ulkus kornea', 'Bagian kornea mata tampak keruh, Mata kemerahan, Mata berair, Sering menyipitkan mata', 'Kondisi ulkus kornea ringan dapat disembuhkan dengan pengobatan yang tepat menggunakan obat tetes atau salep antibiotik yang direkomendasikan oleh dokter hewan. Sementara pada ulkus kornea yang cukup dalam, perlu penanganan melalui pembedahan. Kalau tidak ditangani dengan tepat, sakit mata kucing ini bisa menyebabkan kebutaan dan kerusakan parmanen.', NULL, NULL),
(7, 'Radang telinga ', 'Kemerahan pada daun telinga, Saluran telinga tertutup sebagian, Telinga membengkak, Adanya kotoran dalam saluran telinga, Sering menggelengkan kepala, Mengosok telinga berlebihan ', 'Radang telinga dapat diobati menggunakan obat tetes yang mengandung antibiotik selama 7-14 hari. Jika radang tidak kunjung sembuh dan semakin memburuk segera bawa kucing anda ke dokter hewan agar mendapat penanganan lebih lanjut.', NULL, NULL),
(8, 'Penyakit kutu ', 'Menggaruk dan menjilat tubuh berlebihan, Bulu rontok, Gelisah, Kulit merah, Muncul benjolan, Muncul bintik-bintik kecil ditubuh ', 'Membasmi kutu sebanyak mungkin dari kucing anda dengan menyisir dan memandikan. Setelah sebagian besar kutu hilang, anda dapat mencegah infestasi kutu lebih lanjut dengan menggunakan produk pembasmi kutu.', NULL, NULL),
(9, 'Keracunan ', 'Keluar air liur dengan jumlah banyak dan terus menerus, Mual muntah dan diare, Lidah dan gusi membiru, Kesulitan bernapas, Tubuh gemetar, Demam, Sensitif akan sentuhan, Kejang-kejang', 'Bila mencurigakan ada racun yang menempel pada bulu kucing atau cakar kucing. Usahakan agar hewan tersebut tidak menjilati badannya. Atau segerah menghubungi dokter hewan untuk meminta saran mengenai cara yang tepat untuk menangani kucing yang keracunan tersebut.', NULL, NULL),
(10, 'Interaksi saluran kemih', 'Buang air kecil di sekeliling rumah, Kucing kesulitan buang air kecing pada kotaknya, Mengejan dan berusaha untuk kincing tapi tidak mengeluarkan   urine, Ada darah saat buang air kecil , Sering menjilati bagian yang sakit , Terlihat lesuh dan malas makan , Muncul mau menyengat pada urine', 'Mengubah beberapa aspek dari kebiasaan kucing untuk membantu menjaga kesehatan kemihnya. Dan melakukan program penurunan berat badan untuk kucing serta meningkatkan kegiatan pada kucing.', NULL, NULL),
(11, 'Gangguan pencernaan ', 'Regurgitasi atau muntah, Bau mulut, Diare atau sembelit, Hilangnya kesulitan makan, Penurunan berat badan dan nyeri pada perut ', 'Berikan labu dengan bentuk mirip dengan buah pir bisa diberikan untuk mengatasi gangguan pencernaan seperti sembelit atau konstipasi pada kucing, memberikan makanan seimbang pada kucing untukk mengurangi ciri-ciri kucing stres karena sakit, dan berikan air dalam jumlah yang cukup untuk mengatasi gangguan pencernaan kucing seperti susah buang air kecil.', NULL, NULL),
(12, 'Penyakit ginjal ', 'Meningkatnya frekuensi buang air kecil, Dehidrasi atau kucing selalu merasakan haus dan sering minum, Penurunan nafsu makan, Masalah pencernaan', 'Berikan nutrisi yang tepat pada kucing untuk dapat membantu mengurangi risiko penyakit ginjal, dan berikan makanan yang diformulasikan secara khusus bagi kesehatan ginjal. ', NULL, NULL),
(13, 'Penyakit jamur ', 'Kulit menebal, Timbulnya lesi yang terjadi pada daerah kulit, Kurap kulit, Bulu rontok', 'Mengunakan obat jamur yang dikombinasikan dengan obat lain seperti salep dan krim. Apabila jamur hanya menyerang beberapa bagian pada kulit kucing maka yang perlu dilakukan ialah mencukur bulu kucing pada area yang terinfeksi atau mencukur seluruh bulu kucing yang berbulu lebat atau panjang.', NULL, NULL),
(14, 'Penyakit heartworm ', 'Batuk, Napas serak atau dispnea, Asma, Muntah, Penurunan berat badan, Kurang nafsu makan', 'Mengambil sinar-x dada untuk mencari tanda-tanda penyakit jantung atau kerusahkan paru-paru dan melakukan tes darah untuk mencari masalah hati atau ginjal yang dapat menghambat kemampuan kucing untuk membersihkan infeksi dari tubuh.  ', NULL, NULL),
(15, 'Penyakit diare ', 'Infeksi bakteri pada usus, Infeksi virus, Keracunan makanan, Infeksi jamur atau parasit, Perubahan pola makan, Pankreatitis Penyakit pada saluran cerna, Penyakit hati', 'Mengatur pola makan, berikan makanan kucing dalam porsi kecil, tapi lebih sering. Dan jangan biarkan kucing sampai kelaparan atau ganti pakan dengan perlahan, berikan pakan yang mudah dicerna, berikan minuman dan larutan elektrolit, berikan obat anti diare dan pertimbangkan probiotik. ', NULL, NULL),
(16, 'Flu / pilek ', 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung', 'Berikan obat-obatan seperti antibiotik lebih bersifat mencegah infeksi sekunder yang disebabkan oleh bakteri atau memberikan obat-obatan lain biasanya bertujuan untuk mengurangi gejala flu seperti menurunkan panas, melegakan pernafasan dan menghilangkan lendir saluran pernapasan yang berlebihan. Penyakit flu yang dialami kucing juga bisa dengan sendirinya sembuh dalam waktu 2-3 minggu. Dan bisa temui dokter hewan bila gejala penyakit ini terjadi pada kucing.', NULL, NULL);

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
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2023_07_28_191216_create_gejala_kucing_table', 1),
(46, '2023_07_28_224820_create_diagnoses_table', 2),
(47, '2023_07_29_075621_create_artikels_table', 2),
(51, '2023_07_30_190214_create_riwayat_konsultasis_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_konsultasis`
--

CREATE TABLE `riwayat_konsultasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gejala_ids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_deteksi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penanganan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `riwayat_konsultasis`
--

INSERT INTO `riwayat_konsultasis` (`id`, `cat_name`, `age`, `gejala_ids`, `hasil_deteksi`, `nama_penyakit`, `penanganan`, `created_at`, `updated_at`) VALUES
(1, 'Anggora', 45, '2', 'Gejala yang dipilih: Mengosok mata berlebihan, Mata berair, Mata kemerahan', 'Iritasi mata ', 'Penyakit mata pada kucing ini umumnya mudah ditangani dengan cara membilasmata kucing dengan larutan pencuci mata hingga dia merasa cukup nyaman. Namun, jika kondisi iritasi mata tidak membaik, segera bawa kucing ke dokter hewan untuk mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-07-31 07:21:04', '2023-07-31 07:21:04'),
(2, 'garong', 99, '3', 'Gejala yang dipilih: Bersin, Peyumbatan, Batuk, Tersedak, Demam, Depresi, Pernapasan mulut terbuka', 'Infeksi saluran pernapasan atas (ISPA)', 'Jika kucing anda terinfeksi, penyakit yang dialami kucing tersebut dapat menjadi pembawa seumur hidup dan selalu menularkan infeksi ini ke kucing lain. Pemilik kucing dapat mencegah hal ini dengan menjaga kucing mereka dengan kunjungan dokter hewan dan melakukan vaksinasi setiap tahun. Karena penyakit ini hanya menular antara kucing, lakukan isolasi pada kucing bila memungkinkan dan batasi waktunya diluar rumah.', '2023-07-31 07:26:04', '2023-07-31 07:26:04'),
(3, 'kucinggarong', 98, '1', 'Gejala yang dipilih: Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', 'Kanker', 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-07-31 07:38:14', '2023-07-31 07:38:14'),
(4, 'kucinggarong', 98, '1', 'Gejala yang dipilih: Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', 'Kanker', 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-07-31 07:54:45', '2023-07-31 07:54:45'),
(5, 'kucinggarong', 98, '1', 'Gejala yang dipilih: Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', 'Kanker', 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-07-31 07:55:09', '2023-07-31 07:55:09'),
(6, 'kucinggarong', 98, '1', 'Gejala yang dipilih: Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', 'Kanker', 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-07-31 07:55:44', '2023-07-31 07:55:44'),
(7, 'kucinggarong', 98, '1', 'Gejala yang dipilih: Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', 'Kanker', 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-07-31 07:55:57', '2023-07-31 07:55:57'),
(8, 'kucinggarong', 98, '1', 'Gejala yang dipilih: Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', 'Kanker', 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-07-31 07:56:18', '2023-07-31 07:56:18'),
(9, 'kucinggarong', 98, '1', 'Gejala yang dipilih: Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan', 'Kanker', 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-07-31 07:56:45', '2023-07-31 07:56:45'),
(10, 'paris', 55, '10', 'Gejala yang dipilih: Buang air kecil di sekeliling rumah, Kucing kesulitan buang air kecing pada kotaknya, Mengejan dan berusaha untuk kincing tapi tidak mengeluarkan   urine, Ada darah saat buang air kecil , Sering menjilati bagian yang sakit , Terlihat lesuh dan malas makan , Muncul mau menyengat pada urine', 'Interaksi saluran kemih', 'Mengubah beberapa aspek dari kebiasaan kucing untuk membantu menjaga kesehatan kemihnya. Dan melakukan program penurunan berat badan untuk kucing serta meningkatkan kegiatan pada kucing.', '2023-07-31 09:03:38', '2023-07-31 09:03:38'),
(11, 'paris', 99, '5', 'Gejala yang dipilih: Perut membesar dan bagian tubuh lainya kurus, Nafsu makan berkurang, Penurunan berat badan, Bulu terasa kasar,Bulu terlihat kusam, Bulu rontok, Diare, Adanya cacing pada kotoran kucing, Muntah, Lesu,Dehidrasi, Menyeret pantat ke tanah', 'Cacingan', 'Salah satu cara paling umum yang bisa dilakukan untuk mengobati kucing cacingan adalah dengan memberikan obat cacing khusus kucing. Jika gejala semakin parah dan kondisi tidak membaik, segera bawa kucing ke dokter hewan untuk mendapatkan pemeriksaan dan penanganan yang tepat.', '2023-08-03 05:59:51', '2023-08-03 05:59:51');

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
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Dedi Mujahidin', 'dedi.mujahidin00@gmail.com', NULL, '$2y$10$lfYeOyNXpyAP7vtEl3rxTunQn1HH7Vsna3ZBABsPkOXq3Z7NY55ei', 'admin', NULL, '2023-07-29 05:07:08', '2023-07-29 05:07:08'),
(3, 'Fulan', 'fulan@gmail.com', NULL, '$2y$10$05UkuthMWSIY7/Tq.2OLH.gbmoxOfTtwirPH7M5WLaeqycFwRM55e', 'user', NULL, '2023-07-29 13:37:30', '2023-07-29 13:37:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gejala_kucing`
--
ALTER TABLE `gejala_kucing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `riwayat_konsultasis`
--
ALTER TABLE `riwayat_konsultasis`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gejala_kucing`
--
ALTER TABLE `gejala_kucing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat_konsultasis`
--
ALTER TABLE `riwayat_konsultasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
