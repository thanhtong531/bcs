-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2022 lúc 08:24 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopbcs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangqc`
--

CREATE TABLE `bangqc` (
  `qc_ma` int(10) UNSIGNED NOT NULL,
  `qc_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qc_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `sp_ma` int(10) UNSIGNED NOT NULL,
  `hd_ma` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaban` double(8,2) NOT NULL,
  `thanhtien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctkhuyenmai`
--

CREATE TABLE `ctkhuyenmai` (
  `sp_ma` int(10) UNSIGNED NOT NULL,
  `km_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctphieunhap`
--

CREATE TABLE `ctphieunhap` (
  `sp_ma` int(10) UNSIGNED NOT NULL,
  `pn_ma` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `gianhap` double(8,2) NOT NULL,
  `thanhtien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `sp_ma` int(10) UNSIGNED NOT NULL,
  `kh_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `dm_ma` int(10) UNSIGNED NOT NULL,
  `dm_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dm_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`dm_ma`, `dm_ten`, `dm_tinhtrang`, `created_at`, `updated_at`) VALUES
(2, 'dien thoai', '1', '2022-06-22 08:14:16', '2022-06-22 08:14:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
--

CREATE TABLE `diachi` (
  `dc_ma` int(10) UNSIGNED NOT NULL,
  `dc_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dc_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `kh_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `dv_ma` int(10) UNSIGNED NOT NULL,
  `dv_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dv_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `giaban`
--

CREATE TABLE `giaban` (
  `sp_ma` int(10) UNSIGNED NOT NULL,
  `n_ma` int(10) UNSIGNED NOT NULL,
  `giaban` double(8,2) NOT NULL,
  `giamgia` double(8,2) NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhqc`
--

CREATE TABLE `hinhqc` (
  `hqc_ma` int(10) UNSIGNED NOT NULL,
  `hqc_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hqc_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `qc_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhsp`
--

CREATE TABLE `hinhsp` (
  `h_ma` int(10) UNSIGNED NOT NULL,
  `h_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `sp_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `hd_ma` int(10) UNSIGNED NOT NULL,
  `hd_ngaykt` datetime NOT NULL,
  `hd_ngaytt` datetime NOT NULL,
  `hd_tongtien` double(8,2) NOT NULL,
  `hd_diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hd_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `kh_ma` int(10) UNSIGNED NOT NULL,
  `nv_ma` int(10) UNSIGNED NOT NULL,
  `tt_ma` int(10) UNSIGNED NOT NULL,
  `vc_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`hd_ma`, `hd_ngaykt`, `hd_ngaytt`, `hd_tongtien`, `hd_diachi`, `hd_tinhtrang`, `kh_ma`, `nv_ma`, `tt_ma`, `vc_ma`, `created_at`, `updated_at`) VALUES
(2, '2022-06-22 17:35:23', '2022-06-22 17:35:23', 1232.00, 'ádad', '0', 1, 1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_ma` int(10) UNSIGNED NOT NULL,
  `ten` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'Nam',
  `ngaysinh` date DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kichhoat` tinyint(1) NOT NULL DEFAULT 0,
  `lienketkichhoat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhacungcap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'google',
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`kh_ma`, `ten`, `gioitinh`, `ngaysinh`, `sdt`, `email`, `hinh`, `password`, `remember_token`, `kichhoat`, `lienketkichhoat`, `nhacungcap`, `google_id`, `facebook_id`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 'Khachhang 1', 'nam', '2022-06-17', NULL, 'khachhang1@allarell.dev', NULL, '$2y$10$YRQrRKuv1jIYoY/vPSJKU.iccilFZUi4vrMJXWbayFuyPLEt7jGgK', NULL, 1, NULL, 'google', NULL, NULL, '1', '2022-06-16 19:47:05', '2022-06-19 12:53:56'),
(2, 'Khachhang 2', 'nam', '2022-06-17', NULL, 'khachhang2@allarell.dev', NULL, '$2y$10$OKBNpds7nnn3d5lfCXoHNu1vwD/D0jsyYphfdp39hFkcnQpk/VVsK', NULL, 1, NULL, 'google', NULL, NULL, '1', '2022-06-16 19:47:05', '2022-06-20 12:09:34'),
(3, 'Khachhang 3', 'nam', '2022-06-17', '0326250990', 'khachhang3@allarell.dev', NULL, '$2y$10$Jiw4DLhwTw0JJ52TkybI1ORbgY2jI5/RHEBsBZ50VAHv6kznxGYz6', '8peTVl3w9Zeh7T9QIa9VmHsLqa4ybGLHL2ebeh1JD025PDq2OPXSbrYSHjJ0', 1, NULL, 'google', NULL, NULL, '1', '2022-06-16 19:47:05', '2022-06-20 19:30:38'),
(4, 'vinh', 'Nam', '2022-06-08', '0123456794', 'vinhb1809208@student.ctu.edu.vn', NULL, '$2y$10$g9XETufArzXfC2kC2ivcEeuJ6dpXr8vTKdCp3mBHKxI27cN/DtL2K', 'nYjmfjqc4xVxDevxYSOyFTV7dkX49dVVcAkOJbvImLpt5IIJTUhFuj77H6s0', 1, NULL, 'google', '106316657335047579306', '1039139257017850', '1', '2022-06-20 14:13:00', '2022-06-20 19:35:18'),
(5, 'cao vinh', 'Nam', '2022-06-21', NULL, 'caovanvinh111@gmail.com', NULL, '$2y$10$A1qCVEDzuXOGq3DjwvRDwekQX2A/9HeBYh/P9JHzSe5YV4BRoYAta', 'Tkck1rA6IWZPSOWhsVKKsSEYtwMHE6d8ZHi13PjwRKuQiFJD99JtyXnNpTAi', 1, NULL, 'google', '115929162873516487174', NULL, '1', '2022-06-20 20:19:59', '2022-06-20 20:19:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `km_ma` int(10) UNSIGNED NOT NULL,
  `km_phantram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_ngaybd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_ngaykt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_giaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_soluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichhoatnguoidung`
--

CREATE TABLE `kichhoatnguoidung` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `lsp_ma` int(10) UNSIGNED NOT NULL,
  `lsp_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lsp_hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lsp_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `dm_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_23_083900_create_donvi_table', 1),
(6, '2022_05_23_171759_create_thongtinshop_table', 1),
(7, '2022_05_23_171946_create_bangqc_table', 1),
(8, '2022_05_23_171955_create_hinhqc_table', 1),
(9, '2022_05_23_172409_create_nhanvien_table', 1),
(10, '2022_05_23_172420_create_khachhang_table', 1),
(11, '2022_05_23_172439_create_diachi_table', 1),
(12, '2022_05_23_172732_create_danhmucsp_table', 1),
(13, '2022_05_23_172740_create_loaisp_table', 1),
(14, '2022_05_23_172749_create_nhasanxuat_table', 1),
(15, '2022_05_23_172750_create_sanpham_table', 1),
(16, '2022_05_23_172805_create_thuoctinh_table', 1),
(17, '2022_05_23_172834_create_hinhsp_table', 1),
(18, '2022_05_23_172919_create_khuyenmai_table', 1),
(19, '2022_05_23_172937_create_ctkhuyenmai_table', 1),
(20, '2022_05_23_173238_create_danhgia_table', 1),
(21, '2022_05_23_173310_create_ngay_table', 1),
(22, '2022_05_23_173407_create_giaban_table', 1),
(23, '2022_05_23_173433_create_vanchuyen_table', 1),
(24, '2022_05_23_173444_create_thanhtoan_table', 1),
(25, '2022_05_23_173821_create_hoadon_table', 1),
(26, '2022_05_23_173848_create_phieunhap_table', 1),
(27, '2022_05_23_173921_create_cthoadon_table', 1),
(28, '2022_05_23_173933_create_ctphieunhap_table', 1),
(29, '2022_06_19_205157_create_kichhoatnguoidung_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngay`
--

CREATE TABLE `ngay` (
  `n_ma` int(10) UNSIGNED NOT NULL,
  `n_ngay` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nv_ma` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'Nam',
  `ngaysinh` date DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cccd` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kichhoat` tinyint(1) NOT NULL DEFAULT 0,
  `lienketkichhoat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhacungcap` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'google',
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`nv_ma`, `ten`, `gioitinh`, `ngaysinh`, `sdt`, `email`, `diachi`, `cccd`, `hinh`, `password`, `remember_token`, `kichhoat`, `lienketkichhoat`, `nhacungcap`, `google_id`, `facebook_id`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 'Nhanvien 1', 'nam', '2022-06-17', NULL, 'nhanvien1@allaravel.dev', 'Can Tho', '0123456789', NULL, '$2y$10$WGHTpEEweyPxySLZ8mCnGeNyjlytit/p6kbVRti6jw0C7GnTldON6', NULL, 0, NULL, 'google', NULL, NULL, '1', '2022-06-16 19:43:53', '2022-06-16 19:43:53'),
(4, 'Nhanvien 2', 'nam', '2022-06-17', NULL, 'nhanvien2@allaravel.dev', 'Can Tho', '0123456790', NULL, '$2y$10$yooAO9xhvnQss7bBt07/Y.q755emu4jkvwRqyyMevNjLqPNj8Hyba', NULL, 0, NULL, 'google', NULL, NULL, '1', '2022-06-16 19:45:45', '2022-06-16 19:45:45'),
(5, 'Nhanvien 3', 'nam', '2022-06-17', NULL, 'nhanvien3@allaravel.dev', 'Can Tho', '0123456791', NULL, '$2y$10$UcF.lJ0aQ3T4241RKIdiaud.L6gajDUGb7OhG5cjKPqCpbhN5X6Bi', NULL, 0, NULL, 'google', NULL, NULL, '1', '2022-06-16 19:45:45', '2022-06-16 19:45:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `nsx_ma` int(10) UNSIGNED NOT NULL,
  `nsx_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsx_diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsx_sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsx_email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsx_msthue` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsx_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`nsx_ma`, `nsx_ten`, `nsx_diachi`, `nsx_sdt`, `nsx_email`, `nsx_msthue`, `nsx_tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 'Công Ty Cổ Phần Haybike', 'Lô 02 - 03, Dãy C11, Đường Đồng Bát', '0123456789', 'Haybike123@gmail.com', '0123456789', '1', NULL, NULL),
(2, 'Saigon Co.Op', '131 Điện Biên Phủ, Phường 15', '0123456790', 'Saigon123@gmail.com', '0123456790', '1', NULL, NULL),
(3, 'Công Ty Tnhh Công Nghệ Vật Liệu Mới Yong Ying', '117 Tân Cảng Phường 25 Quận Bình Thạnh', '0123456791', 'YongYing123@gmail.com', '0123456791', '1', NULL, NULL),
(4, 'Cty Cp Tập Đoàn Kinh Tế Apec Global', 'Số 4, Lê Tuấn Mậu', '0123456792', 'ApecGlobal123@gmail.com', '0123456792', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `pn_ma` int(10) UNSIGNED NOT NULL,
  `pn_ngaynhap` date NOT NULL,
  `pn_tongtien` double(8,2) NOT NULL,
  `pn_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `nv_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_ma` int(10) UNSIGNED NOT NULL,
  `sp_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_soluong` int(11) NOT NULL,
  `sp_giaban` float NOT NULL DEFAULT 0,
  `sp_gianhap` float NOT NULL DEFAULT 0,
  `sp_giamgia` float NOT NULL DEFAULT 0,
  `sp_mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `nsx_ma` int(10) UNSIGNED NOT NULL,
  `dv_ma` int(10) UNSIGNED NOT NULL,
  `lsp_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `tt_ma` int(10) UNSIGNED NOT NULL,
  `tt_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tt_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`tt_ma`, `tt_ten`, `tt_tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 'tt1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinshop`
--

CREATE TABLE `thongtinshop` (
  `shop_ma` int(10) UNSIGNED NOT NULL,
  `shop_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_maugd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoctinh`
--

CREATE TABLE `thuoctinh` (
  `tt_ma` int(10) UNSIGNED NOT NULL,
  `tt_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tt_noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tt_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `sp_ma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userable_id` int(11) DEFAULT NULL,
  `userable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userable_id`, `userable_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vinh', 'vinh123@gmail.com', NULL, NULL, NULL, '$2y$10$c5hyWR1dtxl3x.rSt.EU8uX08DzlusIrTyjgbXUILHjex1mxlYuE2', NULL, '2022-06-18 20:06:50', '2022-06-18 20:06:50'),
(2, 'ngoc', 'ngoc123@gmail.com', NULL, NULL, NULL, '$2y$10$N5IIEeq7b4dqnKXM7F6tqeZGrU/qgGrduixadFEeDwMts0DOmRVB2', NULL, '2022-06-18 20:08:06', '2022-06-18 20:08:06'),
(3, 'User 1', 'user1@gmail.com', NULL, NULL, NULL, '$2y$10$dYIhvqN0knsK.rngYJKSb.G/wtjGHoaApGVcPVRPhHkWKsQCSsrgG', NULL, '2022-06-18 13:31:43', '2022-06-18 13:31:43'),
(4, 'User 2', 'user2@gmail.com', NULL, NULL, NULL, '$2y$10$iVcFzrkgUd13hNdRwvW3Z.NsIgqNSm47dCB7NV0DpsNfIhl4AE5K.', NULL, '2022-06-18 13:31:44', '2022-06-18 13:31:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanchuyen`
--

CREATE TABLE `vanchuyen` (
  `vc_ma` int(10) UNSIGNED NOT NULL,
  `vc_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vc_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vanchuyen`
--

INSERT INTO `vanchuyen` (`vc_ma`, `vc_ten`, `vc_tinhtrang`, `created_at`, `updated_at`) VALUES
(2, 'Van chuyen 1', '1', '2022-06-22 08:34:27', '2022-06-22 08:34:27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangqc`
--
ALTER TABLE `bangqc`
  ADD PRIMARY KEY (`qc_ma`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`sp_ma`,`hd_ma`),
  ADD KEY `cthoadon_hd_ma_foreign` (`hd_ma`);

--
-- Chỉ mục cho bảng `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  ADD PRIMARY KEY (`sp_ma`,`km_ma`),
  ADD KEY `ctkhuyenmai_km_ma_foreign` (`km_ma`);

--
-- Chỉ mục cho bảng `ctphieunhap`
--
ALTER TABLE `ctphieunhap`
  ADD PRIMARY KEY (`sp_ma`,`pn_ma`),
  ADD KEY `ctphieunhap_pn_ma_foreign` (`pn_ma`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`sp_ma`,`kh_ma`),
  ADD KEY `danhgia_kh_ma_foreign` (`kh_ma`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`dm_ma`);

--
-- Chỉ mục cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`dc_ma`),
  ADD KEY `diachi_kh_ma_foreign` (`kh_ma`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`dv_ma`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `giaban`
--
ALTER TABLE `giaban`
  ADD PRIMARY KEY (`sp_ma`,`n_ma`),
  ADD KEY `giaban_n_ma_foreign` (`n_ma`);

--
-- Chỉ mục cho bảng `hinhqc`
--
ALTER TABLE `hinhqc`
  ADD PRIMARY KEY (`hqc_ma`),
  ADD KEY `hinhqc_qc_ma_foreign` (`qc_ma`);

--
-- Chỉ mục cho bảng `hinhsp`
--
ALTER TABLE `hinhsp`
  ADD PRIMARY KEY (`h_ma`),
  ADD KEY `hinhsp_sp_ma_foreign` (`sp_ma`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hd_ma`),
  ADD KEY `hoadon_kh_ma_foreign` (`kh_ma`),
  ADD KEY `hoadon_nv_ma_foreign` (`nv_ma`),
  ADD KEY `hoadon_tt_ma_foreign` (`tt_ma`),
  ADD KEY `hoadon_vc_ma_foreign` (`vc_ma`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_ma`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`km_ma`);

--
-- Chỉ mục cho bảng `kichhoatnguoidung`
--
ALTER TABLE `kichhoatnguoidung`
  ADD KEY `kichhoatnguoidung_makichhoat_index` (`token`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`lsp_ma`),
  ADD KEY `loaisp_dm_ma_foreign` (`dm_ma`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ngay`
--
ALTER TABLE `ngay`
  ADD PRIMARY KEY (`n_ma`),
  ADD UNIQUE KEY `ngay_n_ngay_unique` (`n_ngay`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nv_ma`),
  ADD UNIQUE KEY `nhanvien_nv_cccd_unique` (`cccd`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`nsx_ma`),
  ADD UNIQUE KEY `nhasanxuat_nsx_sdt_unique` (`nsx_sdt`),
  ADD UNIQUE KEY `nhasanxuat_nsx_email_unique` (`nsx_email`),
  ADD UNIQUE KEY `nhasanxuat_nsx_msthue_unique` (`nsx_msthue`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`pn_ma`),
  ADD KEY `phieunhap_nv_ma_foreign` (`nv_ma`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_ma`),
  ADD KEY `sanpham_lsp_ma_foreign` (`lsp_ma`),
  ADD KEY `sanpham_nsx_ma_foreign` (`nsx_ma`),
  ADD KEY `sanpham_dv_ma_foreign` (`dv_ma`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`tt_ma`);

--
-- Chỉ mục cho bảng `thongtinshop`
--
ALTER TABLE `thongtinshop`
  ADD PRIMARY KEY (`shop_ma`);

--
-- Chỉ mục cho bảng `thuoctinh`
--
ALTER TABLE `thuoctinh`
  ADD PRIMARY KEY (`tt_ma`),
  ADD KEY `thuoctinh_sp_ma_foreign` (`sp_ma`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  ADD PRIMARY KEY (`vc_ma`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangqc`
--
ALTER TABLE `bangqc`
  MODIFY `qc_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `dm_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `diachi`
--
ALTER TABLE `diachi`
  MODIFY `dc_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `dv_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhqc`
--
ALTER TABLE `hinhqc`
  MODIFY `hqc_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhsp`
--
ALTER TABLE `hinhsp`
  MODIFY `h_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hd_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `km_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `lsp_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `ngay`
--
ALTER TABLE `ngay`
  MODIFY `n_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nv_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `nsx_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `pn_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `tt_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thongtinshop`
--
ALTER TABLE `thongtinshop`
  MODIFY `shop_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thuoctinh`
--
ALTER TABLE `thuoctinh`
  MODIFY `tt_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  MODIFY `vc_ma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `cthoadon_hd_ma_foreign` FOREIGN KEY (`hd_ma`) REFERENCES `hoadon` (`hd_ma`),
  ADD CONSTRAINT `cthoadon_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`);

--
-- Các ràng buộc cho bảng `ctkhuyenmai`
--
ALTER TABLE `ctkhuyenmai`
  ADD CONSTRAINT `ctkhuyenmai_km_ma_foreign` FOREIGN KEY (`km_ma`) REFERENCES `khuyenmai` (`km_ma`),
  ADD CONSTRAINT `ctkhuyenmai_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`);

--
-- Các ràng buộc cho bảng `ctphieunhap`
--
ALTER TABLE `ctphieunhap`
  ADD CONSTRAINT `ctphieunhap_pn_ma_foreign` FOREIGN KEY (`pn_ma`) REFERENCES `phieunhap` (`pn_ma`),
  ADD CONSTRAINT `ctphieunhap_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_kh_ma_foreign` FOREIGN KEY (`kh_ma`) REFERENCES `khachhang` (`kh_ma`),
  ADD CONSTRAINT `danhgia_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`);

--
-- Các ràng buộc cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_kh_ma_foreign` FOREIGN KEY (`kh_ma`) REFERENCES `khachhang` (`kh_ma`);

--
-- Các ràng buộc cho bảng `giaban`
--
ALTER TABLE `giaban`
  ADD CONSTRAINT `giaban_n_ma_foreign` FOREIGN KEY (`n_ma`) REFERENCES `ngay` (`n_ma`),
  ADD CONSTRAINT `giaban_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`);

--
-- Các ràng buộc cho bảng `hinhqc`
--
ALTER TABLE `hinhqc`
  ADD CONSTRAINT `hinhqc_qc_ma_foreign` FOREIGN KEY (`qc_ma`) REFERENCES `bangqc` (`qc_ma`);

--
-- Các ràng buộc cho bảng `hinhsp`
--
ALTER TABLE `hinhsp`
  ADD CONSTRAINT `hinhsp_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_kh_ma_foreign` FOREIGN KEY (`kh_ma`) REFERENCES `khachhang` (`kh_ma`),
  ADD CONSTRAINT `hoadon_nv_ma_foreign` FOREIGN KEY (`nv_ma`) REFERENCES `nhanvien` (`nv_ma`),
  ADD CONSTRAINT `hoadon_tt_ma_foreign` FOREIGN KEY (`tt_ma`) REFERENCES `thanhtoan` (`tt_ma`),
  ADD CONSTRAINT `hoadon_vc_ma_foreign` FOREIGN KEY (`vc_ma`) REFERENCES `vanchuyen` (`vc_ma`);

--
-- Các ràng buộc cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD CONSTRAINT `loaisp_dm_ma_foreign` FOREIGN KEY (`dm_ma`) REFERENCES `danhmucsp` (`dm_ma`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_nv_ma_foreign` FOREIGN KEY (`nv_ma`) REFERENCES `nhanvien` (`nv_ma`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_dv_ma_foreign` FOREIGN KEY (`dv_ma`) REFERENCES `donvi` (`dv_ma`),
  ADD CONSTRAINT `sanpham_lsp_ma_foreign` FOREIGN KEY (`lsp_ma`) REFERENCES `loaisp` (`lsp_ma`),
  ADD CONSTRAINT `sanpham_nsx_ma_foreign` FOREIGN KEY (`nsx_ma`) REFERENCES `nhasanxuat` (`nsx_ma`);

--
-- Các ràng buộc cho bảng `thuoctinh`
--
ALTER TABLE `thuoctinh`
  ADD CONSTRAINT `thuoctinh_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
