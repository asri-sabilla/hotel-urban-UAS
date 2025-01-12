-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 11:59 AM
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
-- Database: `hotel_urban`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `fullname` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default-pp.png',
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`fullname`, `username`, `password`, `pp`, `id`) VALUES
('Asri ', 'asri', '12345', '../upload/013A5530.JPG', 11),
('ibrah', 'ibrahhh', 'e99a18c428cb38d5f260853678922e03', 'Screenshot 2024-05-17 152734.png', 25),
('Alisha', 'alisha10', '827ccb0eea8a706c4c34a16891f84e7b', '', 26),
('alisha zaharani', 'alisha10', '2879b94013a5249af9d0c29de50ce47c', 'Screenshot 2025-01-04 180109.png', 27),
('Alisha', 'alisha10', 'a141c47927929bc2d1fb6d336a256df4', '', 28),
('Alisha', 'alisha14', 'e10adc3949ba59abbe56e057f20f883e', '', 29),
('asri', 'asriii', '5264365a3b2271910bac8a366bbb8146', '', 30),
('Alisha', 'alisha10', 'a906449d5769fa7361d7ecc6aa3f6d28', '', 31);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `person` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `card_number` varchar(20) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `checkin`, `checkout`, `room_type`, `person`, `rooms`, `total_price`, `payment_method`, `card_number`, `bank_name`, `created_at`) VALUES
(36, '2025-01-08', '2025-01-09', 'single', 2, 1, 500000.00, 'bank-transfer', '432525', 'bri', '2025-01-08 06:53:51'),
(37, '2025-01-08', '2025-01-09', 'single', 2, 1, 500000.00, 'bank-transfer', '1111', 'bni', '2025-01-08 07:44:30'),
(38, '2025-01-12', '2025-01-13', 'deluxe', 1, 1, 1200000.00, 'bank-transfer', '23451678', 'bca', '2025-01-12 10:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(45) NOT NULL,
  `tipe` varchar(45) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jmlh_kamar` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `tipe`, `harga`, `kapasitas`, `jmlh_kamar`) VALUES
(1, 'Single', '500.000,00', 1, 10),
(2, 'Deluxe', '1.200.000,00', 2, 12),
(3, 'Triple', '1.500.000,00', 3, 8),
(4, 'Family', '2.000.000,00', 4, 10),
(5, 'Standar', '400.000,00', 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(16) NOT NULL,
  `id_reservasi` int(25) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `metode_bayar` varchar(20) NOT NULL,
  `jmlh_harga` varchar(25) NOT NULL,
  `person` int(45) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `id_reservasi`, `tgl_bayar`, `metode_bayar`, `jmlh_harga`, `person`, `duration`) VALUES
(11001, 1001, '2024-07-02', 'Transfer Bank', '6.000.000,00', 0, ''),
(11002, 1002, '2024-05-14', 'Kartu Kredit', '8.400.000,00', 0, ''),
(11003, 1004, '2024-11-06', 'Transfer Bank', '7.500.000,00', 0, ''),
(11004, 1005, '2024-07-27', 'Kartu Kredit', '1.500.000,00', 0, ''),
(11005, 1003, '2024-10-20', 'Cash', '4.000.000,00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` int(15) NOT NULL,
  `id_kamar` int(45) NOT NULL,
  `id` int(15) NOT NULL,
  `CheckIn` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `CheckOut` datetime(6) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id_reservasi`, `id_kamar`, `id`, `CheckIn`, `CheckOut`, `room_type`, `harga`) VALUES
(1001, 101, 10001, '2024-07-02 13:49:00.000000', '2024-07-04 09:30:00.000000', '', ''),
(1002, 102, 10002, '2024-05-14 11:25:00.000000', '2024-05-15 10:00:00.000000', '', ''),
(1003, 103, 10003, '2024-10-20 14:29:00.000000', '2024-10-22 19:30:00.000000', '', ''),
(1004, 104, 10004, '2024-11-06 06:30:00.000000', '2024-11-07 09:00:00.000000', '', ''),
(1005, 105, 10005, '2024-07-27 04:20:00.000000', '2024-07-28 15:30:00.000000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`id_tamu`, `nama`, `no_telp`, `email`, `tgl_lahir`) VALUES
(10001, 'Andi Wijaya', '081234567890', 'andi.wijaya@gmail.com', '1990-01-15'),
(10002, 'Budi Santoso', '081234567891', 'budi.santoso@gmail.com', '1988-03-22'),
(10003, 'Citra Lestari', '081234567892', 'citra.lestari@gmail.com', '1992-05-10'),
(10004, 'Dewi Kurnia', '081234567893', 'dewi.kurnia@gmail.com', '1994-08-19'),
(10005, 'Eka Pratama', '081234567894', 'eka.pratama@gmail.com', '1995-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ulasan`
--

CREATE TABLE `tbl_ulasan` (
  `nama` varchar(35) NOT NULL,
  `id_tamu` int(45) NOT NULL,
  `rating` decimal(15,0) NOT NULL,
  `komentar` varchar(64) NOT NULL,
  `tgl_ulasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_ulasan`
--

INSERT INTO `tbl_ulasan` (`nama`, `id_tamu`, `rating`, `komentar`, `tgl_ulasan`) VALUES
('Andi Wijaya', 10001, 5, 'Pengalaman menginap yang luar biasa, staf sangat ramah dan fasil', '2024-11-06'),
('Budi Santoso', 10002, 4, 'Kamar luas dan nyaman. Harga sesuai dengan fasilitas yang diberi', '2024-11-08'),
('Citra Lestari', 10003, 3, 'Lokasi cukup bagus, tetapi perlu peningkatan pada kebersihan kam', '2024-11-12'),
('Dewi Kurnia', 10004, 5, 'Layanan yang diberikan sangat baik. Makanan di restoran juga ena', '2024-11-14'),
('Eka Pratama', 10005, 2, 'Pelayanan perlu ditingkatkan terutama kebersihan di area umum ho', '2024-11-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_reservasi` (`id_reservasi`);

--
-- Indexes for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD KEY `id_tamu` (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id_reservasi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`id_reservasi`) REFERENCES `tbl_reservasi` (`id_reservasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD CONSTRAINT `tbl_reservasi_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tbl_kamar` (`jmlh_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD CONSTRAINT `tbl_ulasan_ibfk_1` FOREIGN KEY (`id_tamu`) REFERENCES `tbl_tamu` (`id_tamu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
