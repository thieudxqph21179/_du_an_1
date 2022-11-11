-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2022 lúc 02:22 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_binh_luan` int(10) NOT NULL,
  `ma_san_pham` int(10) NOT NULL,
  `ma_khach_hang` int(10) NOT NULL,
  `ten_khach_hang` varchar(100) NOT NULL,
  `noi_dung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `so_thu_tu` int(10) NOT NULL,
  `ma_hoa_don` int(10) NOT NULL,
  `ma_san_pham` int(10) NOT NULL,
  `don_gia` int(10) NOT NULL,
  `so_luong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `so_hoa_don` int(10) NOT NULL,
  `ma_khach_hang` int(10) NOT NULL,
  `tong_tien` int(10) NOT NULL,
  `tinh_trang_thanh_toan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(100) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai` int(10) NOT NULL,
  `ten_loai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` int(10) NOT NULL,
  `ten_nguoi_dung` varchar(100) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mat_khau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int(10) NOT NULL,
  `ten_san_pham` varchar(100) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `don_gia` int(10) NOT NULL,
  `mo_ta` text NOT NULL,
  `ma_loai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `hinh_anh`, `don_gia`, `mo_ta`, `ma_loai`) VALUES
(1, 'Thao Túng Tâm Lý', '8936066692298.jpg', 169, 'Nhận Diện, Thức Tỉnh Và Chữa Lành Những Tổn Thương Tiềm Ẩn', 1),
(2, 'Tri Thức Cực Hạn', 'image_195509_1_36329.jpg', 99, 'Tối Ưu Hóa Kĩ Năng Học Tập Và Quản Lí Tri Thức Cá Nhân', 1),
(3, 'Thoát Khỏi Bẫy Nhận Thức', '1080x1080_thoat-khoi-bay-nhan-thuc.jpg', 85, 'Nhà cung cấp:Minh Long\r\nTác giả:Thái Lũy Lỗi', 1),
(4, 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 'tktt.jpg', 145, 'Nhà cung cấp:Minh Long\r\nTác giả:Steven C.Hayes, Spencer Smith', 1),
(6, 'Tokyo Revengers - Tập 6 ', 'z3853755123845_b2a39dccbee5d09d9b45b0ee33394506_1.jpg', 145, 'Bản Đặc Biệt - Tặng Kèm Set 3 PVC Character Cards', 2),
(7, 'KINGDOM - Tập 37', 'nxbtre_full_18282022_022848.jpg', 45, 'Tặng Kèm Thẻ Hình Nhân Vật', 2),
(8, 'MONSTER #8 - Tập 6', 'z3853755104240_a2ba6935b363bd575015d72e018029f0.jpg', 60, 'Bản Đặc Biệt - Dark Ver - Tặng 1 Set Bookmark Hai Lớp + 2 Card PVC', 2),
(9, 'Dragon Ball Full Color', 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 100, 'Phần Năm: Truy Lùng Cell Bọ Hung - Tập 6 - Tặng Kèm Ngẫu Nhiên 1 Trong 2 Mẫu Standee Hoặc Postcard', 2),
(10, 'Thám Tử Lừng Danh Conan', 'tham-tu-lung-danh-conan---ho-so-tuyet-mat---heiji-hattori-_-kazuha-toyama.jpg', 99, 'Hồ Sơ Tuyệt Mật - Heiji Hattori & Kazuha Toyama', 2),
(11, 'Ninja Rantaro - Tập 65', 'ninja-rantaro---tap-65.jpg', 50, 'Tặng Kèm Postcard\r\nNhà cung cấp:Nhà Xuất Bản Kim ĐồngTác giả:Soubee Amako', 2),
(12, 'Ghi Chép Giải Phẫu Tâm Lý Học Tội Phạm', 'ghi-ch_p-gi_i-ph_u-t_m-l_bia1.jpg', 120, 'Nhà cung cấp:AZ Việt Nam\r\nTác giả:Soo Jung Lee, Eun Jin Lee', 3),
(13, 'Tinh Thần Bền Bỉ', '8936067607611.jpg', 80, 'Bí Quyết Vượt Qua Nghịch Cảnh\r\nNhà cung cấp:Minh Long\r\nTác giả:Damon Zahariades', 3),
(14, 'Mưu Hèn Kế Bẩn Nơi Công Sở', '8935251419573.jpg', 110, 'Nghệ Thuật Thăng Tiến Trong Sự Nghiệp - Tập 2 (Tái Bản)', 3),
(15, 'Kỹ Năng Quản Lý Thời Gian', '8936066694650_1.jpg', 150, 'Nhà cung cấp:1980 Books\r\nTác giả:Jake Knapp, John Zeratsky', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binh_luan`);

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`so_thu_tu`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`so_hoa_don`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binh_luan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `so_thu_tu` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `so_hoa_don` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
