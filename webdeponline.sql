-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 15 Juillet 2017 à 11:47
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webdeponline`
--

-- --------------------------------------------------------

--
-- Structure de la table `lh_article`
--

CREATE TABLE `lh_article` (
  `id` int(11) UNSIGNED NOT NULL,
  `list_id` int(11) UNSIGNED NOT NULL,
  `cat_id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `highlight` tinyint(1) UNSIGNED NOT NULL,
  `highlight1` tinyint(1) NOT NULL,
  `price` int(11) UNSIGNED NOT NULL,
  `old_price` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created` int(11) UNSIGNED NOT NULL,
  `time_updates` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `lh_article`
--

INSERT INTO `lh_article` (`id`, `list_id`, `cat_id`, `type`, `name`, `site_title`, `image`, `description`, `content`, `highlight`, `highlight1`, `price`, `old_price`, `link`, `sort_order`, `status`, `created`, `time_updates`, `user_id`) VALUES
(2, 2, 1, 'article', 'Bài viết', 'bai-viet', 'b13fb97a3f801a9dbffb2863972ab5ec.jpg', 'ádasd', '<p>&aacute;dasd</p>\r\n', 1, 0, 0, 0, '', 2, 1, 1499150050, 1499319303, 1),
(3, 3, 0, 'article', 'Web du lịch', 'web-du-lich', 'a84f7e1456072d433323ef100db03da5.jpg', '', '', 1, 0, 0, 0, '', 1, 1, 1499483424, 0, 1),
(4, 3, 0, 'article', 'Web du lịch miền trung', 'web-du-lich-mien-trung', '84631977da824748924ad09a64f9fa30.jpg', 'ádasd', '<p>&aacute;dasd</p>\r\n', 1, 0, 0, 0, '', 1, 1, 1499484056, 1499484162, 1),
(5, 4, 0, 'article', 'Web bán hàng', 'web-ban-hang', '2a8bfdb03d639ce99a2276a203d0f489.jpg', '', '', 1, 0, 0, 0, '#', 1, 1, 1499484795, 1499485543, 1),
(6, 0, 0, 'ykien', 'Mr Binh', 'mr-binh', '0d3e55a3f4683752353ececdaaccb191.jpg', 'Suốt nhiều năm, Mỹ là nước thống lĩnh và đặt ra chương trình nghị sự cho hội nghị cấp cao G20. Nhưng vào hôm 7/7, khi Tổng thống Mỹ Trump gặp các lãnh đạo thế giới tại hội nghị G20 ở Hamburg, ông có lẽ đã mơ hồ nhận thấy Mỹ bị cô lập về mọi thứ từ thương ', '<p>Suốt nhiều năm, Mỹ l&agrave; nước thống lĩnh v&agrave; đặt ra chương tr&igrave;nh nghị sự cho hội nghị cấp cao G20. Nhưng v&agrave;o h&ocirc;m 7/7, khi Tổng thống Mỹ Trump gặp c&aacute;c l&atilde;nh đạo thế giới tại hội nghị G20 ở Hamburg, &ocirc;ng c&oacute; lẽ đ&atilde; mơ hồ nhận thấy Mỹ bị c&ocirc; lập về mọi thứ từ thương mại cho đến vấn đề biến đổi kh&iacute; hậu, theo&nbsp;<em>New York Times</em>.</p>\r\n', 1, 0, 0, 0, '', 1, 1, 1499786560, 1499786570, 1),
(7, 0, 0, 'ykien', 'Y kiến 2', 'y-kien-2', '2fa8b0679b6268332267b497c9919c2d.jpg', 'Suốt nhiều năm, Mỹ là nước thống lĩnh và đặt ra chương trình nghị sự cho hội nghị cấp cao G20. Nhưng vào hôm 7/7, khi Tổng thống Mỹ Trump gặp các lãnh đạo thế giới tại hội nghị G20 ở Hamburg, ông có lẽ đã mơ hồ nhận thấy Mỹ bị cô lập về mọi thứ từ thương ', '', 1, 0, 0, 0, '', 1, 1, 1499792978, 0, 1),
(8, 0, 0, 'ykien', 'Suốt nhiều năm, Mỹ là nước thống lĩnh và đặt ra ', 'suot-nhieu-nam-my-la-nuoc-thong-linh-va-dat-ra', '0fa1ce4dc17fcbd04b0ce1020412ced5.jpg', 'Suốt nhiều năm, Mỹ là nước thống lĩnh và đặt ra chương trình nghị sự cho hội nghị cấp cao G20. Nhưng vào hôm 7/7, khi Tổng thống Mỹ Trump gặp các lãnh đạo thế giới tại hội nghị G20 ở Hamburg, ông có lẽ đã mơ hồ nhận thấy Mỹ bị cô lập về mọi thứ từ thương ', '<p>Suốt nhiều năm, Mỹ l&agrave; nước thống lĩnh v&agrave; đặt ra chương tr&igrave;nh nghị sự cho hội nghị cấp cao G20. Nhưng v&agrave;o h&ocirc;m 7/7, khi Tổng thống Mỹ Trump gặp c&aacute;c l&atilde;nh đạo thế giới tại hội nghị G20 ở Hamburg, &ocirc;ng c&oacute; lẽ đ&atilde; mơ hồ nhận thấy Mỹ bị c&ocirc; lập về mọi thứ từ thương mại cho đến vấn đề biến đổi kh&iacute; hậu, theo New York Times.</p>\r\n', 1, 0, 0, 0, '', 1, 1, 1499793011, 0, 1),
(9, 0, 0, 'ykien', 'Suốt nhiều năm', 'suot-nhieu-nam', 'cf9c34006fe86877cd85b81aadacb281.png', 'Suốt nhiều năm, Mỹ là nước thống lĩnh và đặt ra chương trình nghị sự cho hội nghị cấp cao G20. Nhưng vào hôm 7/7, khi Tổng thống Mỹ Trump gặp các lãnh đạo thế giới tại hội nghị G20 ở Hamburg, ông có lẽ đã mơ hồ nhận thấy Mỹ bị cô lập về mọi thứ từ thương ', '<p>Suốt nhiều năm, Mỹ l&agrave; nước thống lĩnh v&agrave; đặt ra chương tr&igrave;nh nghị sự cho hội nghị cấp cao G20. Nhưng v&agrave;o h&ocirc;m 7/7, khi Tổng thống Mỹ Trump gặp c&aacute;c l&atilde;nh đạo thế giới tại hội nghị G20 ở Hamburg, &ocirc;ng c&oacute; lẽ đ&atilde; mơ hồ nhận thấy Mỹ bị c&ocirc; lập về mọi thứ từ thương mại cho đến vấn đề biến đổi kh&iacute; hậu, theo New York Times.</p>\r\n', 1, 0, 0, 0, '', 1, 1, 1499793040, 0, 1),
(10, 0, 0, 'ykien', 'Mỹ là cường quốc "nhân từ",', 'my-la-cuong-quoc-nhan-tu', 'dd3973b990e364f878c9be23cec42ac7.jpg', 'ếu tổng thống tiền nhiệm coi Mỹ là cường quốc "nhân từ", muốn gia tăng thịnh vượng thông qua các thị trường mở và hợp tác đa phương, Trump lại tự miêu tả bản thân như một người dân tộc chủ nghĩa, ủng hộ chủ nghĩa đơn phương và là một người theo chủ nghĩa ', '<p>ếu tổng thống tiền nhiệm coi Mỹ l&agrave; cường quốc &quot;nh&acirc;n từ&quot;, muốn gia tăng thịnh vượng th&ocirc;ng qua c&aacute;c thị trường mở v&agrave; hợp t&aacute;c đa phương, Trump lại tự mi&ecirc;u tả bản th&acirc;n như một người d&acirc;n tộc chủ nghĩa, ủng hộ chủ nghĩa đơn phương v&agrave; l&agrave; một người theo chủ nghĩa bảo hộ khi &ocirc;ng sốt sắng bảo vệ việc l&agrave;m cho người Mỹ.</p>\r\n', 1, 0, 0, 0, '', 1, 1, 1499793086, 0, 1),
(11, 0, 0, 'news', 'Cao thủ Vịnh Xuân Nam Anh', 'cao-thu-vinh-xuan-nam-anh', '14bf39acaa9b6351d4baa2fcffbf1bbd.jpg', 'Cao thủ Vịnh Xuân Nam Anh Pierre Francois Flores đến TP HCM hôm 10/7, sớm hơn dự kiến hai ngày. Ông đi cùng năm đại đệ tử, trong có người từng hai năm liên tiếp vô địch quyền anh tại Canada.', '<p>Cao thủ Vịnh Xu&acirc;n Nam Anh Pierre Francois Flores đến TP HCM h&ocirc;m 10/7, sớm hơn dự kiến hai ng&agrave;y. &Ocirc;ng đi c&ugrave;ng năm đại đệ tử, trong c&oacute; người&nbsp;từng hai năm li&ecirc;n tiếp v&ocirc; địch quyền anh tại Canada.</p>\r\n\r\n<p>Mục đ&iacute;ch của chuyến đi n&agrave;y, theo Pierre l&agrave; &quot;l&agrave;m trong sạch v&otilde; học&quot;, nhất l&agrave; v&otilde; thuật truyền thống. &Ocirc;ng kh&ocirc;ng tin những video về&nbsp;v&otilde; sư Huỳnh Tuấn Kiệt&nbsp;v&agrave; muốn giao đấu để chứng thực khả năng &quot;truyền điện&quot; của&nbsp;Chưởng m&ocirc;n Nam Huỳnh Đạo n&agrave;y. Sau đ&oacute;, m&ocirc;n ph&aacute;i Nam Huỳnh Đạo ra th&ocirc;ng b&aacute;o rằng Chưởng m&ocirc;n Huỳnh Tuấn Kiệt sẵn s&agrave;ng gặp Pierre Flores, với điều kiện cao thủ Vịnh Xu&acirc;n phải viết thư xin lỗi c&ocirc;ng khai tr&ecirc;n truyền th&ocirc;ng. &Ocirc;ng Kiệt cho rằng Pierre Flores đ&atilde; n&oacute;i sai sự thật ở hai điểm: nội c&ocirc;ng truyền điện l&agrave; giả v&agrave; việc &ocirc;ng t&igrave;m đại sư Nam Anh học nghề.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, cao thủ Vịnh Xu&acirc;n k</p>\r\n', 0, 0, 0, 0, '', 1, 1, 1499874427, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `lh_article_category_cat`
--

CREATE TABLE `lh_article_category_cat` (
  `id` int(11) UNSIGNED NOT NULL,
  `list_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) UNSIGNED NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '1',
  `created` int(11) UNSIGNED NOT NULL,
  `time_updates` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lh_article_category_list`
--

CREATE TABLE `lh_article_category_list` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) UNSIGNED NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '1',
  `created` int(11) UNSIGNED NOT NULL,
  `time_updates` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `lh_article_category_list`
--

INSERT INTO `lh_article_category_list` (`id`, `type`, `name`, `site_title`, `image`, `sort_order`, `status`, `created`, `time_updates`) VALUES
(2, 'article', 'Bất động sản', 'bat-dong-san', '', 1, 1, 1499315473, 0),
(3, 'article', 'Du lịch', 'du-lich', '', 1, 1, 1499315484, 0),
(4, 'article', 'Bán hàng', 'ban-hang', '', 1, 1, 1499315492, 0);

-- --------------------------------------------------------

--
-- Structure de la table `lh_config`
--

CREATE TABLE `lh_config` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hotline` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `map` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `analytics` text COLLATE utf8_unicode_ci NOT NULL,
  `vchat` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `time_updates` int(11) UNSIGNED NOT NULL,
  `title_meta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords_meta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_meta` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `lh_config`
--

INSERT INTO `lh_config` (`id`, `name`, `slogan`, `email`, `phone`, `address`, `hotline`, `map`, `website`, `facebook`, `analytics`, `vchat`, `user_id`, `time_updates`, `title_meta`, `keywords_meta`, `description_meta`) VALUES
(1, 'webdeponline.com', 'win!', 'lamhung3593@gmail.com', '0986 263 362/ 0932 615 156 ', 'hcm123', '0986 263 362/ 0932 615 156 ', '10.801038,106.656114', 'webbanhang', 'https://www.facebook.com/webdeponline.webdep/', '', '', 1, 1499934838, 'Webdeponline', 'webdep,chuanseo', 'webdeponline');

-- --------------------------------------------------------

--
-- Structure de la table `lh_contact`
--

CREATE TABLE `lh_contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL,
  `sort_order` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `created` int(11) UNSIGNED NOT NULL,
  `time_update` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lh_image`
--

CREATE TABLE `lh_image` (
  `id` int(11) UNSIGNED NOT NULL,
  `orig_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path_folder` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `table_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `table_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `lh_image`
--

INSERT INTO `lh_image` (`id`, `orig_name`, `file_name`, `path_folder`, `user_id`, `table_name`, `table_id`, `type`) VALUES
(1, '18118759_1873574132897609_4502661371201760762_n.jpg', '460883d6502e8444ecb6ebaac2ad9315.jpg', '2017/07', 1, 'product', 1, 'post'),
(2, 'images_(1).jpg', 'b2e7b0119d668cf368707fec9a79e67a.jpg', '2017/07', 1, 'product', 1, 'product'),
(3, 'images_(2).jpg', '7e195a4d3ed1e74dcd24f2de69a12fd3.jpg', '2017/07', 1, 'product', 1, 'product'),
(7, '17158999_2106789002881259_2381461423088739242_o.jpg', '48d524e2479531912bc3b9905e5ff98a.jpg', '2017/07', 1, 'product', 1, 'post'),
(8, 'images_(2).jpg', '46a55a222baf63456ba3aa9b93700997.jpg', '2017/07', 1, 'post', 1, 'post'),
(9, '17158999_2106789002881259_2381461423088739242_o.jpg', '1221b87bcdaa3b13ca1a1ab3fcb233c7.jpg', '2017/07', 1, 'article', 2, 'post'),
(10, '17203250_178040342701840_2416107418883170324_n.jpg', 'a4e8448d002be192766f9efb68f5e298.jpg', '2017/07', 1, 'article', 2, 'post');

-- --------------------------------------------------------

--
-- Structure de la table `lh_photo`
--

CREATE TABLE `lh_photo` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) UNSIGNED NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `created` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `time_updates` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `lh_photo`
--

INSERT INTO `lh_photo` (`id`, `type`, `image`, `name`, `site_title`, `link`, `description`, `sort_order`, `status`, `created`, `time_updates`, `user_id`) VALUES
(1, 'logo', '6a514ace4a6cf9276b9506f9a27db97e.png', 'Logo', 'logo', '#', '', 1, 1, 1499410195, 0, 1),
(3, 'slider', '1392139eeb96be42beef4265aa1af311.jpg', 'Webdeponline cung cấp các dịch vụ web giá rẻ', 'webdeponline-cung-cap-cac-dich-vu-web-gia-re', '#', 'a', 3, 1, 1499478590, 0, 1),
(4, 'slider', '1c4c9ec2f8e02f0b648b27e0d48d3109.jpg', 'Webdeponline cung cấp các dịch vụ web giá rẻ', 'webdeponline-cung-cap-cac-dich-vu-web-gia-re', '#', '', 4, 1, 1499478665, 0, 1),
(5, 'doitac', '6d18957143e8e7ab90b773fa57bec0c5.png', 'PA', 'pa', '#', 'ád', 5, 1, 1499791125, 0, 1),
(6, 'doitac', '58655d458d384c144a48b4e0d96c3d2c.jpg', 'Mắt bão', 'mat-bao', '#', '', 6, 1, 1499791228, 0, 1),
(7, 'doitac', 'e25660320975a12870f5f204a4a9a9eb.jpg', '3', '3', '#', '', 7, 1, 1499791240, 0, 1),
(8, 'doitac', '480c64caa45b43b402b09508b31a1453.png', 'db', 'db', '#', '', 8, 1, 1499791261, 0, 1),
(9, 'doitac', 'c1259810da2860568be93bd48f0c9987.png', 'db', 'db', '#', '', 9, 1, 1499791298, 0, 1),
(10, 'doitac', '638c9bc5b7fe01ce9523ea60d36809b6.png', 'db', 'db', '#', '', 10, 1, 1499791326, 0, 1),
(11, 'doitac', 'c15d49adf0daed7952398ba78869c598.png', 'db', 'db', '#', '', 11, 1, 1499791418, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `lh_posts`
--

CREATE TABLE `lh_posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_hl` tinyint(1) UNSIGNED NOT NULL,
  `post_new` tinyint(1) UNSIGNED NOT NULL,
  `sort_order` int(11) UNSIGNED NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL,
  `created` int(11) UNSIGNED NOT NULL,
  `time_update` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lh_product`
--

CREATE TABLE `lh_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `list_id` int(11) UNSIGNED NOT NULL,
  `cat_id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `highlight` tinyint(1) UNSIGNED NOT NULL,
  `highlight1` tinyint(1) UNSIGNED NOT NULL,
  `price` int(11) UNSIGNED NOT NULL,
  `old_price` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created` int(11) UNSIGNED NOT NULL,
  `time_updates` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `dungluong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bangthong` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `lh_product`
--

INSERT INTO `lh_product` (`id`, `list_id`, `cat_id`, `type`, `name`, `site_title`, `image`, `description`, `content`, `highlight`, `highlight1`, `price`, `old_price`, `sort_order`, `status`, `created`, `time_updates`, `user_id`, `dungluong`, `bangthong`) VALUES
(1, 0, 0, 'product', 'Sản phẩm 1', 'san-pham-1', '455e40b2d01e4730bc45ea04b1061e4e.jpg', 'ád', '<p><img src="http://localhost/webdeponline/upload/2017/07/460883d6502e8444ecb6ebaac2ad9315.jpg" style="height:200px; width:200px" /></p>\r\n', 1, 1, 0, 0, 1, 1, 1499151698, 1499155477, 1, '', ''),
(2, 0, 0, 'hosting', 'Gói 1', 'goi-1', 'e4ad4c0625dfe5793303ca237ab01c2d.jpg', 'ádasd', '<p>&aacute;dasd</p>\r\n', 1, 0, 36000, 0, 1, 1, 1499680612, 1499792594, 1, '300', '5'),
(3, 0, 0, 'hosting', 'Gói 2', 'goi-2', '', '', '', 1, 0, 63000, 0, 3, 1, 1499683862, 1499792633, 1, '750', '15'),
(4, 0, 0, 'hosting', 'Gói 3', 'goi-3', '', '', '', 1, 0, 90000, 0, 4, 1, 1499792683, 0, 1, '1500', 'Không giới hạn'),
(5, 0, 0, 'hosting', 'Gói 4', 'goi-4', '', '', '', 1, 0, 135000, 0, 5, 1, 1499792715, 0, 1, '2000', 'Không giới hạn'),
(6, 0, 0, 'hosting', 'Gói 5', 'goi-5', '', '', '', 1, 0, 230000, 0, 6, 1, 1499792758, 0, 1, '5000', 'Không giới hạn'),
(7, 0, 0, 'hosting', 'Gói 6', 'goi-6', '', '', '', 1, 0, 400000, 0, 7, 1, 1499792790, 0, 1, '10000', 'Không giới hạn');

-- --------------------------------------------------------

--
-- Structure de la table `lh_product_category_cat`
--

CREATE TABLE `lh_product_category_cat` (
  `id` int(11) UNSIGNED NOT NULL,
  `list_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) UNSIGNED NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '1',
  `created` int(11) UNSIGNED NOT NULL,
  `time_updates` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lh_product_category_list`
--

CREATE TABLE `lh_product_category_list` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) UNSIGNED NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '1',
  `created` int(11) UNSIGNED NOT NULL,
  `time_updates` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lh_single_post`
--

CREATE TABLE `lh_single_post` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `highlight` tinyint(1) UNSIGNED NOT NULL,
  `new` tinyint(1) UNSIGNED NOT NULL,
  `sort_order` int(11) UNSIGNED NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL,
  `created` int(11) UNSIGNED NOT NULL,
  `time_update` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `lh_single_post`
--

INSERT INTO `lh_single_post` (`id`, `type`, `name`, `site_title`, `image`, `description`, `content`, `highlight`, `new`, `sort_order`, `status`, `created`, `time_update`, `user_id`) VALUES
(1, 'domain', 'Tên miền', 'ten-mien', '', '', '<h3>Mua t&ecirc;n miền chuẩn SEO rất quan trọng, t&ecirc;n miền c&agrave;ng dễ nhớ v&agrave; &yacute; nghĩa th&igrave; c&agrave;ng tốt, đặc biệt cũng cần quan t&acirc;m tới tuổi t&ecirc;n miền v&igrave; tuổi t&ecirc;n miền lu&ocirc;n đ&oacute;ng vai tr&ograve; v&ocirc; c&ugrave;ng quan trọng trong c&aacute;c ti&ecirc;u ch&iacute; đ&aacute;nh gi&aacute; xếp hạng của c&aacute;c c&ocirc;ng cụ t&igrave;m kiếm. Để hiểu r&otilde; hơn về tầm quan trọng của việc chọn v&agrave; mua t&ecirc;n miền cho web&nbsp;<a href="http://chuanseo.vn/chuan-seo-la-gi-cac-buoc-huong-dan-viet-bai-chuan-seo/">chuẩn SEO</a>, h&atilde;y&nbsp;<em>N&acirc;ng tầm thương hiệu</em>&nbsp;c&ugrave;ng chuanseo.vn nh&eacute;.</h3>\r\n\r\n<h4><strong><em>Mua t&ecirc;n miền chuẩn SEO rất quan trọng</em></strong></h4>\r\n\r\n<p>Để dễ d&agrave;ng mua t&ecirc;n miền gi&aacute; rẻ, ưng &yacute; v&agrave; tốt nhất, mời c&aacute;c bạn tham khảo 2 b&agrave;i viết n&agrave;y của ch&uacute;ng t&ocirc;i trước khi tham khảo bảng gi&aacute; t&ecirc;n miền ph&iacute;a dưới.</p>\r\n\r\n<h3><em><strong><a href="http://chuanseo.vn/mua-ten-mien-chuan-seo-nhu-nao/" target="_blank">Mua t&ecirc;n miền chuẩn SEO như thế n&agrave;o ?</a></strong></em></h3>\r\n\r\n<h3><em><strong><a href="http://chuanseo.vn/mua-ten-mien-gia-re-hay-mua-ten-mien-chuan-seo-va-y-nghia/" target="_blank">Mua t&ecirc;n miền gi&aacute; rẻ hay mua t&ecirc;n miền chuẩn SEO v&agrave; &yacute; nghĩa ?</a></strong></em></h3>\r\n\r\n<h1><em><strong>Mua t&ecirc;n miền chuẩn seo Việt Nam</strong></em></h1>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>T&ecirc;n miền Việt Nam</strong></td>\r\n			<td><strong>Ph&iacute; c&agrave;i đặt</strong></td>\r\n			<td><strong>Ph&iacute; duy tr&igrave; h&agrave;ng năm</strong></td>\r\n			<td><strong>Ph&iacute; transfer</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.vn</td>\r\n			<td>350.000 vnđ</td>\r\n			<td>480.000 vnđ</td>\r\n			<td>Miễn ph&iacute;</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.com.vn, .net.vn, .biz.vn</td>\r\n			<td>350.000 vnđ</td>\r\n			<td>350.000 vnđ</td>\r\n			<td>Miễn ph&iacute;</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.gov.vn, .org.vn, .edu.vn, .pro.vn, .ac.vn , .info.vn, .health.vn, .int.vn<br />\r\n			T&ecirc;n miền theo giới hạn địa giới h&agrave;nh ch&iacute;nh.VN</td>\r\n			<td>200.000 vnđ</td>\r\n			<td>200.000 vnđ</td>\r\n			<td>Miễn ph&iacute;</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.name.vn</td>\r\n			<td>30.000 vnđ</td>\r\n			<td>30.000 vnđ</td>\r\n			<td>Miễn ph&iacute;</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h1><em><strong>Mua t&ecirc;n miền chuẩn seo Quốc tế</strong></em></h1>\r\n\r\n<p><iframe frameborder="0" height="81" width="278"></iframe></p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0" id="banggiatenmienquocte" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>T&ecirc;n miền Quốc tế</strong></td>\r\n			<td><strong>Ph&iacute; c&agrave;i đặt</strong></td>\r\n			<td><strong>Ph&iacute; duy tr&igrave; h&agrave;ng năm</strong></td>\r\n			<td><strong>Ph&iacute; transfer</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<td>.work</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>170,000 đ</td>\r\n			<td>135,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.co.uk,.me.uk</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>200,000 đ</td>\r\n			<td>190,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.nagoya,.okinawa,.yokohama,.tokyo,.jp.net,<br />\r\n			.click</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>245,000 đ</td>\r\n			<td>205,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.com.idn,.net.idn</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>245,000 đ</td>\r\n			<td>211,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.net,.info,.com,.org</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>263,000 đ</td>\r\n			<td>190,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.us</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>268,000 đ</td>\r\n			<td>215,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.link,.space</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>270,000 đ</td>\r\n			<td>215,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.biz</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>278,000 đ</td>\r\n			<td>190,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.onl,.xyz,.pictures</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>285,000 đ</td>\r\n			<td>230,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.juegos,.audio</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>290,000 đ</td>\r\n			<td>290,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.jpn.com,.in.net</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>300,000 đ</td>\r\n			<td>270,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.pw</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>335,000 đ</td>\r\n			<td>270,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.tel</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>338,000 đ</td>\r\n			<td>288,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.top</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>350,000 đ</td>\r\n			<td>320,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.asia</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>360,000 đ</td>\r\n			<td>288,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.club</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>360,000 đ</td>\r\n			<td>305,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.be</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>400,000 đ</td>\r\n			<td>360,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.pink,.red,.kim,.blue</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>440,000 đ</td>\r\n			<td>350,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.rip,.ninja</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>445,000 đ</td>\r\n			<td>378,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.mobi</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>455,000 đ</td>\r\n			<td>378,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.help,.net.co,.nom.co,.com.co</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>470,000 đ</td>\r\n			<td>375,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.website,.city,.gratis,.reisen,.report</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>473,000 đ</td>\r\n			<td>378,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.hiphop,.diet</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>480,000 đ</td>\r\n			<td>385,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.rocks,.futbol</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>495,000 đ</td>\r\n			<td>445,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.support,.email,.solutions,.photos,.management,<br />\r\n			.systems,.education,.institute,.international,.agency,<br />\r\n			.supplies,.supply,.football,.tips,.schule,<br />\r\n			.graphics,.photography,.gallery,.equipment,.technology,<br />\r\n			.lighting,.directory,.exposed,.today,.network,<br />\r\n			.business,.company,.center</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>540,000 đ</td>\r\n			<td>485,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.dance</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>545,000 đ</td>\r\n			<td>525,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.in</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>560,000 đ</td>\r\n			<td>450,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.pics,.band,.video</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>575,000 đ</td>\r\n			<td>460,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.eu<br />\r\n			bao gồm cả chi ph&iacute; thu&ecirc; địa chỉ b&ecirc;n EU</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>595,000 đ</td>\r\n			<td>540,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.name</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>599,000 đ</td>\r\n			<td>539,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.me</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>645,000 đ</td>\r\n			<td>515,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.win</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>665,000 đ</td>\r\n			<td>665,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.country,.tattoo,.trade,.webcam,.beer</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>685,000 đ</td>\r\n			<td>560,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.bz</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>690,000 đ</td>\r\n			<td>550,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.ws</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>698,000 đ</td>\r\n			<td>558,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.works,.digital,.cash,.care,.media,<br />\r\n			.toys,.training,.associates,.sexy,.photo,<br />\r\n			.contractors,.singles,.academy,.computer,.builders,<br />\r\n			.domains,.shoes,.land,.vacations,.construction,<br />\r\n			.kitchen,.estate,.enterprises,.coffee,.guru,<br />\r\n			.plumbing,.gift,.clothing,.camera,.bargains,<br />\r\n			.bike</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>720,000 đ</td>\r\n			<td>575,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.fishing,.cooking,.nyc,.horse,.vodka,<br />\r\n			.bid,.fish,.rodeo,.church,.soy</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>735,000 đ</td>\r\n			<td>590,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;.vet,.republican,.school,.hosting,.life,<br />\r\n			.deals,.style,.immo,.uno,.world,<br />\r\n			.casa,.garden,.fashion,.wedding,.money,<br />\r\n			.party,.yoga,.flowers,.place,.direct,<br />\r\n			.sarl,.kaufen,.wtf,.fitness,.gifts,<br />\r\n			.discount,.guide,.surf,.property,.science,<br />\r\n			.cc,.cheap,.farm,.guitars,.site,<br />\r\n			.watch,.zone,.properties,.events,.productions,<br />\r\n			.cards,.catering,.cleaning,.community,.tools,<br />\r\n			.boutique,.florist,.house,.airforce,.army,<br />\r\n			.forsale,.rehab,.software,.auction,.engineer,<br />\r\n			.market,.consulting,.pub,.rentals,.cab,<br />\r\n			.repair,.camp,.industries,.parts,.racing,<br />\r\n			.express,.chat,.fit,.solar,.exchange,<br />\r\n			.glass,.gives,.moda,.immobilien,.plus,<br />\r\n			.democrat,.cool,.download,.foundation,.social&nbsp;,<br />\r\n			.sale,.lol,.loan,.gripe,.accountant,<br />\r\n			.date,.review,.faith</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>770,000 đ</td>\r\n			<td>615,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.attorney</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>815,000 đ</td>\r\n			<td>805,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.buzz,.kiwi</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>835,000 đ</td>\r\n			<td>670,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.fail,.limited,.town,.vision,.services</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>835,000 đ</td>\r\n			<td>750,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.la</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>880,000 đ</td>\r\n			<td>790,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.christmas,.blackfriday,.rest</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>900,000 đ</td>\r\n			<td>720,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.ru.com,.gb.net,.gr.com,.eu.com,.de.com,<br />\r\n			.qc.com,.us.com,.uk.net,.uk.com,.se.com,<br />\r\n			.sa.com,.hu.com,.kr.com,.no.com,.cn.com,<br />\r\n			.ar.com,.ae.org,.se.net</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>900,000 đ</td>\r\n			<td>790,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.mortgage</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>900,000 đ</td>\r\n			<td>875,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.black</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>900,000 đ</td>\r\n			<td>900,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.org.tw,.com.tw</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>920,000 đ</td>\r\n			<td>830,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.tv</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>935,000 đ</td>\r\n			<td>755,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.vc</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>940,000 đ</td>\r\n			<td>800,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.tw</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>975,000 đ</td>\r\n			<td>575,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.marketing</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>975,000 đ</td>\r\n			<td>875,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.wiki,.ink</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,000,000 đ</td>\r\n			<td>800,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.online</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,010,000 đ</td>\r\n			<td>810,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.cn</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,015,000 đ</td>\r\n			<td>810,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.mn</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,120,000 đ</td>\r\n			<td>1,000,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.sg,.com.sg</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,130,000 đ</td>\r\n			<td>960,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.vegas</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,155,000 đ</td>\r\n			<td>925,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.golf,.dating,.partners,.condos,.apartments,<br />\r\n			.bingo,.expert,.maison,.tienda,.tennis,<br />\r\n			.holdings,.ventures,.diamonds,.voyage,.codes,<br />\r\n			.holiday,.viajes,.cruises,.flights,.villas,<br />\r\n			.clinic,.dental,.legal,.lease,.engineering,<br />\r\n			.tax,.university,.tours,.insure,.claims,<br />\r\n			.finance,.healthcare,.memorial,.surgery,.financial,<br />\r\n			.fund,.capital,.pizza,.furniture,.restaurant,<br />\r\n			.delivery,.coach</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,195,000 đ</td>\r\n			<td>955,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.careers,.limo,.recipes</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,195,000 đ</td>\r\n			<td>1,075,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.cz</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,220,000 đ</td>\r\n			<td>1,100,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.mx</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,320,000 đ</td>\r\n			<td>1,185,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.tech</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,350,000 đ</td>\r\n			<td>1,080,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.green</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,435,000 đ</td>\r\n			<td>1,415,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.jp</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,550,000 đ</td>\r\n			<td>1,395,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.ac</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,630,000 đ</td>\r\n			<td>1,465,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.hn</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,730,000 đ</td>\r\n			<td>1,550,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.br.com,.so,.uy.com,.za.com,.gb.com</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,770,000 đ</td>\r\n			<td>1,560,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.bar,.cricket</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,835,000 đ</td>\r\n			<td>1,470,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.press,.global</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,920,000 đ</td>\r\n			<td>1,535,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.am</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>1,940,000 đ</td>\r\n			<td>1,745,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.fm</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>2,420,000 đ</td>\r\n			<td>2,175,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.investments,.energy,.gold,.reise,.accountants,<br />\r\n			.credit,.tires,.loans,.host,.porn,<br />\r\n			.adult,.best</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>2,480,000 đ</td>\r\n			<td>1,980,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.ceo</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>2,485,000 đ</td>\r\n			<td>1,985,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.xxx</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>2,620,000 đ</td>\r\n			<td>2,095,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.sc</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>2,620,000 đ</td>\r\n			<td>2,355,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.cm</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>2,830,000 đ</td>\r\n			<td>2,545,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.casino</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>3,570,000 đ</td>\r\n			<td>3,070,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.creditcard</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>3,630,000 đ</td>\r\n			<td>2,905,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.hiv<br />\r\n			Ph&iacute; đăng k&yacute; t&ecirc;n miền .hiv sẽ được tr&iacute;ch ra 125$ để ủng hộ v&agrave;o Quỹ ph&ograve;ng chống HIV/AIDS</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>4,275,000 đ</td>\r\n			<td>4,240,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>.rich</td>\r\n			<td><a href="http://www.flickr.com/photos/null/27184129632" title="mua tên miền miễn phí chuanseo.vn"><img alt="mua tên miền miễn phí chuanseo.vn" src="https://farm8.staticflickr.com/7522/27184129632_eeef8a4ce5_o.png" /></a></td>\r\n			<td>62,200,000 đ</td>\r\n			<td>50,200,000 đ</td>\r\n			<td>Đăng k&yacute;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Lưu &yacute;: Gi&aacute; tr&ecirc;n chưa bao gồm VAT 10%</em><em>T&ecirc;n miền VN kh&ocirc;ng thuộc đối tượng chịu thuế VAT.</em></strong></p>\r\n\r\n<p><em><strong>Bảng gi&aacute; t&ecirc;n miền Việt Nam, bảng gi&aacute; t&ecirc;n miền Quốc tế, ph&iacute;a tr&ecirc;n c&oacute; thể rẻ hơn theo từng chương tr&igrave;nh v&agrave; ch&iacute;nh s&aacute;ch chiết khấu.</strong></em></p>\r\n', 0, 0, 0, 1, 1499328934, 0, 1),
(2, 'about', 'Thiết kế web chuẩn seo', 'thiet-ke-web-chuan-seo', 'ea645aa74f43801af60749fedc2e6e1b.png', 'Webdeponline.com thiết kế web giao diện trực quan, có tùy biến thay đổi kích thước và bố cục cho phù hợp và tối ưu nhất cho tất cả các thiết bị Laptop, Máy tính bảng, Smart Phone,… và bộ quản trị hướng người dùng một cách tối đa. Thậm chí khi bạn không biết nhiều về website cũng có thể dễ dàng quản trị được website của Webdeponline.com\r\nMột trong số những ưu điểm mạnh nhất của website được thiết kế bởi Webdeponline.com chính là khả năng hỗ trợ SEO tối đa. Webdeponline.com cung cấp những công cụ giúp bạn không cần phải động đến mã nguồn mà vẫn tối ưu được toàn diện về SEO cả về đường dẫn, các thẻ, tùy biến, code, …', '<p>Webdeponline.com thiết kế web giao diện trực quan, c&oacute; t&ugrave;y biến thay đổi k&iacute;ch thước v&agrave; bố cục cho ph&ugrave; hợp v&agrave; tối ưu nhất cho tất cả c&aacute;c thiết bị Laptop, M&aacute;y t&iacute;nh bảng, Smart Phone,&hellip; v&agrave; bộ quản trị hướng người d&ugrave;ng một c&aacute;ch tối đa. Thậm ch&iacute; khi bạn kh&ocirc;ng biết nhiều về website cũng c&oacute; thể dễ d&agrave;ng quản trị được website của Webdeponline.com<br />\r\nMột trong số những ưu điểm mạnh nhất của website được thiết kế bởi Webdeponline.com ch&iacute;nh l&agrave; khả năng hỗ trợ SEO tối đa. Webdeponline.com cung cấp những c&ocirc;ng cụ gi&uacute;p bạn kh&ocirc;ng cần phải động đến m&atilde; nguồn m&agrave; vẫn tối ưu được to&agrave;n diện về SEO cả về đường dẫn, c&aacute;c thẻ, t&ugrave;y biến, code, &hellip;</p>\r\n', 0, 0, 0, 1, 1499333370, 0, 1),
(3, 'footer', 'Giới thiệu webdeponline', 'gioi-thieu-webdeponline', '', '', '<p>huynhducvinh@yahoo.com</p>\r\n\r\n<p><strong>0986 263 362/ 0932 615 156&nbsp;</strong>(Mr. Vinh)</p>\r\n\r\n<p>156 T&ocirc; Hiến Th&agrave;nh, P.15, Q.10, TP.HCM</p>\r\n', 0, 0, 0, 1, 1499789680, 0, 1),
(4, 'contact', 'Liên hệ với chúng tôi', 'lien-he-voi-chung-toi', '', '', '<h2><span style="color:#ff0000">Li&ecirc;n hệ với ch&uacute;ng t&ocirc;i</span></h2>\r\n\r\n<p>huynhducvinh@yahoo.com</p>\r\n\r\n<p><strong>0986 263 362/ 0932 615 156&nbsp;</strong>(Mr. Vinh)</p>\r\n\r\n<p>156 T&ocirc; Hiến Th&agrave;nh, P.15, Q.10, TP.HCM</p>\r\n', 0, 0, 0, 1, 1499928989, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `lh_users`
--

CREATE TABLE `lh_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `groups` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '1:admin, 0 : member',
  `permission` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0:female, 1 male',
  `birthday` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:lock, 1 :active',
  `created` int(20) UNSIGNED NOT NULL DEFAULT '0',
  `time_updates` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `salt` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `lh_users`
--

INSERT INTO `lh_users` (`id`, `fullname`, `username`, `password`, `groups`, `permission`, `image`, `phone`, `email`, `address`, `gender`, `birthday`, `status`, `created`, `time_updates`, `salt`) VALUES
(1, 'Lâm Hưng', 'admin', '07d1f188bb80f13de8fe48fdb49e0f21', 'admin', 'a:8:{s:4:"user";s:19:"index|add|edit|show";s:13:"category_list";s:26:"index|add|edit|show|delete";s:12:"category_cat";s:26:"index|add|edit|show|delete";s:7:"product";s:26:"index|add|edit|show|delete";s:4:"post";s:26:"index|add|edit|show|delete";s:11:"single_post";s:26:"index|add|edit|show|delete";s:6:"config";s:26:"index|add|edit|show|delete";s:7:"contact";s:26:"index|add|edit|show|delete";}', 'f5b506c9d186059d7884d8a3f10e4092.png', '1231231231', 'lamhungspiderman@gmail.com', 'hcm', 1, '668732400', 1, 1475246947, 1498040502, '8405'),
(28, 'Hung', 'admin2', '360bf775d0025a430c909ad3e4933334', 'admin', 'a:8:{s:4:"user";s:19:"index|add|edit|show";s:13:"category_list";s:26:"index|add|edit|show|delete";s:12:"category_cat";s:19:"index|add|edit|show";s:7:"product";s:19:"index|add|edit|show";s:7:"article";s:5:"index";s:4:"post";s:19:"index|add|edit|show";s:11:"single_post";s:10:"index|edit";s:6:"config";s:19:"index|add|edit|show";}', 'da4aac81a178bb124e05ee20da11d180.jpg', '', 'quantri@yahoo.com', '', 0, '0', 1, 1487782387, 1499319990, '1443');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `lh_article`
--
ALTER TABLE `lh_article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_article_category_cat`
--
ALTER TABLE `lh_article_category_cat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_article_category_list`
--
ALTER TABLE `lh_article_category_list`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_config`
--
ALTER TABLE `lh_config`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_contact`
--
ALTER TABLE `lh_contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_image`
--
ALTER TABLE `lh_image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_photo`
--
ALTER TABLE `lh_photo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_posts`
--
ALTER TABLE `lh_posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_product`
--
ALTER TABLE `lh_product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_product_category_cat`
--
ALTER TABLE `lh_product_category_cat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_product_category_list`
--
ALTER TABLE `lh_product_category_list`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_single_post`
--
ALTER TABLE `lh_single_post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lh_users`
--
ALTER TABLE `lh_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `lh_article`
--
ALTER TABLE `lh_article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `lh_article_category_cat`
--
ALTER TABLE `lh_article_category_cat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lh_article_category_list`
--
ALTER TABLE `lh_article_category_list`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `lh_config`
--
ALTER TABLE `lh_config`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `lh_contact`
--
ALTER TABLE `lh_contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `lh_image`
--
ALTER TABLE `lh_image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `lh_photo`
--
ALTER TABLE `lh_photo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `lh_posts`
--
ALTER TABLE `lh_posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lh_product`
--
ALTER TABLE `lh_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `lh_product_category_cat`
--
ALTER TABLE `lh_product_category_cat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lh_product_category_list`
--
ALTER TABLE `lh_product_category_list`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lh_single_post`
--
ALTER TABLE `lh_single_post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `lh_users`
--
ALTER TABLE `lh_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
