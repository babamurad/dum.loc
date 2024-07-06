-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 06 2024 г., 07:59
-- Версия сервера: 5.7.35-38
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `r44090_dumdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `awards`
--

INSERT INTO `awards` (`id`, `image`, `title`, `desc`, `published`, `order`, `created_at`, `updated_at`) VALUES
(1, '1719378256.jpg', 'BEST CARGO TRANSIT COMPANY IN 2022 AWARD', '', 1, 1, '2024-06-26 01:17:54', '2024-06-26 04:26:23'),
(2, '1719375535.jpg', 'Odio assumenda ipsam', 'Sequi fugiat sunt ', 0, 2, '2024-06-26 01:18:55', '2024-06-26 07:40:08'),
(4, '1719379069.png', 'Ipsam molestiae omni', 'Ad nisi earum ea dol', 0, 3, '2024-06-26 02:17:49', '2024-06-26 07:40:07'),
(5, '1719379084.jpg', 'Mollitia consequatur', 'Eius aliquip earum m', 0, 59, '2024-06-26 02:18:04', '2024-06-26 02:18:04');

-- --------------------------------------------------------

--
-- Структура таблицы `carousels`
--

CREATE TABLE IF NOT EXISTS `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Структура таблицы `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bold` tinyint(1) NOT NULL DEFAULT '0',
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 AVG_ROW_LENGTH=4096 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `carts`
--

INSERT INTO `carts` (`id`, `created_at`, `updated_at`, `title`, `bold`, `desc`, `group`) VALUES
(4, '2024-06-27 10:19:19', '2024-06-27 11:09:43', 'fdasfdf', 0, NULL, 0),
(5, '2024-06-27 10:20:55', '2024-06-28 02:02:28', 'ааааbb', 0, NULL, 0),
(6, '2024-06-27 10:20:56', '2024-06-28 02:02:33', 'gf', 0, NULL, 0),
(7, '2024-06-27 10:20:57', '2024-06-27 10:20:57', NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'For QR code',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `fax`, `image`, `created_at`, `updated_at`) VALUES
(1, '744036, Туркменистан, г. Ашгабат, ул Б. Сапармырата Туркменбаши шаелы, д.124, 7 этаж', 'ofisdum@mail.ru', ' +(99312) 46-87-72', ' +(99312) 46-87-39', '1719398659.gif', NULL, '2024-06-26 10:44:45');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` smallint(6) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contract` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 AVG_ROW_LENGTH=1365 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `title`, `file`, `filename`, `order`, `published`, `created_at`, `updated_at`, `contract`) VALUES
(5, 'Как продвигать грузоперевозки', '1719649178.pdf', 'Как продвигать грузоперевозки_ лучшие методы и стратеги.pdf', 200, 0, '2024-06-29 05:19:38', '2024-07-01 01:43:09', 0),
(6, 'Презентация', '1719806318.pdf', 'Презентация 2021.pdf', 1, 0, '2024-07-01 00:58:38', '2024-07-03 08:57:09', 0),
(7, 'Условия на 2 квартал 2024 г.', '1719806416.pdf', 'Условия 2 кв 2024 ТРК Мост УТИ ТДЖ КРГ КЗХ.pdf', 2, 1, '2024-07-01 01:00:16', '2024-07-01 01:00:16', 0),
(8, 'Ставки на порожний возврат вагонов 2 квартал 2024 г.', '1719806457.jpg', '2кв 2024г ставки на порожн ваг ТРК.jpg', 3, 1, '2024-07-01 01:00:57', '2024-07-01 01:01:12', 0),
(9, 'Порядок оформления порожних вагонов', '1719806529.pdf', '4)Порядок организации возврата порожнего вагона.pdf', 4, 1, '2024-07-01 01:02:09', '2024-07-01 01:02:09', 0),
(10, 'Карта железной дороги Туркменистана', '1719806555.webp', 'map.webp', 5, 1, '2024-07-01 01:02:35', '2024-07-01 01:02:35', 0),
(11, 'Погранстыки Туркменистан-СНГ и др', '1719806600.pdf', '5) Погранпереходы Туркменистан-СНГ.pdf', 6, 1, '2024-07-01 01:03:20', '2024-07-01 01:03:20', 0),
(13, 'Регистрационный сертификат ХО ДУМ', '1719810311.jpg', 'Sertificate.jpg', 1, 1, '2024-07-01 02:05:11', '2024-07-01 02:05:11', 1),
(14, 'ЕГРПО', '1719811468.pdf', 'ЕГРПО .pdf', 2, 1, '2024-07-01 02:07:10', '2024-07-01 02:24:28', 1),
(15, 'Свидетельство о постановке на налоговый учет', '1719810757.jpg', 'Tax_code.jpg', 3, 1, '2024-07-01 02:12:37', '2024-07-01 02:12:37', 1),
(16, 'Запрос пакета документов заказчика', '1719810854.doc', 'Запрос доков на закл дог-ра Юр лиц.doc', 4, 1, '2024-07-01 02:14:14', '2024-07-01 02:14:14', 1),
(17, 'Шаблон договора', '1719810871.docx', 'Дог образец рус 2021.docx', 5, 1, '2024-07-01 02:14:31', '2024-07-01 02:14:31', 1),
(21, 'Презентация 2024', '1720007815.pdf', 'Презентация 2024.pdf', 1, 1, '2024-07-03 08:56:55', '2024-07-03 08:56:55', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 AVG_ROW_LENGTH=819 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2024_06_14_075625_create_carousels_table', 1),
(12, '2024_06_21_134037_create_news_table', 1),
(13, '2024_06_24_095712_create_partners_table', 2),
(14, '2024_06_24_114747_alter_table_partners_add_order_field', 3),
(16, '2024_06_25_041326_create_questions_table', 4),
(17, '2024_06_25_090711_create_awards_table', 5),
(19, '2024_06_26_052558_create_contacts_table', 6),
(20, '2024_06_26_105123_create_carts_table', 7),
(21, '2024_06_27_054316_modify_text_in_news_table', 8),
(22, '2024_06_27_054343_modify_text_in_news_table', 8),
(23, '2024_06_27_101122_modify_news_add_order_field', 9),
(24, '2024_06_27_114133_add_fields_to_carts_table', 10),
(25, '2024_06_28_055421_add_utype_field_to_users', 11),
(26, '2024_06_28_115740_alter_users_add_sadm', 12),
(27, '2024_06_28_125940_alter_users_add_fields', 13),
(32, '2024_06_29_060748_create_files_table', 14),
(33, '2024_07_01_043334_add_contract_field_to_files_table', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 AVG_ROW_LENGTH=7281 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `text`, `published`, `created_at`, `updated_at`, `order`) VALUES
(16, 'Железнодорожные перевозки в Туркменистане: обзор отрасли', '1719474818.jpg', '<h2 data-sourcepos=\"1:1-1:59\" style=\"margin-left: 25px;\"><span style=\"font-size: 1rem;\">Железнодорожный транспорт играет важную роль в экономике Туркменистана, являясь одним из основных видов грузоперевозок. Разветвленная сеть железных дорог охватывает всю страну, соединяя между собой крупные города, промышленные центры и порты.</span><br></h2><p data-sourcepos=\"7:1-7:12\"><strong>История:</strong></p><p data-sourcepos=\"9:1-9:336\">Железнодорожное строительство в Туркменистане началось в конце 19 века. Первая железная дорога была построена в 1886 году и соединила Красноводск (ныне Туркменбаши) с Ашхабадом. В советское время сеть железных дорог была значительно расширена, и к 1991 году протяженность железных дорог в Туркменистане составляла более 4000 километров.</p><p data-sourcepos=\"11:1-11:26\"><strong>Современное состояние:</strong></p><p data-sourcepos=\"13:1-13:324\">После обретения независимости Туркменистан активно инвестировал в модернизацию и развитие железнодорожной инфраструктуры. Были построены новые железные дороги, реконструированы и электрифицированы старые, закуплен новый подвижной состав. Сегодня протяженность железных дорог в Туркменистане составляет более 5000 километров.</p><p data-sourcepos=\"15:1-15:17\"><strong>Преимущества:</strong></p><p data-sourcepos=\"17:1-17:80\">Железнодорожный транспорт имеет ряд преимуществ перед другими видами транспорта:</p><ul data-sourcepos=\"19:1-23:0\">\n<li data-sourcepos=\"19:1-19:107\"><strong>Низкая стоимость:</strong> Железнодорожные перевозки являются одним из самых экономичных видов грузоперевозок.</li>\n<li data-sourcepos=\"20:1-20:95\"><strong>Высокая грузоподъемность:</strong> Железнодорожные составы могут перевозить большие объемы грузов.</li>\n<li data-sourcepos=\"21:1-21:92\"><strong>Надежность:</strong> Железнодорожный транспорт является надежным и безопасным видом транспорта.</li>\n<li data-sourcepos=\"22:1-23:0\"><strong>Экологичность:</strong> Железнодорожный транспорт является более экологичным видом транспорта по сравнению с автомобильным.</li>\n</ul><p data-sourcepos=\"24:1-24:28\"><strong>Основные грузоперевозки:</strong></p><p data-sourcepos=\"26:1-26:79\">Железнодорожным транспортом в Туркменистане перевозят различные грузы, включая:</p><ul data-sourcepos=\"28:1-33:0\">\n<li data-sourcepos=\"28:1-28:134\"><strong>Нефть и газ:</strong> Туркменистан является крупным экспортером нефти и газа, и большая часть этих грузов перевозится по железной дороге.</li>\n<li data-sourcepos=\"29:1-29:134\"><strong>Строительные материалы:</strong> Железнодорожным транспортом перевозят различные строительные материалы, такие как цемент, щебень, песок.</li>\n<li data-sourcepos=\"30:1-30:115\"><strong>Зерно:</strong> Туркменистан является крупным экспортером зерна, и большая часть зерна перевозится по железной дороге.</li>\n<li data-sourcepos=\"31:1-31:146\"><strong>Хлопок:</strong> Хлопок является одной из основных сельскохозяйственных культур Туркменистана, и большая часть хлопка перевозится по железной дороге.</li>\n<li data-sourcepos=\"32:1-33:0\"><strong>Химические грузы:</strong> Железнодорожным транспортом перевозят различные химические грузы, такие как удобрения, серная кислота, сода.</li>\n</ul><p data-sourcepos=\"34:1-34:33\"><strong>Международное сотрудничество:</strong></p><p data-sourcepos=\"36:1-36:394\">Туркменистан активно развивает международное сотрудничество в области железнодорожного транспорта. Страна является членом ряда международных организаций, таких как Организация сотрудничества железных дорог (ОСЖД) и Международный союз железных дорог (МСЖД). Туркменистан также участвует в реализации ряда международных проектов, направленных на развитие железнодорожной инфраструктуры в регионе.</p><p data-sourcepos=\"38:1-38:15\"><strong>Заключение:</strong></p><p data-sourcepos=\"40:1-40:321\">Железнодорожный транспорт играет важную роль в экономике Туркменистана. Развитая сеть железных дорог обеспечивает надежную и экономичную транспортировку грузов по всей стране. Туркменистан активно развивает международное сотрудничество в области железнодорожного транспорта, что способствует дальнейшему развитию отрасли.</p>', 1, '2024-06-27 04:53:38', '2024-06-27 09:02:05', 4),
(17, 'Сокращение времени транзита грузов на 40%', '1719479473.jpg', '<p>Национальный железнодорожный перевозчик Туркменистана, ОАО \"Демирёллары\", объявил о значительном сокращении времени транзита грузов через свою территорию.</p><p>\n\nБлагодаря оптимизации мультимодальной логистики и усовершенствованию железнодорожных перевозок скорость доставки грузов от одной границы к другой увеличилась на 40%.\n</p><p>\nЭто достижение стало результатом системных мер, направленных на повышение эффективности и привлекательности транзитных перевозок через Туркменистан.\n</p><p>\nСокращение времени в пути для транзитных грузов стало возможным благодаря:\n</p><ul><li>\nОптимизации работы железнодорожных маршрутов: Пересмотрены маршруты следования, сокращены ненужные остановки, что позволило ускорить движение поездов.\n</li><li>Улучшению процессов в порту Туркменбаши: Модернизирована портовая инфраструктура, оптимизированы погрузочно-разгрузочные работы, внедрены электронные системы управления, что привело к сокращению времени обработки грузов.\n</li><li>Снижению задержек на территории Ирана: Установлено более тесное сотрудничество с иранскими транспортными компаниями, что позволило оптимизировать процедуры пересечения границы и сократить время простоев.\n</li><li>Интеграции с иранскими компаниями в сфере автомобильного транспорта: Развивается мультимодальный подход к перевозкам, сочетающий железнодорожный и автомобильный транспорт, что открывает новые возможности для логистики.\n</li></ul><p><span style=\"font-size: 1rem;\">В результате этих мер Туркменистан становится все более привлекательным для транзитных грузоперевозок, как по восточной ветке коридора Север-Юг, так и по Транскаспийской ветке для российских грузов.\n\nС начала следующего года Туркменистан планирует увеличить объем перевозимых транзитом грузов на 80%.\n</span></p><p><span style=\"font-size: 1rem;\">\nЭти амбициозные планы подчеркивают стремление страны стать важным игроком в мировой логистике, используя свой выгодный географический\nположение на пересечении транспортных коридоров.</span><br></p>', 1, '2024-06-27 06:11:13', '2024-07-03 09:36:09', 5),
(18, 'Международные транспортно-транзитные коридоры', '1719482969.jpg', '<p><span style=\"text-align: justify;\">Агентство «Туркмендениздеряёллары» Агентства транспорта и коммуникаций при Кабинете министров Туркменистана приглашает представителей всех заинтересованных транспортно-логистических компаний принять участие во II международной конференции и выставке «Международные транспортно-транзитные коридоры: взаимосвязь и развитие - 2023», которые состоятся 3-4 мая 2023 года в г.Ашхабад, Туркменистан.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Целью проведения конференции и выставки является обсуждение актуальных вопросов по постпандемийному восстановлению и адаптации к новым реалиям в международных перевозках, развитие эффективных международных транспортно-транзитных коридоров, а также укрепление международного сотрудничества между туркменскими государственными организациями, крупными логистическими компаниями и международными организациями, ориентированные на транспортно-логистические системы.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Участие и деловые встречи на полях конференции и выставки позволят повысить уровень осведомленности потенциальных партнеров о новых инвестиционных возможностях в области международных перевозок и определить перспективные направления для установления долгосрочного и взаимовыгодного сотрудничества.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">В работе конференции и выставки примут участие представители правительства Туркменистана, авторитетные эксперты, представители ведущих национальных и международных транспортных компаний, а также логистических организаций и финансовых институтов.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\">Международная конференция пройдет как в традиционном, так и в онлайн-формате посредством платформы Zoom Professional.</p><p><br></p>', 1, '2024-06-27 07:09:29', '2024-07-03 09:36:07', 4),
(19, 'Уголь 2024 г.', '1719999192.jpg', '<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: 18.4px;\"><span style=\"line-height: 18.4px;\">Уголь является одним из первых видов полезных ископаемых, используемых человеком. Несмотря на то, что газовая промышленность постепенно вытесняет угольную, транспортировка угля до сих пор остается востребованной. Железная дорога является самым удобным, экономичным, надёжным.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: 18.4px;\"><span style=\"line-height: 18.4px;\">По территории Туркменистана в 2024 году состоялась тестовая п</span><span style=\"line-height: 18.4px;\">еревозка угля – это новый и интересный проект, где нашей компанией ХО ДУМ уже перевезено около 10&nbsp;000 тонн угля по Казахстану, Туркменистану. В цепочке активно учувствуют терминалы по перевалке угля на станциях Сарахс, Артык и Этрек, Туркменбаши. Впереди большие планы!<o:p></o:p></span></p><p style=\"margin: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 18.4px;\">Перевозка угля на постоянной основе и в срок важна для разных промышленных отраслей, так перебои с поставками твердого топлива катастрофичны для энергетического комплекса. Вот почему каждому предприятию, зависимому от угольной продукции, требуется надежный партнер-перевозчик - экспедитор. ЭТО МЫ. Мы работаем по всем территориям СНГ, являясь резидентом Туркменистана предоставляем услуги по всем международным перевозкам.<o:p></o:p></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: 18.4px;\"><span style=\"line-height: 18.4px;\">Мы готовы стать вашим партнером!<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: 18.4px;\"><span style=\"line-height: 18.4px;\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 18.4px;\"><span style=\"line-height: 18.4px;\">Интересные &nbsp;факты</span><span style=\"line-height: 18.4px;\"><o:p></o:p></span></p><p></p><ul type=\"disc\" style=\"margin-top: 0cm;\"><li class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: 18.4px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"line-height: 18.4px;\">Во время археологических раскопок в Китае была найдена мумия. Возраст мумии достигал 2300 лет, но на самом деле она выглядела, как 4-дневный труп. Была выявлена одна деталь: на животе мумии нашли 170 семян дыни, над которыми в дальнейшем провели эксперимент. Оказалось, что все они проросли. Этот факт археологи объясняют тем, что у основания могилы было выложено 5 тонн древесного угля. Сохранение мумии – это результат действия отрицательных ионов&nbsp;древесного угля!</span><span style=\"line-height: 18.4px;\"><o:p></o:p></span></li><li class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: 18.4px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"line-height: 18.4px;\">Канарейки часто спасали жизнь шахтерам.&nbsp;До момента изобретения датчиков, регистрирующих концентрацию метанола в шахте, рабочие часто брали в забой клетку с канарейкой. Чувствительность этих птиц к метану в опасной ситуации меняла их поведение – канарейки замолкали или вовсе падали с жердочки. Это было крайней формой сигнала SOS.</span><span style=\"line-height: 18.4px;\"><o:p></o:p></span></li><li class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: 18.4px; vertical-align: baseline;\"><span style=\"line-height: 18.4px;\">Уголь не всегда черного цвета. В зависимости от его состава и места происхождения, он может быть бурого, черного, серого и даже белого цвета. Белый уголь, или мелантерит, является редкостью и обладает высокими энергетическими характеристиками.</span></li></ul>', 1, '2024-07-03 06:33:12', '2024-07-03 09:35:56', 1),
(20, 'Колея в СНГ не такая как в Европе!', '1719999565.webp', '<p class=\"MsoNormal\"><span style=\"line-height: 17.12px;\">Самая популярная колея в мире на сегодняшний день — это «Стефенсоновская колея», также известная как «европейская» или «стандартная колея». Её ширина составляет 1435 миллиметров. Своё название колея получила в честь английского изобретателя железных дорог Джорджа Стефенсона. «Стефенсоновская колея» используется на всех железных дорогах Европы, и её ширина составляет 1 метр 43 сантиметра.</span><span style=\"line-height: 17.12px;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"line-height: 17.12px;\">Первые железнодорожные вагоны в Соединённом Королевстве изготавливались по тому же принципу, что и трамвайные вагоны. А первые трамваи производились в Англии по образцу конных омнибусов, которые, в свою очередь, унаследовали конструкцию от карет. Расстояние между колёсами на одной оси кареты составляло 1435 миллиметров, потому что именно такой была ширина дорожной колеи в Средние века. Карета с колёсами, расставленными шире стандарта, могла бы застревать на ухабах.</span><span style=\"line-height: 17.12px;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"line-height: 17.12px;\">Откуда же взялся этот стандарт?</span><span style=\"line-height: 17.12px;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"line-height: 17.12px;\">Дороги в Великобритании прокладывали захватчики — римляне, которые были большими любителями капитальных сооружений стратегического характера. На оккупированных территориях римляне строили первоклассные дороги, укрепляя тем самым авторитет Римской империи. Первая мощёная Аппиева дорога соединяла Рим с Неаполем и была построена в 312 году до нашей эры. Вдоль древней магистрали римляне сажали специальные сосны, которые давали тень марширующим легионерам и усталым путникам. При планировании дорог римляне учитывали размеры своих боевых колесниц. Чтобы колесницам было проще передвигаться по этим дорогам, император повелел устроить в них колеи, а все повозки и колесницы Римской империи делать с одинаковым расстоянием между колёсами. Боевые колесницы римлян запрягались парами. Если поставить рядом бок о бок двух лошадей и измерить их крупу, то получится чуть меньше полутора метров (точнее, 1 метр 43 сантиметра).</span><span style=\"line-height: 17.12px;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"line-height: 17.12px;\">Однако не везде ширина железнодорожной колеи одинакова. На Земле примерно 75% железных дорог имеют стандартную «Стефенсоновскую колею». В 14% случаев колея уже, а в 11% случаев — шире. Ширина железнодорожной колеи в странах СНГ отличается от европейской: ширина железнодорожного полотна в странах СНГ составляет 1520 миллиметров. Это связано с тем, что при планировании железной дороги наша колея была спроектирована иначе, чем европейская, в стратегических интересах, с учётом мощи наполеоновской армии. Опасались, что в случае наступления французы смогут перебрасывать себе подкрепление по железной дороге. Поэтому, когда поезда СНГ пересекают границу с Европой, их ожидает процедура смены колеи. Вагоны переставляют на новые колёсные пары.</span><span style=\"line-height: 17.12px;\"><o:p></o:p></span></p><p><span style=\"line-height: 17.12px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; А наша страна граничит с Ираном и грузовые составы следуют через пограничные переходы Сарахс-Сарахс и Акяйла-Инче-Бурун, где осуществляется также смена колёсных пар.</span></p>', 1, '2024-07-03 06:39:25', '2024-07-03 09:36:31', 3),
(21, 'Статья на сайте News Central Asia', '1720010061.jpg', '<p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; padding: 0px;\">Статья на сайте&nbsp;<a href=\"https://www.newscentralasia.net/2023/05/03/dovrebap-ulag-merkezi-odin-iz-primerov-megauspekha-chastnogo-transportno-logisticheskogo-biznesa-v-turkmenistane/\" target=\"_blank\">News Central Asia</a>&nbsp;о нашей компании.</p>', 1, '2024-07-03 09:34:21', '2024-07-03 10:07:10', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 AVG_ROW_LENGTH=1820 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `image`, `title`, `desc`, `published`, `created_at`, `updated_at`, `order`) VALUES
(2, '1719312054.png', 'Узбекские железные дороги', 'Sunt laboris eum ali', 1, '2024-06-24 07:24:14', '2024-06-25 07:40:54', 2),
(4, '1719227943.png', 'Таджикские железные дороги', 'Sequi qui voluptas o', 1, '2024-06-24 07:40:28', '2024-06-26 02:20:55', 4),
(5, '1719311986.jpg', 'ТОО НУРТРАНС-2004', 'Sunt aperiam volupta', 1, '2024-06-24 07:48:28', '2024-06-25 07:46:08', 3),
(6, '1719228205.png', 'ОАО ТЛЦТ', 'Delectus impedit l', 1, '2024-06-24 07:48:35', '2024-06-25 07:45:15', 6),
(7, '1719228260.jpg', 'ТОО ТК АРКТУР', 'Cumque ex illo elit', 1, '2024-06-24 07:48:55', '2024-06-25 07:44:13', 7),
(8, '1719228531.png', 'LUCKY TRANS Транспортная компания', 'Ex sed est voluptate', 0, '2024-06-24 07:56:53', '2024-06-26 02:22:49', 8),
(9, '1719312116.png', 'ТОО Крома Транс', 'mdafffff', 1, '2024-06-24 08:30:37', '2024-06-25 07:41:56', 5),
(10, '1719228900.jpg', 'ТОО NIKA Logistic', 'NIKA Logistic', 1, '2024-06-24 08:35:00', '2024-06-25 07:44:30', 9),
(11, '1719229097.jpg', 'Туркменские железные дороги', 'Туркменские железные дороги', 1, '2024-06-24 08:38:01', '2024-06-25 02:41:45', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 AVG_ROW_LENGTH=4096 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `published`, `order`, `created_at`, `updated_at`) VALUES
(3, 'Какие сроки доставки?', 'Сроки доставки варьируются в зависимости от пункта назначения и выбранного типа доставки.\nДоставка груза железными дорогами зависит от расстояния, в среднем согласно правил перевозок вагон следует 250 км минимум в сутки.\nБолее точную информацию о местонахождении вагонов вы можете получить, отправив заявку.\n                  ', 1, 2, '2024-06-25 02:03:02', '2024-07-03 09:12:12'),
(4, 'Как отследить свой вагон?', 'Вы можете отследить свой вагон после отправления заявки и оформления заказа.', 1, 3, '2024-06-25 02:03:11', '2024-07-03 09:14:17'),
(5, 'Как рассчитать стоимость доставки?', 'Стоимость доставки зависит от плана формирования, расстояния, код груза и веса, типа подвижного состава и формы собственности .\nВы можете рассчитать точную стоимость отправив заявку с нашего сайта, ответ будет отправлен в течении 1-3 часов, на указанный email адрес,\nесли ответ не поступит в течении указанного времени, просим продублировать на почтовый ящик spes8dum@mail.ru ', 1, 1, '2024-06-25 02:43:58', '2024-07-03 09:20:24'),
(6, 'Dolorem earum mollit', 'Sed voluptatem quaer', 0, 4, '2024-06-25 03:06:55', '2024-06-26 02:22:40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` enum('USR','ADM') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 AVG_ROW_LENGTH=2048 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`, `admin`, `phone`, `address`, `position`) VALUES
(1, 'Babamurad', 'babamurad2010@yandex.ru', NULL, '$2y$12$EWQp5ev0Dj1QgcIeE1E9K.MDImSS.7PlDRDgJoIb7HA5mxsLtpBEC', 'ADM', NULL, '2024-06-28 03:08:58', '2024-06-28 06:41:31', 1, NULL, NULL, NULL),
(12, 'Admin DUM', 'ofisdum@mail.ru', NULL, '$2y$12$0QTwEt4gzVRhvZPWx64SmueNhq4CqySHdZDcBQMn65YY47gVvbdt2', 'ADM', NULL, '2024-07-03 04:11:48', '2024-07-03 04:11:48', 1, NULL, NULL, NULL),
(14, 'Merdan', 'merdan@mail.ru', NULL, '$2y$12$SmFzRObw0864w.YNFvcNUOWuZCoVTVB/CXd9k6MKarXRB8RWYjXoq', 'ADM', NULL, '2024-07-03 10:12:21', '2024-07-03 10:12:21', 0, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
