-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 07:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `short_description` varchar(125) DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `category_product` varchar(255) NOT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id_product`, `product_name`, `short_description`, `long_description`, `category_product`, `product_img`, `price`, `stock`, `created_at`) VALUES
(1, 'T-Shirt', 'Produk A adalah pilihan terbaik untuk kegiatan sehari-hari', 'Produk A merupakan solusi sempurna untuk kebutuhan sehari-hari Anda. Dibuat dengan bahan berkualitas tinggi dan desain yang ergonomis, produk ini memberikan kenyamanan dan kepraktisan dalam penggunaan. Segera miliki Produk A dan nikmati manfaatnya sekarang juga! ', 'Clothing', 'gambar.jpg', 19000.00, 50, '2023-06-22 13:43:19'),
(2, 'Jeans', 'Produk B memberikan pengalaman unik dalam setiap penggunaan', 'Dengan fitur-fitur canggih dan inovatif, Produk B menjadikan penggunaan Anda menjadi lebih mudah dan menyenangkan. Nikmati kualitas suara yang luar biasa, tampilan yang jernih, dan desain yang elegan. Dapatkan Produk B sekarang dan rasakan pengalaman yang tak terlupakan!', 'Clothing', 'gambar.jpg', 49000.00, 30, '2023-06-22 13:43:19'),
(3, 'Sneakers', 'Produk B memberikan pengalaman unik dalam setiap penggunaan', 'Dengan fitur-fitur canggih dan inovatif, Produk B menjadikan penggunaan Anda menjadi lebih mudah dan menyenangkan. Nikmati kualitas suara yang luar biasa, tampilan yang jernih, dan desain yang elegan. Dapatkan Produk B sekarang dan rasakan pengalaman yang tak terlupakan!', 'Shoes', 'gambar.jpg', 79000.00, 20, '2023-06-22 13:43:19'),
(4, 'Backpack', 'Produk B memberikan pengalaman unik dalam setiap penggunaan', 'Dengan fitur-fitur canggih dan inovatif, Produk B menjadikan penggunaan Anda menjadi lebih mudah dan menyenangkan. Nikmati kualitas suara yang luar biasa, tampilan yang jernih, dan desain yang elegan. Dapatkan Produk B sekarang dan rasakan pengalaman yang tak terlupakan!', 'Bags', 'gambar.jpg', 39000.00, 15, '2023-06-22 13:43:19'),
(5, 'Smartphone', 'Produk B memberikan pengalaman unik dalam setiap penggunaan', 'Dengan fitur-fitur canggih dan inovatif, Produk B menjadikan penggunaan Anda menjadi lebih mudah dan menyenangkan. Nikmati kualitas suara yang luar biasa, tampilan yang jernih, dan desain yang elegan. Dapatkan Produk B sekarang dan rasakan pengalaman yang tak terlupakan!', 'Electronics', 'gambar.jpg', 499000.00, 10, '2023-06-22 13:43:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
