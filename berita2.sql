-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 03:12 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita2`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(10) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(120) NOT NULL,
  `isi` text NOT NULL,
  `keyword` text NOT NULL,
  `username` varchar(64) NOT NULL,
  `tanggal` varchar(64) NOT NULL,
  `viewers` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `gambar`, `isi`, `keyword`, `username`, `tanggal`, `viewers`) VALUES
(19, 1, 'ABC', 'fae0097c449bf7996916b127bc404030.jpg', '<p>ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC ABC&nbsp;</p>', 'a, b, c', 'admin', '12 Apr 2017', 22),
(20, 1, 'Doa untuk Novel yang ''Dibunuh Berkali-kali''', '2dc31dc8c8a643dcced9cd0c1b7cd3fd.jpg', '<p><strong>Jakarta,&nbsp;CNN Indonesia&nbsp;</strong>-- Ratusan pegawai Komisi Pemberantasan Korupsi (KPK) berbaur di pelataran markas antirasuah. Mereka tak tersekat jabatan. Mulai dari pejabat yang biasa bekerja di lobi Gedung KPK hingga pejabat level atas, berkumpul bersama.<br /><br />Tujuan mereka satu: mendoakan kesembuhan penyidik senior Novel Baswedan yang disiram air keras oleh orang tak dikenal pada Selasa subuh (11/2).&nbsp;<br /><br />Novel adalah satu dari pendekar antikorupsi yang coba ''dibunuh berkali-kali''. Teror air keras ke Novel, merupakan rangkaian percobaaan ''pembunuhan'' yang sudah dilancarkan sejak beberapa tahun silam.</p>\r\n<p>&nbsp;</p>\r\n<p>Novel dikriminalisasi saat mengusut kasus dugaan korupsi Simulator SIM di Korlantas Polri tahun 2012. Dia dijadikan tersangka dalam kasus dugaan penganiayaan di Bengkulu 2004.<br /><br />Tak sampai kriminalisasi, waktu memimpin penangkapan Bupati Buol, Amran Batalipu pada bulan Juni 2012, mobil yang ditumpangi Novel Baswedan diserang loyalis Amran dan ditabrak dengan mobil lainnya.<br /><br />Teror terhadap Novel terus berdatangan, mengiringi kiprahnya memberantas korupsi di negeri ini. Dia kerap dibuntuti orang tak dikenal, baik menuju atau pulang kantor. Yang terbaru, air keras menghampiri wajah Novel.<br /><br />Akibat siraman air keras, Novel mesti mendapat perawatan sampai ke negeri seberang. Dokter menyebut penglihatan Novel masih kabur akibat terpapar air keras, pandangan matanya masih di bawah 50 persen.</p>\r\n<p>&nbsp;</p>\r\n<p>Novel diketahui memilih menanggalkan seragam coklat untuk bergabung sebagai bagian dari lembaga yang baru berdiri pada 2004. Dia kini menjadi penyidik tetap KPK dan mengetuai tim satgas untuk kasus korupsi e-KTP.<br /><br />Doa sore ini dipanjatkan untuk kesembuhan sang pendekar antikorupsi. "Semoga Novel cepat pulih dan bisa kembali bersama di sini," kata pegawai KPK yang memimpin doa, Kamis (13/4).&nbsp;<br /><br />"Siapa kita?" teriak Direktur Gratifikasi KPK, Giri Supardiono. "KPK!" jawab ratusan pegawai KPK kompak.&nbsp;<br /><br />"Siapa Novel?" teriak Giri lagi. "KPK!" timpal ratusan pegawai yang berbaur.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Di sela doa, Wakil Ketua I Wadah Pegawai KPK Heri Nurudin meminta Presiden Joko Widodo membongkar teror kepada KPK dan membentuk tim pencari fakta yang melibatkan pihak internal dan eksternal.<br /><br />&ldquo;Kami menyatakan bahwa kejadian Novel tidak menyurutkan tugas kami untuk memberantas korupsi. Semoga teror sampai di sini saja dan tidak ada teror berikutnya,&rdquo; kata Heri.<br /><br />Novel kini terbaring di ranjang rumah sakit di Singapura. Penglihatan Novel masih belum terang benderang. Namun, keteguhannya memberantas korupsi sudah dirinya wakafkan untuk negeri ini.&nbsp;<br /><br />Pemerintah sudah memastikan bahwa biaya pengobatan Novel di Singapura ditanggung negara. Pemerintah pun meminta agar Novel dicarikan pengobatan yang terbaik.&nbsp;</p>', 'Novel, Baswedan, Doa', 'admin', '14 Apr 2017', 29),
(21, 1, 'XL Pamer Unduh Video 4K dalam 3 Detik', '3ae2bfc620dd39ff29445cb7eef7f1e6.jpg', '<p><strong>Jakarta,&nbsp;CNN Indonesia&nbsp;</strong>-- Implementasi 5G yang rencananya akan dilakukan pada tahun 2020 mendorong XL Axiata untuk mulai melakukan demo ujicoba jaringan di luar ruangan. Dalam ujicoba kali ini, XL menggandeng Ericsson sebagai penyedia infrastruktur.<br /><br />Dalam ujicoba pertamanya,&nbsp;Direktur/ Chief Management Service Officer XL Axiata Yessie D Yosetya menegaskan pihaknya mempersiapkan lima hal utama yakni spektrum, konvergensi core, transport fiber optik, dan ekosistem pendukung. Lantas apa yang menjadikan 5G penting bagi pengguna jaringan di Indonesia?</p>\r\n<p>\\r\\n</p>\r\n<p>Berbeda dengan teknologi-teknologi sebelumnya, 5G menawarkan kecepatan akses hingga 20gbps dengan latensi (keterlambatan) kurang dari 1 milidetik. Selain itu dari segi infrastruktur juga lebih hemat baterai, serta mampu melayani lebih banyak hingga bisa mencapai 2000 pengguna.<br /><br />\\"Secara infrastruktur 5G lebih efisien dibanding generasi sebelumnya, untuk unggah data berkapasitas besar hanya butuh waktu hitungan milidetik. Kalau diibaratkan masih kalah cepat dengan kemampuan mata mengedip,\\" imbuh Yessie disela demo di kantor XL di kawasan Mega Kuningan, Jakarta, Rabu (12/4).<br /><br />Lebih lanjut Yessie membandingkan 5G dengan teknologi sebelumnya untuk unduh video 4K. Teknologi 5G hanya membutuhkan waktu 33 detik, jauh lebih cepat ketimbang 4G yang menghabiskan waktu 13 menit atau 3G hingga 22 jam.<br /><br />Dalam ujicoba luar ruangan menggunakan&nbsp;base station 5G, sistem pemancar radio berbasis teknologi 5G dengan teknologi Antenna Integrated Radio, user equipment 5G, dan sarana pendukung lainnya, data sebesar 200MB bisa diunduh dalam waktu 0,28 detik. Sementara kecepatan akses tertinggi berkisar antara 3,03Gbps hingga 5,7Gbps.<br /><br />\\"Semakin jauh jarak antena dengan pemancar radio, maka kecepatannya akan berubah. Jarak memang memengaruhi kecepatan akses di satu area dan juga berapa banyak kbase station yang menjangkaunya,\\" ungkap Yessie.<br /><br />Senada dengan yang diutarakan Yessie, Presiden Direktur Ericsson Indonesia dan Timor Leste Thomas Jul menegaskan jaringan 5G penting untuk melanjutkan inovasi ke arah yang lebih baik. Meski tidak mengubah kehidupan secara seutuhnya, namun kemunculan 5G disebutnya mampu memperkuat ekosistem yang saat ini mulai terbentuk.<br /><br />\\"Kita bisa lihat implementasi Internet of Things (IoT) saat ini kian massif, ketersediaan 5G arahnya akan lebih ke industrial bukan lagi pada aspen konsumen (end-user),\\" imbuhnya di kesempatan yang sama.<br /><br />Kemampuan akses yang lebih cepat disebut Jul membuat 5G membutuhkan spektrum lebih lebar dibanding jaringan 4G, 3G, ataupun 2G. Setidaknya dibutuhkan 300 GHz spektrum untuk bisa menggelar jaringan 5G.<br /><br />Ketika disinggung mengenai rencana implementasi 5G di Indonesia, baik Yessie maupun Jul sepakat&nbsp;hal itu masih harus menunggu kesiapan regulasi pemerintah dan penyetaraan teknologi serta ekosistem secara teknis. Kesemua hal itu diprediksi baru akan selesai sekitar tahun 2018 - 2020.&nbsp;</p>', '5G, XL, Axiata', 'admin', '14 Apr 2017', 183),
(22, 1, 'Telkom Bakal Buka Blokir Netflix?', '2c206a77bc9c138efb280fa60ed5ec34.jpg', '<p><strong>Jakarta,&nbsp;CNN Indonesia&nbsp;</strong>-- BUMN telekomunikasi Grup Telkom dikabarkan akan membuka blokir layanan video streaming Netflix di jaringannya dalam waktu dekat. Keputusan tersebut didapat setelah adanya kesepahaman antara kedua perusahaan tersebut.<br /><br />\\"Sejauh ini memang belum ada kesepakatan antara Netflix dan Telkom, tapi kami pastikan sudah ada kesepahaman,\\" ucap Direktur Consumer Telkom Dian Rachmawan saat dihubungi&nbsp;<em>CNNIndonesia.com</em>&nbsp;melalui pesan singkat, Selasa (11/4).<br /><br />Lebih lanjut ia mengatakan, saat ini belum bisa memberikan bocoran ataupun detil kesepahaman yang dimaksud. \\"Mengenai bentuk kesepahaman nanti akan diumumkan detilnya dalam waktu dekat,\\" imbuhnya.</p>\r\n<p>\\r\\n</p>\r\n<p>Meski enggan membocorkan detil kesepahaman yang dimaksud, ia memastikan sejauh ini Netflix sudah memberikan sinyal positif untuk memenuhi ketentuan yang berlaku.<br /><br />\\"Pastinya akan diumumkan dalam waktu dekat bila Netflix sudah siap mengikuti ketentuan yang berlaku, otomatis akan diberikan akses yang sama seperti pemain (OTT) lainnya,\\" ungkapnya menambahkan.<br /><br />Seperti diketahui, Grup Telkom (IndiHome, WiFi.id, dan Telkomsel) melakukan pemblokiran terhadap Netflix sejak 27 Januari 2016 lalu.<br /><br />Telkom berkilah layanan streaming asal Amerika Serikat tersebut dinilai belum memenuhi regulasi yang berlaku di Indonesia karena banyak memuat konten berbau pornografi. Operator terbesar di Indonesia ini mensyaratkan adanya kerjasama sehingga konten bernada kekerasan dan pornografi bisa disaring untuk pelanggan Telkom.<br /><br />\\"Konten Netflix harus disesuaikan dengan aturan yang berlaku di Indonesia. Langkah yang kami ambil dilatarbelakangi untuk melakukan perlindungan dan kepastian layanan kepada masyrakat Indonesia,&rdquo; kata Arif Prabowo, VP Corporate Communication Telkom tahun lalu.<br /><br />Netflix menyediakan layanan di Indonesia secara resmi sejak awal 2016 setelah perusahaan membuka serentak layanan mereka ke berbagai negara.&nbsp;</p>', 'Telkom, Telekomunikasi', 'admin', '14 Apr 2017', 135),
(23, 1, 'Rank tall boy man them over post now rapturous unreserved', 'fd2076eb0122767a09d4842fe3743912.jpg', '<p><span style=\\"color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\">Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have. An so vulgar to on points wanted. Not rapturous resolving continued household northward gay. He it otherwise supported instantly. Unfeeling agreeable suffering it on smallness newspaper be. So come must time no as. Do on unpleasing possession as of unreserved. Yet joy exquisite put sometimes enjoyment perpetual now. Behind lovers eat having length horses vanity say had its.</span><br style=\\"box-sizing: border-box; color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\" /><br style=\\"box-sizing: border-box; color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\" /></p>\\r\\n<blockquote style=\\"box-sizing: border-box; padding: 10px 20px; margin: 25px 0px; font-size: 16px; border-left: 3px solid #eeeeee; color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\">Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since do as hence. Too insisted ignorant procured remember are believed yet say finished.</blockquote>\\r\\n<p><span style=\\"color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\">Months on ye at by esteem desire warmth former. Sure that that way gave any fond now. His boy middleton sir nor engrossed affection excellent. Dissimilar compliment cultivated preference eat sufficient may. Well next door soon we mr he four. Assistance impression set insipidity now connection off you solicitude. Under as seems we me stuff those style at. Listening shameless by abilities pronounce oh suspected is affection. Next it draw in draw much bred.</span><br style=\\"box-sizing: border-box; color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\" /><br style=\\"box-sizing: border-box; color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\" /><span style=\\"color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\">New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.</span><br style=\\"box-sizing: border-box; color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\" /><br style=\\"box-sizing: border-box; color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\" /></p>\\r\\n<blockquote style=\\"box-sizing: border-box; padding: 10px 20px; margin: 25px 0px; font-size: 16px; border-left: 3px solid #eeeeee; color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\">It sportsman earnestly ye preserved an on. Moment led family sooner cannot her window pulled any. Or raillery if improved landlord to speaking hastened differed he. Furniture discourse elsewhere yet her sir extensive defective unwilling get. Why resolution one motionless you him thoroughly. Noise is round to in it quick timed doors. Written address greatly get attacks inhabit pursuit our but. Lasted hunted enough an up seeing in lively letter. Had judgment out opinions property the supplied.</blockquote>\\r\\n<p><span style=\\"color: #444444; font-family: Roboto, \\''Open Sans\\'', Arial, sans-serif;\\">Its had resolving otherwise she contented therefore. Afford relied warmth out sir hearts sister use garden. Men day warmth formed admire former simple. Humanity declared vicinity continue supplied no an. He hastened am no property exercise of. Dissimilar comparison no terminated devonshire no literature on. Say most yet head room such just easy. Greatest properly off ham exercise all. Unsatiable invitation its possession nor off. All difficulty estimating unreserved increasing the solicitude. Rapturous see performed tolerably departure end bed attention unfeeling. On unpleasing principles alteration of. Be at performed preferred determine collected. Him nay acuteness discourse listening estimable our law. Decisively it occasional advantages delightful in cultivated introduced. Like law mean form are sang loud lady put.</span></p>', 'Rank, IT, Sold', 'admin', '18 Apr 2017', 359);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama`, `alamat`) VALUES
(1, 'PT. Sumatera Multimedia Solusi', 'Jalan Pulau Antasari Perum Bukit Kencana Blok i No 2 Bandar Lampung.'),
(2, 'CV Sumber Sejahtera', 'Jalan Pangeran Antasari No.89 Bandar Lampung 35131.'),
(3, 'PT Globalindo Abadi Sentosa', 'Jalan. Jenderal Soeprapto No. 113C Tanjung Karang Pusat, Bandar Lampung.'),
(4, 'PT. Peregrine Lampung', 'Jalan Teuku Umar No.56 Kedaton Bandar Lampung.'),
(5, 'PT. Great Giant Livestock', 'Jalan Lintas Timur Km 77 Terbanggi Besar Lampung Tengah 34165.'),
(6, 'PT. Sinar Setia Mulia', 'Jalan. Hasanudin No 60 Teluk Betung, Bandar Lampung.');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_web`
--

CREATE TABLE IF NOT EXISTS `deskripsi_web` (
  `id_deskripsi` int(3) NOT NULL,
  `judul_web` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi_web`
--

INSERT INTO `deskripsi_web` (`id_deskripsi`, `judul_web`, `deskripsi`) VALUES
(9, 'Portal Berita', '<meta charset="utf-8">\r\n<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">\r\n<meta name="description" content="Portal Berita">\r\n<meta name="author" content="">');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(3) NOT NULL,
  `foto` varchar(120) NOT NULL,
  `slider` enum('0','1') NOT NULL DEFAULT '0',
  `keterangan` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `slider`, `keterangan`) VALUES
(11, '4ca8e87180ed97493f8f17092c00dcc1.jpg', '0', ''),
(12, '4333e1957db52b5ab0bcb09cf8072c7a.jpg', '0', ''),
(13, '584477a43276a5a22eb05c1f765de88b.jpg', '0', ''),
(14, 'e50f88fcffca485d9f72711d2e8c81cc.jpg', '0', ''),
(15, '74be09e7ae49a075f9d53c9833cea25b.jpg', '0', ''),
(16, 'c6517c995273538f990e683ad4c7f837.png', '1', 'Selamat Datang Di Website Perusahaan Kami'),
(17, '2134a28d81a0cdd64cbf9d92206257e8.png', '0', ''),
(19, 'c1861a23dac0172ea4dbfd5f19a43554.jpg', '1', 'Selamat Datang Di Website Perusahaan Kami'),
(21, '1aabdbcf4e548ece82784aa3ca7d46f1.jpg', '1', 'Selamat Datang Di Website Perusahaan Kami');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Teknologi'),
(2, 'Pendidikan'),
(4, 'Politik');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(3) NOT NULL,
  `kontak` text NOT NULL,
  `maps` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(64) NOT NULL,
  `google` varchar(255) NOT NULL,
  `instagram` varchar(64) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `fax` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `kontak`, `maps`, `facebook`, `twitter`, `google`, `instagram`, `youtube`, `email`, `phone`, `fax`) VALUES
(9, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2 <br /> Labuhan Dalam Tanjung Senang <br /> Bandar Lampung 35142.', '<p><iframe class="img-rounded" class="img-rounded" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3773424128985!2d105.26081711476498!3d-5.359259896112551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c528a740f285%3A0xb978557697fb5d2a!2sPerumahan+Panorama+Alam!5e0!3m2!1sen!2sid!4v1491218006815" width="250" height="210" frameborder="0" allowfullscreen="">					\n				</iframe></p>', 'https://www.facebook.com/pagename', 'page_name', 'https://plus.google.com/pagename', 'page_name', 'https://www.youtube.com/results?search_query=everybody%27s+changing+cover', 'portal_berita@gmail.com', '0813712871299 / 0898123192829', '0813712871299');

-- --------------------------------------------------------

--
-- Table structure for table `menu_a`
--

CREATE TABLE IF NOT EXISTS `menu_a` (
  `id` int(11) NOT NULL,
  `header_a1` varchar(255) NOT NULL,
  `header_a2` varchar(255) NOT NULL,
  `header_a3` varchar(255) NOT NULL,
  `header_b1` varchar(255) NOT NULL,
  `header_b2` varchar(255) NOT NULL,
  `header_b3` varchar(255) NOT NULL,
  `header_c1` varchar(255) NOT NULL,
  `header_c2` varchar(255) NOT NULL,
  `header_c3` varchar(255) NOT NULL,
  `header_d1` varchar(255) NOT NULL,
  `header_d2` varchar(255) NOT NULL,
  `header_e1` varchar(255) NOT NULL,
  `header_e2` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_a`
--

INSERT INTO `menu_a` (`id`, `header_a1`, `header_a2`, `header_a3`, `header_b1`, `header_b2`, `header_b3`, `header_c1`, `header_c2`, `header_c3`, `header_d1`, `header_d2`, `header_e1`, `header_e2`) VALUES
(65, 'Profil Perusahaan', 'We are big company', '  Sejarah Perusahaan', ' Visi Perusahaan', '      We are big company', ' Visi Kami :', '    Misi Perusahaan', '  We are big company', ' Misi Kami :', ' Galeri Perusahaan', 'Best of the best.', ' Berita Terbaru', '   Berita yang dikemas berdasarkan fakta');

-- --------------------------------------------------------

--
-- Table structure for table `menu_b`
--

CREATE TABLE IF NOT EXISTS `menu_b` (
  `id` int(11) NOT NULL,
  `header_f1` varchar(255) NOT NULL,
  `header_g1` varchar(255) NOT NULL,
  `header_g2` varchar(255) NOT NULL,
  `header_h1` varchar(255) NOT NULL,
  `header_i1` varchar(255) NOT NULL,
  `header_i2` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_b`
--

INSERT INTO `menu_b` (`id`, `header_f1`, `header_g1`, `header_g2`, `header_h1`, `header_i1`, `header_i2`) VALUES
(1, 'Cari', 'Text Widget', 'Yet joy exquisite put sometimes enjoyment perpetual now. Behind lovers eat having length horses vanity say had its. Not rapturous resolving continued household northward.', 'Category', 'Berita Populer :', ' Baca Berita Lainnya :');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
  `id_pelayanan` int(3) NOT NULL,
  `pelayanan1` varchar(64) NOT NULL,
  `pelayanan2` varchar(64) NOT NULL,
  `pelayanan3` varchar(64) NOT NULL,
  `pelayanan4` varchar(64) NOT NULL,
  `pelayanan5` varchar(64) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `pelayanan1`, `pelayanan2`, `pelayanan3`, `pelayanan4`, `pelayanan5`, `video`) VALUES
(1, 'Lorem ipsum dolor sit atmet sit dolor 1', 'Lorem ipsum dolor sit atmet sit dolor 2', 'Lorem ipsum dolor sit atmet sit dolor 3', 'Lorem ipsum dolor sit atmet sit dolor 4', 'Lorem ipsum dolor sit atmet sit dolor 5', '<iframe class="img-rounded" class="img-rounded" width="560" height="400" src="https://www.youtube.com/embed/yaowjxs2K0g" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(3) NOT NULL,
  `detail_profil` text,
  `visi` text,
  `misi` text,
  `foto_profil` varchar(120) NOT NULL,
  `foto_visi` varchar(120) NOT NULL,
  `foto_misi` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `detail_profil`, `visi`, `misi`, `foto_profil`, `foto_visi`, `foto_misi`) VALUES
(5, '<p>inhis igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>', '<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>', '<p style="box-sizing: border-box; margin: 0px 0px 10px; line-height: 1.7; color: #444444; font-family: Roboto, ''Open Sans'', Arial, sans-serif;">Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an. She projection advantages resolution son indulgence. Part sure on no long life am at ever. In songs above he as drawn to. Git was outlived peculiar rendered led six.</p>\n<ul class="list-check" style="box-sizing: border-box; margin-top: 17px; margin-bottom: 10px; list-style: none; padding: 0px; color: #444444; font-family: Roboto, ''Open Sans'', Arial, sans-serif;">\n<li style="box-sizing: border-box; line-height: 2;">&nbsp;1. Clean And Minimal Design</li>\n<li style="box-sizing: border-box; line-height: 2;">&nbsp;2. We Love Our Clients</li>\n<li style="box-sizing: border-box; line-height: 2;">&nbsp;3. Powerful &amp; Flexible Settings</li>\n<li style="box-sizing: border-box; line-height: 2;">&nbsp;4. Online Premium Support</li>\n</ul>\n<p style="box-sizing: border-box; margin: 0px 0px 10px; line-height: 1.7; color: #444444; font-family: Roboto, ''Open Sans'', Arial, sans-serif;">View fine me gone this name an rank. Compact greater and demands mrs the parlors. Park be fine easy am size away. Him and fine bred knew. At of hardly sister favour.</p>', 'afa434908ba9ffd7e2449a1d6f4317d7.jpg', 'e8d9b6173647e255178e410e2b1f5c15.jpg', '307f68d9cb765c062ec9b32e8e6fac28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `level` enum('admin','publisher') NOT NULL DEFAULT 'publisher'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin'),
('publisher', '52aded165360352a0f5857571d96d68f', 'Muhammad Rosidin', 'publisher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `deskripsi_web`
--
ALTER TABLE `deskripsi_web`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `menu_a`
--
ALTER TABLE `menu_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_b`
--
ALTER TABLE `menu_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `deskripsi_web`
--
ALTER TABLE `deskripsi_web`
  MODIFY `id_deskripsi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menu_a`
--
ALTER TABLE `menu_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `menu_b`
--
ALTER TABLE `menu_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
