-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 10:42 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pembayaranspp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `keterangan`) VALUES
(1, 'X RPL', 'Rekayasa Perangkat Lunak'),
(2, 'XI RPL', 'Rekayasa Perangkat Lunak'),
(3, 'XII RPL', 'Rekayasa Perangkat Lunak'),
(15, 'X MM', 'Multimedia'),
(16, 'XI MM', 'Multimedia'),
(17, 'XII MM', 'Multimedia'),
(18, 'X TKJ', 'Teknik Komputer Dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `bulan` varchar(30) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_petugas`, `nis`, `tgl_bayar`, `bulan`, `tahun`, `jumlah`, `status`) VALUES
(263, 1, 5351, '2023-03-12', 'Juli', 2022, '700000', 'Lunas'),
(264, 1, 5351, '2023-03-12', 'Agustus', 2022, '700000', 'Lunas'),
(265, 1, 5351, '2023-03-12', 'September', 2022, '700000', 'Lunas'),
(266, 1, 5351, '2023-03-12', 'Oktober', 2022, '700000', 'Lunas'),
(267, 1, 5351, '2023-03-12', 'November', 2022, '700000', 'Lunas'),
(268, 1, 5351, '2023-03-12', 'Desember', 2022, '700000', 'Lunas'),
(269, 1, 5351, '2023-03-12', 'Januari', 2023, '700000', 'Lunas'),
(270, 1, 5351, '2023-03-12', 'Februari', 2023, '700000', 'Lunas'),
(271, 1, 5351, '2023-03-12', 'Maret', 2023, '700000', 'Lunas'),
(272, 1, 5351, '2023-03-12', 'April', 2023, '700000', 'Lunas'),
(273, 1, 5351, '2023-03-12', 'Mei', 2023, '700000', 'Lunas'),
(274, 1, 5351, '2023-03-13', 'Juni', 2023, '700000', 'Lunas'),
(275, 1, 5351, '2023-03-15', 'Juli', 2023, '700000', 'Lunas'),
(276, 1, 5351, '2023-03-15', 'Agustus', 2023, '700000', 'Lunas'),
(277, 1, 5351, NULL, 'September', 2023, NULL, 'Belum Bayar'),
(278, 1, 5351, NULL, 'Oktober', 2023, NULL, 'Belum Bayar'),
(279, 1, 5351, NULL, 'November', 2023, NULL, 'Belum Bayar'),
(280, 1, 5351, NULL, 'Desember', 2023, NULL, 'Belum Bayar'),
(281, 1, 5351, NULL, 'Januari', 2024, NULL, 'Belum Bayar'),
(282, 1, 5351, NULL, 'Februari', 2024, NULL, 'Belum Bayar'),
(283, 1, 5351, NULL, 'Maret', 2024, NULL, 'Belum Bayar'),
(284, 1, 5351, NULL, 'April', 2024, NULL, 'Belum Bayar'),
(285, 1, 5351, NULL, 'Mei', 2024, NULL, 'Belum Bayar'),
(286, 1, 5351, NULL, 'Juni', 2024, NULL, 'Belum Bayar'),
(287, 1, 5351, NULL, 'Juli', 2024, NULL, 'Belum Bayar'),
(288, 1, 5351, NULL, 'Agustus', 2024, NULL, 'Belum Bayar'),
(289, 1, 5351, NULL, 'September', 2024, NULL, 'Belum Bayar'),
(290, 1, 5351, NULL, 'Oktober', 2024, NULL, 'Belum Bayar'),
(291, 1, 5351, NULL, 'November', 2024, NULL, 'Belum Bayar'),
(292, 1, 5351, NULL, 'Desember', 2024, NULL, 'Belum Bayar'),
(293, 1, 5351, NULL, 'Januari', 2025, NULL, 'Belum Bayar'),
(294, 1, 5351, NULL, 'Februari', 2025, NULL, 'Belum Bayar'),
(295, 1, 5351, NULL, 'Maret', 2025, NULL, 'Belum Bayar'),
(296, 1, 5351, NULL, 'April', 2025, NULL, 'Belum Bayar'),
(297, 1, 5351, NULL, 'Mei', 2025, NULL, 'Belum Bayar'),
(298, 1, 5351, NULL, 'Juni', 2025, NULL, 'Belum Bayar'),
(299, 1, 5352, '2023-03-12', 'Juli', 2022, '700000', 'Lunas'),
(300, 1, 5352, '2023-03-12', 'Agustus', 2022, '700000', 'Lunas'),
(301, 1, 5352, NULL, 'September', 2022, NULL, 'Belum Bayar'),
(302, 1, 5352, NULL, 'Oktober', 2022, NULL, 'Belum Bayar'),
(303, 1, 5352, NULL, 'November', 2022, NULL, 'Belum Bayar'),
(304, 1, 5352, NULL, 'Desember', 2022, NULL, 'Belum Bayar'),
(305, 1, 5352, NULL, 'Januari', 2023, NULL, 'Belum Bayar'),
(306, 1, 5352, NULL, 'Februari', 2023, NULL, 'Belum Bayar'),
(307, 1, 5352, NULL, 'Maret', 2023, NULL, 'Belum Bayar'),
(308, 1, 5352, NULL, 'April', 2023, NULL, 'Belum Bayar'),
(309, 1, 5352, NULL, 'Mei', 2023, NULL, 'Belum Bayar'),
(310, 1, 5352, NULL, 'Juni', 2023, NULL, 'Belum Bayar'),
(311, 1, 5352, NULL, 'Juli', 2023, NULL, 'Belum Bayar'),
(312, 1, 5352, NULL, 'Agustus', 2023, NULL, 'Belum Bayar'),
(313, 1, 5352, NULL, 'September', 2023, NULL, 'Belum Bayar'),
(314, 1, 5352, NULL, 'Oktober', 2023, NULL, 'Belum Bayar'),
(315, 1, 5352, NULL, 'November', 2023, NULL, 'Belum Bayar'),
(316, 1, 5352, NULL, 'Desember', 2023, NULL, 'Belum Bayar'),
(317, 1, 5352, NULL, 'Januari', 2024, NULL, 'Belum Bayar'),
(318, 1, 5352, NULL, 'Februari', 2024, NULL, 'Belum Bayar'),
(319, 1, 5352, NULL, 'Maret', 2024, NULL, 'Belum Bayar'),
(320, 1, 5352, NULL, 'April', 2024, NULL, 'Belum Bayar'),
(321, 1, 5352, NULL, 'Mei', 2024, NULL, 'Belum Bayar'),
(322, 1, 5352, NULL, 'Juni', 2024, NULL, 'Belum Bayar'),
(323, 1, 5352, NULL, 'Juli', 2024, NULL, 'Belum Bayar'),
(324, 1, 5352, NULL, 'Agustus', 2024, NULL, 'Belum Bayar'),
(325, 1, 5352, NULL, 'September', 2024, NULL, 'Belum Bayar'),
(326, 1, 5352, NULL, 'Oktober', 2024, NULL, 'Belum Bayar'),
(327, 1, 5352, NULL, 'November', 2024, NULL, 'Belum Bayar'),
(328, 1, 5352, NULL, 'Desember', 2024, NULL, 'Belum Bayar'),
(329, 1, 5352, NULL, 'Januari', 2025, NULL, 'Belum Bayar'),
(330, 1, 5352, NULL, 'Februari', 2025, NULL, 'Belum Bayar'),
(331, 1, 5352, NULL, 'Maret', 2025, NULL, 'Belum Bayar'),
(332, 1, 5352, NULL, 'April', 2025, NULL, 'Belum Bayar'),
(333, 1, 5352, NULL, 'Mei', 2025, NULL, 'Belum Bayar'),
(334, 1, 5352, NULL, 'Juni', 2025, NULL, 'Belum Bayar'),
(335, 1, 5353, '2023-03-16', 'Juli', 2023, '700000', 'Lunas'),
(336, 1, 5353, NULL, 'Agustus', 2023, NULL, 'Belum Bayar'),
(337, 1, 5353, NULL, 'September', 2023, NULL, 'Belum Bayar'),
(338, 1, 5353, NULL, 'Oktober', 2023, NULL, 'Belum Bayar'),
(339, 1, 5353, NULL, 'November', 2023, NULL, 'Belum Bayar'),
(340, 1, 5353, NULL, 'Desember', 2023, NULL, 'Belum Bayar'),
(341, 1, 5353, NULL, 'Januari', 2024, NULL, 'Belum Bayar'),
(342, 1, 5353, NULL, 'Februari', 2024, NULL, 'Belum Bayar'),
(343, 1, 5353, NULL, 'Maret', 2024, NULL, 'Belum Bayar'),
(344, 1, 5353, NULL, 'April', 2024, NULL, 'Belum Bayar'),
(345, 1, 5353, NULL, 'Mei', 2024, NULL, 'Belum Bayar'),
(346, 1, 5353, NULL, 'Juni', 2024, NULL, 'Belum Bayar'),
(347, 1, 5353, NULL, 'Juli', 2024, NULL, 'Belum Bayar'),
(348, 1, 5353, NULL, 'Agustus', 2024, NULL, 'Belum Bayar'),
(349, 1, 5353, NULL, 'September', 2024, NULL, 'Belum Bayar'),
(350, 1, 5353, NULL, 'Oktober', 2024, NULL, 'Belum Bayar'),
(351, 1, 5353, NULL, 'November', 2024, NULL, 'Belum Bayar'),
(352, 1, 5353, NULL, 'Desember', 2024, NULL, 'Belum Bayar'),
(353, 1, 5353, NULL, 'Januari', 2025, NULL, 'Belum Bayar'),
(354, 1, 5353, NULL, 'Februari', 2025, NULL, 'Belum Bayar'),
(355, 1, 5353, NULL, 'Maret', 2025, NULL, 'Belum Bayar'),
(356, 1, 5353, NULL, 'April', 2025, NULL, 'Belum Bayar'),
(357, 1, 5353, NULL, 'Mei', 2025, NULL, 'Belum Bayar'),
(358, 1, 5353, NULL, 'Juni', 2025, NULL, 'Belum Bayar'),
(359, 1, 5353, NULL, 'Juli', 2025, NULL, 'Belum Bayar'),
(360, 1, 5353, NULL, 'Agustus', 2025, NULL, 'Belum Bayar'),
(361, 1, 5353, NULL, 'September', 2025, NULL, 'Belum Bayar'),
(362, 1, 5353, NULL, 'Oktober', 2025, NULL, 'Belum Bayar'),
(363, 1, 5353, NULL, 'November', 2025, NULL, 'Belum Bayar'),
(364, 1, 5353, NULL, 'Desember', 2025, NULL, 'Belum Bayar'),
(365, 1, 5353, NULL, 'Januari', 2026, NULL, 'Belum Bayar'),
(366, 1, 5353, NULL, 'Februari', 2026, NULL, 'Belum Bayar'),
(367, 1, 5353, NULL, 'Maret', 2026, NULL, 'Belum Bayar'),
(368, 1, 5353, NULL, 'April', 2026, NULL, 'Belum Bayar'),
(369, 1, 5353, NULL, 'Mei', 2026, NULL, 'Belum Bayar'),
(370, 1, 5353, NULL, 'Juni', 2026, NULL, 'Belum Bayar'),
(371, 1, 5354, NULL, 'Juli', 2023, NULL, 'Belum Bayar'),
(372, 1, 5354, NULL, 'Agustus', 2023, NULL, 'Belum Bayar'),
(373, 1, 5354, NULL, 'September', 2023, NULL, 'Belum Bayar'),
(374, 1, 5354, NULL, 'Oktober', 2023, NULL, 'Belum Bayar'),
(375, 1, 5354, NULL, 'November', 2023, NULL, 'Belum Bayar'),
(376, 1, 5354, NULL, 'Desember', 2023, NULL, 'Belum Bayar'),
(377, 1, 5354, NULL, 'Januari', 2024, NULL, 'Belum Bayar'),
(378, 1, 5354, NULL, 'Februari', 2024, NULL, 'Belum Bayar'),
(379, 1, 5354, NULL, 'Maret', 2024, NULL, 'Belum Bayar'),
(380, 1, 5354, NULL, 'April', 2024, NULL, 'Belum Bayar'),
(381, 1, 5354, NULL, 'Mei', 2024, NULL, 'Belum Bayar'),
(382, 1, 5354, NULL, 'Juni', 2024, NULL, 'Belum Bayar'),
(383, 1, 5354, NULL, 'Juli', 2024, NULL, 'Belum Bayar'),
(384, 1, 5354, NULL, 'Agustus', 2024, NULL, 'Belum Bayar'),
(385, 1, 5354, NULL, 'September', 2024, NULL, 'Belum Bayar'),
(386, 1, 5354, NULL, 'Oktober', 2024, NULL, 'Belum Bayar'),
(387, 1, 5354, NULL, 'November', 2024, NULL, 'Belum Bayar'),
(388, 1, 5354, NULL, 'Desember', 2024, NULL, 'Belum Bayar'),
(389, 1, 5354, NULL, 'Januari', 2025, NULL, 'Belum Bayar'),
(390, 1, 5354, NULL, 'Februari', 2025, NULL, 'Belum Bayar'),
(391, 1, 5354, NULL, 'Maret', 2025, NULL, 'Belum Bayar'),
(392, 1, 5354, NULL, 'April', 2025, NULL, 'Belum Bayar'),
(393, 1, 5354, NULL, 'Mei', 2025, NULL, 'Belum Bayar'),
(394, 1, 5354, NULL, 'Juni', 2025, NULL, 'Belum Bayar'),
(395, 1, 5354, NULL, 'Juli', 2025, NULL, 'Belum Bayar'),
(396, 1, 5354, NULL, 'Agustus', 2025, NULL, 'Belum Bayar'),
(397, 1, 5354, NULL, 'September', 2025, NULL, 'Belum Bayar'),
(398, 1, 5354, NULL, 'Oktober', 2025, NULL, 'Belum Bayar'),
(399, 1, 5354, NULL, 'November', 2025, NULL, 'Belum Bayar'),
(400, 1, 5354, NULL, 'Desember', 2025, NULL, 'Belum Bayar'),
(401, 1, 5354, NULL, 'Januari', 2026, NULL, 'Belum Bayar'),
(402, 1, 5354, NULL, 'Februari', 2026, NULL, 'Belum Bayar'),
(403, 1, 5354, NULL, 'Maret', 2026, NULL, 'Belum Bayar'),
(404, 1, 5354, NULL, 'April', 2026, NULL, 'Belum Bayar'),
(405, 1, 5354, NULL, 'Mei', 2026, NULL, 'Belum Bayar'),
(406, 1, 5354, NULL, 'Juni', 2026, NULL, 'Belum Bayar'),
(407, 1, 5355, NULL, 'Juli', 2024, NULL, 'Belum Bayar'),
(408, 1, 5355, NULL, 'Agustus', 2024, NULL, 'Belum Bayar'),
(409, 1, 5355, NULL, 'September', 2024, NULL, 'Belum Bayar'),
(410, 1, 5355, NULL, 'Oktober', 2024, NULL, 'Belum Bayar'),
(411, 1, 5355, NULL, 'November', 2024, NULL, 'Belum Bayar'),
(412, 1, 5355, NULL, 'Desember', 2024, NULL, 'Belum Bayar'),
(413, 1, 5355, NULL, 'Januari', 2025, NULL, 'Belum Bayar'),
(414, 1, 5355, NULL, 'Februari', 2025, NULL, 'Belum Bayar'),
(415, 1, 5355, NULL, 'Maret', 2025, NULL, 'Belum Bayar'),
(416, 1, 5355, NULL, 'April', 2025, NULL, 'Belum Bayar'),
(417, 1, 5355, NULL, 'Mei', 2025, NULL, 'Belum Bayar'),
(418, 1, 5355, NULL, 'Juni', 2025, NULL, 'Belum Bayar'),
(419, 1, 5355, NULL, 'Juli', 2025, NULL, 'Belum Bayar'),
(420, 1, 5355, NULL, 'Agustus', 2025, NULL, 'Belum Bayar'),
(421, 1, 5355, NULL, 'September', 2025, NULL, 'Belum Bayar'),
(422, 1, 5355, NULL, 'Oktober', 2025, NULL, 'Belum Bayar'),
(423, 1, 5355, NULL, 'November', 2025, NULL, 'Belum Bayar'),
(424, 1, 5355, NULL, 'Desember', 2025, NULL, 'Belum Bayar'),
(425, 1, 5355, NULL, 'Januari', 2026, NULL, 'Belum Bayar'),
(426, 1, 5355, NULL, 'Februari', 2026, NULL, 'Belum Bayar'),
(427, 1, 5355, NULL, 'Maret', 2026, NULL, 'Belum Bayar'),
(428, 1, 5355, NULL, 'April', 2026, NULL, 'Belum Bayar'),
(429, 1, 5355, NULL, 'Mei', 2026, NULL, 'Belum Bayar'),
(430, 1, 5355, NULL, 'Juni', 2026, NULL, 'Belum Bayar'),
(431, 1, 5355, NULL, 'Juli', 2026, NULL, 'Belum Bayar'),
(432, 1, 5355, NULL, 'Agustus', 2026, NULL, 'Belum Bayar'),
(433, 1, 5355, NULL, 'September', 2026, NULL, 'Belum Bayar'),
(434, 1, 5355, NULL, 'Oktober', 2026, NULL, 'Belum Bayar'),
(435, 1, 5355, NULL, 'November', 2026, NULL, 'Belum Bayar'),
(436, 1, 5355, NULL, 'Desember', 2026, NULL, 'Belum Bayar'),
(437, 1, 5355, NULL, 'Januari', 2027, NULL, 'Belum Bayar'),
(438, 1, 5355, NULL, 'Februari', 2027, NULL, 'Belum Bayar'),
(439, 1, 5355, NULL, 'Maret', 2027, NULL, 'Belum Bayar'),
(440, 1, 5355, NULL, 'April', 2027, NULL, 'Belum Bayar'),
(441, 1, 5355, NULL, 'Mei', 2027, NULL, 'Belum Bayar'),
(442, 1, 5355, NULL, 'Juni', 2027, NULL, 'Belum Bayar'),
(479, 1, 5357, '2023-03-15', 'Juli', 2023, '700000', 'Lunas'),
(480, 1, 5357, NULL, 'Agustus', 2023, NULL, 'Belum Bayar'),
(481, 1, 5357, NULL, 'September', 2023, NULL, 'Belum Bayar'),
(482, 1, 5357, NULL, 'Oktober', 2023, NULL, 'Belum Bayar'),
(483, 1, 5357, NULL, 'November', 2023, NULL, 'Belum Bayar'),
(484, 1, 5357, NULL, 'Desember', 2023, NULL, 'Belum Bayar'),
(485, 1, 5357, NULL, 'Januari', 2024, NULL, 'Belum Bayar'),
(486, 1, 5357, NULL, 'Februari', 2024, NULL, 'Belum Bayar'),
(487, 1, 5357, NULL, 'Maret', 2024, NULL, 'Belum Bayar'),
(488, 1, 5357, NULL, 'April', 2024, NULL, 'Belum Bayar'),
(489, 1, 5357, NULL, 'Mei', 2024, NULL, 'Belum Bayar'),
(490, 1, 5357, NULL, 'Juni', 2024, NULL, 'Belum Bayar'),
(491, 1, 5357, NULL, 'Juli', 2024, NULL, 'Belum Bayar'),
(492, 1, 5357, NULL, 'Agustus', 2024, NULL, 'Belum Bayar'),
(493, 1, 5357, NULL, 'September', 2024, NULL, 'Belum Bayar'),
(494, 1, 5357, NULL, 'Oktober', 2024, NULL, 'Belum Bayar'),
(495, 1, 5357, NULL, 'November', 2024, NULL, 'Belum Bayar'),
(496, 1, 5357, NULL, 'Desember', 2024, NULL, 'Belum Bayar'),
(497, 1, 5357, NULL, 'Januari', 2025, NULL, 'Belum Bayar'),
(498, 1, 5357, NULL, 'Februari', 2025, NULL, 'Belum Bayar'),
(499, 1, 5357, NULL, 'Maret', 2025, NULL, 'Belum Bayar'),
(500, 1, 5357, NULL, 'April', 2025, NULL, 'Belum Bayar'),
(501, 1, 5357, NULL, 'Mei', 2025, NULL, 'Belum Bayar'),
(502, 1, 5357, NULL, 'Juni', 2025, NULL, 'Belum Bayar'),
(503, 1, 5357, NULL, 'Juli', 2025, NULL, 'Belum Bayar'),
(504, 1, 5357, NULL, 'Agustus', 2025, NULL, 'Belum Bayar'),
(505, 1, 5357, NULL, 'September', 2025, NULL, 'Belum Bayar'),
(506, 1, 5357, NULL, 'Oktober', 2025, NULL, 'Belum Bayar'),
(507, 1, 5357, NULL, 'November', 2025, NULL, 'Belum Bayar'),
(508, 1, 5357, NULL, 'Desember', 2025, NULL, 'Belum Bayar'),
(509, 1, 5357, NULL, 'Januari', 2026, NULL, 'Belum Bayar'),
(510, 1, 5357, NULL, 'Februari', 2026, NULL, 'Belum Bayar'),
(511, 1, 5357, NULL, 'Maret', 2026, NULL, 'Belum Bayar'),
(512, 1, 5357, NULL, 'April', 2026, NULL, 'Belum Bayar'),
(513, 1, 5357, NULL, 'Mei', 2026, NULL, 'Belum Bayar'),
(514, 1, 5357, NULL, 'Juni', 2026, NULL, 'Belum Bayar'),
(515, 1, 5358, NULL, 'Juli', 2023, NULL, 'Belum Bayar'),
(516, 1, 5358, NULL, 'Agustus', 2023, NULL, 'Belum Bayar'),
(517, 1, 5358, NULL, 'September', 2023, NULL, 'Belum Bayar'),
(518, 1, 5358, NULL, 'Oktober', 2023, NULL, 'Belum Bayar'),
(519, 1, 5358, NULL, 'November', 2023, NULL, 'Belum Bayar'),
(520, 1, 5358, NULL, 'Desember', 2023, NULL, 'Belum Bayar'),
(521, 1, 5358, NULL, 'Januari', 2024, NULL, 'Belum Bayar'),
(522, 1, 5358, NULL, 'Februari', 2024, NULL, 'Belum Bayar'),
(523, 1, 5358, NULL, 'Maret', 2024, NULL, 'Belum Bayar'),
(524, 1, 5358, NULL, 'April', 2024, NULL, 'Belum Bayar'),
(525, 1, 5358, NULL, 'Mei', 2024, NULL, 'Belum Bayar'),
(526, 1, 5358, NULL, 'Juni', 2024, NULL, 'Belum Bayar'),
(527, 1, 5358, NULL, 'Juli', 2024, NULL, 'Belum Bayar'),
(528, 1, 5358, NULL, 'Agustus', 2024, NULL, 'Belum Bayar'),
(529, 1, 5358, NULL, 'September', 2024, NULL, 'Belum Bayar'),
(530, 1, 5358, NULL, 'Oktober', 2024, NULL, 'Belum Bayar'),
(531, 1, 5358, NULL, 'November', 2024, NULL, 'Belum Bayar'),
(532, 1, 5358, NULL, 'Desember', 2024, NULL, 'Belum Bayar'),
(533, 1, 5358, NULL, 'Januari', 2025, NULL, 'Belum Bayar'),
(534, 1, 5358, NULL, 'Februari', 2025, NULL, 'Belum Bayar'),
(535, 1, 5358, NULL, 'Maret', 2025, NULL, 'Belum Bayar'),
(536, 1, 5358, NULL, 'April', 2025, NULL, 'Belum Bayar'),
(537, 1, 5358, NULL, 'Mei', 2025, NULL, 'Belum Bayar'),
(538, 1, 5358, NULL, 'Juni', 2025, NULL, 'Belum Bayar'),
(539, 1, 5358, NULL, 'Juli', 2025, NULL, 'Belum Bayar'),
(540, 1, 5358, NULL, 'Agustus', 2025, NULL, 'Belum Bayar'),
(541, 1, 5358, NULL, 'September', 2025, NULL, 'Belum Bayar'),
(542, 1, 5358, NULL, 'Oktober', 2025, NULL, 'Belum Bayar'),
(543, 1, 5358, NULL, 'November', 2025, NULL, 'Belum Bayar'),
(544, 1, 5358, NULL, 'Desember', 2025, NULL, 'Belum Bayar'),
(545, 1, 5358, NULL, 'Januari', 2026, NULL, 'Belum Bayar'),
(546, 1, 5358, NULL, 'Februari', 2026, NULL, 'Belum Bayar'),
(547, 1, 5358, NULL, 'Maret', 2026, NULL, 'Belum Bayar'),
(548, 1, 5358, NULL, 'April', 2026, NULL, 'Belum Bayar'),
(549, 1, 5358, NULL, 'Mei', 2026, NULL, 'Belum Bayar'),
(550, 1, 5358, NULL, 'Juni', 2026, NULL, 'Belum Bayar'),
(551, 1, 5359, NULL, 'Juli', 2022, NULL, 'Belum Bayar'),
(552, 1, 5359, NULL, 'Agustus', 2022, NULL, 'Belum Bayar'),
(553, 1, 5359, NULL, 'September', 2022, NULL, 'Belum Bayar'),
(554, 1, 5359, NULL, 'Oktober', 2022, NULL, 'Belum Bayar'),
(555, 1, 5359, NULL, 'November', 2022, NULL, 'Belum Bayar'),
(556, 1, 5359, NULL, 'Desember', 2022, NULL, 'Belum Bayar'),
(557, 1, 5359, NULL, 'Januari', 2023, NULL, 'Belum Bayar'),
(558, 1, 5359, NULL, 'Februari', 2023, NULL, 'Belum Bayar'),
(559, 1, 5359, NULL, 'Maret', 2023, NULL, 'Belum Bayar'),
(560, 1, 5359, NULL, 'April', 2023, NULL, 'Belum Bayar'),
(561, 1, 5359, NULL, 'Mei', 2023, NULL, 'Belum Bayar'),
(562, 1, 5359, NULL, 'Juni', 2023, NULL, 'Belum Bayar'),
(563, 1, 5359, NULL, 'Juli', 2023, NULL, 'Belum Bayar'),
(564, 1, 5359, NULL, 'Agustus', 2023, NULL, 'Belum Bayar'),
(565, 1, 5359, NULL, 'September', 2023, NULL, 'Belum Bayar'),
(566, 1, 5359, NULL, 'Oktober', 2023, NULL, 'Belum Bayar'),
(567, 1, 5359, NULL, 'November', 2023, NULL, 'Belum Bayar'),
(568, 1, 5359, NULL, 'Desember', 2023, NULL, 'Belum Bayar'),
(569, 1, 5359, NULL, 'Januari', 2024, NULL, 'Belum Bayar'),
(570, 1, 5359, NULL, 'Februari', 2024, NULL, 'Belum Bayar'),
(571, 1, 5359, NULL, 'Maret', 2024, NULL, 'Belum Bayar'),
(572, 1, 5359, NULL, 'April', 2024, NULL, 'Belum Bayar'),
(573, 1, 5359, NULL, 'Mei', 2024, NULL, 'Belum Bayar'),
(574, 1, 5359, NULL, 'Juni', 2024, NULL, 'Belum Bayar'),
(575, 1, 5359, NULL, 'Juli', 2024, NULL, 'Belum Bayar'),
(576, 1, 5359, NULL, 'Agustus', 2024, NULL, 'Belum Bayar'),
(577, 1, 5359, NULL, 'September', 2024, NULL, 'Belum Bayar'),
(578, 1, 5359, NULL, 'Oktober', 2024, NULL, 'Belum Bayar'),
(579, 1, 5359, NULL, 'November', 2024, NULL, 'Belum Bayar'),
(580, 1, 5359, NULL, 'Desember', 2024, NULL, 'Belum Bayar'),
(581, 1, 5359, NULL, 'Januari', 2025, NULL, 'Belum Bayar'),
(582, 1, 5359, NULL, 'Februari', 2025, NULL, 'Belum Bayar'),
(583, 1, 5359, NULL, 'Maret', 2025, NULL, 'Belum Bayar'),
(584, 1, 5359, NULL, 'April', 2025, NULL, 'Belum Bayar'),
(585, 1, 5359, NULL, 'Mei', 2025, NULL, 'Belum Bayar'),
(586, 1, 5359, NULL, 'Juni', 2025, NULL, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(10) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `leveluser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `leveluser`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'petugas', 'petugas', 'petugas', 'petugas'),
(7, 'Gung Dika', 'gungdika', 'gungdikaebs', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `angkatan` int(20) NOT NULL,
  `kelas` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_ortu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `nisn`, `password`, `angkatan`, `kelas`, `alamat`, `no_ortu`) VALUES
(5351, 'Gung Dika', '2020112231', 'gungdika', 2022, 1, 'JL Gelogor Carik', '08123615310'),
(5352, 'Nauval', '2020112232', 'nauval', 2022, 1, 'Jalan P. Roti', '08219312973'),
(5353, 'Faiz', '2020112233', 'faiz', 2023, 2, 'Jl Supratman', '08996124788'),
(5354, 'Misellia', '2020112234', 'misell', 2023, 2, 'Jl. P. Misol', '08123812783'),
(5355, 'Cok De', '2020112235', 'cokde', 2024, 3, 'Jl. Sudirman', '08219312973'),
(5357, 'Sheilla', '2020112236', 'sheilla', 2023, 18, 'Jl jalan jalan', '08219312973'),
(5358, 'Gung dika', '2020112233', 'admin', 2023, 1, 'Jl supratman', '08996124788'),
(5359, 'Gangga', '0045121937', '1234', 2022, 2, 'Jl jalan jalan', '08996124788');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spp`
--

CREATE TABLE `tb_spp` (
  `angkatan` int(11) NOT NULL,
  `biaya` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_spp`
--

INSERT INTO `tb_spp` (`angkatan`, `biaya`) VALUES
(2022, 700000),
(2023, 700000),
(2024, 800000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_idpetugas_tb_pembayaran` (`id_petugas`),
  ADD KEY `fk_nisn_tb_pembayaran` (`nis`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_idspp_tb_siswa` (`angkatan`) USING BTREE,
  ADD KEY `fk_idkelas_tb_siswa` (`kelas`);

--
-- Indexes for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`angkatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=587;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `nis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5360;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2026;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `fk_idpetugas_tb_pembayaran` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `fk_nisn_tb_pembayaran` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `fk_idkelas_tb_siswa` FOREIGN KEY (`kelas`) REFERENCES `tb_kelas` (`Id_kelas`),
  ADD CONSTRAINT `fk_idspp_tb_siswa` FOREIGN KEY (`angkatan`) REFERENCES `tb_spp` (`angkatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
