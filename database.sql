-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2020 at 05:43 PM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpla`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `tahun_terbit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `tahun_terbit`) VALUES
('201', 'matematika', 'trina', '2001'),
('202', 'ips', 'badrul', '2006'),
('203', 'ipa', 'ryan', '2010'),
('204', 'jawa', 'anang', '2009'),
('205', 'inggris', 'adil', '2008'),
('206', 'penjas', 'faisal', '2015'),
('207', 'agama', 'diki', '2017'),
('208', 'fisika', 'andri', '2013'),
('209', 'kimia', 'didik', '2011'),
('210', 'sbk', 'bagus', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `data_pinjam`
--

CREATE TABLE `data_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `denda` varchar(20) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `id_buku` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pinjam`
--

INSERT INTO `data_pinjam` (`id_pinjam`, `tgl_pinjam`, `tgl_kembali`, `denda`, `nis`, `id_buku`) VALUES
(5, '2018-12-09', '2018-12-12', '', '113', '200179854'),
(7, '2018-07-23', '2018-07-26', '20000', '112', '202015353'),
(18, '2018-09-04', '2018-09-29', '100000', '113', '202495499'),
(20, '2018-10-03', '2018-10-13', '4000', '113', '202495499'),
(21, '2018-10-18', '2018-10-26', '', '120', '203049099'),
(22, '2018-10-02', '2018-10-10', '', '118', '203611329'),
(23, '2018-10-04', '2018-10-06', '', '111', '201858364'),
(24, '2018-10-10', '2018-12-06', '', '113', '200185662'),
(25, '2018-10-10', '2018-10-24', '7000', '117', '201978604'),
(26, '2018-10-12', '2018-10-10', '0', '120', '200179854'),
(27, '2018-10-06', '2018-11-06', '24000', '120', '202217401'),
(28, '2018-10-09', '2018-10-27', '11000', '111', '202112520');

-- --------------------------------------------------------

--
-- Table structure for table `dat_buku`
--

CREATE TABLE `dat_buku` (
  `id_buku` varchar(10) NOT NULL,
  `nama_buku` varchar(30) DEFAULT NULL,
  `pengarang` varchar(25) DEFAULT NULL,
  `penerbit` varchar(20) DEFAULT NULL,
  `tahun_terbit` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dat_buku`
--

INSERT INTO `dat_buku` (`id_buku`, `nama_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
('1', 'Jingga dan Matahari', 'Esti Kinasih', 'Gramedia', '2012'),
('12', 'Latihan 1', 'ASDF', 'ASDF', '2018'),
('200006203', 'WIRAUSAHA BISNIS UKM', 'Kompas', 'GPU / KOMPAS', '2005'),
('200006248', 'SAYANG BARANG HEMAT UANG', 'Kompas', 'GPU / KOMPAS', '2006'),
('200006279', '111 KOLOM BAHASA KOMPAS', 'Kompas', 'GPU / KOMPAS', '2006'),
('200006316', 'MASALALU SELALU AKTUAL', 'P. Swantoro', 'GPU / KOMPAS', '1900'),
('200007024', 'KAMUS SPANYOL INDONESIA/HC', 'Milagros Guindel Her', 'GPU', '1900'),
('200016306', 'TIPPING POINT', 'Malcom Gladwell', 'GPU', '2002'),
('200030056', 'KARTUN NON KOMUNIKASI', 'NONE', 'KPG', '2007'),
('200036274', 'CARA GILA JADI PENGUSAHA + DVD', 'PURDI E. CHANDRA', 'ELEX', '2007'),
('200046579', 'TITIK BALIK: INVASI D DAY', 'Doug Murray', 'KPG', '2008'),
('200057364', 'PAKET BUDDHA REVISI', 'Osamu Tezuka', 'KPG', '1900'),
('200064134', 'SEJARAH PERS', 'Kompas', 'GPU / KOMPAS', '2002'),
('200087771', 'MENUJU JURNALISME BERKUALITAS', 'NONE', 'KPG', '2010'),
('200088740', 'AWAS VIRUS AKAL BUDI GANAS', 'NONE', 'KPG', '2005'),
('200090496', 'TELEVISI KEKERASAN&PEREMPUAN', 'Sunarto', 'GPU / KOMPAS', '2009'),
('200098762', 'THE GREATNESS GUIDE', 'ROBIN SHARMA', 'BIP', '2009'),
('200098799', 'ANDA BAGUS SAYA LEBIH BAGUS', 'JUSTIN HERALD', 'BIP', '2008'),
('200099150', '30 SUCCESS STORIES', 'LAURA FITZGERALD', 'BIP', '2008'),
('200099253', 'PILLARS OF HIGH PERFORMANCE', 'PAUL C. LIGHT', 'BIP', '2008'),
('200099409', 'INDONESIA UNGGUL/SC', 'SUSILO BAMBANG YUDHOYONO', 'BIP', '2008'),
('200099414', 'BENAZIR BHUTO: REKONSILIASI', 'BENAZIR BHUTTO', 'BIP', '2008'),
('200102067', 'GOD IS MY SUCCESS', 'LARRY JULIAN', 'BIP', '2009'),
('200125918', 'EXTREME TOYOTA', 'EMI OSONO', 'BIP', '2009'),
('200148005', 'NAGARA KARTAGAMA', '\"Prof. Dr. Drs. I Ketut R', 'GPU / KOMPAS', '2009'),
('200151854', 'DARI PRESIDEN KE PRESIDEN JL2', 'Benny Rachmadi', 'KPG', '2009'),
('200156743', 'ORANG BATAK MEMANDANG BPK', 'Baharudin Aritonang', 'KPG', '2009'),
('200159321', 'ERA BISNIS RAMAH LINGKUNGAN', 'JOHN E KENNEDY', 'BIP', '2009'),
('200175942', 'GUS DUR SANTRI PAR EXCELLENCE', 'Kump. Tulisan Kompas', 'GPU / KOMPAS', '2010'),
('200176307', 'KEPULAUAN REMPAH2', 'M Adnan Amal', 'KPG', '2010'),
('200176313', 'DARI ZAMAN CITRA KE METAFIKSI', 'Dewan Kesenian Jakarta', 'KPG', '2010'),
('200179854', 'FATWA DAN CANDA GUS DUR', 'Kumpulan Naskah', 'GPU / KOMPAS', '2010'),
('200181221', 'BERSYUKUR DAN MENGGUGAT DIRI.', 'Jakob Oetama', 'GPU / KOMPAS', '2009'),
('200185662', '5 CM (SC)', 'Donny Dhirgantoro', 'GRASINDO', '2010'),
('200186744', '7 KEAJAIBAN REZEKI + CD', 'IPPHO SANTOSA', 'ELEX', '2010'),
('200193807', 'BANGKIT DARI TERPURUK', 'Masriyah Amva', 'GPU / KOMPAS', '2010'),
('200220070', 'JENIH MELIHAT CERMAT MENCATAT', 'Marthias Dusky Pandoe', 'GPU / KOMPAS', '2010'),
('200250378', 'JURUS MENGHIMPUN FULUS', 'M. Anwar Sani', 'GPU', '2010'),
('200258575', 'Baca Kilat', 'Agus setiawan', 'GPU', '2010'),
('200269335', 'KAMUS ISTILAH EKONOMI&BISNIS', 'Henricus W. Ismanto', 'GPU / KOMPAS', '2010'),
('200276069', 'Guru - Guru Keluhuran', 'Rosihan Anwar H', 'GPU / KOMPAS', '2010'),
('200289210', 'ETIKA LINGKUNGAN HIDUP', 'Sonny Muchilson', 'GPU / KOMPAS', '2010'),
('200294547', '###CHEGA', 'NONE', 'KPG', '2010'),
('200377029', 'RANAH 3 WARNA', 'A Fuadi', 'GPU', '2010'),
('200388910', 'RAHASIA SUKSES IBU BEKERJA', 'WENDY SACHS', 'BIP', '2011'),
('200390800', 'MEMANUSIAKAN MANUSIA', 'MUKHLIS DENROS', 'BIP', '2011'),
('200408804', 'PAK BEYE&KELUARGANYA', 'Wisnu Nugroho', 'GPU / KOMPAS', '2011'),
('200469251', 'SOLD OUT', 'BUDI SANTOSO', 'ELEX', '2011'),
('200490402', 'NEGERI 5 MENARA (HC) +VCD', 'A Fuadi', 'GPU', '2011'),
('200544267', '\"DO WHAT I SAY, BUT .....\"', 'Ekuslie Goestiandi', 'GPU / GOM', '2011'),
('200555865', 'BERANI BANGKIT BERANI MENANG', 'YOHANES BAPTISTA', 'BIP', '2011'),
('200785557', 'EVERYONE IS A MARKETER', 'JENU WIDJAYA TANDJUNG', 'ELEX', '2011'),
('200948852', 'APPS DIGITAL MARKETING', 'THOMAS JOSEPH', 'ELEX', '2011'),
('200957056', 'SIMPLE LEADERSHIP DNA', 'Suhartono & Cyltamia', 'GPU', '2011'),
('201323107', '5 CM (EDISI COVER FILM)', 'Donny Dhirgantoro', 'GRASINDO', '2012'),
('201332456', 'TIDAK ADA YANG TIDAK BISA', 'DAHLAN ISKAN', 'ELEX', '2012'),
('201337583', 'BUNG KARNO & KEMEJA ARROW', 'Asvi Marwan Adam', 'GPU / KOMPAS', '2012'),
('201344959', 'GEMPA LITERASI', 'Gol A Gong', 'KPG', '2012'),
('201346982', 'MEMETAKAN HIJAU KOTA', 'Nirwono Joga', 'GPU', '2012'),
('201362141', 'WISATA PESISIR CIAMIS SELATAN', 'Edi Dimyati', 'GPU', '2012'),
('201378565', 'SOLUSI BISNIS UNTUK KEMISKINAN', 'PROF. DR.ERIYATNO', 'ELEX', '2012'),
('201416274', 'KOMPLAIN IS KANGTAU', 'EDDY SOETRISNO', 'BIP', '2012'),
('201742772', 'BS#NEGERI PARA BEDEBAH', 'Tere-Liye', 'GPU', '2012'),
('201744286', 'DAHLAN JUGA MANUSIA', '\"SITI NASYI\"\"AH (ITA)\"', 'ELEX', '2012'),
('201750161', 'KADIN DI TENGAH ARUS PERUBAHAN', 'Hardono', 'GPU / KOMPAS', '2012'),
('201758962', 'BRAND IS LIKE A DONUT', 'IVAN PERMANA', 'BIP', '2012'),
('201811072', 'CREATIVE DICTIONARY', 'GANTINA K SARI', 'BIP', '2012'),
('201842500', '\"STARTUP, INDONESIA!\"', 'Restituta ajeng Arjanti &', 'GPU / KOMPAS', '2012'),
('201856668', 'HARI-HARI TERAKHIR SUKARNO', 'Peter Kasenda', 'KPG', '2012'),
('201858364', 'MANUFACTURING HOPE: BISA !', 'DAHLAN ISKAN', 'ELEX', '2012'),
('201898995', '5 CM (EDISI COVER FILM REAL)', 'Donny Dhirgantoro', 'GRASINDO', '2012'),
('201925761', 'Inspirasi Pemimpin', 'THOMAS KRISTO', 'ELEX', '2012'),
('201929253', 'TIGA MANULA JALAN2 KE PANTURA', 'Benny Rachmadi', 'KPG', '2012'),
('201973259', 'JURUS JITU MENGELOLA AMARAH', '\"GUNAWAN ARDIYANTO, ST,DI', 'ELEX', '2012'),
('201978604', '50 FINANCIAL WISDOM', 'Eko Priyo Pratomo', 'GPU / GOM', '2012'),
('201990063', 'DUA TANGIS SEJUTA DAMPRAT', 'ARIS DARMAWAN', 'ELEX', '2012'),
('201993953', 'BUY IN', 'HARVARD BUSINESS - JOHN P', 'ELEX', '2012'),
('202015353', 'JAWA TEMPO DOELOE', 'James Rush', 'KPG', '2012'),
('202023655', '\"GUNS, GERMS & STEEL\"', 'Jared Diamond', 'KPG', '2013'),
('202034265', 'MOSLEM MILLIONARE', 'IPPHO SANTOSA', 'ELEX', '2013'),
('202043656', 'NOTES KREATIF AYU UTAMI', 'Ayu Utami', 'KPG', '2013'),
('202055476', 'GENERASI 90-AN (SC)', 'Marchella FP', 'KPG', '2013'),
('202112520', 'DAHLAN ISKAN SANG PENDOBRAK', 'Sholihin Hidayat', 'ELEX', '2013'),
('202150399', 'Kau Tidak Sendirian', 'Michael Colling', 'GPU', '2013'),
('202161902', 'BOOSTING YOUR PROFIT', 'NYOMAN SUKADANA', 'ELEX', '2013'),
('202161903', 'BEST PRACTICES & BUMN', 'MANEREP PASARIBU', 'ELEX', '2013'),
('202199799', 'GERAKAN KOTA HIJAU', 'Nirwono Joga', 'GPU', '2013'),
('202204499', 'STRATEGI DARI TIGA KERAJAAN', 'ASIAPAC BOOK PTE - YAOHUI', 'ELEX', '2013'),
('202217401', 'FOLLOW @MERRYRIANA', 'Debbie Widjaja', 'GPU', '2013'),
('202303999', 'TALK MORE .. FEARLESS', 'DAVID KADISHE & ANGEL OEM', 'ELEX', '2013'),
('202304104', 'RAHASIA SUKSES MUSLIMAHPRENEUR', 'WINDA JULIANITA', 'ELEX', '2013'),
('202321107', 'WORK FUN PLAY HARD', 'Soegeanto Tan', 'GRASINDO', '2013'),
('202322699', 'FEMALE NETPRENEUR', 'ABU ABDAD RAMADHAN', 'ELEX', '2013'),
('202323901', 'KETJAP NOMOR DOEA ED REVISI', 'I PUTU SURYA NEGARA', 'ELEX', '2013'),
('202324401', 'BE A GOOD COMMUNICATOR + VCD', '\"DASRUN HIDAYAT, S.SOS\"', 'ELEX', '2013'),
('202343501', 'BS#RANTAU 1 MUARA', 'A Fuadi', 'GPU', '2013'),
('202344206', 'LOCAL CHAMIPON', 'Mark Plus & Co', 'GPU', '2013'),
('202382514', 'CARA TEPAT BERDEBAT', 'JONATHAN HERRING', 'BIP', '2013'),
('202431201', 'SALESMAN`S TOOLS', 'Monica Anggen', 'GRASINDO', '2013'),
('202449009', '\"MIRACLE OF LANGUAGE,THE\"', 'HERU SUSANTO S.SOS', 'ELEX', '2013'),
('202449104', 'MENTAL TRANSFORMER', 'SUZIE S', 'ELEX', '2013'),
('202470099', '\"Big Dream, Make it Happen!\"', 'Thomas Sugiarto', 'GPU', '2013'),
('202471168', 'JADI KAYA CARA CHINA', 'MICHAEL JUSTIN LEE', 'BIP', '2013'),
('202495499', '\"BE POSITIVE, THINK POSITIVE\"', 'Mridula Agarwal', 'GRASINDO', '2013'),
('202495503', 'MENJADI SUTRADARA TELEVISI', 'Naratama Rukmananda', 'GRASINDO', '2013'),
('202495508', 'HUKUM KEUANGAN NEGARA', 'W Riawan Tjandra', 'GRASINDO', '2013'),
('202527700', 'BEAT THE GIANT (EDISI REVISI)', 'Yuswohadi dkk', 'GPU', '2013'),
('202528013', 'THINK BIG ACT SMALL', 'Jason Jennings', 'KPG', '2013'),
('202573100', 'REVOLUTION OF LIFE', 'SUMONO LIU', 'BIP', '2013'),
('202574702', 'ACTION POWER', 'IRWAN WISEFUL BERUTU', 'ELEX', '2013'),
('202575100', 'JOKOWI (BUKAN) UNTUK PRESIDEN!', 'KOMPASIANA', 'ELEX', '2013'),
('202659199', 'Sentilan Kosmopolitan', 'Mujiburrahman', 'GPU / KOMPAS', '2013'),
('202659499', 'NYALAKAN KELASMU', 'Sigit Setyawan', 'GRASINDO', '2013'),
('202666300', 'PERNAK-PERNIK JAKARTA OYEEE', 'HIOR YOGACESA', 'ELEX', '2013'),
('202712899', 'MENUJU CIO KELAS DUNIA', 'ANJAR KUNCORO', 'ELEX', '2013'),
('202779065', 'MEREKALAH TELADAN KITA', 'AHMAD ZAHRUDIN', 'BIP', '2013'),
('202788999', 'KOMPASIANA ETALASE WARGA BIASA', 'Pepih Nugraha', 'GPU', '2013'),
('202793699', 'MISS INDEPENDENT', 'HAWRA DILA', 'ELEX', '2013'),
('202812204', 'Business As Unusual', 'Anita Roddick', 'GPU', '2013'),
('202820199', 'INSPIRATION FOR WOMAN', 'IMELDA SAPUTRA', 'ELEX', '2013'),
('202872099', 'HAPPINESS@ARVANPRA', 'ARVAN PRADIANSYAH', 'ELEX', '2013'),
('202943299', 'TEMA FANTASI', 'Dr. Dorien Kartikawangi', 'GPU', '2013'),
('202943502', 'MEMOMPA BAN KEMPIS', 'Sukardi Rinakit', 'GPU / KOMPAS', '2013'),
('202948701', '6 THINGS U DON`T HAVE ENOUGH', 'GUNADI GETOL', 'ELEX', '2013'),
('202978399', 'MEMAHAMI BISNIS BANK (SC)', 'Ikatan Bankir Indonesia', 'GPU', '2013'),
('202982700', 'PENSIUN BERMARTABAT', 'YUSRON AMINULLOH', 'ELEX', '2013'),
('203046599', 'MARKETING WITH HEART', 'Hermawan Kartajaya & Step', 'GPU', '2013'),
('203049099', '\"JONGOS WAYS,THE\"', 'MUHSIN BUDIONO', 'ELEX', '2013'),
('203065701', 'MELEK KEUANGAN', 'PETER GARLANS SINA', 'BIP', '2014'),
('203075400', 'MELIHAT INDONESIA', 'Kump. Tulisan Kompas', 'GPU / KOMPAS', '2013'),
('203075605', 'INDONESIA BANGKIT', 'Arwin Soelaksono', 'GRASINDO', '2013'),
('203085199', 'KEVIN APRILIO: OUT OF THE BOX', 'Kevin Aprilio', 'GPU', '2014'),
('203127199', 'BAHAGIA ITU DIPRAKTEKIN', 'Tim Wesfix', 'GRASINDO', '2014'),
('203127299', 'MOBILE MANTRAUANG', 'Aldian Prakoso', 'GRASINDO', '2014'),
('203128499', 'MANUSIA MERDEKA', 'Trimoelja D. Soerjadi', 'GRASINDO', '2014'),
('203171600', 'TRANSPORTASI PRO RAKYAT', 'Eddy Herjanto', 'GPU', '2014'),
('203191802', 'JADI MANAJER? SIAPA TAKUT!', 'ROBERTA CHINSKY MATUSON', 'BIP', '2014'),
('203275801', 'PR WAR', 'Firsan Nova', 'GRASINDO', '2014'),
('203279599', 'TOTAL SUCCESS!', 'MOHAMMAD ZAZULI', 'ELEX', '2014'),
('203330299', 'KEAJAIBAN OTAK KANAN (HC)', 'Dr. Shigeo Haruyama', 'GPU', '2014'),
('203330504', 'Say No Thanks', 'Fahira Idris', 'GPU', '2014'),
('203359599', 'RUNTUHNYA HINDIA BELANDA', 'Onghokham', 'GPU', '2014'),
('203364901', 'JEJAK INTEL JEPANG', 'Wenri Wanhar', 'GPU / KOMPAS', '2014'),
('203460102', 'KELIRUMOLOGI GENDERISME', 'JAYA SUPRANA', 'ELEX', '2014'),
('203469629', 'KREATIVITAS UNTUK BOOMING', 'Aris Ananda', 'GRASINDO', '2014'),
('203511902', '365 PESAN KEBANGSAAN JK', 'Gufron Hidayat & Rochmad ', 'GPU', '2014'),
('203534806', 'I`M HAPPY NOW: INI PILIHANKU', 'M. FARID AZIZ', 'ELEX', '2014'),
('203611329', '100 DASAR KEGIATAN EKONOMI 1', 'DAEWON C.I -  DAEWON C.I', 'ELEX', '2014'),
('203611428', '100 DASAR KEGIATAN EKONOMI 2', 'DAEWON C.I -  DAEWON C.I', 'ELEX', '2014'),
('203679632', 'STRATEGI MEDIA RELATIONS', 'Agus Sudibyo', 'KPG', '2014'),
('203708732', 'LEAD WITH A STORY', 'AMACOM.COM - PAUL SMITH', 'ELEX', '2014'),
('203744932', 'INDONESIA DALAM INFOGRAFIK', 'Tim Infografik Kompas', 'GPU / KOMPAS', '2014'),
('203765032', 'PRIDE OF A NATION', 'Dwi Soetjipto', 'GPU / KOMPAS', '2014'),
('203844136', 'AKUNTANSI PERPAJAKAN', 'Hery SE', 'GRASINDO', '2014'),
('203872233', '34 ETIKA JURNALISME LINGKUNGAN', 'Agus Sudibyo', 'KPG', '2014'),
('203900233', '\"NEW DIGITAL AGE,THE\"', 'ERIC SCHMIDT & JARED COHE', 'KPG', '2014'),
('203905533', 'ISLAM TANPA EKSTREMISME', 'DIANA FINCH LITERARY  - M', 'ELEX', '2014'),
('203916533', 'DISCOVERING YOUR BLACK BOX', 'Roslina Verauli', 'KPG', '2014'),
('203957233', 'DEMOKREATIF ART BOOK', 'Yoga & Hari Prast', 'KPG', '2014'),
('204011733', '\"LEADER IN YOU,THE (SC)\"', 'Berny Gomulya', 'GPU', '2014'),
('204011833', 'BS#BEASISWA 5 BENUA', 'A Fuadi', 'GPU', '2014'),
('204055733', 'JOKOWI SANG FENOMENAL', 'Febby Mahendra Putra', 'GRASINDO', '2014'),
('204075334', 'MENYEMAI BENIH KEBERUNTUNGAN', 'IZADIAN ZAINI FAHROJI', 'ELEX', '2014'),
('204100335', 'INOVATOR PENDOBRAK PERUBAHAN', 'Soelaiman Budi Sunarto', 'ELEX', '2014'),
('204155833', 'BICARALAH! AGAR DIPERHITUNGKAN', '\"Lutfi Khaerudin, dkk.\"', 'ELEX', '2014'),
('204169486', 'JOKOWI PEOPLE POWER', 'Bimo Nugroho', 'GPU', '2014'),
('204193247', 'BUILT TO BLESS COMPANY', 'PAULUS BAMBANG WIRAWAN', 'ELEX', '2014'),
('204268547', '96 TIPS STUDI DI JERMAN', 'HERU SUSANTO', 'ELEX', '2014'),
('204292347', 'KERAJAAN ACEH', 'Denys Lombard', 'KPG', '2014'),
('204359656', 'KULIAH VS KULI-AH', 'MIYOSI ARIEFIANSYAH DAN E', 'BIP', '2015'),
('204415060', 'TRAVELLING TO INFINITY', 'Jane Hawking', 'GPU', '2015'),
('204422847', 'ROCKET MARKETING', 'Yeheskiel Zebua', 'ELEX', '2015'),
('204543047', 'SERI TEMPO: BENNY MOERDANI', 'Tim Penulis Tempo', 'KPG', '2015'),
('204573247', 'VOICING THE VOICELESS', 'Tim Penulis Tempo', 'KPG', '2015'),
('204595447', 'MY PUBLIC SPEAKING', 'Hilbram Dunar', 'GPU', '2015'),
('204647947', 'PANTANGAN DALAM BISNIS', 'Tri Wahyuni Zuhri', 'GPU', '2015'),
('204670547', 'TRAINERPRENEUR', 'Ongky Hojanto', 'GPU', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `kelas`) VALUES
('', 'defr', 'xii '),
('12', 'add', 'add');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'c93ccd78b2076528346216b3b2f701e6'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(71, 'smkn1jenpo', '5058f1af8388633f609cadb75a75dc9d'),
(72, 'smkn1jenpo', '5058f1af8388633f609cadb75a75dc9d'),
(73, 'smkn1jenpo', '5058f1af8388633f609cadb75a75dc9d'),
(74, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `data_pinjam`
--
ALTER TABLE `data_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `dat_buku`
--
ALTER TABLE `dat_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pinjam`
--
ALTER TABLE `data_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
