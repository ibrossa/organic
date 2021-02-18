-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.22-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы organic.about_send_messages: ~0 rows (приблизительно)
DELETE FROM `about_send_messages`;
/*!40000 ALTER TABLE `about_send_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `about_send_messages` ENABLE KEYS */;

-- Дамп данных таблицы organic.about_stories: ~0 rows (приблизительно)
DELETE FROM `about_stories`;
/*!40000 ALTER TABLE `about_stories` DISABLE KEYS */;
INSERT INTO `about_stories` (`id`, `title`, `about_title`, `image`, `text`, `farm_count`, `farmer_count`, `sec_text`, `created_at`, `updated_at`) VALUES
	(1, 'story about us', '<h3>Our food should be our medicine</h3>', 'about-stories\\February2021\\sL5VHkeYOzOe3uuVu7Sg.jpg', '<p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness</p>', 745, 2480, '<p>Denouncing pleasure and praising pain was born and I will give you a complete account of the system, the actual teachings of the great explorer.</p>', '2021-02-02 19:08:00', '2021-02-12 16:15:45');
/*!40000 ALTER TABLE `about_stories` ENABLE KEYS */;

-- Дамп данных таблицы organic.award_images: ~4 rows (приблизительно)
DELETE FROM `award_images`;
/*!40000 ALTER TABLE `award_images` DISABLE KEYS */;
INSERT INTO `award_images` (`id`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'award-images\\February2021\\8sCTDvg7HnzYChqmU01v.png', '2021-02-02 20:38:00', '2021-02-12 11:37:24'),
	(2, 'award-images\\February2021\\op3YmwlTLhPpixzO6o2j.png', '2021-02-02 20:38:00', '2021-02-12 11:37:15'),
	(3, 'award-images\\February2021\\kryppapi63WXbRmBwvwd.png', '2021-02-02 20:38:00', '2021-02-12 11:36:59'),
	(4, 'award-images\\February2021\\QAmhAXQDrblgcWWJ3OwJ.png', '2021-02-02 20:39:00', '2021-02-12 11:36:48');
/*!40000 ALTER TABLE `award_images` ENABLE KEYS */;

-- Дамп данных таблицы organic.blogs: ~3 rows (приблизительно)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `description`, `text`, `image`, `author_name`, `author_image`, `author_text`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Interesting facts about organic food and organic store', '<p>As more and more people are turning to organic lifestyles &amp; trying improve their health...</p>', '<p>How all this mistaken idea denouncing pleasure and praising will give you a completed take a trivial sed example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with man sed who chooses to enjoyonsequences which of us every physical exercise.</p>\r\n<p>Praising will give you a completed take a trivial sed example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with man sed who chooses to enjoy.</p>\r\n<div class="qoute">\r\n<h3>Men who are so beguiled and demoralized by the charms of pleasure of <br />the moment, so blinded by desire, they cannot foresee.</h3>\r\n<span class="author color1">- Bianca Jones - </span></div>\r\n<div class="text">\r\n<p>All this mistaken idea of denouncing pleasure and praising pain was born and I will give you seds our complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>\r\n</div>', 'blogs\\February2021\\ktwC3J8SdGEorVJBlky1.jpg', 'Robecca Garza', '/images/gallery/a3.jpg', '<p>How all this mistaken idea of denouncing pleasures and praising ours pains was born and I will give you sed a works complete account of the system, and expound the actual teachings off the greatest</p>', 1, '2021-02-03 10:52:00', '2021-02-12 16:08:21'),
	(2, 'You should add 5 things in your daily meals.', '<p>As more and more people are turning to organic lifestyles &amp; trying improve their health...</p>', '<p>How all this mistaken idea denouncing pleasure and praising will give you a completed take a trivial sed example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with man sed who chooses to enjoyonsequences which of us every physical exercise.</p>\r\n<p>Praising will give you a completed take a trivial sed example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with man sed who chooses to enjoy.</p>\r\n<div class="qoute">\r\n<h3>Men who are so beguiled and demoralized by the charms of pleasure of <br />the moment, so blinded by desire, they cannot foresee.</h3>\r\n<span class="author color1">- Bianca Jones - </span></div>\r\n<div class="text">\r\n<p>All this mistaken idea of denouncing pleasure and praising pain was born and I will give you seds our complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\r\n</div>', 'blogs\\February2021\\9VezxdwpICMHfuWN9y3l.jpg', 'John Abraham', '/images/gallery/a3.jpg', '<p>How all this mistaken idea of denouncing pleasures and praising ours pains was born and I will give you sed a works complete account of the system, and expound the actual teachings off the greatest</p>', 1, '2021-02-03 11:46:00', '2021-02-12 13:54:38'),
	(3, 'You should add 5 things in your daily meals.', '<p>As more and more people are turning to organic lifestyles &amp; trying improve their health..</p>', '<p>How all this mistaken idea denouncing pleasure and praising will give you a completed take a trivial sed example, which of us ever undertakes laborious physical exercise, except t</p>', 'blogs\\February2021\\5JL2NqFQaqJ0m6tU4lpN.jpg', 'Robecca Garza', '/images/gallery/a3.jpg', '<p>How all this mistaken idea of denouncing pleasures and praising ours pains was born and I will give you sed a works complete account of the system, and expound the actual teachings off the greatest ...</p>', 1, '2021-02-04 12:35:00', '2021-02-12 13:54:27'),
	(4, 'You should add 5 things in your daily meals.', '<p><strong>As more and more people are turning to organic lifestyles &amp; trying improve</strong></p>', '<p>How all this mistaken idea denouncing pleasure and praising will give you a completed take a trivial sed example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with man sed who chooses to enjoyonsequences which of us every physical exercise.</p>\r\n<p>Praising will give you a completed take a trivial sed example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with man sed who chooses to enjoy.</p>\r\n<div class="qoute">\r\n<h3>Men who are so beguiled and demoralized by the charms of pleasure of <br />the moment, so blinded by desire, they cannot foresee.</h3>\r\n<span class="author color1">- Bianca Jones - </span></div>\r\n<div class="text">\r\n<p>All this mistaken idea of denouncing pleasure and praising pain was born and I will give you seds our complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>\r\n</div>', 'blogs\\February2021\\oFi2CjrOwFyWuuSWN5V8.jpg', 'Robecca Garza', 'blogs\\February2021\\73W0dijaYKXWSiVHaNYD.jpg', '<p>How all this mistaken idea of denouncing pleasures and praising ours pains was born and I will give you sed a works complete account of the system, and expound the actual teachings off the greatest</p>', 1, '2021-02-04 12:36:00', '2021-02-13 14:47:35');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Дамп данных таблицы organic.blog_comments: ~11 rows (приблизительно)
DELETE FROM `blog_comments`;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
INSERT INTO `blog_comments` (`id`, `blog_id`, `name`, `email`, `website`, `comment`, `created_at`, `updated_at`) VALUES
	(1, 1, 'vasea vasilev', 'vasea@gmail.com', 'vasea.com', 'hello world', '2021-02-10 12:38:52', '2021-02-10 12:38:52'),
	(2, 2, 'Petea Petrov', 'pir@gmail.com', 'pit.com', 'Just testinc', '2021-02-10 12:39:24', '2021-02-10 12:39:24'),
	(3, 2, 'dfdf', 'fdfs', 'dfdf', 'fdfds', '2021-02-10 13:51:10', '2021-02-10 13:51:10'),
	(4, 1, 'Igor', 'igor@mail.com', 'www.igor.com', 'Testing', '2021-02-10 14:29:43', '2021-02-10 14:29:43'),
	(5, 1, 'dfsfd', 'admin@admin.com', 'fdsdf', 'fdsfd', '2021-02-10 14:55:19', '2021-02-10 14:55:19'),
	(6, 1, 'erew', 'admin@admin.com', 'ereq', 'wew', '2021-02-10 15:04:21', '2021-02-10 15:04:21'),
	(7, 1, 'erew', 'admin@admin.com', 'ereq', 'wew', '2021-02-10 15:07:03', '2021-02-10 15:07:03'),
	(8, 1, 'fds', 'admin@admin.com', 'fdsfd', 'eff', '2021-02-10 15:16:40', '2021-02-10 15:16:40'),
	(9, 4, 'erwer', 'admin@admin.com', 'ewrew', 'erw', '2021-02-11 08:53:44', '2021-02-11 08:53:44'),
	(10, 4, 'erwer', 'admin@admin.com', 'ewrew', 'erw', '2021-02-11 08:53:55', '2021-02-11 08:53:55'),
	(11, 4, 'erwer', 'admin@admin.com', 'ewrew', 'erw', '2021-02-11 08:54:24', '2021-02-11 08:54:24'),
	(12, 4, 'Igor', 'admin@admin.com', 'www.igor.com', 'Hello', '2021-02-12 10:19:04', '2021-02-12 10:19:04');
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;

-- Дамп данных таблицы organic.categories: ~4 rows (приблизительно)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'Vegetables', '2021-02-04 11:28:00', '2021-02-12 15:39:00', 1),
	(2, 'Fruits', '2021-02-04 11:29:00', '2021-02-12 15:37:19', 1),
	(3, 'Meat', '2021-02-04 11:29:00', '2021-02-12 15:37:41', 1),
	(4, 'Beauty care', '2021-02-04 11:29:00', '2021-02-12 15:37:51', 1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп данных таблицы organic.data_rows: ~168 rows (приблизительно)
DELETE FROM `data_rows`;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
	(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
	(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
	(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
	(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
	(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
	(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
	(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
	(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
	(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}', 10),
	(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}', 11),
	(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
	(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
	(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
	(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
	(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
	(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
	(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
	(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
	(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
	(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
	(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
	(28, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(29, 19, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
	(30, 19, 'about_title', 'rich_text_box', 'About Title', 1, 1, 1, 1, 1, 1, '{}', 3),
	(31, 19, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
	(32, 19, 'text', 'rich_text_box', 'Text', 1, 1, 1, 1, 1, 1, '{}', 5),
	(33, 19, 'farm_count', 'text', 'Farm Count', 1, 1, 1, 1, 1, 1, '{}', 6),
	(34, 19, 'farmer_count', 'text', 'Farmer Count', 1, 1, 1, 1, 1, 1, '{}', 7),
	(35, 19, 'sec_text', 'rich_text_box', 'Sec Text', 1, 1, 1, 1, 1, 1, '{}', 8),
	(36, 19, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 9),
	(37, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
	(38, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(39, 20, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
	(40, 20, 'text', 'rich_text_box', 'Text', 1, 1, 1, 1, 1, 1, '{}', 3),
	(41, 20, 'image', 'text', 'Image', 1, 0, 1, 1, 1, 1, '{}', 4),
	(42, 20, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 5),
	(43, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
	(44, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(45, 21, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
	(46, 21, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 3),
	(47, 21, 'image', 'text', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
	(48, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
	(49, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
	(50, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(51, 22, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
	(52, 22, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 3),
	(53, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
	(105, 29, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(106, 29, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
	(107, 29, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
	(108, 29, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
	(109, 30, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(110, 30, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
	(111, 30, 'description', 'rich_text_box', 'Description', 1, 0, 1, 1, 1, 1, '{}', 4),
	(112, 30, 'text', 'rich_text_box', 'Text', 1, 0, 1, 1, 1, 1, '{}', 5),
	(113, 30, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 6),
	(114, 30, 'author_name', 'text', 'Author Name', 1, 1, 1, 1, 1, 1, '{}', 7),
	(115, 30, 'author_image', 'image', 'Author Image', 1, 0, 1, 1, 1, 1, '{}', 8),
	(116, 30, 'author_text', 'rich_text_box', 'Author Text', 1, 0, 1, 1, 1, 1, '{}', 9),
	(118, 30, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 10),
	(119, 30, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
	(120, 31, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(121, 31, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
	(122, 31, 'image', 'text', 'Image', 1, 1, 1, 1, 1, 1, '{}', 3),
	(123, 31, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 4),
	(124, 31, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
	(125, 31, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
	(126, 32, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(127, 32, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
	(128, 32, 'position', 'text', 'Position', 1, 1, 1, 1, 1, 1, '{}', 4),
	(129, 32, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 5),
	(130, 32, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 7),
	(131, 32, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
	(132, 33, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(133, 33, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 3),
	(134, 33, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 4),
	(135, 33, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
	(136, 35, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(137, 35, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
	(138, 35, 'position', 'text', 'Position', 1, 1, 1, 1, 1, 1, '{}', 4),
	(139, 35, 'description', 'text_area', 'Description', 1, 0, 1, 1, 1, 1, '{}', 5),
	(140, 35, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 6),
	(141, 35, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 7),
	(142, 35, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
	(143, 32, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 6),
	(144, 37, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(145, 37, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
	(146, 37, 'mail', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
	(147, 37, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 4),
	(148, 37, 'subject', 'text_area', 'Subject', 0, 1, 1, 1, 1, 1, '{}', 5),
	(149, 37, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, '{}', 6),
	(150, 37, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
	(151, 37, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
	(152, 38, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(153, 38, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 5),
	(154, 38, 'description', 'text_area', 'Description', 1, 1, 1, 1, 1, 1, '{}', 7),
	(155, 38, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 3),
	(156, 38, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
	(157, 38, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
	(158, 39, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(159, 39, 'blog_id', 'text', 'Blog Id', 1, 0, 1, 1, 1, 1, '{}', 2),
	(160, 39, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
	(161, 39, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
	(162, 39, 'website', 'text', 'Website', 1, 0, 1, 1, 1, 1, '{}', 5),
	(163, 39, 'comment', 'rich_text_box', 'Comment', 1, 1, 1, 1, 1, 1, '{}', 6),
	(164, 39, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 7),
	(165, 39, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
	(177, 45, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(178, 45, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
	(179, 45, 'text', 'text_area', 'Text', 1, 1, 1, 1, 1, 1, '{}', 3),
	(180, 45, 'image', 'text', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
	(181, 45, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
	(182, 45, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
	(183, 46, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(184, 46, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
	(185, 46, 'text', 'rich_text_box', 'Text', 1, 1, 1, 1, 1, 1, '{}', 3),
	(186, 46, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
	(187, 46, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 5),
	(188, 46, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
	(189, 47, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(190, 47, 'product_id', 'text', 'Email Id', 1, 0, 1, 1, 1, 1, '{}', 3),
	(191, 47, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
	(192, 47, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 5),
	(193, 47, 'review', 'text', 'Review', 1, 1, 1, 1, 1, 1, '{}', 6),
	(194, 47, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 7),
	(195, 47, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
	(196, 48, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(198, 48, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 5),
	(199, 48, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{}', 6),
	(200, 48, 'old_price', 'number', 'Old Price', 1, 0, 1, 1, 1, 1, '{}', 7),
	(201, 48, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 8),
	(202, 48, 'description', 'rich_text_box', 'Description', 1, 0, 1, 1, 1, 1, '{}', 9),
	(203, 48, 'text', 'rich_text_box', 'Text', 1, 0, 1, 1, 1, 1, '{}', 10),
	(204, 48, 'contains', 'rich_text_box', 'Contains', 1, 0, 1, 1, 1, 1, '{}', 11),
	(205, 48, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 4),
	(206, 48, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 13),
	(207, 48, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
	(208, 49, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(209, 49, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
	(210, 49, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
	(211, 49, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
	(212, 49, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
	(213, 50, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(214, 50, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
	(215, 50, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 4),
	(216, 50, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
	(217, 50, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
	(218, 48, 'product_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Category","table":"categories","type":"belongsTo","column":"category_id","key":"id","label":"title","pivot_table":"about_send_messages","pivot":"0","taggable":"0"}', 2),
	(219, 39, 'blog_comment_belongsto_blog_relationship', 'relationship', 'blog_id', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Blog","table":"blogs","type":"belongsTo","column":"blog_id","key":"id","label":"title","pivot_table":"about_send_messages","pivot":"0","taggable":"0"}', 9),
	(220, 29, 'category_hasmany_product_relationship', 'relationship', 'products', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Email","table":"products","type":"hasMany","column":"category_id","key":"id","label":"title","pivot_table":"about_send_messages","pivot":"0","taggable":"0"}', 6),
	(221, 47, 'product_review_belongsto_product_relationship', 'relationship', 'Email', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Email","table":"products","type":"belongsTo","column":"product_id","key":"id","label":"title","pivot_table":"about_send_messages","pivot":"0","taggable":"0"}', 2),
	(222, 48, 'category_id', 'text', 'Category Id', 1, 0, 1, 1, 1, 1, '{}', 3),
	(223, 48, 'flag', 'text', 'Flag', 0, 1, 1, 1, 1, 1, '{}', 12),
	(224, 30, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 2),
	(225, 32, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 2),
	(226, 33, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 2),
	(227, 35, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 2),
	(228, 29, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 2),
	(229, 50, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 2),
	(230, 38, 'logo', 'image', 'Logo', 1, 1, 1, 1, 1, 1, '{}', 4),
	(231, 38, 'smal_text', 'text_area', 'Smal Text', 0, 1, 1, 1, 1, 1, '{}', 6),
	(232, 38, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 2),
	(233, 51, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
	(234, 51, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
	(235, 51, 'sub_title', 'text', 'Sub Title', 1, 1, 1, 1, 1, 1, '{}', 3),
	(236, 51, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
	(237, 51, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
	(238, 51, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;

-- Дамп данных таблицы organic.data_types: ~24 rows (приблизительно)
DELETE FROM `data_types`;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
	(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-01-31 12:30:55', '2021-01-31 12:30:55'),
	(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-01-31 12:30:55', '2021-01-31 12:30:55'),
	(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-01-31 12:30:55', '2021-01-31 12:30:55'),
	(10, 'about_sections', 'aboutsections', 'About Section', 'About Sections', NULL, 'App\\Models\\Aboutsection', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-01 14:19:36', '2021-02-01 14:25:56'),
	(19, 'about_stories', 'about-stories', 'About Story', 'About Stories', NULL, 'App\\Models\\AboutStory', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-02 19:07:27', '2021-02-12 11:43:09'),
	(20, 'three_colums', 'three-colums', 'Three Colum', 'Three Colums', NULL, 'App\\Models\\ThreeColum', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-02 19:39:27', '2021-02-12 10:51:27'),
	(21, 'delivery_processes', 'delivery-processes', 'Delivery Process', 'Delivery Processes', NULL, 'App\\Models\\DeliveryProcess', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}', '2021-02-02 20:15:24', '2021-02-02 20:15:24'),
	(22, 'award_images', 'award-images', 'Award Image', 'Award Images', NULL, 'App\\Models\\AwardImage', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-02 20:37:57', '2021-02-12 11:36:30'),
	(29, 'categories', 'categories', 'Category', 'Categories', NULL, 'App\\Models\\Category', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-04 11:23:30', '2021-02-12 15:37:03'),
	(30, 'blogs', 'blogs', 'Blog', 'Blogs', 'voyager-news', 'App\\Models\\Blog', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-04 12:34:18', '2021-02-12 13:53:57'),
	(31, 'why_chooses', 'why-chooses', 'Why Choose', 'Why Chooses', NULL, 'App\\Models\\WhyChoose', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-04 12:53:50', '2021-02-12 10:52:59'),
	(32, 'farmers', 'farmers', 'Farmer', 'Farmers', NULL, 'App\\Models\\Farmer', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-04 13:07:49', '2021-02-12 14:05:21'),
	(33, 'parthners_logos', 'parthners-logos', 'Parthners Logo', 'Parthners Logos', NULL, 'App\\Models\\ParthnersLogo', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-04 13:19:54', '2021-02-12 14:06:27'),
	(35, 'testimonials', 'testimonials', 'Testimonial', 'Testimonials', NULL, 'App\\Models\\Testimonial', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-04 13:23:07', '2021-02-12 14:06:56'),
	(37, 'about_send_messages', 'about-send-messages', 'About Send Message', 'About Send Messages', NULL, 'App\\Models\\AboutSendMessage', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}', '2021-02-04 14:52:48', '2021-02-04 14:52:48'),
	(38, 'slaiders', 'slaiders', 'Slaider', 'Slaiders', NULL, 'App\\Models\\Slaider', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-05 13:09:24', '2021-02-13 13:59:55'),
	(39, 'blog_comments', 'blog-comments', 'Blog Comment', 'Blog Comments', NULL, 'App\\Models\\BlogComment', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-06 10:58:17', '2021-02-12 10:18:51'),
	(45, 'aboutsections', 'indexaboutsections', 'Index Aboutsection', 'Index Aboutsections', NULL, 'App\\Models\\Aboutsection', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-08 09:33:59', '2021-02-08 09:35:26'),
	(46, 'index_abouts', 'index-abouts', 'Index About', 'Index Abouts', NULL, 'App\\Models\\Offer', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-08 09:39:32', '2021-02-12 10:29:00'),
	(47, 'product_reviews', 'product-reviews', 'Email Review', 'Email Reviews', NULL, 'App\\Models\\ProductReview', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-10 15:35:36', '2021-02-12 10:35:05'),
	(48, 'products', 'products', 'Email', 'Products', NULL, 'App\\Models\\Email', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-11 09:36:36', '2021-02-12 13:12:51'),
	(49, 'subscribes', 'subscribes', 'Subscribe', 'Subscribes', NULL, 'App\\Models\\Subscribe', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}', '2021-02-11 09:37:02', '2021-02-11 09:37:02'),
	(50, 'faqs', 'faqs', 'Faq', 'Faqs', NULL, 'App\\Models\\Faq', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}', '2021-02-11 09:39:42', '2021-02-12 15:46:58'),
	(51, 'second_headers', 'second-headers', 'Second Header', 'Second Headers', NULL, 'App\\Models\\SecondHeader', NULL, NULL, NULL, 1, 0, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}', '2021-02-15 12:09:08', '2021-02-15 12:09:08');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;

-- Дамп данных таблицы organic.delivery_processes: ~4 rows (приблизительно)
DELETE FROM `delivery_processes`;
/*!40000 ALTER TABLE `delivery_processes` DISABLE KEYS */;
INSERT INTO `delivery_processes` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Customer Order', 'Organicstore.com’s customers order is captured by warehouse API..', 'icon-business', '2021-02-02 20:17:00', '2021-02-02 20:17:00'),
	(2, 'Packing', 'Organicstore.com’s customers order is captured by warehouse API..', 'rot icon-nature-1', '2021-02-02 20:17:54', '2021-02-02 20:17:54'),
	(3, 'Delivery', 'Organicstore.com’s customers order is captured by warehouse API..', 'rot icon-transport', '2021-02-02 20:18:45', '2021-02-02 20:18:45'),
	(4, 'Reporting', 'Organicstore.com’s customers order is captured by warehouse API.', 'rot icon-check', '2021-02-02 20:19:25', '2021-02-02 20:19:25');
/*!40000 ALTER TABLE `delivery_processes` ENABLE KEYS */;

-- Дамп данных таблицы organic.failed_jobs: ~0 rows (приблизительно)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Дамп данных таблицы organic.faqs: ~2 rows (приблизительно)
DELETE FROM `faqs`;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'What are the benefits of organic food?', 'Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise.', '2021-02-03 10:03:00', '2021-02-12 15:47:30', 1),
	(2, 'What are the most important foods to buy organic?', 'Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise.', '2021-02-03 10:03:00', '2021-02-12 15:49:08', 1),
	(3, 'How is organic better for the environment?', 'Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise.', '2021-02-03 10:03:00', '2021-02-12 15:47:21', 1);
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

-- Дамп данных таблицы organic.farmers: ~4 rows (приблизительно)
DELETE FROM `farmers`;
/*!40000 ALTER TABLE `farmers` DISABLE KEYS */;
INSERT INTO `farmers` (`id`, `name`, `position`, `description`, `status`, `created_at`, `updated_at`, `image`) VALUES
	(1, 'Rebecca Garzany', 'Pastoral Farmer', '<p>Praising pain was born and I will give you a complete account of the system.</p>', 1, '2021-02-04 13:09:00', '2021-02-12 14:05:54', 'farmers\\February2021\\5wPhUShQb0W1JrV0qQJz.jpg'),
	(2, 'Vasilii Pupkin', 'Farm Manager', '<p>Praising pain was born and I will give you a complete account of the system.</p>', NULL, '2021-02-04 13:09:00', '2021-02-12 10:27:59', 'farmers\\February2021\\K4PW1C2LQrbAAPsb7Cyw.jpg'),
	(3, 'Ivan Ivanov', 'Arable farmer', '<p>Praising pain was born and I will give you a complete account of the system.</p>', 1, '2021-02-04 13:10:00', '2021-02-12 14:05:33', 'farmers\\February2021\\6z4GZaErX7ApY6JrGiDo.jpg'),
	(4, 'Jhon Batman', 'Disgine', '<p>Praising pain was born and I will give you a complete account of the system.</p>', 1, '2021-02-04 13:10:00', '2021-02-12 14:05:44', 'farmers\\February2021\\cybfUGswYkdUV2zoaUhL.jpg');
/*!40000 ALTER TABLE `farmers` ENABLE KEYS */;

-- Дамп данных таблицы organic.index_abouts: ~2 rows (приблизительно)
DELETE FROM `index_abouts`;
/*!40000 ALTER TABLE `index_abouts` DISABLE KEYS */;
INSERT INTO `index_abouts` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'We Grow Beauty', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking organic cosmetics.</p>', 'index-abouts\\February2021\\gyqWW1pUKnjSRgfHxIE3.jpg', '2021-02-08 09:41:00', '2021-02-12 10:29:34'),
	(2, 'We Grow Beauty', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking organic cosmetics.</p>', 'index-abouts\\February2021\\K7I5XK9Skiw1JJValfN9.jpg', '2021-02-08 09:42:00', '2021-02-12 10:29:25');
/*!40000 ALTER TABLE `index_abouts` ENABLE KEYS */;

-- Дамп данных таблицы organic.menus: ~0 rows (приблизительно)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2021-01-31 12:30:56', '2021-01-31 12:30:56');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Дамп данных таблицы organic.menu_items: ~36 rows (приблизительно)
DELETE FROM `menu_items`;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
	(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 10, '2021-01-31 12:30:56', '2021-02-11 09:43:22', 'voyager.dashboard', NULL),
	(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 7, '2021-01-31 12:30:56', '2021-02-11 09:43:20', 'voyager.media.index', NULL),
	(3, 1, 'Users', '', '_self', 'voyager-person', NULL, 5, 6, '2021-01-31 12:30:56', '2021-02-11 09:32:24', 'voyager.users.index', NULL),
	(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 5, 7, '2021-01-31 12:30:56', '2021-02-11 09:32:24', 'voyager.roles.index', NULL),
	(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 8, '2021-01-31 12:30:56', '2021-02-11 09:43:22', NULL, NULL),
	(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-01-31 12:30:56', '2021-02-02 20:42:47', 'voyager.menus.index', NULL),
	(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-01-31 12:30:56', '2021-02-02 20:42:47', 'voyager.database.index', NULL),
	(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-01-31 12:30:57', '2021-02-02 20:42:47', 'voyager.compass.index', NULL),
	(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-01-31 12:30:57', '2021-02-02 20:42:47', 'voyager.bread.index', NULL),
	(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 9, '2021-01-31 12:30:57', '2021-02-11 09:43:22', 'voyager.settings.index', NULL),
	(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2021-01-31 12:30:59', '2021-02-02 20:42:47', 'voyager.hooks', NULL),
	(19, 1, 'About Stories', '', '_self', NULL, NULL, 21, 1, '2021-02-02 19:07:27', '2021-02-02 20:14:02', 'voyager.about-stories.index', NULL),
	(20, 1, 'Three Colums', '', '_self', NULL, NULL, 21, 2, '2021-02-02 19:39:27', '2021-02-02 20:14:04', 'voyager.three-colums.index', NULL),
	(21, 1, 'About Secsion Page', '', '_self', 'voyager-book', '#000000', NULL, 2, '2021-02-02 20:13:18', '2021-02-12 10:13:07', NULL, ''),
	(22, 1, 'Delivery Processes', '', '_self', NULL, NULL, 21, 3, '2021-02-02 20:15:24', '2021-02-02 20:15:56', 'voyager.delivery-processes.index', NULL),
	(23, 1, 'Award Images', '', '_self', NULL, NULL, 21, 5, '2021-02-02 20:37:57', '2021-02-02 20:43:02', 'voyager.award-images.index', NULL),
	(30, 1, 'Categories', '', '_self', NULL, NULL, 45, 2, '2021-02-04 11:23:30', '2021-02-11 09:37:22', 'voyager.categories.index', NULL),
	(31, 1, 'Blogs', '', '_self', NULL, NULL, 46, 1, '2021-02-04 12:34:18', '2021-02-11 09:37:47', 'voyager.blogs.index', NULL),
	(32, 1, 'Why Chooses', '', '_self', NULL, NULL, 44, 3, '2021-02-04 12:53:50', '2021-02-11 09:25:17', 'voyager.why-chooses.index', NULL),
	(33, 1, 'Farmers', '', '_self', NULL, NULL, 44, 4, '2021-02-04 13:07:50', '2021-02-11 09:25:32', 'voyager.farmers.index', NULL),
	(34, 1, 'Parthners Logos', '', '_self', NULL, NULL, 44, 6, '2021-02-04 13:19:54', '2021-02-11 09:26:03', 'voyager.parthners-logos.index', NULL),
	(35, 1, 'Testimonials', '', '_self', NULL, NULL, 44, 5, '2021-02-04 13:23:08', '2021-02-11 09:25:43', 'voyager.testimonials.index', NULL),
	(36, 1, 'About Send Messages', '', '_self', NULL, NULL, 51, 1, '2021-02-04 14:52:48', '2021-02-11 09:43:29', 'voyager.about-send-messages.index', NULL),
	(37, 1, 'Slaiders', '', '_self', NULL, NULL, 44, 1, '2021-02-05 13:09:24', '2021-02-11 09:24:34', 'voyager.slaiders.index', NULL),
	(38, 1, 'Blog Comments', '', '_self', NULL, NULL, 46, 2, '2021-02-06 10:58:17', '2021-02-11 09:37:52', 'voyager.blog-comments.index', NULL),
	(42, 1, 'Index Abouts', '', '_self', NULL, NULL, 44, 2, '2021-02-08 09:39:33', '2021-02-11 09:24:47', 'voyager.index-abouts.index', NULL),
	(43, 1, 'Email Reviews', '', '_self', NULL, NULL, 45, 3, '2021-02-10 15:35:37', '2021-02-11 09:37:22', 'voyager.product-reviews.index', NULL),
	(44, 1, 'Index Page', '', '_self', 'voyager-world', '#000000', NULL, 1, '2021-02-11 09:23:45', '2021-02-12 10:12:54', NULL, ''),
	(45, 1, 'Store Page', '', '_self', 'voyager-bag', '#000000', NULL, 3, '2021-02-11 09:27:44', '2021-02-12 10:13:21', NULL, ''),
	(46, 1, 'News Page', '', '_self', 'voyager-news', '#000000', NULL, 4, '2021-02-11 09:32:01', '2021-02-12 10:11:00', NULL, ''),
	(47, 1, 'Products', '', '_self', NULL, NULL, 45, 1, '2021-02-11 09:36:36', '2021-02-11 09:37:22', 'voyager.products.index', NULL),
	(48, 1, 'Subscribes', '', '_self', NULL, NULL, 51, 2, '2021-02-11 09:37:02', '2021-02-11 09:43:29', 'voyager.subscribes.index', NULL),
	(49, 1, 'Faqs', '', '_self', NULL, NULL, 50, 1, '2021-02-11 09:39:42', '2021-02-11 09:40:27', 'voyager.faqs.index', NULL),
	(50, 1, 'Faq Page', '', '_self', 'voyager-megaphone', '#000000', NULL, 5, '2021-02-11 09:40:17', '2021-02-12 10:13:53', NULL, ''),
	(51, 1, 'Contact Page', '', '_self', 'voyager-mail', '#000000', NULL, 6, '2021-02-11 09:43:11', '2021-02-12 10:14:19', NULL, ''),
	(52, 1, 'Second Headers', '', '_self', NULL, NULL, NULL, 11, '2021-02-15 12:09:08', '2021-02-15 12:09:08', 'voyager.second-headers.index', NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;

-- Дамп данных таблицы organic.migrations: ~43 rows (приблизительно)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2016_01_01_000000_add_voyager_user_fields', 1),
	(4, '2016_01_01_000000_create_data_types_table', 1),
	(5, '2016_05_19_173453_create_menu_table', 1),
	(6, '2016_10_21_190000_create_roles_table', 1),
	(7, '2016_10_21_190000_create_settings_table', 1),
	(8, '2016_11_30_135954_create_permission_table', 1),
	(9, '2016_11_30_141208_create_permission_role_table', 1),
	(10, '2016_12_26_201236_data_types__add__server_side', 1),
	(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
	(12, '2017_01_14_005015_create_translations_table', 1),
	(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
	(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
	(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
	(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
	(17, '2017_08_05_000000_add_group_to_settings_table', 1),
	(18, '2017_11_26_013050_add_user_role_relationship', 1),
	(19, '2017_11_26_015000_create_user_roles_table', 1),
	(20, '2018_03_11_000000_add_user_settings', 1),
	(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
	(22, '2018_03_16_000000_make_settings_value_nullable', 1),
	(23, '2019_08_19_000000_create_failed_jobs_table', 1),
	(24, '2021_02_01_135658_create_aboutsections_table', 2),
	(26, '2021_02_02_182645_create_about_stories_table', 3),
	(27, '2021_02_02_193441_create_three__colums_table', 4),
	(28, '2021_02_02_200829_create_delivery_processes_table', 5),
	(29, '2021_02_02_203346_create_awards_table', 6),
	(30, '2021_02_02_203421_create_award_images_table', 6),
	(31, '2021_02_02_205902_create_get_in_touches_table', 7),
	(33, '2021_02_03_095257_create_faqs_table', 8),
	(34, '2021_02_03_101554_create_blogs_table', 9),
	(36, '2021_02_03_141325_create_products_table', 10),
	(37, '2021_02_04_111808_create_categories_table', 11),
	(38, '2021_02_04_124915_create_why_cooses_table', 12),
	(39, '2021_02_04_130234_create_farmers_table', 13),
	(40, '2021_02_04_131710_create_testimonials_table', 14),
	(41, '2021_02_04_131757_create_parthners_logos_table', 14),
	(42, '2021_02_04_144829_create_about_send_messages_table', 15),
	(43, '2021_02_05_130722_create_slaiders_table', 16),
	(45, '2021_02_06_105153_create_blog_comments_table', 17),
	(48, '2021_02_08_090553_create_subscribes_table', 18),
	(49, '2021_02_08_093709_create_index_abouts_table', 18),
	(50, '2021_02_10_153056_create_product_reviews_table', 19),
	(53, '2021_02_15_120256_create_second_headers_table', 20);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп данных таблицы organic.parthners_logos: ~5 rows (приблизительно)
DELETE FROM `parthners_logos`;
/*!40000 ALTER TABLE `parthners_logos` DISABLE KEYS */;
INSERT INTO `parthners_logos` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'parthners-logos\\February2021\\6V9c6ZgqMQgMelePYmRa.png', 1, '2021-02-04 13:30:00', '2021-02-12 14:08:17'),
	(2, 'parthners-logos\\February2021\\WYWgdfHX4dudmDPiXGjD.png', 1, '2021-02-04 13:31:00', '2021-02-12 14:07:45'),
	(3, 'parthners-logos\\February2021\\kEH6U6FFbVdXdYZJcPVN.png', NULL, '2021-02-04 13:31:00', '2021-02-12 10:32:31'),
	(4, 'parthners-logos\\February2021\\05SgzJqE7MViCQH4FsNw.png', 1, '2021-02-04 13:31:00', '2021-02-12 14:07:57'),
	(5, 'parthners-logos\\February2021\\tAJwE8R5C54R73owhulM.png', 1, '2021-02-04 13:31:00', '2021-02-12 14:08:07');
/*!40000 ALTER TABLE `parthners_logos` ENABLE KEYS */;

-- Дамп данных таблицы organic.password_resets: ~0 rows (приблизительно)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп данных таблицы organic.permissions: ~135 rows (приблизительно)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
	(1, 'browse_admin', NULL, '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(2, 'browse_bread', NULL, '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(3, 'browse_database', NULL, '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(4, 'browse_media', NULL, '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(5, 'browse_compass', NULL, '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(6, 'browse_menus', 'menus', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(7, 'read_menus', 'menus', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(8, 'edit_menus', 'menus', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(9, 'add_menus', 'menus', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(10, 'delete_menus', 'menus', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(11, 'browse_roles', 'roles', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(12, 'read_roles', 'roles', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(13, 'edit_roles', 'roles', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(14, 'add_roles', 'roles', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(15, 'delete_roles', 'roles', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(16, 'browse_users', 'users', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(17, 'read_users', 'users', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(18, 'edit_users', 'users', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(19, 'add_users', 'users', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(20, 'delete_users', 'users', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(21, 'browse_settings', 'settings', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(22, 'read_settings', 'settings', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(23, 'edit_settings', 'settings', '2021-01-31 12:30:58', '2021-01-31 12:30:58'),
	(24, 'add_settings', 'settings', '2021-01-31 12:30:58', '2021-01-31 12:30:58'),
	(25, 'delete_settings', 'settings', '2021-01-31 12:30:58', '2021-01-31 12:30:58'),
	(26, 'browse_hooks', NULL, '2021-01-31 12:30:59', '2021-01-31 12:30:59'),
	(32, 'browse_about_sections', 'about_sections', '2021-02-01 14:19:36', '2021-02-01 14:19:36'),
	(33, 'read_about_sections', 'about_sections', '2021-02-01 14:19:36', '2021-02-01 14:19:36'),
	(34, 'edit_about_sections', 'about_sections', '2021-02-01 14:19:36', '2021-02-01 14:19:36'),
	(35, 'add_about_sections', 'about_sections', '2021-02-01 14:19:36', '2021-02-01 14:19:36'),
	(36, 'delete_about_sections', 'about_sections', '2021-02-01 14:19:36', '2021-02-01 14:19:36'),
	(62, 'browse_about_stories', 'about_stories', '2021-02-02 19:07:27', '2021-02-02 19:07:27'),
	(63, 'read_about_stories', 'about_stories', '2021-02-02 19:07:27', '2021-02-02 19:07:27'),
	(64, 'edit_about_stories', 'about_stories', '2021-02-02 19:07:27', '2021-02-02 19:07:27'),
	(65, 'add_about_stories', 'about_stories', '2021-02-02 19:07:27', '2021-02-02 19:07:27'),
	(66, 'delete_about_stories', 'about_stories', '2021-02-02 19:07:27', '2021-02-02 19:07:27'),
	(67, 'browse_three_colums', 'three_colums', '2021-02-02 19:39:27', '2021-02-02 19:39:27'),
	(68, 'read_three_colums', 'three_colums', '2021-02-02 19:39:27', '2021-02-02 19:39:27'),
	(69, 'edit_three_colums', 'three_colums', '2021-02-02 19:39:27', '2021-02-02 19:39:27'),
	(70, 'add_three_colums', 'three_colums', '2021-02-02 19:39:27', '2021-02-02 19:39:27'),
	(71, 'delete_three_colums', 'three_colums', '2021-02-02 19:39:27', '2021-02-02 19:39:27'),
	(72, 'browse_delivery_processes', 'delivery_processes', '2021-02-02 20:15:24', '2021-02-02 20:15:24'),
	(73, 'read_delivery_processes', 'delivery_processes', '2021-02-02 20:15:24', '2021-02-02 20:15:24'),
	(74, 'edit_delivery_processes', 'delivery_processes', '2021-02-02 20:15:24', '2021-02-02 20:15:24'),
	(75, 'add_delivery_processes', 'delivery_processes', '2021-02-02 20:15:24', '2021-02-02 20:15:24'),
	(76, 'delete_delivery_processes', 'delivery_processes', '2021-02-02 20:15:24', '2021-02-02 20:15:24'),
	(77, 'browse_award_images', 'award_images', '2021-02-02 20:37:57', '2021-02-02 20:37:57'),
	(78, 'read_award_images', 'award_images', '2021-02-02 20:37:57', '2021-02-02 20:37:57'),
	(79, 'edit_award_images', 'award_images', '2021-02-02 20:37:57', '2021-02-02 20:37:57'),
	(80, 'add_award_images', 'award_images', '2021-02-02 20:37:57', '2021-02-02 20:37:57'),
	(81, 'delete_award_images', 'award_images', '2021-02-02 20:37:57', '2021-02-02 20:37:57'),
	(112, 'browse_categories', 'categories', '2021-02-04 11:23:30', '2021-02-04 11:23:30'),
	(113, 'read_categories', 'categories', '2021-02-04 11:23:30', '2021-02-04 11:23:30'),
	(114, 'edit_categories', 'categories', '2021-02-04 11:23:30', '2021-02-04 11:23:30'),
	(115, 'add_categories', 'categories', '2021-02-04 11:23:30', '2021-02-04 11:23:30'),
	(116, 'delete_categories', 'categories', '2021-02-04 11:23:30', '2021-02-04 11:23:30'),
	(117, 'browse_blogs', 'blogs', '2021-02-04 12:34:18', '2021-02-04 12:34:18'),
	(118, 'read_blogs', 'blogs', '2021-02-04 12:34:18', '2021-02-04 12:34:18'),
	(119, 'edit_blogs', 'blogs', '2021-02-04 12:34:18', '2021-02-04 12:34:18'),
	(120, 'add_blogs', 'blogs', '2021-02-04 12:34:18', '2021-02-04 12:34:18'),
	(121, 'delete_blogs', 'blogs', '2021-02-04 12:34:18', '2021-02-04 12:34:18'),
	(122, 'browse_why_chooses', 'why_chooses', '2021-02-04 12:53:50', '2021-02-04 12:53:50'),
	(123, 'read_why_chooses', 'why_chooses', '2021-02-04 12:53:50', '2021-02-04 12:53:50'),
	(124, 'edit_why_chooses', 'why_chooses', '2021-02-04 12:53:50', '2021-02-04 12:53:50'),
	(125, 'add_why_chooses', 'why_chooses', '2021-02-04 12:53:50', '2021-02-04 12:53:50'),
	(126, 'delete_why_chooses', 'why_chooses', '2021-02-04 12:53:50', '2021-02-04 12:53:50'),
	(127, 'browse_farmers', 'farmers', '2021-02-04 13:07:49', '2021-02-04 13:07:49'),
	(128, 'read_farmers', 'farmers', '2021-02-04 13:07:49', '2021-02-04 13:07:49'),
	(129, 'edit_farmers', 'farmers', '2021-02-04 13:07:49', '2021-02-04 13:07:49'),
	(130, 'add_farmers', 'farmers', '2021-02-04 13:07:49', '2021-02-04 13:07:49'),
	(131, 'delete_farmers', 'farmers', '2021-02-04 13:07:49', '2021-02-04 13:07:49'),
	(132, 'browse_parthners_logos', 'parthners_logos', '2021-02-04 13:19:54', '2021-02-04 13:19:54'),
	(133, 'read_parthners_logos', 'parthners_logos', '2021-02-04 13:19:54', '2021-02-04 13:19:54'),
	(134, 'edit_parthners_logos', 'parthners_logos', '2021-02-04 13:19:54', '2021-02-04 13:19:54'),
	(135, 'add_parthners_logos', 'parthners_logos', '2021-02-04 13:19:54', '2021-02-04 13:19:54'),
	(136, 'delete_parthners_logos', 'parthners_logos', '2021-02-04 13:19:54', '2021-02-04 13:19:54'),
	(137, 'browse_testimonials', 'testimonials', '2021-02-04 13:23:07', '2021-02-04 13:23:07'),
	(138, 'read_testimonials', 'testimonials', '2021-02-04 13:23:07', '2021-02-04 13:23:07'),
	(139, 'edit_testimonials', 'testimonials', '2021-02-04 13:23:07', '2021-02-04 13:23:07'),
	(140, 'add_testimonials', 'testimonials', '2021-02-04 13:23:08', '2021-02-04 13:23:08'),
	(141, 'delete_testimonials', 'testimonials', '2021-02-04 13:23:08', '2021-02-04 13:23:08'),
	(142, 'browse_about_send_messages', 'about_send_messages', '2021-02-04 14:52:48', '2021-02-04 14:52:48'),
	(143, 'read_about_send_messages', 'about_send_messages', '2021-02-04 14:52:48', '2021-02-04 14:52:48'),
	(144, 'edit_about_send_messages', 'about_send_messages', '2021-02-04 14:52:48', '2021-02-04 14:52:48'),
	(145, 'add_about_send_messages', 'about_send_messages', '2021-02-04 14:52:48', '2021-02-04 14:52:48'),
	(146, 'delete_about_send_messages', 'about_send_messages', '2021-02-04 14:52:48', '2021-02-04 14:52:48'),
	(147, 'browse_slaiders', 'slaiders', '2021-02-05 13:09:24', '2021-02-05 13:09:24'),
	(148, 'read_slaiders', 'slaiders', '2021-02-05 13:09:24', '2021-02-05 13:09:24'),
	(149, 'edit_slaiders', 'slaiders', '2021-02-05 13:09:24', '2021-02-05 13:09:24'),
	(150, 'add_slaiders', 'slaiders', '2021-02-05 13:09:24', '2021-02-05 13:09:24'),
	(151, 'delete_slaiders', 'slaiders', '2021-02-05 13:09:24', '2021-02-05 13:09:24'),
	(152, 'browse_blog_comments', 'blog_comments', '2021-02-06 10:58:17', '2021-02-06 10:58:17'),
	(153, 'read_blog_comments', 'blog_comments', '2021-02-06 10:58:17', '2021-02-06 10:58:17'),
	(154, 'edit_blog_comments', 'blog_comments', '2021-02-06 10:58:17', '2021-02-06 10:58:17'),
	(155, 'add_blog_comments', 'blog_comments', '2021-02-06 10:58:17', '2021-02-06 10:58:17'),
	(156, 'delete_blog_comments', 'blog_comments', '2021-02-06 10:58:17', '2021-02-06 10:58:17'),
	(167, 'browse_aboutsections', 'aboutsections', '2021-02-08 09:33:59', '2021-02-08 09:33:59'),
	(168, 'read_aboutsections', 'aboutsections', '2021-02-08 09:33:59', '2021-02-08 09:33:59'),
	(169, 'edit_aboutsections', 'aboutsections', '2021-02-08 09:33:59', '2021-02-08 09:33:59'),
	(170, 'add_aboutsections', 'aboutsections', '2021-02-08 09:33:59', '2021-02-08 09:33:59'),
	(171, 'delete_aboutsections', 'aboutsections', '2021-02-08 09:33:59', '2021-02-08 09:33:59'),
	(172, 'browse_index_abouts', 'index_abouts', '2021-02-08 09:39:33', '2021-02-08 09:39:33'),
	(173, 'read_index_abouts', 'index_abouts', '2021-02-08 09:39:33', '2021-02-08 09:39:33'),
	(174, 'edit_index_abouts', 'index_abouts', '2021-02-08 09:39:33', '2021-02-08 09:39:33'),
	(175, 'add_index_abouts', 'index_abouts', '2021-02-08 09:39:33', '2021-02-08 09:39:33'),
	(176, 'delete_index_abouts', 'index_abouts', '2021-02-08 09:39:33', '2021-02-08 09:39:33'),
	(177, 'browse_product_reviews', 'product_reviews', '2021-02-10 15:35:36', '2021-02-10 15:35:36'),
	(178, 'read_product_reviews', 'product_reviews', '2021-02-10 15:35:36', '2021-02-10 15:35:36'),
	(179, 'edit_product_reviews', 'product_reviews', '2021-02-10 15:35:36', '2021-02-10 15:35:36'),
	(180, 'add_product_reviews', 'product_reviews', '2021-02-10 15:35:36', '2021-02-10 15:35:36'),
	(181, 'delete_product_reviews', 'product_reviews', '2021-02-10 15:35:36', '2021-02-10 15:35:36'),
	(182, 'browse_products', 'products', '2021-02-11 09:36:36', '2021-02-11 09:36:36'),
	(183, 'read_products', 'products', '2021-02-11 09:36:36', '2021-02-11 09:36:36'),
	(184, 'edit_products', 'products', '2021-02-11 09:36:36', '2021-02-11 09:36:36'),
	(185, 'add_products', 'products', '2021-02-11 09:36:36', '2021-02-11 09:36:36'),
	(186, 'delete_products', 'products', '2021-02-11 09:36:36', '2021-02-11 09:36:36'),
	(187, 'browse_subscribes', 'subscribes', '2021-02-11 09:37:02', '2021-02-11 09:37:02'),
	(188, 'read_subscribes', 'subscribes', '2021-02-11 09:37:02', '2021-02-11 09:37:02'),
	(189, 'edit_subscribes', 'subscribes', '2021-02-11 09:37:02', '2021-02-11 09:37:02'),
	(190, 'add_subscribes', 'subscribes', '2021-02-11 09:37:02', '2021-02-11 09:37:02'),
	(191, 'delete_subscribes', 'subscribes', '2021-02-11 09:37:02', '2021-02-11 09:37:02'),
	(192, 'browse_faqs', 'faqs', '2021-02-11 09:39:42', '2021-02-11 09:39:42'),
	(193, 'read_faqs', 'faqs', '2021-02-11 09:39:42', '2021-02-11 09:39:42'),
	(194, 'edit_faqs', 'faqs', '2021-02-11 09:39:42', '2021-02-11 09:39:42'),
	(195, 'add_faqs', 'faqs', '2021-02-11 09:39:42', '2021-02-11 09:39:42'),
	(196, 'delete_faqs', 'faqs', '2021-02-11 09:39:42', '2021-02-11 09:39:42'),
	(197, 'browse_second_headers', 'second_headers', '2021-02-15 12:09:08', '2021-02-15 12:09:08'),
	(198, 'read_second_headers', 'second_headers', '2021-02-15 12:09:08', '2021-02-15 12:09:08'),
	(199, 'edit_second_headers', 'second_headers', '2021-02-15 12:09:08', '2021-02-15 12:09:08'),
	(200, 'add_second_headers', 'second_headers', '2021-02-15 12:09:08', '2021-02-15 12:09:08'),
	(201, 'delete_second_headers', 'second_headers', '2021-02-15 12:09:08', '2021-02-15 12:09:08');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Дамп данных таблицы organic.permission_role: ~141 rows (приблизительно)
DELETE FROM `permission_role`;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(23, 1),
	(24, 1),
	(25, 1),
	(26, 1),
	(32, 1),
	(33, 1),
	(34, 1),
	(35, 1),
	(36, 1),
	(62, 1),
	(63, 1),
	(64, 1),
	(65, 1),
	(66, 1),
	(67, 1),
	(68, 1),
	(69, 1),
	(70, 1),
	(71, 1),
	(72, 1),
	(73, 1),
	(74, 1),
	(75, 1),
	(76, 1),
	(77, 1),
	(78, 1),
	(79, 1),
	(80, 1),
	(81, 1),
	(112, 1),
	(113, 1),
	(114, 1),
	(115, 1),
	(116, 1),
	(117, 1),
	(118, 1),
	(119, 1),
	(120, 1),
	(121, 1),
	(122, 1),
	(123, 1),
	(124, 1),
	(125, 1),
	(126, 1),
	(127, 1),
	(128, 1),
	(129, 1),
	(130, 1),
	(131, 1),
	(132, 1),
	(133, 1),
	(134, 1),
	(135, 1),
	(136, 1),
	(137, 1),
	(138, 1),
	(139, 1),
	(140, 1),
	(141, 1),
	(142, 1),
	(143, 1),
	(144, 1),
	(145, 1),
	(146, 1),
	(147, 1),
	(148, 1),
	(149, 1),
	(150, 1),
	(151, 1),
	(152, 1),
	(153, 1),
	(154, 1),
	(155, 1),
	(156, 1),
	(167, 1),
	(168, 1),
	(169, 1),
	(170, 1),
	(171, 1),
	(172, 1),
	(173, 1),
	(174, 1),
	(175, 1),
	(176, 1),
	(177, 1),
	(178, 1),
	(179, 1),
	(180, 1),
	(181, 1),
	(182, 1),
	(183, 1),
	(184, 1),
	(185, 1),
	(186, 1),
	(187, 1),
	(188, 1),
	(189, 1),
	(190, 1),
	(191, 1),
	(192, 1),
	(193, 1),
	(194, 1),
	(195, 1),
	(196, 1),
	(197, 1),
	(198, 1),
	(199, 1),
	(200, 1),
	(201, 1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Дамп данных таблицы organic.products: ~7 rows (приблизительно)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `category_id`, `title`, `price`, `old_price`, `image`, `description`, `text`, `contains`, `flag`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 'The Art Of The Start', 12.99, 15.99, 'products\\February2021\\Asg5i0YNboIoIw7UKfnz.png', '<p>There are many variations of passages,the majority suffered uts seds alterationin some of form uts, by injected humour random words which don\'t look evenslightly believable.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years on purpose. Distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors when looking.</p>', '<p>35% of organic raisins 55% of oats and 10% of butter.</p>', 'new', NULL, '2021-02-03 14:30:00', '2021-02-12 10:47:21'),
	(2, 2, 'Turmeric Power', 15.99, 20.99, 'products\\February2021\\2HzduqbyPZIY0UWpQuVG.png', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years on purpose. Distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors when looking.</p>', '<p>There are many variations of passages,the majority suffered uts seds alterationin some of form uts, by injected humour random words which don\'t look evenslightly believable.</p>', '<p>35% of organic raisins 55% of oats and 10% of butter.</p>', 'hot', 1, '2021-02-03 14:31:00', '2021-02-12 13:13:32'),
	(3, 3, 'dog food', 19.99, 25.99, 'products\\February2021\\FV0wovsltUBDrQucqPpL.png', '<p>There are many variations of passages,the majority suffered uts seds alterationin some of form uts, by injected humour random words which don\'t look evenslightly believable.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years on purpose. Distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors when looking.</p>', '<p>100% dog food</p>', 'hot', 1, '2021-02-04 11:47:00', '2021-02-12 13:13:07'),
	(4, 4, 'Milk shake', 10.99, 15.99, 'products\\February2021\\VYa4epT0dq73ujzYIZqc.png', '<p>Very taysty</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point o</p>', '<p>milk</p>', 'new', 1, '2021-02-04 11:55:00', '2021-02-12 13:12:23'),
	(5, 1, 'Turmeric Power', 5.99, 10.99, 'products\\February2021\\MMJnjUCYZ7HbFlLEPRCK.png', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using Lorem Ipsum is that it has a more-or-less normal distribu ...</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using Lorem Ipsum is that it has a more-or-less normal distribu ...</p>', '<p>Weed</p>', 'hot', 1, '2021-02-04 11:56:00', '2021-02-12 13:12:04'),
	(6, 2, 'Power', 10.99, 15.99, 'products\\February2021\\mo2riYozhcIOYkKpb76v.png', '<p>fdfsdfdfds</p>', '<p>text jdjfd</p>', '<p>100 power</p>', 'new', 1, '2021-02-04 16:32:00', '2021-02-12 13:18:08'),
	(7, 1, 'Carrot', 10.99, 10.99, 'products\\February2021\\eXaaccsKNfTF2K3Hv5hn.png', '<p>Good product</p>', '<p>Email is awsome</p>', '<p>100% vagetable</p>', 'new', 1, '2021-02-12 13:00:00', '2021-02-12 13:11:45');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Дамп данных таблицы organic.product_reviews: ~5 rows (приблизительно)
DELETE FROM `product_reviews`;
/*!40000 ALTER TABLE `product_reviews` DISABLE KEYS */;
INSERT INTO `product_reviews` (`id`, `product_id`, `name`, `email`, `review`, `created_at`, `updated_at`) VALUES
	(1, 5, 'erwr', 'admin@admin.com', 'wer', '2021-02-10 16:01:22', '2021-02-10 16:01:22'),
	(2, 5, 'Igor', 'igor@mail.com', 'I want to type some text for ypou.', '2021-02-10 16:23:29', '2021-02-10 16:23:29'),
	(3, 6, 'Pasha Finogentov', 'pasha@gmail.com', 'This product is awsame', '2021-02-10 17:11:19', '2021-02-10 17:11:19'),
	(4, 5, 'цукуц', 'admin@admin.com', 'уцу', '2021-02-11 08:42:26', '2021-02-11 08:42:26'),
	(5, 3, 'Vova', 'v@mail.com', 'awsome', '2021-02-13 14:52:08', '2021-02-13 14:52:08');
/*!40000 ALTER TABLE `product_reviews` ENABLE KEYS */;

-- Дамп данных таблицы organic.roles: ~2 rows (приблизительно)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Administrator', '2021-01-31 12:30:57', '2021-01-31 12:30:57'),
	(2, 'user', 'Normal User', '2021-01-31 12:30:57', '2021-01-31 12:30:57');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Дамп данных таблицы organic.second_headers: ~5 rows (приблизительно)
DELETE FROM `second_headers`;
/*!40000 ALTER TABLE `second_headers` DISABLE KEYS */;
INSERT INTO `second_headers` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'about us', 'Welcome to certified online organic products suppliersr', 'second-headers\\February2021\\Il7KbuWaaljhSfG4iv2M.jpg', '2021-02-15 12:10:42', '2021-02-15 12:10:42'),
	(2, 'our store', 'Welcome to certified online organic products suppliersr', 'second-headers\\February2021\\HIkrN8w07HSlpGFLLV8T.jpg', '2021-02-15 12:11:31', '2021-02-15 12:11:31'),
	(3, 'News Standard', 'Welcome to certified online organic products suppliersr', 'second-headers\\February2021\\WLxkoAGZTnucvslrkwxo.jpg', '2021-02-15 12:12:01', '2021-02-15 12:12:01'),
	(4, 'faq\'s', 'Welcome to certified online organic products suppliersr', 'second-headers\\February2021\\XYzwznkZSubrlCuYU5Wd.jpg', '2021-02-15 12:12:00', '2021-02-15 12:30:29'),
	(5, 'Contact us', 'Welcome to certified online organic products suppliersr', 'second-headers\\February2021\\qFdxg2uPVy4oq3sJ6iZ5.jpg', '2021-02-15 12:12:51', '2021-02-15 12:12:51');
/*!40000 ALTER TABLE `second_headers` ENABLE KEYS */;

-- Дамп данных таблицы organic.settings: ~31 rows (приблизительно)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
	(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
	(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
	(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
	(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
	(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
	(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
	(12, 'contact-us.email', 'Email', 'organic@mail.com', NULL, 'text', 6, 'Contact Us'),
	(13, 'header.phone', 'order on phone', 'Order On Phone: +321 453 68 739', NULL, 'text_area', 7, 'Header'),
	(14, 'header.organic_mail', 'organic mail', 'organicstore@gmail.com', NULL, 'text', 8, 'Header'),
	(15, 'contact-us.phone', 'Phone', '+91 (321) 758 142 5698', NULL, 'text', 9, 'Contact Us'),
	(16, 'contact-us.addres', 'addres', 'No 271, Red Cross Building, Modern Street, Newyork City, USA', NULL, 'text', 10, 'Contact Us'),
	(17, 'contact-us.contact_us', 'Contact Us', 'Contact Us', NULL, 'text', 11, 'Contact Us'),
	(18, 'contact-us.business_hours', 'Business Hours', 'Business Hours', NULL, 'text_area', 12, 'Contact Us'),
	(19, 'contact-us.work_hours', 'Work Hours', 'Monday - Friday: 09.00am to 07.00pm\r\nSaturday: 10.00am to 05.00pm', NULL, 'text_area', 13, 'Contact Us'),
	(20, 'contact-us.sunday', 'Sunday', 'Sunday: Closed', NULL, 'text', 14, 'Contact Us'),
	(22, 'about-page.awards', 'Awards', 'Awards & Recognition', NULL, 'text_area', 15, 'About Page'),
	(23, 'about-page.awards_text', 'Awards text', '<p>How to pursue pleasure rationally encounter consequences that are extremely painful Nor again is there anyone who loves or pursues or desires to obtain pain of because it is pain, but because occasionally circumstances occur in some great.</p>', NULL, 'rich_text_box', 16, 'About Page'),
	(24, 'about-page.Awards_support', 'Awards Support', '<p><strong>Customer Support:</strong> If you have any doubt about ConsultPress WordPress or how we can support your business, Send us an email and we&rsquo;ll get in touch shortly, or Contact via Support Forum.</p>', NULL, 'rich_text_box', 17, 'About Page'),
	(25, 'about-page.ofice_hours', 'Awards Ofice Hours', '<p><strong>Office Hours :</strong>07:30 and 19:00 Monday to Saturday,Sunday - Holidayort Forum.</p>', NULL, 'rich_text_box', 18, 'About Page'),
	(27, 'main.product_title', 'Product Title', 'OUR PRODUCTS', NULL, 'text_area', 19, 'main'),
	(28, 'main.why_title', 'Why choose Title', 'Why to Choose Us', NULL, 'text', 20, 'main'),
	(29, 'main.why_text', 'Why Cjoose Text', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered <br />alteration in some form, by injected humour.</p>', NULL, 'rich_text_box', 21, 'main'),
	(30, 'main.news_title', 'News Title', 'our latest news', NULL, 'text', 22, 'main'),
	(31, 'main.farmers_title', 'Farmers Title', 'our farmers', NULL, 'text', 23, 'main'),
	(32, 'main.testimonials_title', 'Testimonials Title', 'our testimonials', NULL, 'text', 24, 'main'),
	(33, 'footer.footer_text', 'Footer Text', '<p>Denouncing pleasures and praising pain was born and I will give you a complete account of the system.</p>\r\n<p>Expound that actual teachings the great explorer of the truth, the master-builder of human happiness no one rejects, likes, or avoids pleasure itself rationally.</p>', NULL, 'rich_text_box', 25, 'Footer'),
	(34, 'footer.footer_logo', 'logo', 'settings\\February2021\\DZrgKp8iTTWhskx9omAU.png', NULL, 'image', 26, 'Footer'),
	(35, 'header.header_logo', 'Logo', 'settings\\February2021\\h7Qn4JwhorPThcKB1lCj.png', NULL, 'image', 27, 'Header'),
	(36, 'contact-us.contact_title', 'Contact Title', 'setting(\'header.header_logo\')', NULL, 'text', 28, 'Contact Us'),
	(37, 'search.post_title', 'Posts Title', 'News', NULL, 'text', 29, 'Search'),
	(38, 'search.product_title', 'Product Title', 'Products', NULL, 'text', 30, 'Search');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Дамп данных таблицы organic.slaiders: ~3 rows (приблизительно)
DELETE FROM `slaiders`;
/*!40000 ALTER TABLE `slaiders` DISABLE KEYS */;
INSERT INTO `slaiders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `logo`, `smal_text`, `status`) VALUES
	(1, 'organic store', 'We are providing highest quality Organics Products for USA', 'slaiders\\February2021\\P551Fsefa9ELfLQymGux.jpg', '2021-02-05 13:11:00', '2021-02-13 14:02:59', 'slaiders\\February2021\\eaTpqYPlVZ3LP2F6zP8V.png', 'Fruits ~ Vegetables ~ Foods ~ Cosmetics', 1),
	(2, 'Get Blackberry <br>Pack With 50% Off', 'Great explorer of the truth, the master-builder of human happiness no sed one rejects dislikes,\r\nor avoids pleasure itself, because it is pleasure.', 'slaiders\\February2021\\ZLH30SUQbGsDI9dhVdCt.jpg', '2021-02-05 13:12:00', '2021-02-13 14:00:15', 'slaiders\\February2021\\ffF0oM9Vie8qjI4RWksn.png', NULL, 1),
	(3, 'Natural Healthy Foods', 'Great explorer of the truth, the master-builder of human happen', 'slaiders\\February2021\\qrz7XR4ym4xqQHNakYOB.jpg', '2021-02-05 13:13:00', '2021-02-14 16:02:06', 'slaiders\\February2021\\6aMjHmSB1Ig5PtWv5JVA.png', 'With you AffourTabble', 0);
/*!40000 ALTER TABLE `slaiders` ENABLE KEYS */;

-- Дамп данных таблицы organic.subscribes: ~2 rows (приблизительно)
DELETE FROM `subscribes`;
/*!40000 ALTER TABLE `subscribes` DISABLE KEYS */;
INSERT INTO `subscribes` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'Igor', 'mail@mail.com', '2021-02-08 10:41:32', '2021-02-08 10:41:32'),
	(2, 'Pasha', 'p@mail.com', '2021-02-08 10:53:35', '2021-02-08 10:53:35'),
	(3, 'Igor D', 'd@mail.com', '2021-02-08 12:33:25', '2021-02-08 12:33:25'),
	(4, 'Igor', 'igor@mail.com', '2021-02-12 15:48:49', '2021-02-12 15:48:49');
/*!40000 ALTER TABLE `subscribes` ENABLE KEYS */;

-- Дамп данных таблицы organic.testimonials: ~5 rows (приблизительно)
DELETE FROM `testimonials`;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `name`, `position`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Jessy Federar', 'Cor.Manager', 'Who do not know how to pursue an seed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.', 'testimonials\\February2021\\HLpQuFtUmjPgwFuxRnF0.jpg', NULL, '2021-02-04 13:24:00', '2021-02-12 12:21:24'),
	(2, 'Gleb Sidorov', 'Designer', 'Who do not know how to pursue an seed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.', 'testimonials\\February2021\\1aKzn7XOs5EqYYe7vEya.png', NULL, '2021-02-04 13:27:00', '2021-02-12 12:20:51'),
	(3, 'Pupkin Vasile', 'Cor.Manager', 'Who do not know how to pursue an seed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.', 'testimonials\\February2021\\8q3SU8jVFMcJ0OBe6hRh.png', 1, '2021-02-04 13:27:00', '2021-02-12 14:07:29'),
	(4, 'Ion Cicu', 'Presidente', 'Who do not know how to pursue an seed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.', 'testimonials\\February2021\\C7JTVoXuvLzpv9oeYDMn.png', 1, '2021-02-04 13:28:00', '2021-02-12 14:07:17'),
	(5, 'Ion Ceban', 'Cumatru', 'Who do not know how to pursue an seed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances', 'testimonials\\February2021\\xRI1jrgFWLECtZsf6jha.png', 1, '2021-02-04 13:29:00', '2021-02-12 14:07:07');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Дамп данных таблицы organic.three_colums: ~2 rows (приблизительно)
DELETE FROM `three_colums`;
/*!40000 ALTER TABLE `three_colums` DISABLE KEYS */;
INSERT INTO `three_colums` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
	(2, 'Organic Vegetables', 'We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human complete happiness.', 'icon-nature', '2021-02-02 19:41:45', '2021-02-02 19:41:45'),
	(3, 'Organic Fruits', 'We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human complete happiness.', 'icon-food', '2021-02-02 19:42:17', '2021-02-02 19:42:17'),
	(4, 'Organic Fruits', 'We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human complete happiness.', 'icon-food', '2021-02-02 20:05:14', '2021-02-02 20:05:14');
/*!40000 ALTER TABLE `three_colums` ENABLE KEYS */;

-- Дамп данных таблицы organic.translations: ~0 rows (приблизительно)
DELETE FROM `translations`;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;

-- Дамп данных таблицы organic.users: ~2 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
	(2, 1, 'admin', 'admin@admin.com', 'users\\February2021\\7DuDstXrFS8fYSSfPw3N.png', NULL, '$2y$10$9LXKE2hpFiMxr4D.ZbunxOL3rNCNnEsT.fdJ3qoBwHoaLHGfizgIa', NULL, '{"locale":"en"}', '2021-01-31 12:35:46', '2021-02-12 10:51:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дамп данных таблицы organic.user_roles: ~0 rows (приблизительно)
DELETE FROM `user_roles`;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;

-- Дамп данных таблицы organic.why_chooses: ~4 rows (приблизительно)
DELETE FROM `why_chooses`;
/*!40000 ALTER TABLE `why_chooses` DISABLE KEYS */;
INSERT INTO `why_chooses` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
	(1, '100% Organic Products', 'ficon icon-fruit-1', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.', '2021-02-04 12:54:47', '2021-02-04 12:54:47'),
	(2, 'Any Time, Anywhere Delivery', 'ficon icon-wheat', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.', '2021-02-04 12:55:54', '2021-02-04 12:55:54'),
	(3, 'Keeps Your Family Healthy', 'ficon icon-food-2', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.', '2021-02-04 12:56:28', '2021-02-04 12:56:28'),
	(4, 'Clean, Fresh and Safety', 'ficon icon-fruit', 'Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.', '2021-02-04 12:56:59', '2021-02-04 12:56:59');
/*!40000 ALTER TABLE `why_chooses` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
