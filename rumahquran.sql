-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 09:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahquran`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_berita` int(5) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `sub_judul` varchar(255) NOT NULL,
  `headline` enum('Y','N') NOT NULL,
  `isi_berita` longtext NOT NULL,
  `keterangan_gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_berita`, `kategori`, `judul`, `sub_judul`, `headline`, `isi_berita`, `keterangan_gambar`, `tanggal`, `jam`, `gambar`) VALUES
(1, 'Berita', 'Testing Artikel 1', 'Testing Artikel 1', 'Y', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse.\n\nAt quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque.\n\nSemper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.', 'Wisuda Santri Tahfizh', '0000-00-00', '00:00:00', 'artikel1.png'),
(2, 'Artikel', 'Testing Artikel 2', 'Testing Artikel 2', 'N', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse.\r\n\r\nAt quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque.\r\n\r\nSemper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.', 'Wisuda Santri Tahfizh', '0000-00-00', '00:00:00', 'artikel2.png'),
(9, 'Artikel', 'Testing Artikel 3', 'Testing Artikel 3', 'N', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse.\r\n\r\nAt quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque.\r\n\r\nSemper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.', 'Wisuda Santri Tahfizh', '2022-05-13', '00:00:00', 'artikel3.png'),
(10, 'Artikel', 'Testing Artikel 4', 'Testing Artikel 4', 'N', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse.\r\n\r\nAt quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque.\r\n\r\nSemper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.', 'Wisuda Santri Tahfizh', '2022-05-13', '00:00:00', 'artikel4.png'),
(11, 'Artikel', 'Testing Artikel 5', 'Testing Artikel 5', 'N', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse.\r\n\r\nAt quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque.\r\n\r\nSemper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.', 'Wisuda Santri Tahfizh', '2022-05-13', '00:00:00', 'artikel1.png'),
(12, 'Berita', 'Testing Artikel 6', 'Testing Artikel 6', 'N', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse.\r\n\r\nAt quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque.\r\n\r\nSemper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.', 'Wisuda Santri Tahfizh', '2022-05-13', '00:00:00', 'artikel2.png'),
(13, 'Berita', 'Testing Artikel 7', 'Testing Artikel 7', 'N', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse.\r\n\r\nAt quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque.\r\n\r\nSemper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.', 'Wisuda Santri Tahfizh', '2022-05-13', '00:00:00', 'artikel3.png'),
(14, 'Berita', 'Testing Artikel 8', 'Testing Artikel 8', 'N', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse.\r\n\r\nAt quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque.\r\n\r\nSemper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.', 'Wisuda Santri Tahfizh', '2022-05-13', '00:00:00', 'artikel4.png'),
(23, 'Berita', 'Berbagi Sembako Untuk Dhuafa Di Masa Pandemi', 'Berbagi Sembako Untuk Dhuafa Di Masa Pandemi', 'Y', 'Berbagi Sembako Untuk Dhuafa Di Masa Pandemi', 'Berbagi Sembako Untuk Dhuafa Di Masa Pandemi', '2022-05-25', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi_berita` varchar(999) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `keterangan_gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `kategori`, `judul`, `isi_berita`, `gambar`, `keterangan_gambar`, `tanggal`, `jam`) VALUES
(1, 'Berita', 'Tester Gallery 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.', 'a.png', 'tester', '2022-05-24', '13:34:16'),
(2, 'Berita', 'Tester Gallery 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.', 'b.png', 'tester', '2022-05-24', '13:34:16'),
(3, 'Berita', 'Tester Gallery 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.', 'c.png', 'tester', '2022-05-24', '13:36:08'),
(4, 'Berita', 'Tester Gallery 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.', 'b.png', 'tetster', '2022-05-24', '13:36:08'),
(5, 'Berita', 'Tester Gallery 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Massa in amet, hendrerit laoreet cursus mattis. Cum at mauris consequat placerat. Feugiat sagittis ipsum quis sit euismod blandit lectus amet. Enim sed morbi sed et.', 'a.png', 'tester', '2022-05-24', '13:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `foto`, `level`) VALUES
(4, 'dimasbon', '$2y$10$.TYULcvWoQ5cVYY50Pxi1.VmjiRzjKxh.GTnNMaHedXbGnexASyW.', 'Dimas Bagas Baskoro', 'deniasitudimas@gmail.com', 'boy.png', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `ip` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
