-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 05:50 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpkh`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `content`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration', '<p>Thank you very much. I am not getting any errors which is nice. But I am using&nbsp;<code>ids</code>&nbsp;to check if the user if a moderator that belongs to the subreddit&nbsp;<code>if ($user-&gt;id === $ids)</code>&nbsp;but that doesn&#39;t seem to be working, I am not being able to edit in the subreddits where I am a moderator.&nbsp;&ndash;&nbsp;</p>', 'avatar04.png', 'there-are-many-variations-of-passages-of-lorem-ipsum-available-but-the-majority-have-suffered-alteration', '2017-12-02 08:08:17', '2017-12-02 08:08:17'),
(4, 're-Captcha Laravel 5', '<p>Step by step membuat laravel re-captcha di laravel 5: - Project harus ada - Pada composer.json, tambahkan &quot;anhskohbo/no-captcha&quot;: &quot;2.*&quot; di dalam require, sehingga menjadi : &quot;require&quot;: { &quot;anhskohbo/no-captcha&quot;: &quot;2.*&quot;, }, - Kemudian update composer nya, caranya seperti biasa, buka CMD, masuk ke project kamu, ketikkan composer update. Tunggu sampai proses selesai. - Buka file app.php yang ada di folder config, tambahkan &#39;Anhskohbo\\NoCaptcha\\NoCaptchaServiceProvider&#39;, pada bagian provider, seperti ini : &#39;providers&#39; =&gt; [ &#39;Anhskohbo\\NoCaptcha\\NoCaptchaServiceProvider&#39;, ], - Kunjungi link berikut: https://www.google.com/recaptcha/admin#list Maka akan muncul form Register a sew site. Pada bagian label dan domain, isi saja localhost kalau project kamu di jalankan di local. Lalu klik Register. Setelah itu muncul 2 bagian kanan kiri, yaitu Site Key dan Secret Key. Copy kan kedua code tersebut, lalu paste di project kamu pada bagian .env (biasanya untuk setting database). detailnya seperti ini : NOCAPTCHA_SECRET=6LdchxAUAAAAAK3_6Q52aRcxG4BKuF4q_mgLLMeg (secret_key) NOCAPTCHA_SITEKEY=6LdchxAUAAAAAESgt06ZFxe6UAlJb94XbGuqQs2e (site_key) - Lalu tambahkan di form project kamu yang sekiranya ingin kamu letakkan captcha di dalamnya. Contoh : register.blade.php atau login.blade.php kalau saya, captcha saya letakkan di register.blade.php Tambahkan saja source berikut: &lt;div class=&quot;form-group&quot;&gt; &lt;label class=&quot;col-md-4 control-label&quot;&gt;Confirmation&lt;/label&gt; &lt;div class=&quot;col-md-6&quot;&gt; {!! app(&#39;captcha&#39;)-&gt;display(); !!} &lt;/div&gt; &lt;/div&gt; - Lalu buatlah controller. Disini saya membuat controller dengan nama EnquiryController.php Buat saja via CMD. Masuk ke project kamu, ketikkan php artisan make:controller [nama_controller]. Lalu isikan di controller yang baru saja di buat, dengan source code seperti berikut ini: &lt;?php namespace App\\Http\\Controllers; use Input; use Validator; use Redirect; use Session; class EnquiryController extends Controller { public function index() { $data = Input::all(); $rules = array( &#39;name&#39; =&gt; &#39;required&#39;, &#39;email&#39; =&gt; &#39;required|email&#39;, &#39;password&#39; =&gt; &#39;required&#39;, &#39;password_confirmation&#39; =&gt; &#39;required&#39;, &#39;g-recaptcha-response&#39; =&gt; &#39;required|captcha&#39;, ); $validator = Validator::make($data, $rules); if ($validator-&gt;fails()){ return Redirect::to(&#39;welcome&#39;)-&gt;withInput()-&gt;withErrors($validator); } else{ // Do your stuff. return view(&#39;welcome&#39;); } } } Catatan : nama controller saya EnquiryController. Silahkan kamu sesuaikan dengan controller kamu sendiri. Field-field nya sesuaikan dengan form yang kamu letakkan captcha. Dalam hal ini saya sesuaikan dengan register.blade.php. - Kemudian setting route.php, buka file route.php Berikut konfigurasi route.php saya : Route::get(&#39;register&#39;, function() { return View::make(&#39;auth.register&#39;); }); Route::post(&#39;welcome&#39;, &#39;EnquiryController@index&#39;); Sesuaikan saja... - Terakhir, silahkan jalankan project kamu. Sekian tutorial re-Captcha yang saya bagikan. Jika ada kesalahan, saya mohon maaf. Terimakasih</p>', '78kesembilanbelasx.jpg', 're-captcha-laravel-5', '2017-12-04 06:00:42', '2017-12-04 06:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `isdhs`
--

CREATE TABLE `isdhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_isdh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_isdh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isdhs`
--

INSERT INTO `isdhs` (`id`, `title_isdh`, `file_isdh`, `created_at`, `updated_at`) VALUES
(12, 'askajlkjd', '2.8.pdf', '2017-12-04 09:13:54', '2017-12-04 09:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_artikel` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `name`, `comment`, `id_artikel`, `created_at`, `updated_at`) VALUES
(5, 'raisa', 'This event fires immediately when the show instance method is called.', 2, '2017-12-02 08:36:32', '2017-12-02 08:36:32'),
(10, 'izar', 'jkhkjhdkjahdkjadh', 4, '2017-12-04 08:01:38', '2017-12-04 08:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `m-kontaks`
--

CREATE TABLE `m-kontaks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m-kontaks`
--

INSERT INTO `m-kontaks` (`id`, `name`, `email`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Atul', 'numrotul64@gmail.com', '089693488068', 'hdhdk', '2017-11-30 08:15:12', '2017-11-30 08:15:12'),
(4, 'alan', 'alan@gmail.com', '081234567891', 'saya alan', '2017-12-03 07:52:41', '2017-12-03 07:52:41'),
(5, 'aaa', 'aaa@mail.com', '123', 'kkkk', '2017-12-03 18:13:19', '2017-12-03 18:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `m-organisasis`
--

CREATE TABLE `m-organisasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m-organisasis`
--

INSERT INTO `m-organisasis` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, '', 'Struktur Organisasi.......', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m-peraturans`
--

CREATE TABLE `m-peraturans` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m-peraturans`
--

INSERT INTO `m-peraturans` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(5, 'Pedoman Pinjam Pakai Kawasan Hutan', 'P50 2016 - Pedoman Pinjam Pakai Kawasan Hutan.pdf', '2017-11-29 02:47:42', '2017-11-29 02:47:42'),
(6, 'Perubahan P44 Tentang Pengukuhan KH', 'P62 2013 - Perubahan P44 Tentang Pengukuhan KH.pdf', '2017-11-29 02:48:14', '2017-11-29 02:48:14'),
(7, 'TTG Panitia Tata Batas Kawasan Hutan', 'P93 2016 TTG PANITIA TATA BATAS KAWASAN HUTAN.pdf', '2017-11-29 02:48:51', '2017-11-29 02:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `m-sejarahs`
--

CREATE TABLE `m-sejarahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m-sejarahs`
--

INSERT INTO `m-sejarahs` (`id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p><em><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Balai Pemantapan Kawasan Hutan Wilayah III</strong></em> berlokasi dijalan Achmad Yani Nomor 121 Pontianak, merupakan Unit Balai Pelaksana Teknis dari Direktorat Jenderal Planologi Kehutanan yang ditetapkan Berdasarkan SK Menteri Kehutanan Nomor 6188/Kpts-II/2002 pada tanggal 10 Juni 2002. Awal berdirinya, Balai Pemantapan Kawasan Hutan Wilayah III bernama Balai Inventarisasi dan Perpetaan HUtan Wilayah III Pontianak - BIPHUT (1983-2002) dengan beberapa sub BIPHUT Ketapang. Ketiga sub BIPHUT tersebut sekarang bergabung dengan Dinas Kehutanan.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>saat</strong> ini BPKH <em>Wilayah</em> III Pontianak telah melewati 10 kali pergantian Kepala Balai, dengan seorang Pelaksana Tugas (Plt.) yang mengisi kekosongan jabatan kepala balai yang ke-11.</p>\r\n\r\n<p>2017</p>', '', NULL, '2017-12-03 05:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `m-tuspoksis`
--

CREATE TABLE `m-tuspoksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m-tuspoksis`
--

INSERT INTO `m-tuspoksis` (`id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, '<h3>&nbsp;</h3>\r\n\r\n<hr />\r\n<p>Balai Pemantapan Kawasan Hutan Wilayah III Pontianak (BPKH Wilayah III Pontianak) merupakan Unit Pelaksana Teknis (UPT) di bidang pemantapan kawasan hutan yang berada di bawah Direktorat Jenderal Planologi Kehutanan dan Tata Lingkungan Hidup.<a href=\"#_ftn1\" name=\"_ftnref1\">[1]</a> BPKH Wilayah III Pontianak dipimpin oleh Kepala Balai yang membawahi 1 (satu) Sub Bagian Tata Usaha (Sub Bagian TU) dan 2 (dua) Seksi yakni Seksi Informasi Sumber Daya Hutan dan Seksi Pemolaan Kawasan Hutan (Seksi ISDH dan Seksi PKH). Selain itu pada BPKH Wilayah III Pontianak terdapat Kelompok Jabatan Fungsional yaitu Pengendali Ekosistem Hutan (PEH), Arsiparis, dan Pengelola Pengadaan Barang dan Jasa yang berdasarkan struktur organisasinya bertanggung jawab terhadap Kepala Balai Pemantapan Kawasan Hutan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p><a href=\"#_ftnref1\" name=\"_ftn1\">[1]</a> Berdasarkan Peraturan Presiden Nomor 16 Tahun 2015 Tentang Kementerian Lingkungan Hidup dan Kehutanan, Direktorat Jenderal Planologi Kehutanan berubah menjadi Direktorat Jenderal Planologi Kehutanan dan Tata Lingkungan Hidup</p>\r\n\r\n<hr />\r\n<p>Dasar Hukum keberadaan BPKH Wilayah III Pontianak adalah Peraturan Menteri Kehutanan Republik Indonesia Nomor : P.13/MENHUT-II/2011 Tentang Perubahan Kedua Atas Keputusan Menteri Kehutanan Nomor : 6188/Kpts-II/2002 Tentang Organisasi dan Tata Kerja Balai Pemantapan Kawasan Hutan. Berdasarkan Peraturan Menteri Kehutanan Nomor : P. 13/MENHUT-II/2011 maka tugas pokok BPKH Wilayah III Pontianak adalah melaksanakan pengukuhan kawasan hutan, penyiapan bahan perencanaan kehutanan wilayah, penyiapan data perubahan fungsi serta perubahan status/peruntukan kawasan hutan, penyajian data dan informasi pemanfaatan kawasan hutan, penilaian penggunaan kawasan hutan, dan penyajian data informasi sumberdaya hutan. Dalam melaksanakan tugas tersebut maka BPKH Wilayah III Pontianak menyelenggarakan fungsi sebagai berikut:</p>\r\n\r\n<p>Pelaksanaan identifikasi dan inventarisasi potensi lokasi yang akan ditunjuk sebagai kawasan hutan;</p>\r\n\r\n<p>Pelaksanaan penataan batas dan pemetaan kawasan hutan;</p>\r\n\r\n<hr />\r\n<p>&sup1; Berdasarkan Peraturan Presiden Nomor 16 Tahun 2015 Tentang Kementerian Lingkungan Hidup dan Kehutanan Direktorat Jenderal Planologi Kehutanan berubah menjadi Direktorat Jenderal Planologi Kehutanan dan Tata Lingkungan Hidup.</p>\r\n\r\n<p>Pelaksanaan penilaian perubahan status dan fungsi kawasan hutan;</p>\r\n\r\n<p>Pelaksanaan penilaian penggunaan kawasan hutan;</p>\r\n\r\n<p>Penilaian teknis tata batas areal pemanfaatan hutan, penggunaan kawasan hutan dan perubahan status/ peruntukan kawasan hutan;</p>\r\n\r\n<p>Pelaksanaan inventarisasi hutan skala nasional di wilayah;</p>\r\n\r\n<p>Penyusunan dan penyajian data informasi sumberdaya hutan (SDH) serta neraca sumberdaya hutan (NSDH);</p>\r\n\r\n<p>Pengelolaan sistem informasi geografis dan perpetaan kehutanan;</p>\r\n\r\n<p>Penyiapan dan penyajian data dan informasi perencanaan kehutanan, penunjukan kawasan hutan, penatagunaan kawasan hutan, wilayah pengelolaan hutan, pemanfaatan dan penggunaan kawasan hutan.</p>\r\n\r\n<p>Pelaksanaan urusan tata usaha dan rumah tangga Balai.</p>', '', NULL, '2017-12-04 00:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `m-visimisis`
--

CREATE TABLE `m-visimisis` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m-visimisis`
--

INSERT INTO `m-visimisis` (`id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Visi</strong></p>\r\n\r\n<hr />\r\n<p>&quot;Terwujudnya Perencanaan Makro Bidang Kehutanan dan Pemantapan Kawasan Hutan Kalimantan Barat Untuk Mendukung Pengelolaan Hutan Lestari&quot;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Misi</strong></p>\r\n\r\n<hr />\r\n<p>Mewujudkan perencanaan kawasan hutan yang mantap;</p>\r\n\r\n<p>Mewujudkan kepastian kawasan hutan dan optimalisasi penatagunaan kawasan hutan;</p>\r\n\r\n<p>Mewujudkan kesatuan pengelolaan hutan dan optimalisasipenyiapan areal pemanfaatan hutan;</p>\r\n\r\n<p>Mengembangkan sistem informasi dan pemantauan sumberdaya hutan yang akurat dan terkini;</p>\r\n\r\n<p>Mengendalikan penggunaan kawasan hutan;</p>\r\n\r\n<p>Mengembangkan kelembagaan planologi kehutanan;</p>\r\n\r\n<p>Memantapkan prakondisi pengelolaan kawasan hutan;</p>', '', NULL, '2017-11-27 22:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_03_143330_bikin_tabel_pegawai', 1),
(4, '2017_11_06_072755_create_m-kontaks_table', 1),
(5, '2017_11_06_072943_create_m-organisasis_table', 1),
(6, '2017_11_06_073048_create_m-pemanfaatans_table', 1),
(7, '2017_11_06_073122_create_m-peraturans_table', 1),
(8, '2017_11_06_073135_create_m-ppkhs_table', 1),
(9, '2017_11_06_073148_create_m-sejarahs_table', 1),
(10, '2017_11_06_073221_create_m-tuspoksis_table', 1),
(11, '2017_11_06_073252_create_m-visimisis_table', 1),
(12, '2017_11_06_073318_create_m-wilayahs_table', 1),
(13, '2017_11_07_064505_create_komentars_table', 1),
(14, '2017_11_07_064634_create_artikels_table', 1),
(15, '2017_11_21_102015_create_isdhs_table', 1),
(16, '2017_11_21_102039_create_pkhs_table', 1),
(17, '2017_11_23_035958_create_pkh1s_table', 1),
(18, '2017_11_23_040008_create_pkh2s_table', 1),
(19, '2017_11_23_040021_create_pkh3s_table', 1),
(20, '2017_11_23_040028_create_pkh4s_table', 1),
(21, '2017_11_23_040036_create_pkh5s_table', 1),
(22, '2017_11_23_040043_create_pkh6s_table', 1),
(23, '2017_11_23_040049_create_pkh7s_table', 1),
(24, '2017_11_23_040055_create_pkh8s_table', 1),
(25, '2017_11_23_040102_create_pkh9s_table', 1),
(26, '2017_11_23_040111_create_pkh10s_table', 1),
(27, '2017_11_23_040126_create_isdh1s_table', 1),
(28, '2017_11_23_040133_create_isdh2s_table', 1),
(29, '2017_11_23_040138_create_isdh3s_table', 1),
(30, '2017_11_23_040144_create_isdh4s_table', 1),
(31, '2017_11_23_040208_create_isdh5s_table', 1),
(32, '2017_11_23_120344_create_pkh11s_table', 1),
(33, '2017_12_02_131152_bikin_tabel_artikel', 2),
(34, '2017_12_02_133736_bikin_tabel_artikel', 3),
(35, '2017_12_02_133920_bikin_tabel_komentar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_pegawai`, `nip`, `gol`, `jabatan`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Sulaiman, S.E', '19581112 198203 1 004', '4A', 'Kepala Sub Bagian Tata Usaha', NULL, '2017-11-24 03:56:32', '2017-11-24 04:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `pkhs`
--

CREATE TABLE `pkhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_pkh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pkh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pkhs`
--

INSERT INTO `pkhs` (`id`, `title_pkh`, `file_pkh`, `created_at`, `updated_at`) VALUES
(7, 'DAFTAR KAWASAN HUTAN YANG SUDAH DITETAPKAN DI WILAYAH KERJA BPKH WILAYAH III PONTIANAK SAMPAI DENGAN DESEMBER 2015', '2.3.pdf', '2017-12-03 23:48:20', '2017-12-03 23:48:20'),
(8, 'KEGIATAN ORIENTASI BATAS KAWASAN HUTAN DI WILAYAH KERJA BPKH WILAYAH III PONTIANAK KALIMANTAN BARAT SAMPAI DENGAN DESEMBER 2016', '2.4.pdf', '2017-12-03 23:48:43', '2017-12-03 23:48:43'),
(9, 'KEGIATAN REKONSTRUKSI BATAS KAWASAN HUTAN DI WILAYAH PROVINSI KALIMANTAN BARAT SAMPAI DENGAN DESEMBER 2016', '2.5.pdf', '2017-12-03 23:49:08', '2017-12-03 23:49:08'),
(10, 'DATA PERKEMBANGAN PELEPASAN KAWASAN HUTAN UNTUK KEGIATAN NON KEHUTANAN DI WILAYAH KERJA BPKH WILAYAH III PONTIANAK SAMPAI DENGAN DESEMBER 2016', '2.7.pdf', '2017-12-03 23:49:34', '2017-12-03 23:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Atul', 'atul@gmail.com', '$2y$10$jPvbhkQ8qgy1ovWpSzseoelvpJudEmGVMCfcozP5rTY6wLEhJDAF.', 'Oosj7L2w0OFRJBkHimNkOBw0BiC4KwyoznZc1sd0km3yWHaiDt18iXVLAijU', '2017-11-23 22:49:42', '2017-11-23 22:49:42'),
(2, 'admin', 'admin@gmail.com', '$2y$10$TuTLmVKX8xzp8miGn1Q7be3xHlgfgw8kU/yzrt3yKik2jSOsrjTwO', 'iKZoRb350r4ZeMF6Jsk1HmmZbY5tN3bNtrVf3AQVIQJkFJV06Er51XYHRdeX', '2017-11-24 00:02:58', '2017-11-24 00:02:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isdhs`
--
ALTER TABLE `isdhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar_id_artikel_foreign` (`id_artikel`);

--
-- Indexes for table `m-kontaks`
--
ALTER TABLE `m-kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m-organisasis`
--
ALTER TABLE `m-organisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m-peraturans`
--
ALTER TABLE `m-peraturans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m-sejarahs`
--
ALTER TABLE `m-sejarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m-tuspoksis`
--
ALTER TABLE `m-tuspoksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m-visimisis`
--
ALTER TABLE `m-visimisis`
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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkhs`
--
ALTER TABLE `pkhs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `isdhs`
--
ALTER TABLE `isdhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `m-kontaks`
--
ALTER TABLE `m-kontaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m-organisasis`
--
ALTER TABLE `m-organisasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m-peraturans`
--
ALTER TABLE `m-peraturans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m-sejarahs`
--
ALTER TABLE `m-sejarahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m-tuspoksis`
--
ALTER TABLE `m-tuspoksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m-visimisis`
--
ALTER TABLE `m-visimisis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pkhs`
--
ALTER TABLE `pkhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_id_artikel_foreign` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
