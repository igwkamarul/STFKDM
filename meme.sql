-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: 172.20.30.11
-- Generation Time: May 09, 2014 at 08:16 AM
-- Server version: 5.0.21
-- PHP Version: 5.1.4
-- 
-- Database: `meme`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `add_fasiliti`
-- 

CREATE TABLE `add_fasiliti` (
  `id` int(11) NOT NULL,
  `no_tempahan` varchar(20) NOT NULL,
  `ic` varchar(111) NOT NULL,
  `kategori` varchar(111) NOT NULL,
  `id_fasiliti` int(11) NOT NULL,
  `fasiliti` varchar(1111) NOT NULL,
  `tarikh` date NOT NULL,
  `tarikh_mula` varchar(11) NOT NULL,
  `tarikh_akhir` varchar(11) NOT NULL,
  `jum_hari` int(11) NOT NULL,
  `rm_pa` varchar(111) NOT NULL,
  `rm_lcd` varchar(111) NOT NULL,
  `rm_mbulat` varchar(111) NOT NULL,
  `rm_mbuffet` varchar(111) NOT NULL,
  `rm_moblong` varchar(111) NOT NULL,
  `rm_kbanquet` varchar(111) NOT NULL,
  `rm_kplastik` varchar(111) NOT NULL,
  `bil_pa` int(11) NOT NULL,
  `bil_lcd` int(11) NOT NULL,
  `bil_mbulat` int(11) NOT NULL,
  `bil_mbuffet` int(11) NOT NULL,
  `bil_moblong` int(11) NOT NULL,
  `bil_banquet` int(11) NOT NULL,
  `bil_kplastik` int(11) NOT NULL,
  `jenis_susunan` varchar(111) NOT NULL,
  `bil_bilik` int(11) NOT NULL,
  `masa` varchar(111) NOT NULL,
  `harga` varchar(111) NOT NULL,
  `grand_total` varchar(111) NOT NULL,
  `total_peralatan` float(65,2) NOT NULL,
  `status_submit` int(11) NOT NULL,
  `status_approve` int(11) NOT NULL COMMENT '1 = Belum Approve ; 2 = Approve ; 3 = Tolak ; '
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `add_fasiliti`
-- 

INSERT INTO `add_fasiliti` (`id`, `no_tempahan`, `ic`, `kategori`, `id_fasiliti`, `fasiliti`, `tarikh`, `tarikh_mula`, `tarikh_akhir`, `jum_hari`, `rm_pa`, `rm_lcd`, `rm_mbulat`, `rm_mbuffet`, `rm_moblong`, `rm_kbanquet`, `rm_kplastik`, `bil_pa`, `bil_lcd`, `bil_mbulat`, `bil_mbuffet`, `bil_moblong`, `bil_banquet`, `bil_kplastik`, `jenis_susunan`, `bil_bilik`, `masa`, `harga`, `grand_total`, `total_peralatan`, `status_submit`, `status_approve`) VALUES (7598, 'SH1402176', '777777-77-7777', 'Bilik Mesyuarat', 18, 'Bilik Mesyuarat 2', '2014-02-21', '21-02-2014', '22-02-2014', 2, '150.00', '300.00', '18.00', '16.00', '0.00', '0.00', '0.00', 1, 2, 3, 4, 0, 0, 0, '', 0, '2PM-6PM', '100', '1034', 934.00, 1, 3),
(7598, 'SH1402176', '777777-77-7777', 'Bilik Mesyuarat', 18, 'Bilik Mesyuarat 2', '2014-02-22', '21-02-2014', '22-02-2014', 2, '150.00', '300.00', '18.00', '16.00', '0.00', '0.00', '0.00', 1, 2, 3, 4, 0, 0, 0, '', 0, '8AM-12PM', '100', '1034', 934.00, 1, 3),
(4360, 'SH1402176', '777777-77-7777', 'Asrama (25-02-2014 hingga 27-02-2014)', 11, 'Bilik 2 Orang', '2014-02-25', '25-02-2014', '27-02-2014', 2, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 3, '2PM-12PM', '90.00', '270', 0.00, 1, 3),
(4360, 'SH1402176', '777777-77-7777', 'Asrama (25-02-2014 hingga 27-02-2014)', 11, 'Bilik 2 Orang', '2014-02-26', '25-02-2014', '27-02-2014', 2, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 3, '2PM-12PM', '90.00', '270', 0.00, 1, 3),
(8165, 'SH1402177', '777777-77-7777', 'Dewan Seminar', 1, 'Dewan Seminar', '2014-02-25', '25-02-2014', '27-02-2014', 3, '300.00', '600.00', '6.00', '0.00', '0.00', '0.00', '0.00', 2, 4, 1, 0, 0, 0, 0, 'Teater (maksimum) = 350 pax\r\n', 0, '8AM-12PM', '400', '3106', 2706.00, 1, 3),
(8165, 'SH1402177', '777777-77-7777', 'Dewan Seminar', 1, 'Dewan Seminar', '2014-02-26', '25-02-2014', '27-02-2014', 3, '300.00', '600.00', '6.00', '0.00', '0.00', '0.00', '0.00', 2, 4, 1, 0, 0, 0, 0, 'Teater (maksimum) = 350 pax\r\n', 0, '2PM-6PM', '400', '3106', 2706.00, 1, 3),
(8165, 'SH1402177', '777777-77-7777', 'Dewan Seminar', 1, 'Dewan Seminar', '2014-02-27', '25-02-2014', '27-02-2014', 3, '300.00', '600.00', '6.00', '0.00', '0.00', '0.00', '0.00', 2, 4, 1, 0, 0, 0, 0, 'Teater (maksimum) = 350 pax\r\n', 0, '8PM-12AM', '400', '3106', 2706.00, 1, 3),
(296, 'SH1402177', '777777-77-7777', 'Asrama (21-02-2014 hingga 23-02-2014)', 14, 'Bilik 5 Orang', '2014-02-21', '21-02-2014', '23-02-2014', 2, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '180.00', '360', 0.00, 1, 3),
(296, 'SH1402177', '777777-77-7777', 'Asrama (21-02-2014 hingga 23-02-2014)', 14, 'Bilik 5 Orang', '2014-02-22', '21-02-2014', '23-02-2014', 2, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '180.00', '360', 0.00, 1, 3),
(3215, 'SH1402177', '777777-77-7777', 'Bilik Mesyuarat', 18, 'Bilik Mesyuarat 2', '2014-02-25', '25-02-2014', '27-02-2014', 3, '600.00', '300.00', '18.00', '0.00', '0.00', '0.00', '0.00', 4, 2, 3, 0, 0, 0, 0, '', 0, '8AM-12PM', '100', '2818', 2718.00, 1, 3),
(3215, 'SH1402177', '777777-77-7777', 'Bilik Mesyuarat', 18, 'Bilik Mesyuarat 2', '2014-02-26', '25-02-2014', '27-02-2014', 3, '600.00', '300.00', '18.00', '0.00', '0.00', '0.00', '0.00', 4, 2, 3, 0, 0, 0, 0, '', 0, '2PM-6PM', '100', '2818', 2718.00, 1, 3),
(3215, 'SH1402177', '777777-77-7777', 'Bilik Mesyuarat', 18, 'Bilik Mesyuarat 2', '2014-02-27', '25-02-2014', '27-02-2014', 3, '600.00', '300.00', '18.00', '0.00', '0.00', '0.00', '0.00', 4, 2, 3, 0, 0, 0, 0, '', 0, '8AM-12PM', '100', '2818', 2718.00, 1, 3),
(3254, 'SH1402178', '222222-22-2222', 'Bilik Latihan', 4, 'Bengkel 1', '2014-02-28', '27-02-2014', '28-02-2014', 2, '150.00', '0.00', '0.00', '0.00', '0.00', '35.00', '100.00', 1, 0, 0, 0, 0, 10, 100, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-12PM', '200', '635', 435.00, 1, 3),
(3254, 'SH1402178', '222222-22-2222', 'Bilik Latihan', 4, 'Bengkel 1', '2014-02-27', '27-02-2014', '28-02-2014', 2, '150.00', '0.00', '0.00', '0.00', '0.00', '35.00', '100.00', 1, 0, 0, 0, 0, 10, 100, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-12PM', '200', '635', 435.00, 1, 3),
(4773, 'SH1402178', '222222-22-2222', 'Asrama (27-02-2014 hingga 28-02-2014)', 11, 'Bilik 2 Orang', '2014-02-27', '27-02-2014', '28-02-2014', 1, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '90.00', '180', 0.00, 1, 3),
(7560, 'SH1402179', '888888-77-7777', 'Dewan Serbaguna', 3, 'Dewan Serbaguna (Majlis Perkahwinan)', '2014-02-27', '27-02-2014', '27-02-2014', 1, '0.00', '0.00', '60.00', '0.00', '0.00', '0.00', '100.00', 0, 0, 10, 0, 0, 0, 100, 'Teater (maksimum) = 600 pax\r\n', 0, '8AM-12AM', '1500', '1660', 160.00, 1, 3),
(9608, 'SH1402179', '888888-77-7777', 'Asrama (23-02-2014 hingga 23-02-2014)', 11, 'Bilik 2 Orang', '2014-02-23', '23-02-2014', '23-02-2014', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '90.00', '90', 0.00, 1, 3),
(8409, 'SH1402180', '', 'Dewan Serbaguna', 2, 'Dewan Serbaguna (Majlis Biasa)', '2014-02-27', '27-02-2014', '27-02-2014', 1, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, 0, 0, 0, 0, 0, 'Teater (maksimum) = 600 pax\r\n', 0, '2PM-12AM', '900', '900', 0.00, 0, 0),
(8051, 'SH1402181', '222222-22-2222', 'Dewan Seminar', 1, 'Dewan Seminar', '2014-02-25', '25-02-2014', '25-02-2014', 1, '150.00', '0.00', '0.00', '0.00', '0.00', '0.00', '100.00', 1, 0, 0, 0, 0, 0, 100, 'Teater (maksimum) = 350 pax\r\n', 0, '2PM-6PM', '600', '850', 250.00, 1, 3),
(315, 'SH1403182', '222222-22-2222', 'Dewan Seminar', 1, 'Dewan Seminar', '2014-03-31', '31-03-2014', '31-03-2014', 1, '150.00', '0.00', '0.00', '0.00', '0.00', '0.00', '100.00', 1, 0, 0, 0, 0, 0, 100, 'Teater (maksimum) = 350 pax\r\n', 0, '2PM-12AM', '1000', '1250', 250.00, 1, 3),
(8602, 'SH1404183', '', 'Bilik Latihan', 4, 'Bengkel 1', '2014-04-10', '10-04-2014', '11-04-2014', 2, '150.00', '0.00', '60.00', '0.00', '0.00', '0.00', '10.00', 1, 0, 10, 0, 0, 0, 10, 'Teater (maksimum) = 100 pax\r\n', 0, '2PM-12AM', '300', '670', 370.00, 0, 0),
(8602, 'SH1404183', '', 'Bilik Latihan', 4, 'Bengkel 1', '2014-04-11', '10-04-2014', '11-04-2014', 2, '150.00', '0.00', '60.00', '0.00', '0.00', '0.00', '10.00', 1, 0, 10, 0, 0, 0, 10, 'Teater (maksimum) = 100 pax\r\n', 0, '2PM-12AM', '300', '670', 370.00, 0, 0),
(7319, 'SH1405184', '870929-06-5555', 'Bilik Latihan', 4, 'Bengkel 1', '2014-06-01', '01-06-2014', '05-06-2014', 5, '150.00', '150.00', '42.00', '20.00', '0.00', '0.00', '63.00', 1, 1, 7, 5, 0, 0, 63, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-12AM', '500', '2125', 1625.00, 1, 2),
(6115, '', '777777-77-7777', 'Bilik Latihan', 5, 'Bengkel 2', '2014-04-29', '29-04-2014', '29-04-2014', 1, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', 0, 0, 0, 0, 0, 0, 50, 'Teater (maksimum) = 100 pax\r\n', 0, '2PM-12AM', '300', '350', 50.00, 1, 3),
(7319, 'SH1405184', '870929-06-5555', 'Bilik Latihan', 4, 'Bengkel 1', '2014-06-02', '01-06-2014', '05-06-2014', 5, '150.00', '150.00', '42.00', '20.00', '0.00', '0.00', '63.00', 1, 1, 7, 5, 0, 0, 63, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-12AM', '500', '2125', 1625.00, 1, 2),
(7319, 'SH1405184', '870929-06-5555', 'Bilik Latihan', 4, 'Bengkel 1', '2014-06-03', '01-06-2014', '05-06-2014', 5, '150.00', '150.00', '42.00', '20.00', '0.00', '0.00', '63.00', 1, 1, 7, 5, 0, 0, 63, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-12AM', '500', '2125', 1625.00, 1, 2),
(7319, 'SH1405184', '870929-06-5555', 'Bilik Latihan', 4, 'Bengkel 1', '2014-06-04', '01-06-2014', '05-06-2014', 5, '150.00', '150.00', '42.00', '20.00', '0.00', '0.00', '63.00', 1, 1, 7, 5, 0, 0, 63, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-12AM', '500', '2125', 1625.00, 1, 2),
(7319, 'SH1405184', '870929-06-5555', 'Bilik Latihan', 4, 'Bengkel 1', '2014-06-05', '01-06-2014', '05-06-2014', 5, '150.00', '150.00', '42.00', '20.00', '0.00', '0.00', '63.00', 1, 1, 7, 5, 0, 0, 63, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-6PM', '300', '1925', 1625.00, 1, 2),
(922, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 11, 'Bilik 2 Orang', '2014-06-01', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '90.00', '90', 0.00, 1, 2),
(922, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 11, 'Bilik 2 Orang', '2014-06-02', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '90.00', '90', 0.00, 1, 2),
(922, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 11, 'Bilik 2 Orang', '2014-06-03', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '90.00', '90', 0.00, 1, 2),
(922, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 11, 'Bilik 2 Orang', '2014-06-04', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '90.00', '90', 0.00, 1, 2),
(8385, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 12, 'Bilik 3 Orang', '2014-06-01', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 8, '2PM-12PM', '120.00', '960', 0.00, 1, 2),
(8385, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 12, 'Bilik 3 Orang', '2014-06-02', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 8, '2PM-12PM', '120.00', '960', 0.00, 1, 2),
(8385, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 12, 'Bilik 3 Orang', '2014-06-03', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 8, '2PM-12PM', '120.00', '960', 0.00, 1, 2),
(8385, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 12, 'Bilik 3 Orang', '2014-06-04', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 8, '2PM-12PM', '120.00', '960', 0.00, 1, 2),
(5034, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 13, 'Bilik 4 Orang', '2014-06-01', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '150.00', '300', 0.00, 1, 2),
(5034, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 13, 'Bilik 4 Orang', '2014-06-02', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '150.00', '300', 0.00, 1, 2),
(5034, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 13, 'Bilik 4 Orang', '2014-06-03', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '150.00', '300', 0.00, 1, 2),
(5034, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 13, 'Bilik 4 Orang', '2014-06-04', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '150.00', '300', 0.00, 1, 2),
(6567, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 14, 'Bilik 5 Orang', '2014-06-01', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '180.00', '180', 0.00, 1, 2),
(6567, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 14, 'Bilik 5 Orang', '2014-06-02', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '180.00', '180', 0.00, 1, 2),
(6567, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 14, 'Bilik 5 Orang', '2014-06-03', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '180.00', '180', 0.00, 1, 2),
(6567, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 14, 'Bilik 5 Orang', '2014-06-04', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '180.00', '180', 0.00, 1, 2),
(4069, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 15, 'Bilik 7 Orang', '2014-06-01', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '280.00', '280', 0.00, 1, 2),
(4069, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 15, 'Bilik 7 Orang', '2014-06-02', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '280.00', '280', 0.00, 1, 2),
(4069, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 15, 'Bilik 7 Orang', '2014-06-03', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '280.00', '280', 0.00, 1, 2),
(4069, 'SH1405184', '870929-06-5555', 'Asrama (01-06-2014 hingga 05-06-2014)', 15, 'Bilik 7 Orang', '2014-06-04', '01-06-2014', '05-06-2014', 4, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '280.00', '280', 0.00, 1, 2),
(7290, 'SH1405187', '811202-11-5148', 'Bilik Latihan', 4, 'Bengkel 1', '2014-05-25', '24-05-2014', '26-05-2014', 3, '150.00', '150.00', '36.00', '20.00', '0.00', '0.00', '60.00', 1, 1, 6, 5, 0, 0, 60, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-6PM', '300', '1316', 1016.00, 1, 2),
(7290, 'SH1405187', '811202-11-5148', 'Bilik Latihan', 4, 'Bengkel 1', '2014-05-24', '24-05-2014', '26-05-2014', 3, '150.00', '150.00', '36.00', '20.00', '0.00', '0.00', '60.00', 1, 1, 6, 5, 0, 0, 60, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-6PM', '300', '1316', 1016.00, 1, 2),
(7290, 'SH1405187', '811202-11-5148', 'Bilik Latihan', 4, 'Bengkel 1', '2014-05-26', '24-05-2014', '26-05-2014', 3, '150.00', '150.00', '36.00', '20.00', '0.00', '0.00', '60.00', 1, 1, 6, 5, 0, 0, 60, 'Teater (maksimum) = 100 pax\r\n', 0, '8AM-12PM', '200', '1216', 1016.00, 1, 2),
(7140, 'SH1405187', '811202-11-5148', 'Asrama (24-05-2014 hingga 26-05-2014)', 11, 'Bilik 2 Orang', '2014-05-24', '24-05-2014', '26-05-2014', 2, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '90.00', '180', 0.00, 1, 2),
(7140, 'SH1405187', '811202-11-5148', 'Asrama (24-05-2014 hingga 26-05-2014)', 11, 'Bilik 2 Orang', '2014-05-25', '24-05-2014', '26-05-2014', 2, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '90.00', '180', 0.00, 1, 2),
(1434, 'SH1405189', '770616-08-6836', 'Bilik Mesyuarat', 18, 'Bilik Mesyuarat 2', '2014-05-08', '08-05-2014', '08-05-2014', 1, '150.00', '150.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, 1, 0, 0, 0, 0, 0, '', 0, '8PM-12AM', '150', '450', 300.00, 1, 1),
(1257, 'SH1405190', '600724-03-5567', 'Asrama (08-05-2014 hingga 11-05-2014)', 12, 'Bilik 3 Orang', '2014-05-08', '08-05-2014', '11-05-2014', 3, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '120.00', '120', 0.00, 1, 1),
(1257, 'SH1405190', '600724-03-5567', 'Asrama (08-05-2014 hingga 11-05-2014)', 12, 'Bilik 3 Orang', '2014-05-09', '08-05-2014', '11-05-2014', 3, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '120.00', '120', 0.00, 1, 1),
(1257, 'SH1405190', '600724-03-5567', 'Asrama (08-05-2014 hingga 11-05-2014)', 12, 'Bilik 3 Orang', '2014-05-10', '08-05-2014', '11-05-2014', 3, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 1, '2PM-12PM', '120.00', '120', 0.00, 1, 1),
(9165, 'SH1405191', '', 'Asrama ()', 11, 'Bilik 2 Orang', '2014-05-08', '08-05-2014', '09-05-2014', 1, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', 2, '2PM-12PM', '90.00', '180', 0.00, 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `nama_penuh` varchar(50) NOT NULL,
  `jawatan` varchar(50) NOT NULL,
  `no_kp` varchar(14) NOT NULL,
  `no_telefon1` varchar(12) NOT NULL,
  `no_telefon2` varchar(12) NOT NULL,
  `autoriti` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`nama_penuh`, `jawatan`, `no_kp`, `no_telefon1`, `no_telefon2`, `autoriti`, `username`, `password`) VALUES ('Sistem Tempahan Fasiliti KDM', 'Kerani Besar', '780123-05-5675', '019-2424475', '03-8846773', 'Level 1', 'admin', 'abc123');

-- --------------------------------------------------------

-- 
-- Table structure for table `caterer`
-- 

CREATE TABLE `caterer` (
  `no_tempahan` varchar(10) NOT NULL,
  `katerer` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `caterer`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `costing`
-- 

CREATE TABLE `costing` (
  `id` int(11) NOT NULL,
  `no_tempahan` varchar(20) NOT NULL,
  `chk_sarapan` varchar(10) NOT NULL,
  `qty_pax_sarapan` int(11) NOT NULL,
  `qty_vip_sarapan` int(11) NOT NULL,
  `sesi_sarapan` int(11) NOT NULL,
  `kos_pax_sarapan` double(7,2) NOT NULL,
  `kos_vip_sarapan` double(7,2) NOT NULL,
  `kos_jualan_pax_sarapan` double(7,2) NOT NULL,
  `kos_jualan_vip_sarapan` double(7,2) NOT NULL,
  `jumlah_kos_sarapan` double(7,2) NOT NULL,
  `jumlah_harga_sarapan` double(7,2) NOT NULL,
  `chk_mnpagi` varchar(10) NOT NULL,
  `qty_pax_mnpagi` int(11) NOT NULL,
  `qty_vip_mnpagi` int(11) NOT NULL,
  `sesi_mnpagi` int(11) NOT NULL,
  `kos_pax_mnpagi` double(7,2) NOT NULL,
  `kos_vip_mnpagi` double(7,2) NOT NULL,
  `kos_jualan_pax_mnpagi` double(7,2) NOT NULL,
  `kos_jualan_vip_mnpagi` double(7,2) NOT NULL,
  `jumlah_kos_mnpagi` double(7,2) NOT NULL,
  `jumlah_harga_mnpagi` double(7,2) NOT NULL,
  `chk_mtgh` varchar(10) NOT NULL,
  `qty_pax_mtgh` int(11) NOT NULL,
  `qty_vip_mtgh` int(11) NOT NULL,
  `sesi_mtgh` int(11) NOT NULL,
  `kos_pax_mtgh` double(7,2) NOT NULL,
  `kos_vip_mtgh` double(7,2) NOT NULL,
  `kos_jualan_pax_mtgh` double(7,2) NOT NULL,
  `kos_jualan_vip_mtgh` double(7,2) NOT NULL,
  `jumlah_kos_mtgh` double(7,2) NOT NULL,
  `jumlah_harga_mtgh` double(7,2) NOT NULL,
  `chk_mkptg` varchar(10) NOT NULL,
  `qty_pax_mkptg` int(11) NOT NULL,
  `qty_vip_mkptg` int(11) NOT NULL,
  `sesi_mkptg` int(11) NOT NULL,
  `kos_pax_mkptg` double(7,2) NOT NULL,
  `kos_vip_mkptg` double(7,2) NOT NULL,
  `kos_jualan_pax_mkptg` double(7,2) NOT NULL,
  `kos_jualan_vip_mkptg` double(7,2) NOT NULL,
  `jumlah_kos_mkptg` double(7,2) NOT NULL,
  `jumlah_harga_mkptg` double(7,2) NOT NULL,
  `chk_mkmlm` varchar(10) NOT NULL,
  `qty_pax_mkmlm` int(11) NOT NULL,
  `qty_vip_mkmlm` int(11) NOT NULL,
  `sesi_mkmlm` int(11) NOT NULL,
  `kos_pax_mkmlm` double(7,2) NOT NULL,
  `kos_vip_mkmlm` double(7,2) NOT NULL,
  `kos_jualan_pax_mkmlm` double(7,2) NOT NULL,
  `kos_jualan_vip_mkmlm` double(7,2) NOT NULL,
  `jumlah_kos_mkmlm` double(7,2) NOT NULL,
  `jumlah_harga_mkmlm` double(7,2) NOT NULL,
  `chk_mnmlm` varchar(10) NOT NULL,
  `qty_pax_mnmlm` int(11) NOT NULL,
  `qty_vip_mnmlm` int(11) NOT NULL,
  `sesi_mnmlm` int(11) NOT NULL,
  `kos_pax_mnmlm` double(7,2) NOT NULL,
  `kos_vip_mnmlm` double(7,2) NOT NULL,
  `kos_jualan_pax_mnmlm` double(7,2) NOT NULL,
  `kos_jualan_vip_mnmlm` double(7,2) NOT NULL,
  `jumlah_kos_mnmlm` double(7,2) NOT NULL,
  `jumlah_harga_mnmlm` double(7,2) NOT NULL,
  `chk_bbq` varchar(10) NOT NULL,
  `qty_pax_bbq` int(11) NOT NULL,
  `qty_vip_bbq` int(11) NOT NULL,
  `sesi_bbq` int(11) NOT NULL,
  `kos_pax_bbq` double(7,2) NOT NULL,
  `kos_vip_bbq` double(7,2) NOT NULL,
  `kos_jualan_pax_bbq` double(7,2) NOT NULL,
  `kos_jualan_vip_bbq` double(7,2) NOT NULL,
  `jumlah_kos_bbq` double(7,2) NOT NULL,
  `jumlah_harga_bbq` double(7,2) NOT NULL,
  `chk_hitea` varchar(10) NOT NULL,
  `qty_pax_hitea` int(11) NOT NULL,
  `qty_vip_hitea` int(11) NOT NULL,
  `sesi_hitea` int(11) NOT NULL,
  `kos_pax_hitea` double(7,2) NOT NULL,
  `kos_vip_hitea` double(7,2) NOT NULL,
  `kos_jualan_pax_hitea` double(7,2) NOT NULL,
  `kos_jualan_vip_hitea` double(7,2) NOT NULL,
  `jumlah_kos_hitea` double(7,2) NOT NULL,
  `jumlah_harga_hitea` double(7,2) NOT NULL,
  `chk_banner` varchar(10) NOT NULL,
  `banner_size` varchar(50) NOT NULL,
  `banner_kos` double(7,2) NOT NULL,
  `banner_jual` double(7,2) NOT NULL,
  `banner_jumlah_kos` double(7,2) NOT NULL,
  `banner_jumlah_harga` double(7,2) NOT NULL,
  `chk_pokok` varchar(10) NOT NULL,
  `pokok_kos` double(7,2) NOT NULL,
  `pokok_jual` double(7,2) NOT NULL,
  `pokok_jumlah_kos` double(7,2) NOT NULL,
  `pokok_jumlah_harga` double(7,2) NOT NULL,
  `chk_hiasan` varchar(10) NOT NULL,
  `hiasan_kos` double(7,2) NOT NULL,
  `hiasan_jual` double(7,2) NOT NULL,
  `hiasan_jumlah_kos` double(7,2) NOT NULL,
  `hiasan_jumlah_harga` double(7,2) NOT NULL,
  `chk_karpet` varchar(10) NOT NULL,
  `karpet_kos` double(7,2) NOT NULL,
  `karpet_jual` double(7,2) NOT NULL,
  `karpet_jumlah_kos` double(7,2) NOT NULL,
  `karpet_jumlah_harga` double(7,2) NOT NULL,
  `chk_raptai` varchar(10) NOT NULL,
  `raptai_desc` varchar(30) NOT NULL,
  `raptai_kos` double(7,2) NOT NULL,
  `raptai_jual` double(7,2) NOT NULL,
  `raptai_jumlah_kos` double(7,2) NOT NULL,
  `raptai_jumlah_harga` double(7,2) NOT NULL,
  `chk_misc` varchar(10) NOT NULL,
  `misc_caption` varchar(30) NOT NULL,
  `misc_desc` varchar(30) NOT NULL,
  `misc_kos` double(7,2) NOT NULL,
  `misc_jual` double(7,2) NOT NULL,
  `misc_jumlah_kos` double(7,2) NOT NULL,
  `misc_jumlah_harga` double(7,2) NOT NULL,
  `jumlah_kos` double(7,2) NOT NULL,
  `jumlah_harga` double(7,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `costing`
-- 

INSERT INTO `costing` (`id`, `no_tempahan`, `chk_sarapan`, `qty_pax_sarapan`, `qty_vip_sarapan`, `sesi_sarapan`, `kos_pax_sarapan`, `kos_vip_sarapan`, `kos_jualan_pax_sarapan`, `kos_jualan_vip_sarapan`, `jumlah_kos_sarapan`, `jumlah_harga_sarapan`, `chk_mnpagi`, `qty_pax_mnpagi`, `qty_vip_mnpagi`, `sesi_mnpagi`, `kos_pax_mnpagi`, `kos_vip_mnpagi`, `kos_jualan_pax_mnpagi`, `kos_jualan_vip_mnpagi`, `jumlah_kos_mnpagi`, `jumlah_harga_mnpagi`, `chk_mtgh`, `qty_pax_mtgh`, `qty_vip_mtgh`, `sesi_mtgh`, `kos_pax_mtgh`, `kos_vip_mtgh`, `kos_jualan_pax_mtgh`, `kos_jualan_vip_mtgh`, `jumlah_kos_mtgh`, `jumlah_harga_mtgh`, `chk_mkptg`, `qty_pax_mkptg`, `qty_vip_mkptg`, `sesi_mkptg`, `kos_pax_mkptg`, `kos_vip_mkptg`, `kos_jualan_pax_mkptg`, `kos_jualan_vip_mkptg`, `jumlah_kos_mkptg`, `jumlah_harga_mkptg`, `chk_mkmlm`, `qty_pax_mkmlm`, `qty_vip_mkmlm`, `sesi_mkmlm`, `kos_pax_mkmlm`, `kos_vip_mkmlm`, `kos_jualan_pax_mkmlm`, `kos_jualan_vip_mkmlm`, `jumlah_kos_mkmlm`, `jumlah_harga_mkmlm`, `chk_mnmlm`, `qty_pax_mnmlm`, `qty_vip_mnmlm`, `sesi_mnmlm`, `kos_pax_mnmlm`, `kos_vip_mnmlm`, `kos_jualan_pax_mnmlm`, `kos_jualan_vip_mnmlm`, `jumlah_kos_mnmlm`, `jumlah_harga_mnmlm`, `chk_bbq`, `qty_pax_bbq`, `qty_vip_bbq`, `sesi_bbq`, `kos_pax_bbq`, `kos_vip_bbq`, `kos_jualan_pax_bbq`, `kos_jualan_vip_bbq`, `jumlah_kos_bbq`, `jumlah_harga_bbq`, `chk_hitea`, `qty_pax_hitea`, `qty_vip_hitea`, `sesi_hitea`, `kos_pax_hitea`, `kos_vip_hitea`, `kos_jualan_pax_hitea`, `kos_jualan_vip_hitea`, `jumlah_kos_hitea`, `jumlah_harga_hitea`, `chk_banner`, `banner_size`, `banner_kos`, `banner_jual`, `banner_jumlah_kos`, `banner_jumlah_harga`, `chk_pokok`, `pokok_kos`, `pokok_jual`, `pokok_jumlah_kos`, `pokok_jumlah_harga`, `chk_hiasan`, `hiasan_kos`, `hiasan_jual`, `hiasan_jumlah_kos`, `hiasan_jumlah_harga`, `chk_karpet`, `karpet_kos`, `karpet_jual`, `karpet_jumlah_kos`, `karpet_jumlah_harga`, `chk_raptai`, `raptai_desc`, `raptai_kos`, `raptai_jual`, `raptai_jumlah_kos`, `raptai_jumlah_harga`, `chk_misc`, `misc_caption`, `misc_desc`, `misc_kos`, `misc_jual`, `misc_jumlah_kos`, `misc_jumlah_harga`, `jumlah_kos`, `jumlah_harga`) VALUES (4360, 'SH1402176', '', 10, 2, 1, 7.50, 12.00, 7.50, 12.00, 99.00, 99.00, '', 10, 2, 1, 7.50, 12.00, 7.50, 12.00, 99.00, 99.00, '', 10, 2, 1, 7.50, 12.00, 7.50, 12.00, 99.00, 99.00, '', 10, 2, 1, 7.50, 12.00, 7.50, 12.00, 99.00, 99.00, '', 10, 2, 1, 7.50, 12.00, 7.50, 12.00, 99.00, 99.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', '0', 0.00, 0.00, 0.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, '', '', 0.00, 0.00, 0.00, 0.00, '', '', '', 0.00, 0.00, 0.00, 0.00, 495.00, 495.00),
(4773, 'SH1402178', 'ON', 100, 10, 1, 5.00, 10.00, 6.00, 11.00, 600.00, 710.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, '', '0', 0.00, 0.00, 0.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, '', 0.00, 0.00, 0.00, 0.00, '', '', 0.00, 0.00, 0.00, 0.00, '', '', '', 0.00, 0.00, 0.00, 0.00, 600.00, 710.00);

-- --------------------------------------------------------

-- 
-- Table structure for table `fasiliti`
-- 

CREATE TABLE `fasiliti` (
  `id_fasiliti` int(11) NOT NULL auto_increment,
  `kod_fasiliti` varchar(10) NOT NULL,
  `no` int(11) NOT NULL,
  `nama_fasiliti` varchar(80) NOT NULL,
  `fasiliti` varchar(50) NOT NULL,
  `kapasiti` text NOT NULL,
  `kelengkapan` text NOT NULL,
  `separuh_hari` float NOT NULL,
  `sehari` float NOT NULL,
  `sehari_semalam` float NOT NULL,
  `qty` int(11) NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY  (`id_fasiliti`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `fasiliti`
-- 

INSERT INTO `fasiliti` (`id_fasiliti`, `kod_fasiliti`, `no`, `nama_fasiliti`, `fasiliti`, `kapasiti`, `kelengkapan`, `separuh_hari`, `sehari`, `sehari_semalam`, `qty`, `catatan`) VALUES (1, 'KDM-FAS1', 1, 'Dewan Seminar', 'Dewan Seminar', '- Teater (maksimum) = 350 pax\r\n- Class room (maksimum) = 160 pax\r\n', '- Kerusi Banquet (200 biji)\r\n- Meja Oblong (terhad utk 140 pax)\r\n- 2 unit Rostrum\r\n- 1 unit PA System (statik)\r\n- 1 unit LCD Projector (statik)\r\n- 1 unit white screen\r\n- Single seat ( 5 unit )', 600, 1000, 1500, 1, 'Penyewa tidak dibenarkan membawa makanan atau makan dalam Dewan Seminar. \r\n- Penyewa perlu memilih samada menyewa Foyer atau Dewan Serbaguna untuk tempat makan. \r\nCaj kebersihan RM300.00 akan dikenakan jika memilih katerer luar (bukan panel caterer BCIC)'),
(2, 'KDM-FAS2', 2, 'Dewan Serbaguna (Majlis Biasa)', 'Dewan Serbaguna', '- Teater (maksimum) = 600 pax\r\n- Meja Bulat (maksimum) = 40\r\n- Booth (maksimum) = 30\r\n\r\n', '- Stage', 500, 900, 1200, 1, 'Caj kebersihan RM300.00 akan dikenakan jika memilih katerer luar (bukan panel caterer BCIC)'),
(3, 'KDM-FAS3', 3, 'Dewan Serbaguna (Majlis Perkahwinan)', 'Dewan Serbaguna', '- Teater (maksimum) = 600 pax\r\n- Meja Bulat (maksimum) = 40\r\n- Booth (maksimum) = 30\r\n', '- Stage', 0, 0, 1500, 1, 'Tiada caterer disediakan, caj kebersihan RM 300.00 akan dikenakan'),
(4, 'KDM-FAS4', 4, 'Bengkel 1', 'Bilik Latihan', '- Teater (maksimum) = 100 pax\r\n- Class Room (maksimum) = 50 pax\r\n', '- Foyer\r\n- 1 Unit Meja Guru\r\n- Kerusi (terhad kpd jenis setup)\r\n- 1 Unit Flipchart\r\n- 1 Unit White board\r\n- 1 Unit White Screen', 200, 300, 500, 1, ''),
(5, 'KDM-FAS5', 5, 'Bengkel 2', 'Bilik Latihan', '- Teater (maksimum) = 100 pax\r\n- Class Room (maksimum) = 50 pax', '- Foyer\r\n- 1 Unit Meja Guru\r\n- Kerusi (terhad kpd jenis setup)\r\n- 1 Unit Flipchart\r\n- 1 Unit White board\r\n- 1 Unit White Screen', 200, 300, 500, 1, ''),
(6, 'KDM-FAS6', 6, 'Bengkel 3', 'Bilik Latihan', '- Teater (maksimum) = 100 pax\r\n- Class Room (maksimum) = 50 pax', '- Foyer\r\n- 1 Unit Meja Guru\r\n- Kerusi (terhad kpd jenis setup)\r\n- 1 Unit Flipchart\r\n- 1 Unit White board\r\n- 1 Unit White Screen', 200, 300, 500, 1, ''),
(7, 'KDM-FAS7', 7, 'Makmal Komputer', 'Makmal Komputer', '', '- 1 unit meja guru\r\n- 23 Kerusi\r\n- 22 unit Komputer\r\n- 1 unit printer\r\n- 1 unit White Board\r\n- 1 unit LCD Projector\r\n- 1 unit white screen', 300, 500, 800, 1, '<b>Spesifikasi Komputer</b><br><br>\r\n\r\nOS Platform : Window XP Profesional<br>\r\nPerisian &nbsp: Microsoft Office XP Pro<br>\r\nBrowser : Mozilla Firefox & Internet Explorer 8<br>\r\nSpec PC : Processor Core 2 Duo 1.8 ghz<br>\r\n         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1gb Ram<br>\r\n         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 160 gb hard disk<br>\r\nTalian Internet : 2mbps Streamyx'),
(8, 'KDM-FAS8', 8, 'Foyer A (Tingkat Bawah Blok B)', 'Foyer', '- Maximum 150 pax', '', 200, 200, 200, 1, 'Caj kebersihan RM300.00 akan dikenakan jika memilih katerer luar (bukan panel caterer BCIC)'),
(9, 'KDM-FAS9', 9, 'Foyer B ( Tingkat 1 Blok B )', 'Foyer', '- Maximum 150 pax', '', 200, 200, 200, 1, 'Caj kebersihan RM300.00 akan dikenakan jika memilih katerer luar (bukan panel caterer BCIC)'),
(10, 'KDM-FAS10', 10, 'Foyer C ( Lobi Bengkel )', 'Foyer', '- Maximum 70 pax', '', 200, 200, 200, 1, 'Caj kebersihan RM300.00 akan dikenakan jika memilih katerer luar (bukan panel caterer BCIC)'),
(11, 'KDM-FAS11', 11, 'Bilik 2 Orang', 'Asrama', '- Maximum 2 pax', '- 2 helai tuala\r\n- 2 helai selimut\r\n- TV\r\n- Jug elektrik', 0, 0, 90, 4, 'Jumlah Bilik: 4'),
(12, 'KDM-FAS12', 12, 'Bilik 3 Orang', 'Asrama', '- Maximum 3 pax', '- 3 helai tuala\r\n- 3 helai selimut\r\n- TV\r\n- Jug elektrik', 0, 0, 120, 11, 'Jumlah Bilik: 11'),
(13, 'KDM-FAS13', 13, 'Bilik 4 Orang', 'Asrama', '- Maximum 4 pax\r\n', '- 4 helai tuala\r\n- 4 helai selimut\r\n- TV\r\n- Jug elektrik', 0, 0, 150, 6, 'Jumlah Bilik: 6'),
(14, 'KDM-FAS14', 14, 'Bilik 5 Orang', 'Asrama', '- Maximum 5 pax\r\n', '- 5 helai tuala\r\n- 5 helai selimut\r\n- TV\r\n- Jug elektrik', 0, 0, 180, 3, 'Jumlah Bilik: 3'),
(15, 'KDM-FAS15', 15, 'Bilik 7 Orang', 'Asrama', '- Maximum 7 pax\r\n', '- 7 helai tuala\r\n- 7 helai selimut\r\n- TV\r\n- Jug elektrik', 0, 0, 280, 1, 'Jumlah Bilik: 1'),
(16, 'KDM-FAS16', 16, '1 Single Bed + 1 Double Bed', 'Asrama', '', '', 0, 0, 120, 1, 'Jumlah Bilik: 1'),
(17, 'KDM-FAS17', 17, '2 Single Bed + 2 Double Bed', 'Asrama', '', '', 0, 0, 150, 1, 'Jumlah Bilik: 1'),
(18, 'KDM-FAS18', 18, 'Bilik Mesyuarat 2', 'Bilik Mesyuarat', '', '- 10 Kerusi\r\n- 1 Meja Mesyuarat', 150, 250, 400, 1, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `maklumat`
-- 

CREATE TABLE `maklumat` (
  `id_maklumat` int(11) NOT NULL auto_increment,
  `ic` varchar(111) NOT NULL,
  `tujuan` varchar(1111) NOT NULL,
  `bil_peserta` int(11) NOT NULL,
  `makan` varchar(10) NOT NULL,
  `caterer` varchar(111) NOT NULL,
  `no_tempahan` varchar(111) NOT NULL,
  `caj_caterer` varchar(111) NOT NULL,
  `caj_kebersihan` varchar(111) NOT NULL,
  `bilik_basuhan` varchar(111) NOT NULL,
  PRIMARY KEY  (`id_maklumat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `maklumat`
-- 

INSERT INTO `maklumat` (`id_maklumat`, `ic`, `tujuan`, `bil_peserta`, `makan`, `caterer`, `no_tempahan`, `caj_caterer`, `caj_kebersihan`, `bilik_basuhan`) VALUES (1, '777777-77-7777', 'nikoh', 20, '', '', 'SH1402175', '', '', ''),
(2, '777777-77-7777', 'tido hilang penat', 20, 'Tidak', '', 'SH1402176', '', '', ''),
(3, '777777-77-7777', 'kursus', 40, 'Ya', 'Caterer Sendiri', 'SH1402177', '', '300.00', ''),
(4, '222222-22-2222', 'majlis keraian', 100, 'Ya', 'Caterer Sendiri', 'SH1402178', '', '300.00', ''),
(5, '888888-77-7777', 'kawen', 100, '', '', 'SH1402179', '', '', ''),
(6, '222222-22-2222', 'test seminar', 100, 'Ya', 'Caterer Sendiri', 'SH1402181', '', '300.00', '150.00'),
(7, '222222-22-2222', 'seminar', 100, 'Ya', 'Caterer BCIC', 'SH1403182', '', '', ''),
(8, '777777-77-7777', 'majlis', 50, 'Ya', 'Caterer Sendiri', '', '', '300.00', '150.00'),
(9, '870929-06-5555', 'Kursus Pembantu Pemaju Masyarakat', 63, 'Ya', 'Caterer BCIC', 'SH1405184', '', '', ''),
(10, '811202-11-5148', 'mesyuarat', 60, 'Ya', 'Caterer Sendiri', 'SH1405187', '', '300.00', ''),
(11, '770616-08-6836', 'mesyuarat', 10, 'Tidak', '', 'SH1405189', '', '', ''),
(12, '600724-03-5567', 'MENGINAP', 3, 'Tidak', '', 'SH1405190', '', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `pelanggan`
-- 

CREATE TABLE `pelanggan` (
  `id_pengguna` int(11) NOT NULL auto_increment,
  `gelaran` varchar(15) NOT NULL,
  `nama_penuh` varchar(100) NOT NULL,
  `ic` varchar(111) NOT NULL,
  `agensi` varchar(100) NOT NULL,
  `coid` varchar(111) NOT NULL,
  `sektor` varchar(100) NOT NULL,
  `emel` varchar(50) NOT NULL,
  `tel_bimbit1` varchar(15) NOT NULL,
  `tel_bimbit2` varchar(15) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `sambungan` varchar(10) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `poskod` varchar(5) NOT NULL,
  `daerah` varchar(50) NOT NULL,
  `negeri` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_pengguna`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `pelanggan`
-- 

INSERT INTO `pelanggan` (`id_pengguna`, `gelaran`, `nama_penuh`, `ic`, `agensi`, `coid`, `sektor`, `emel`, `tel_bimbit1`, `tel_bimbit2`, `telefon`, `sambungan`, `fax`, `alamat`, `poskod`, `daerah`, `negeri`) VALUES (3, 'tuan', 'zabidi ahmad', '777777-77-7777', 'fama', '', 'Agensi Kerajaan', '', '0017877788', '', '', '', '', 'kuantan', '25530', 'kuantan', 'Pahang'),
(4, 'tuan', 'rahmah hassan', '555555-66-6667', '', '', 'Persendirian', '', '0011122355', '', '', '', '', 'kuantan', '28700', 'kuantan', 'Pahang'),
(5, 'cik', 'siti', '222222-22-2222', '', '', 'kerajaan', 'siti@yahoo.com', '01387678687', '', '', '', '', 'kl', '13133', 'sentul', 'Kedah'),
(6, 'tuan', 'hamzah admad', '888888-77-7777', '', '', 'persendirian', '', '0122251110', '', '', '', '', 'kuantan', '28000', 'kuantan', 'Pahang'),
(7, 'puan', 'habibah musa', '870929-06-5555', '', '', 'persendirian', '', '01254655558', '', '', '', '', 'kuantan', '52000', 'kuantan', 'Pahang'),
(8, 'puan', 'norisuliana ishak', '811202-11-5148', 'jabatan kesihatan negeri pahang', '', 'kerajaan', '', '01266666666', '', '', '', '', 'bahagian keselamatan & kualiti makanan\r\njalan im 14\r\nbahagian indera mahkota', '25200', 'kuantan', 'Pahang'),
(9, 'cik', 'nor suriati', '770616-08-6836', '', '', 'pilih', '', '0179712175', '', '', '', '', 'kompleks dagangan mahkota,jln sultan ahmad shah\r\nbandar indera mahkota', '25200', 'kuantan', 'Pahang'),
(10, 'datuk', 'mohamad salin bin yusof', '600724-03-5567', '', '', 'persendirian', '', '0139494635', '', '', '', '095739922', 'NO 7,', '25200', 'KUANTAN', 'Pahang');

-- --------------------------------------------------------

-- 
-- Table structure for table `pembayaran`
-- 

CREATE TABLE `pembayaran` (
  `no_tempahan` varchar(20) NOT NULL,
  `id_bayaran` int(11) NOT NULL auto_increment,
  `tarikh_bayaran` varchar(20) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_bayaran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `pembayaran`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `penambahan`
-- 

CREATE TABLE `penambahan` (
  `id` int(11) NOT NULL,
  `no_tempahan` varchar(10) NOT NULL,
  `qty_pa_system` int(11) NOT NULL,
  `jumlah_kos_pa_system` varchar(10) NOT NULL,
  `jum_harga_pa_system` varchar(10) NOT NULL,
  `qty_lcd_projector` int(11) NOT NULL,
  `jumlah_kos_lcd_projector` varchar(10) NOT NULL,
  `jum_harga_lcd_projector` varchar(10) NOT NULL,
  `qty_meja_bulat` int(11) NOT NULL,
  `jumlah_kos_meja_bulat` varchar(10) NOT NULL,
  `jum_harga_meja_bulat` varchar(10) NOT NULL,
  `qty_meja_buffet` int(11) NOT NULL,
  `jumlah_kos_meja_buffet` varchar(10) NOT NULL,
  `jum_harga_meja_buffet` varchar(10) NOT NULL,
  `qty_meja_oblong` int(11) NOT NULL,
  `jumlah_kos_meja_oblong` varchar(10) NOT NULL,
  `jum_harga_meja_oblong` varchar(10) NOT NULL,
  `qty_kerusi_banquet` int(11) NOT NULL,
  `jumlah_kos_kerusi_banquet` varchar(10) NOT NULL,
  `jum_harga_kerusi_banquet` varchar(10) NOT NULL,
  `qty_kerusi_plastik` int(11) NOT NULL,
  `jumlah_kos_kerusi_plastik` varchar(10) NOT NULL,
  `jum_harga_kerusi_plastik` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `penambahan`
-- 

INSERT INTO `penambahan` (`id`, `no_tempahan`, `qty_pa_system`, `jumlah_kos_pa_system`, `jum_harga_pa_system`, `qty_lcd_projector`, `jumlah_kos_lcd_projector`, `jum_harga_lcd_projector`, `qty_meja_bulat`, `jumlah_kos_meja_bulat`, `jum_harga_meja_bulat`, `qty_meja_buffet`, `jumlah_kos_meja_buffet`, `jum_harga_meja_buffet`, `qty_meja_oblong`, `jumlah_kos_meja_oblong`, `jum_harga_meja_oblong`, `qty_kerusi_banquet`, `jumlah_kos_kerusi_banquet`, `jum_harga_kerusi_banquet`, `qty_kerusi_plastik`, `jumlah_kos_kerusi_plastik`, `jum_harga_kerusi_plastik`) VALUES (4360, 'SH1402176', 2, '300.00', '300.00', 4, '600.00', '600.00', 3, '18.00', '18.00', 4, '16.00', '16.00', 0, '0.00', '0.00', 0, '0.00', '0.00', 0, '0.00', '0.00'),
(4773, 'SH1402178', 2, '', '300.00', 0, '', '0.00', 0, '', '0.00', 0, '', '0.00', 0, '', '0.00', 0, '', '0.00', 0, '', '0.00');

-- --------------------------------------------------------

-- 
-- Table structure for table `range_capacity`
-- 

CREATE TABLE `range_capacity` (
  `id_renge` int(11) NOT NULL auto_increment,
  `id_fasiliti` int(11) NOT NULL,
  `kod_fasiliti` varchar(10) NOT NULL,
  `ranges` varchar(100) NOT NULL,
  `kelengkapan` text NOT NULL,
  PRIMARY KEY  (`id_renge`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `range_capacity`
-- 

INSERT INTO `range_capacity` (`id_renge`, `id_fasiliti`, `kod_fasiliti`, `ranges`, `kelengkapan`) VALUES (1, 3, 'KDM-FAS3', '700 PAX - 1,200 PAX', '25 MEJA BULAT\r\n20 MEJA BUFET\r\n250 KERUSI PLASTIK\r\n4 MEJA OBLONG'),
(2, 3, 'KDM-FAS3', '1,200 PAX - 2,000 PAX', '35 MEJA BULAT\r\n25 MEJA BUFET\r\n350 KERUSI PLASTIK\r\n4 MEJA OBLONG'),
(3, 4, 'KDM-FAS4', '15 PAX - 30 PAX', '2-3 MEJA BULAT\r\n5 MEJA BUFET\r\n15-30 KERUSI PLASTIK'),
(4, 4, 'KDM-FAS4', '30 PAX - 65 PAX', '4-7 MEJA BULAT\r\n5 MEJA BUFET\r\n30-65 KERUSI PLASTIK'),
(5, 4, 'KDM-FAS4', '65 PAX - 100 PAX', '7-10 MEJA BULAT\r\n10 MEJA BUFET\r\n65-100 KERUSI PLASTIK'),
(6, 5, 'KDM-FAS5', '15 PAX - 30 PAX', '2-3 MEJA BULAT\r\n5 MEJA BUFET\r\n15-30 KERUSI PLASTIK'),
(7, 5, 'KDM-FAS5', '30 PAX - 65 PAX', '4-7 MEJA BULAT\r\n5 MEJA BUFET\r\n30-65 KERUSI PLASTIK'),
(8, 5, 'KDM-FAS5', '65 PAX - 100 PAX', '7-10 MEJA BULAT\r\n10 MEJA BUFET\r\n65-100 KERUSI PLASTIK'),
(9, 6, 'KDM-FAS6', '15 PAX - 30 PAX', '2-3 MEJA BULAT\r\n5 MEJA BUFET\r\n15-30 KERUSI PLASTIK'),
(10, 6, 'KDM-FAS6', '65 PAX - 100 PAX', '7-10 MEJA BULAT\r\n10 MEJA BUFET\r\n65-100 KERUSI PLASTIK'),
(11, 6, 'KDM-FAS6', '30 PAX - 65 PAX', '4-7 MEJA BULAT\r\n5 MEJA BUFET\r\n30-65 KERUSI PLASTIK'),
(12, 8, 'KDM-FAS8', '50-100 PAX (SET UP CLASSROOM)', '5-10 MEJA BULAT\r\n5-10 MEJA BUFET\r\n50-100 KERUSI PLASTIK'),
(13, 8, 'KDM-FAS8', '100-160 PAX (SET UP CLASSROOM)', '10-16 MEJA BULAT\r\n5-10 MEJA BUFET\r\n100-160 KERUSI PLASTIK'),
(14, 9, 'KDM-FAS9', '50-100 PAX (SET UP CLASSROOM)', '5-10 MEJA BULAT\r\n5-10 MEJA BUFET\r\n50-100 KERUSI PLASTIK'),
(15, 9, 'KDM-FAS9', '100-160 PAX (SET UP CLASSROOM)', '10-16 MEJA BULAT\r\n5-10 MEJA BUFET\r\n100-160 KERUSI PLASTIK'),
(16, 1, 'KDM-FAS1', '50-100 PAX (SET UP CLASSROOM)', '5-10 MEJA BULAT\r\n5-10 MEJA BUFET\r\n50-100 KERUSI PLASTIK'),
(17, 1, 'KDM-FAS1', '100-160 PAX (SET UP CLASSROOM)', '10-16 MEJA BULAT\r\n5-10 MEJA BUFET\r\n100-160 KERUSI PLASTIK'),
(18, 2, 'KDM-FAS2', '50-100 PAX (SET UP CLASSROOM)', '5-10 MEJA BULAT\r\n5-10 MEJA BUFET\r\n50-100 KERUSI PLASTIK'),
(19, 2, 'KDM-FAS2', '100-160 PAX (SET UP CLASSROOM)', '10-16 MEJA BULAT\r\n5-10 MEJA BUFET\r\n100-160 KERUSI PLASTIK'),
(20, 10, 'KDM-FAS10', '50-100 PAX (SET UP CLASSROOM)', '5-10 MEJA BULAT\r\n5-10 MEJA BUFET\r\n50-100 KERUSI PLASTIK'),
(21, 10, 'KDM-FAS10', '100-160 PAX (SET UP CLASSROOM)', '10-16 MEJA BULAT\r\n5-10 MEJA BUFET\r\n100-160 KERUSI PLASTIK');

-- --------------------------------------------------------

-- 
-- Table structure for table `running_number`
-- 

CREATE TABLE `running_number` (
  `running_no` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `running_number`
-- 

INSERT INTO `running_number` (`running_no`) VALUES ('1113001'),
('SH1311002'),
('SH1311003'),
('SH1311004'),
('SH1311005'),
('SH1311006'),
('SH1311007'),
('SH1311008'),
('SH1311009'),
('SH1311010'),
('SH1311011'),
('SH1311012'),
('SH1311013'),
('SH1311014'),
('SH1311015'),
('SH1311016'),
('SH1311017'),
('SH1311018'),
('SH1311019'),
('SH1311020'),
('SH1311021'),
('SH1311022'),
('SH1311023'),
('SH1311024'),
('SH1311025'),
('SH1311026'),
('SH1311027'),
(''),
('SH1311029'),
('SH1311030'),
('SH1311031'),
('SH1311032'),
('SH1311033'),
('SH1311034'),
('SH1311035'),
('SH1311036'),
('SH1311037'),
('SH1311038'),
('SH1311039'),
('SH1311040'),
('SH1311041'),
('SH1311042'),
('SH1311043'),
('SH1311044'),
('SH1311045'),
('SH1311046'),
('SH1311047'),
('SH1311048'),
('SH1311049'),
('SH1311050'),
('SH1311051'),
('SH1311052'),
('SH1311053'),
('SH1311054'),
('SH1311055'),
('SH1311056'),
('SH1311057'),
('SH1311058'),
('SH1311059'),
('SH1311060'),
('SH1311061'),
('SH1311062'),
('SH1311063'),
('SH1311064'),
('SH1311065'),
('SH1311066'),
('SH1311067'),
('SH1311068'),
('SH1311069'),
('SH1311070'),
('SH1311071'),
('SH1311072'),
('SH1311073'),
('SH1311074'),
('SH1311075'),
('SH1311076'),
('SH1311077'),
('SH1311078'),
('SH1311079'),
('SH1311080'),
('SH1311081'),
('SH1311082'),
('SH1311083'),
('SH1311084'),
('SH1311085'),
('SH1311086'),
('SH1311087'),
('SH1311088'),
('SH1311089'),
('SH1311090'),
('SH1311091'),
('SH1311092'),
('SH1311093'),
('SH1311094'),
('SH1311095'),
('SH1311096'),
('SH1311097'),
('SH1311098'),
('SH1311099'),
('SH1311100'),
('SH1311101'),
('SH1311102'),
('SH1311103'),
('SH1311104'),
('SH1311105'),
('SH1311106'),
('SH1311107'),
('SH1311108'),
('SH1312109'),
('SH1312110'),
('SH1312111'),
('SH1312112'),
('SH1312113'),
('SH1312114'),
('SH1312115'),
('SH1312116'),
('SH1312117'),
('SH1312118'),
('SH1312119'),
('SH1312120'),
('SH1402121'),
('SH1402122'),
('SH1402123'),
('SH1402124'),
('SH1402125'),
('SH1402126'),
('SH1402127'),
('SH1402128'),
('SH1402129'),
('SH1402130'),
('SH1402131'),
('SH1402132'),
('SH1402133'),
('SH1402134'),
('SH1402135'),
('SH1402136'),
('SH1402137'),
('SH1402138'),
('SH1402139'),
('SH1402140'),
('SH1402141'),
('SH1402142'),
('SH1402143'),
('SH1402144'),
('SH1402145'),
('SH1402146'),
('SH1402147'),
('SH1402148'),
('SH1402149'),
('SH1402150'),
('SH1402151'),
('SH1402152'),
('SH1402153'),
('SH1402154'),
('SH1402155'),
('SH1402156'),
('SH1402157'),
('SH1402158'),
('SH1402159'),
('SH1402160'),
('SH1402161'),
('SH1402162'),
('SH1402163'),
('SH1402164'),
('SH1402165'),
('SH1402166'),
('SH1402167'),
('SH1402168'),
('SH1402169'),
('SH1402170'),
('SH1402171'),
('SH1402172'),
('SH1402173'),
('SH1402174'),
('SH1402175'),
('SH1402176'),
('SH1402177'),
('SH1402178'),
('SH1402179'),
('SH1402180'),
('SH1402181'),
('SH1403182'),
('SH1404183'),
('SH1405184'),
('SH1405185'),
('SH1405186'),
('SH1405187'),
('SH1405188'),
('SH1405189'),
('SH1405190'),
('SH1405191');

-- --------------------------------------------------------

-- 
-- Table structure for table `tempahan`
-- 

CREATE TABLE `tempahan` (
  `no_tempahan` varchar(20) NOT NULL,
  `id_fasiliti` int(11) NOT NULL,
  `tarikh_mula` varchar(15) NOT NULL,
  `tarikh_tamat` varchar(15) NOT NULL,
  `bil_hari` int(11) NOT NULL,
  `bil_bilik` int(11) NOT NULL,
  `susunan` varchar(50) NOT NULL,
  `jgkaan_kapasiti` varchar(100) NOT NULL,
  `tujuan` text NOT NULL,
  `bil_peserta` int(11) NOT NULL,
  `makan` varchar(5) NOT NULL,
  `asrama` varchar(5) NOT NULL,
  `katerer` varchar(100) NOT NULL,
  `jumlah_kos` varchar(10) NOT NULL,
  `jumlah_harga_jual` varchar(10) NOT NULL,
  `penggunaan` varchar(20) NOT NULL,
  `jangkamasa` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `alasan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tempahan`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tempahan_utama`
-- 

CREATE TABLE `tempahan_utama` (
  `no_tempahan` varchar(20) NOT NULL,
  `id_pengguna` varchar(15) NOT NULL,
  `tarikh_tempahan` varchar(15) NOT NULL,
  PRIMARY KEY  (`no_tempahan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tempahan_utama`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tmbhanfasi`
-- 

CREATE TABLE `tmbhanfasi` (
  `id` int(11) NOT NULL,
  `no_tempahan` varchar(10) NOT NULL,
  `id_fasiliti` varchar(10) NOT NULL,
  `jumlah_kos` double(10,2) NOT NULL,
  `jumlah_harga_jual` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tmbhanfasi`
-- 

INSERT INTO `tmbhanfasi` (`id`, `no_tempahan`, `id_fasiliti`, `jumlah_kos`, `jumlah_harga_jual`) VALUES (4360, 'SH1402176', '18', 200.00, 200.00),
(4773, 'SH1402178', '11', 0.00, 180.00);

-- --------------------------------------------------------

-- 
-- Table structure for table `tmbhasrama`
-- 

CREATE TABLE `tmbhasrama` (
  `id` int(11) NOT NULL,
  `no_tempahan` varchar(10) NOT NULL,
  `id_fasiliti` varchar(10) NOT NULL,
  `bilangan` int(11) NOT NULL,
  `jumlah_kos` double(10,2) NOT NULL,
  `jumlah_harga_jual` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tmbhasrama`
-- 

