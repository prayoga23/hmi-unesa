-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2023 pada 15.57
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_berita_id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `kategori_berita_id`, `judul`, `tanggal_rilis`, `deskripsi`, `gambar`, `created_at`, `updated_at`, `slug`) VALUES
(1, 1, 'Saingi ChatGPT, Huawei Bikin NetGPT', '2023-04-28', 'akjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegfakjgdiuaegfiuaegf', 'foto/berita/1682687943-bg.png', '2023-04-28 06:19:03', '2023-04-28 06:19:03', 'saingi-chatgpt-huawei-bikin-netgpt'),
(2, 1, 'Indonesia Darurat Stunting, PP KAMMI Adakan Webinar Edukasi Pencegahan Stunting', '2023-04-30', 'JAKARTA- Bidang Kesehatan dan Lingkungan PP KAMMI mengadakan webinar KAMMI Health Series #1 pada hari Minggu (16/04) melalui siaran daring (zoom). Webinar ini merupakan agenda perdana dari bidang yang baru saja disahkan oleh Pengurus Pusat Kesatuan Aksi Mahasiswa Muslim Indonesia.\r\n\r\nMengusung tema \"Edukasi Pencegahan Stunting Untuk Mewujudkan Keluarga Muslim yang Berdaya\" diharapkan bisa menjadi motivasi agar mempersiapkan keluarga yang sehat jasmani dan rohani. Sebagai narasumber yaitu Dr. Fajar Firdawati, M.KM (Direktur Bina Pelayanan KB Wilayah Khusus BKKBN) dan Emas Rahayu (Ketua Bidang Perempuan PP KAMMI), mengawali agenda dengan pemaparan materi terlebih dahulu kemudian dilanjutkan dengan tanya jawab.', 'foto/berita/1682831270-d91c723c1928d4f5431fc48c0fcdbef0.jpg', '2023-04-29 22:07:50', '2023-04-29 22:07:50', 'indonesia-darurat-stunting-pp-kammi-adakan-webinar-edukasi-pencegahan-stunting'),
(3, 2, 'Puspom TNI Investigasi Kasus-Kasus Bentrok Oknum TNI dan Polri', '2023-04-30', 'JAKARTA - Puspom TNI tengah menginvestigasi kejadian di Kupang, Nusa Tenggara Timur (NTT) dan Jeneponto (Sulawesi Selatan). \"Untuk kejadian-kejadian di Kupang NTT dan Jeneponto Sulsel sedang diinvestigasi oleh Pom TNI beserta Pom Angkatan dan Divpropam Polri,\" kata Kepala Pusat Penerangan (Kapuspen) TNI Laksda TNI Julius Widjojono di Jakarta, Sabtu (29/4/2023).', 'foto/berita/1682831903-puspom-tni-investigasi-kasus-kasus-bentrok-oknum-tni-dan-polri-KVyW7Hh2IU.jpg', '2023-04-29 22:18:23', '2023-04-29 22:18:23', 'puspom-tni-investigasi-kasus-kasus-bentrok-oknum-tni-dan-polri'),
(4, 2, '7 Fakta Harta Miliarder Rusia Makin Banyak', '2023-04-30', 'JAKARTA - Miliarder Rusia berhasil meningkatkan harta kekayaan mereka hingga dalam setahun terakhir. Mengutip data Forbes edisi Rusia, kekayaan tersebut meroket karena tingginya harga sumber daya alam dan pemulihan dari kerugian besar tepat setelah perang Ukraina dimulai. Okezone merangkum fakta-fakta para Taipan Rusia yang hartanya meningkat, Minggu (30/4/2023):\r\n1. Jumlah Harta kekayaan miliarder Rusia\r\nMiliarder Rusia berhasil meningkatkan harta kekayaan mereka hingga USD152 miliar atau setara Rp2.268 triliun dalam setahun terakhir.\r\n2. Bertambah 22 Orang miliarder Rusia dari tahun lalu\r\nAda 110 konglomerat Rusia yang masuk dalam daftar atau bertambah 22 orang dari tahun lalu. Disebutkan pula bahwa total kekayaan mereka meningkat menjadi USD505 miliar pada tahun ini dari USD353 miliar di 2022.\r\nDaftar konglomerat tersebut seharusnya lebih panjang jika lima miliarder tidak meninggalkan kewarganegaraan Rusia. Taipan tersebut adalah pendiri DST Global Yuri Milner, pendiri Revolut Nikolay Storonsky, pendiri Freedom Finance Timur Turlov, dan salah satu pendiri JetBrains Sergei Dmitriev dan Valentin Kipyatkov.\r\n3. Miliarder Rusia meraup cuan dari usaha pupuk\r\nAndrei Melnichenko meraup cuan dari industri pupuk. Dirinya tercatat menjadi orang terkaya di Rusia dengan perkiraan kekayaan USD25,2 miliar atau lebih dari dua kali lipat dari perkiraan kekayaannya pada tahun lalu.', 'foto/berita/1682832515-7-fakta-harta-miliarder-rusia-makin-banyak-A1yLJ86WV0.png', '2023-04-29 22:28:35', '2023-04-29 22:28:35', '7-fakta-harta-miliarder-rusia-makin-banyak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_galeri_id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `kategori_galeri_id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Beby', 'foto/galeri/1682829057-Cuplikan layar 2023-04-15 212756.png', '2023-04-29 21:30:57', '2023-04-29 21:30:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi', '2023-04-28 06:07:07', '2023-04-28 06:07:07'),
(2, 'Hukum', '2023-04-29 22:08:26', '2023-04-29 22:08:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Kaderisasi', '2023-04-29 21:30:29', '2023-04-29 21:30:29'),
(2, 'Humas', '2023-04-29 21:30:38', '2023-04-29 21:30:38'),
(3, 'Kominfo', '2023-04-29 21:30:44', '2023-04-29 21:30:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_publikasi`
--

CREATE TABLE `kategori_publikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_publikasi`
--

INSERT INTO `kategori_publikasi` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Kaderisasi', NULL, '2023-04-27 06:13:19'),
(2, 'Humas', NULL, NULL),
(3, 'Teknologi', '2023-04-27 05:25:54', '2023-04-27 05:25:54');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_04_14_100847_create_pegawais_table', 2),
(5, '2023_04_23_095816_create_publikasis_table', 3),
(6, '2023_04_27_120311_create_kategori_publikasis_table', 4),
(7, '2023_04_27_125929_update_table_publikasi', 5),
(9, '2023_04_27_130155_add-kategori_id_table_publikasi', 6),
(10, '2023_04_28_120713_create_beritas_table', 7),
(11, '2023_04_28_123704_create_kategori_beritas_table', 7),
(12, '2023_04_28_131349_add-kategori_id_table_berita', 8),
(13, '2023_04_28_131811_update_table_berita', 9),
(17, '2023_04_28_134038_create_tentang_kamis_table', 10),
(18, '2023_04_28_134126_create_galeris_table', 10),
(19, '2023_04_29_171704_create_kategori_galeris_table', 10),
(22, '2023_04_30_050315_update_datatype_deskripsi_berita', 11),
(23, '2023_04_30_050343_update_datatype_deskripsi_publikasi', 11),
(24, '2023_04_30_080936_add_slug_to_berita', 12),
(25, '2023_04_30_081024_add_slug_to_publikasi', 12),
(26, '2023_04_30_081643_set_slug_to_unique_on_berita_table', 13),
(27, '2023_04_30_081654_set_slug_to_unique_on_publikasi_table', 13);

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
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi`
--

CREATE TABLE `publikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_publikasi_id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `publikasi`
--

INSERT INTO `publikasi` (`id`, `kategori_publikasi_id`, `judul`, `tanggal_rilis`, `deskripsi`, `gambar`, `created_at`, `updated_at`, `slug`) VALUES
(1, 1, 'Bandung Berbahagia', '2023-04-26', 'The Cargill Global Scholars 2022 membuka peluang beasiswa bagi mahasiswa S1 untuk mendapatkan bantuan biaya kuliah selama dua tahun. Tak hanya bantuan keuangan, beasiswa ini juga memberikan program pengembangan kepemimpinan dan pendampingan dengan mentor', 'foto/publikasi/1682603512-Cuplikan layar 2023-04-06 135526.png', '2023-04-26 11:45:42', '2023-04-27 06:51:52', 'bandung-berbahagia'),
(2, 1, '\"Mahasiswa S1 Butuh Biaya Kuliah? Beasiswa Cargill Beri Tunjangan Rp 35 Juta\"', '2023-04-26', 'The Cargill Global Scholars 2022 membuka peluang beasiswa bagi mahasiswa S1 untuk mendapatkan bantuan biaya kuliah selama dua tahun. Tak hanya bantuan keuangan, beasiswa ini juga memberikan program pengembangan kepemimpinan dan pendampingan dengan mentor selama dua tahun masa beasiswa. Di akhir program, mahasiswa akan menjadi anggota komunitas alumni Cargill Global Scholars dan memperluas jaringan. Tujuan diadakannya beasiswa ini adalah untuk membangun jaringan global calon pemimpin masa depan yang suatu hari nanti akan memberikan kontribusi penting untuk memajukan bisnis, pertanian, dan ketahanan pangan dunia.', 'foto/publikasi/1682603539-Cuplikan layar 2023-04-15 212756.png', '2023-04-26 11:45:42', '2023-04-27 06:52:37', 'mahasiswa-s1-butuh-biaya-kuliah-beasiswa-cargill-beri-tunjangan-rp-35-juta'),
(4, 1, 'Masa Jabatan Kepala Desa 9 Tahun, Bentuk Kekuasaan yang tak Terbatas Untuk Terjadinya Korupsi dan Kemiskinan', '2023-04-30', 'Pada prinsipnya kekuasaan dari penyelenggara negara memungkinkan terjadinya perbuatan melawan hukum (Onrechtmatige Daad), perbuatan melawan hukum oleh penguasa (Onrechtmatige Overheidsdaad) selaku manifestasi negara secara nyata dalam pelaksanaan tugasnya sebagai penyelenggara negara secara nyata yang kemungkinan bersinggungan dengan wilayah privat terkait hak dan kewajiban warga negara.\r\n\r\n \r\n\r\nDalam hal ini fungsi dari mempelajari ilmu hukum tata negara sangat erat kaitannya dalam hal mengawasi penyelenggara negara sebagai manifestasi negara secara nyata dalam pelaksanaan tugasnya untuk tidak menyimpang, khususnya ketika penyelenggara negara bertindak berdasarkan atas hal yang belum diatur sepenuhnya oleh peraturan perundang-undangan atau dikenal dengan diskresi / kebebasan bertindak freiss emerson agar tidak terjadi penyalahgunaan kewenangan (droit function).\r\n\r\n \r\n\r\nTerkait tuntutan perpanjangan masa jabatan kepala desa menjadi 9 tahun adalah sebuah bentuk konkrit untuk membentuk sebuah pemerintahan kekuasaan yang cukup lama serta memiliki akses tidak terbatas dan luas terhadap wilayah kerjanya. \r\n\r\nKorupsi yang rentan terjadi di desa, menimbulkan kerugian bagi masyarakat desa. \r\n\r\n \r\n\r\nKerugian tersebut diantaranya terdiri atas 4 (empat) hal. Pertama, melanggengkan kemiskinan di desa. Seperti yang diuraikan sebelumnya, bahwa kemiskinan di desa sampai saat ini masih tinggi, yakni 12,81% atau 15,26 juta penduduk desa masih dalam kondisi miskin (Badan Pusat Statistik, 2020). Terlebih apabila dana desa yang dialokasikan untuk peningkatan kesejahteraan masyarakat justru dikorupsi, maka kemiskinan di desa akan semakin meningkat, karena tidak membantu perekomonian masyarakat desa. \r\n\r\n \r\n\r\nSelain itu, menurut Institute for Development of Economics and Finance(INDEF) tidak adanya survey dalam pengalokasian anggaran dana desa sesuai kebutuhan, menyebabkan dana desa tidak memberikan kontribusi positif bagi pengentasan kemiskinan di desa (Bernie, 2018).\r\n\r\nKedua, hilangnya potensi ekonomi di desa. Dana desa yang seyogyanya dapat digunakan untuk membiayai Badan Usaha Milik Des (BUMDes) dan pembangunan infrastruktur desa, yang menyerap tenaga kerja dalam jumlah banyak terancam tidak terlaksana akibat korupsi. Hal lainnya adalah kualitas proyek tidak bertahan lama, karena dana yang seharusnya direalisasikan, dalam pengadaan batang/jasa, justru di mark down dari harga yang sebenarnya. Sehingga nilai ekonomi hasil pengadaan tidak bertahan lama dan tidak efisien, karena kualitas yang rendah.\r\n\r\nKetiga, hancurnya modal swadaya masyarakat. \r\n\r\n \r\n\r\nMasyarakat desa tidak bisa dilepaskan dengan karakteristik masyarakatnya yang gotong-royong dan salin membantu, hal itu merupakan modal  swadaya masyarakat desa (Pawane, 2016). Akan tetapi, karakteristik tersebut terancam hilang dengan adanya korupsi. Penyebabnya karena adanya korupsi berdampak pada kepercayaan masyarakat terhadap elit politik Pemerintahan Desa, bahkan antar masyarakat desa sendiri (Haryanto & Rahmania, 2015). Sehingga karakter masyarakat yang gotong royong terancam hilang di desa akibat adanya korupsi .Keempat, terhambatnya demokratisasi partisipasi desa. \r\n\r\n \r\n\r\nRobert Klitgaard dalam teorinya CDMA Theory menyatakan bahwa penyebab terjadinya korupsikarena besarnya diskresi (kewenangan) dan kemampuan memonopoli, namun kurang akuntabilitas (Kasus et al., 2015). Hal serupa juga dalam korupsi dana desa, Kepala Desa dengan kewenangannya (diskresi) akan memonopoli proses pengelolaan keuangan dana desa, tanpa melakukan akuntabilitas untuk pelibatan partisipasi', 'foto/publikasi/1682829258-453bc6074076a4fd768f60617b439fbe.jpg', '2023-04-29 21:34:18', '2023-04-29 21:34:18', 'masa-jabatan-kepala-desa-9-tahun-bentuk-kekuasaan-yang-tak-terbatas-untuk-terjadinya-korupsi-dan-kemiskinan'),
(5, 1, 'Israel Kembali Melakukan Kekerasan di Masjid Al-Aqsa, PP KAMMI : Seret ke Mahkamah Pidana Internasional', '2023-04-30', 'Pasukan Israel kembali menyerbu kompleks Masjid Al-Aqsa di Yerusalem pada Selasa malam (4/4/2023), yang menyasar Masjid Al-Qibli yang merupakan masjid penting di kompleks Al-Aqsa. Petugas bersenjata berat menyerbu lokasi, melemparkan granat kejut dan menembakkan gas air mata, serta memukuli jamaah dengan pentungan dan senjata anti huru-hara. Puluhan orang dilaporkan terluka dan luka-luka dalam serangan itu, termasuk mengalami memar, patah tulang, dan sesak napas karena menghirup gas air mata.\r\n\r\n \r\n\r\nSekretaris Jenderal KAMMI, Muhammad Rijal Muharram mengatakan, \"KAMMI mengutuk keras serangan dan kekerasan Israel di Masjid Al-Aqsa yang terjadi selama bulan Ramadhan. Kejadian yang berulang ini menunjukkan ketidakberdayaan dunia untuk mengatasi konflik Israel dan Palestina. Di tengah kemajuan teknologi dan ilmu pengetahuan tentu hal ini sebuah kemunduran dan kegagalan peradaban masyarakat modern.\r\n\r\n \r\n\r\nIa juga meminta pemerintah Indonesia, PBB, Organisasi Kerja Sama Islam (OKI), dan dunia internasional untuk melakukan langkah nyata guna mengatasi kekejaman Israel di Palestina. KAMMI juga menyerukan Mahkamah Pidana Internasional untuk mengusut pelanggaran hak asasi manusia atas kekerasan Israel di Masjid Al-Aqsa. Ucap Rijal Muharram, melalui keterangan tertulisnya (6/4) di Jakarta.\r\n\r\n \r\n\r\n \r\n\r\nSementara itu, Ketua Bidang Keummatan Rizky Ramadhan, mengecam keras tindakan Israel di Masjid Al-Aqsa dan menyatakan solidaritas KAMMI dengan Palestina. \"KAMMI selalu berdiri bersama rakyat Palestina dan mengutuk segala bentuk tindakan kekerasan dan diskriminasi yang dilakukan oleh Israel,\" ucapnya.\r\n\r\n \r\n\r\nAksi kekerasan Israel di Masjid Al-Aqsa ini juga telah menimbulkan banyak korban, dengan puluhan jamaah Palestina dilaporkan terluka, beberapa di antaranya mengalami patah tulang dan sesak napas karena menghirup gas air mata. Kondisi tersebut semakin memperkuat tuntutan KAMMI agar PBB dan Pemerintah Indonesia hingga Dunia Internasional melakukan tindakan nyata untuk melindungi rakyat Palestina dari tindakan kekerasan Israel.', 'foto/publikasi/1682829319-6a830002b9ffa88a4303e7e0d4019a1e.jpg', '2023-04-29 21:35:19', '2023-04-29 21:35:19', 'israel-kembali-melakukan-kekerasan-di-masjid-al-aqsa-pp-kammi-seret-ke-mahkamah-pidana-internasional'),
(6, 1, 'PPATK Memblokir Rekening Milik Rafael Alun Trisambodo, PP KAMMI : Audit Juga Seluruh Pejabat Dirjen Pajak dan Kemenkeu', '2023-04-30', 'Pengurus Pusat Kesatuan Aksi Mahasiswa Muslim Indonesia (PP KAMMI) mengapresiasi langkah PPATK yang sudah memblokir lebih dari 40 rekening milik Rafael Alun Trisambodo dan keluarga serta menyampaikan temuan transaksi sampai dengan 500 Miliar.\r\n\r\n\"PP KAMMI mengapresiasi langkah-langkah PPATK untuk terus membuka benang merah dari kejanggalan transaksi pejabat eselon III Dirjen Pajak ini, \" ujar Zaky selaku Ketua Umum  PP KAMMI dalam keterangan tertulisnya, Selasa (7/3/2023) di Jakarta.\r\n\r\nPP KAMMI juga mempertanyakan kinerja Inspektorat Jenderal Kementerian Keuangan Republik Indonesia atas temuan PPATK tersebut.\r\n\r\n\"Kemana Inspektorat? Temuan PPATK menunjukkan lemahnya fungsi audit, evaluasi, maupun pemantauan dari Inspektorat. Apalagi transaksi yang begitu besar sudah terjadi sekitar 4 tahun (2019-2023). Jangan sampai Inspektorat bergerak ketika masalah sudah muncul di publik.\" lanjut Zaky.\r\n\r\nPP KAMMI menilai bahwa audit PPATK jangan berhenti di Rafael saja. Seluruh pejabat Dirjen Pajak atau Kementerian Keuangan untuk di audit seluruh transaksi keuangannya.\r\n\r\n\"Hal ini untuk menjaga kepercayaan publik terhadap Kementerian Keuangan.\" pungkas Zaky.\r\n\r\nSebelumnya PP KAMMI meminta pertanggung jawaban Dirjen Pajak RI untuk mundur dari jabatannya, karena gagal menjaga integritas Ditjen Pajak RI.', 'foto/publikasi/1682829373-b84d26473bfa86915d73611e7fd202ad.jpg', '2023-04-29 21:36:13', '2023-04-29 21:36:13', 'ppatk-memblokir-rekening-milik-rafael-alun-trisambodo-pp-kammi-audit-juga-seluruh-pejabat-dirjen-pajak-dan-kemenkeu'),
(7, 1, 'Putusan PN Jakarta Pusat Tunda Pemilu, KAMMI: Jangan Khianati Konstitusi', '2023-04-30', 'Ketua Umum Pengurus Pusat Kesatuan Aksi Mahasiswa Muslim Indonesia (KAMMI) Zaky Ahmad Riva\'i menanggapi Putusan Pengadilan Negeri Jakarta Pusat atas gugatan Partai Prima yang meminta KPU RI menghentikan tahapan Pemilu 2024 offside\r\n\r\ndan mengancam demokrasi di Indonesia.\r\n\r\n \r\n\r\nPutusan tersebut bukan domain PN, verifikasi peserta Pemilihan Umum adalah kompetensi Bawaslu dan Pengadilan Tata Usaha Negara (PTUN), atau mengenai sengketa hasil di Mahkamah Konstitusi (MK). \r\n\r\n \r\n\r\n\"Implikasi dari putusan itu dapat mengacaukan tahapan Pemilu yang sudah dipersiapkan jauh-jauh hari. Ini menjadi preseden buruk lembaga penegak hukum yang tidak mempertimbangkan putusan tersebut dengan saksama.\" Ucap Zaky.\r\n\r\nZaky juga mengingatkan untuk siapapun pihak jangan membuat kegaduhan politik, apalagi mengkhianati konstitusi.\r\n\r\n \r\n\r\nInformasi yang beredar KPU RI akan melakukan banding atas putusan tersebut. \"Tentunya kita berharap putusan PN Jakpus tersebut dapat dinyatakan batal demi hukum oleh Pengadilan Tinggi DKI Jakarta, jangan sampai kegaduhan tersebut meluas dan dijadikan dalil untuk membenarkan pembajakan dan pengkhianatan terhadap Konsitusi dan demokrasi di Indonesia. Demi menjaga demokrasi, Hakim layak dicopot!\" Tegas Zaky.\r\n\r\n \r\n\r\nKetua Bidang Politik Hukum dan Keamanan Pengurus Pusat KAMMI \r\n\r\nRizki Agus Saputra menerangkan putusan PN Jakpus tersebut tidak dapat dibenarkan dengan dalih Perbuatan Melawan Hukum (PMH) karena putusan tersebut berdampak umum. \"Hukum Perdata membicarakan tentang hak, kepentingan, dan hubungan hukum antar orang perseorangan, sehingga putusan berlaku untuk penggugat dan tergugat yang berperkara, tidak mengikat pihak lain\". \r\n\r\n \r\n\r\nSeharusnya majelis menolak atau menyatakan N.O terhadap gugatan Partai Prima karena bukan kompetensi Pengadilan Negeri. Selain itu, Rizki juga meminta Komisi Yudisial (KY) untuk menindaklanjuti putusan Majelis Hakim PN Jakpus yang kontroversial dan menimbulkan kegaduhan publik. \"KY juga harus turun tangan dan mengevaluasi Majelis Hakim PN Jakpus yang memutus perkara tersebut, karena bertindak diluar kuasa (ultra vires).\" Tutupnya.', 'foto/publikasi/1682829454-7986160faef083652b373a0c74e5b0d2.jpg', '2023-04-29 21:37:34', '2023-04-29 21:37:34', 'putusan-pn-jakarta-pusat-tunda-pemilu-kammi-jangan-khianati-konstitusi'),
(8, 3, 'Mufti Jadi Lulusan Doktor Termuda dan Tercepat UNS, Aktif Publikasi Jurnal Terindeks Scopus', '2023-04-30', 'Dr. Mufti Reza Aulia Putra, S.T., M.T dinyatakan lulus Program Doktor dari Universitas Sebelas Maret ( UNS ) Surakarta sebagai lulusan tercepat dan termuda. Mufti berhasil lulus dengan IPK 4.00 dan berhak menyandang predikat cumlaude . Mufti menjadi lulusan tercepat dan termuda Program Doktor UNS dengan usia 25 tahun 9 bulan ketika lulus. Mufti menjalani kuliah program sarjana hingga doctor di Fakultas Teknik UNS ini pun mengaku bersyukur atas apa yang telah ia raih. Baca juga: Universitas Khairun Olah Makanan Khas Maluku Utara dalam Kemasan Kaleng.', 'foto/publikasi/1682843629-b84d26473bfa86915d73611e7fd202ad.jpg', '2023-04-30 01:33:49', '2023-04-30 01:33:49', 'mufti-jadi-lulusan-doktor-termuda-dan-tercepat-uns-aktif-publikasi-jurnal-terindeks-scopus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kamis`
--

CREATE TABLE `tentang_kamis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Prayoga', 'Nugroho', 'prayoga@gmail.com', NULL, '$2y$10$w.i4Mq9Z/ZI/atZoamOhfOc5pszBsP7s1bnVj4TfRG.QBf3sKNwa2', NULL, '2023-04-14 02:56:07', '2023-04-14 02:56:07'),
(3, 'Prayoga', 'Nugroho', 'prayoga2np@gmail.com', NULL, '$2y$10$cBJeobUZ7s.DIrFxjvqiYOIAPLCl5GoNSt0JDTJmlJQeR6ZSg220a', NULL, '2023-04-19 10:56:22', '2023-04-19 10:56:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `berita_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_publikasi`
--
ALTER TABLE `kategori_publikasi`
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
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publikasi_slug_unique` (`slug`);

--
-- Indeks untuk tabel `tentang_kamis`
--
ALTER TABLE `tentang_kamis`
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
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_publikasi`
--
ALTER TABLE `kategori_publikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tentang_kamis`
--
ALTER TABLE `tentang_kamis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
