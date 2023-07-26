-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 01:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happiest_resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries_codes`
--

CREATE TABLE `countries_codes` (
  `id` int(11) NOT NULL,
  `phone_code` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `country_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `countries_codes`
--

INSERT INTO `countries_codes` (`id`, `phone_code`, `country_code`, `country_name`) VALUES
(1, '93', 'AF', 'Afghanistan'),
(2, '358', 'AX', 'Aland Islands'),
(3, '355', 'AL', 'Albania'),
(4, '213', 'DZ', 'Algeria'),
(5, '1684', 'AS', 'American Samoa'),
(6, '376', 'AD', 'Andorra'),
(7, '244', 'AO', 'Angola'),
(8, '1264', 'AI', 'Anguilla'),
(9, '672', 'AQ', 'Antarctica'),
(10, '1268', 'AG', 'Antigua and Barbuda'),
(11, '54', 'AR', 'Argentina'),
(12, '374', 'AM', 'Armenia'),
(13, '297', 'AW', 'Aruba'),
(14, '61', 'AU', 'Australia'),
(15, '43', 'AT', 'Austria'),
(16, '994', 'AZ', 'Azerbaijan'),
(17, '1242', 'BS', 'Bahamas'),
(18, '973', 'BH', 'Bahrain'),
(19, '880', 'BD', 'Bangladesh'),
(20, '1246', 'BB', 'Barbados'),
(21, '375', 'BY', 'Belarus'),
(22, '32', 'BE', 'Belgium'),
(23, '501', 'BZ', 'Belize'),
(24, '229', 'BJ', 'Benin'),
(25, '1441', 'BM', 'Bermuda'),
(26, '975', 'BT', 'Bhutan'),
(27, '591', 'BO', 'Bolivia'),
(28, '599', 'BQ', 'Bonaire, Sint Eustatius and Saba'),
(29, '387', 'BA', 'Bosnia and Herzegovina'),
(30, '267', 'BW', 'Botswana'),
(31, '55', 'BV', 'Bouvet Island'),
(32, '55', 'BR', 'Brazil'),
(33, '246', 'IO', 'British Indian Ocean Territory'),
(34, '673', 'BN', 'Brunei Darussalam'),
(35, '359', 'BG', 'Bulgaria'),
(36, '226', 'BF', 'Burkina Faso'),
(37, '257', 'BI', 'Burundi'),
(38, '855', 'KH', 'Cambodia'),
(39, '237', 'CM', 'Cameroon'),
(40, '1', 'CA', 'Canada'),
(41, '238', 'CV', 'Cape Verde'),
(42, '1345', 'KY', 'Cayman Islands'),
(43, '236', 'CF', 'Central African Republic'),
(44, '235', 'TD', 'Chad'),
(45, '56', 'CL', 'Chile'),
(46, '86', 'CN', 'China'),
(47, '61', 'CX', 'Christmas Island'),
(48, '672', 'CC', 'Cocos (Keeling) Islands'),
(49, '57', 'CO', 'Colombia'),
(50, '269', 'KM', 'Comoros'),
(51, '242', 'CG', 'Congo'),
(52, '242', 'CD', 'Congo, Democratic Republic of the Congo'),
(53, '682', 'CK', 'Cook Islands'),
(54, '506', 'CR', 'Costa Rica'),
(55, '225', 'CI', 'Cote D\'Ivoire'),
(56, '385', 'HR', 'Croatia'),
(57, '53', 'CU', 'Cuba'),
(58, '599', 'CW', 'Curacao'),
(59, '357', 'CY', 'Cyprus'),
(60, '420', 'CZ', 'Czech Republic'),
(61, '45', 'DK', 'Denmark'),
(62, '253', 'DJ', 'Djibouti'),
(63, '1767', 'DM', 'Dominica'),
(64, '1809', 'DO', 'Dominican Republic'),
(65, '593', 'EC', 'Ecuador'),
(66, '20', 'EG', 'Egypt'),
(67, '503', 'SV', 'El Salvador'),
(68, '240', 'GQ', 'Equatorial Guinea'),
(69, '291', 'ER', 'Eritrea'),
(70, '372', 'EE', 'Estonia'),
(71, '251', 'ET', 'Ethiopia'),
(72, '500', 'FK', 'Falkland Islands (Malvinas)'),
(73, '298', 'FO', 'Faroe Islands'),
(74, '679', 'FJ', 'Fiji'),
(75, '358', 'FI', 'Finland'),
(76, '33', 'FR', 'France'),
(77, '594', 'GF', 'French Guiana'),
(78, '689', 'PF', 'French Polynesia'),
(79, '262', 'TF', 'French Southern Territories'),
(80, '241', 'GA', 'Gabon'),
(81, '220', 'GM', 'Gambia'),
(82, '995', 'GE', 'Georgia'),
(83, '49', 'DE', 'Germany'),
(84, '233', 'GH', 'Ghana'),
(85, '350', 'GI', 'Gibraltar'),
(86, '30', 'GR', 'Greece'),
(87, '299', 'GL', 'Greenland'),
(88, '1473', 'GD', 'Grenada'),
(89, '590', 'GP', 'Guadeloupe'),
(90, '1671', 'GU', 'Guam'),
(91, '502', 'GT', 'Guatemala'),
(92, '44', 'GG', 'Guernsey'),
(93, '224', 'GN', 'Guinea'),
(94, '245', 'GW', 'Guinea-Bissau'),
(95, '592', 'GY', 'Guyana'),
(96, '509', 'HT', 'Haiti'),
(97, '0', 'HM', 'Heard Island and Mcdonald Islands'),
(98, '39', 'VA', 'Holy See (Vatican City State)'),
(99, '504', 'HN', 'Honduras'),
(100, '852', 'HK', 'Hong Kong'),
(101, '36', 'HU', 'Hungary'),
(102, '354', 'IS', 'Iceland'),
(103, '91', 'IN', 'India'),
(104, '62', 'ID', 'Indonesia'),
(105, '98', 'IR', 'Iran, Islamic Republic of'),
(106, '964', 'IQ', 'Iraq'),
(107, '353', 'IE', 'Ireland'),
(108, '44', 'IM', 'Isle of Man'),
(109, '972', 'IL', 'Israel'),
(110, '39', 'IT', 'Italy'),
(111, '1876', 'JM', 'Jamaica'),
(112, '81', 'JP', 'Japan'),
(113, '44', 'JE', 'Jersey'),
(114, '962', 'JO', 'Jordan'),
(115, '7', 'KZ', 'Kazakhstan'),
(116, '254', 'KE', 'Kenya'),
(117, '686', 'KI', 'Kiribati'),
(118, '850', 'KP', 'Korea, Democratic People\'s Republic of'),
(119, '82', 'KR', 'Korea, Republic of'),
(120, '381', 'XK', 'Kosovo'),
(121, '965', 'KW', 'Kuwait'),
(122, '996', 'KG', 'Kyrgyzstan'),
(123, '856', 'LA', 'Lao People\'s Democratic Republic'),
(124, '371', 'LV', 'Latvia'),
(125, '961', 'LB', 'Lebanon'),
(126, '266', 'LS', 'Lesotho'),
(127, '231', 'LR', 'Liberia'),
(128, '218', 'LY', 'Libyan Arab Jamahiriya'),
(129, '423', 'LI', 'Liechtenstein'),
(130, '370', 'LT', 'Lithuania'),
(131, '352', 'LU', 'Luxembourg'),
(132, '853', 'MO', 'Macao'),
(133, '389', 'MK', 'Macedonia, the Former Yugoslav Republic of'),
(134, '261', 'MG', 'Madagascar'),
(135, '265', 'MW', 'Malawi'),
(136, '60', 'MY', 'Malaysia'),
(137, '960', 'MV', 'Maldives'),
(138, '223', 'ML', 'Mali'),
(139, '356', 'MT', 'Malta'),
(140, '692', 'MH', 'Marshall Islands'),
(141, '596', 'MQ', 'Martinique'),
(142, '222', 'MR', 'Mauritania'),
(143, '230', 'MU', 'Mauritius'),
(144, '269', 'YT', 'Mayotte'),
(145, '52', 'MX', 'Mexico'),
(146, '691', 'FM', 'Micronesia, Federated States of'),
(147, '373', 'MD', 'Moldova, Republic of'),
(148, '377', 'MC', 'Monaco'),
(149, '976', 'MN', 'Mongolia'),
(150, '382', 'ME', 'Montenegro'),
(151, '1664', 'MS', 'Montserrat'),
(152, '212', 'MA', 'Morocco'),
(153, '258', 'MZ', 'Mozambique'),
(154, '95', 'MM', 'Myanmar'),
(155, '264', 'NA', 'Namibia'),
(156, '674', 'NR', 'Nauru'),
(157, '977', 'NP', 'Nepal'),
(158, '31', 'NL', 'Netherlands'),
(159, '599', 'AN', 'Netherlands Antilles'),
(160, '687', 'NC', 'New Caledonia'),
(161, '64', 'NZ', 'New Zealand'),
(162, '505', 'NI', 'Nicaragua'),
(163, '227', 'NE', 'Niger'),
(164, '234', 'NG', 'Nigeria'),
(165, '683', 'NU', 'Niue'),
(166, '672', 'NF', 'Norfolk Island'),
(167, '1670', 'MP', 'Northern Mariana Islands'),
(168, '47', 'NO', 'Norway'),
(169, '968', 'OM', 'Oman'),
(170, '92', 'PK', 'Pakistan'),
(171, '680', 'PW', 'Palau'),
(172, '970', 'PS', 'Palestinian Territory, Occupied'),
(173, '507', 'PA', 'Panama'),
(174, '675', 'PG', 'Papua New Guinea'),
(175, '595', 'PY', 'Paraguay'),
(176, '51', 'PE', 'Peru'),
(177, '63', 'PH', 'Philippines'),
(178, '64', 'PN', 'Pitcairn'),
(179, '48', 'PL', 'Poland'),
(180, '351', 'PT', 'Portugal'),
(181, '1787', 'PR', 'Puerto Rico'),
(182, '974', 'QA', 'Qatar'),
(183, '262', 'RE', 'Reunion'),
(184, '40', 'RO', 'Romania'),
(185, '70', 'RU', 'Russian Federation'),
(186, '250', 'RW', 'Rwanda'),
(187, '590', 'BL', 'Saint Barthelemy'),
(188, '290', 'SH', 'Saint Helena'),
(189, '1869', 'KN', 'Saint Kitts and Nevis'),
(190, '1758', 'LC', 'Saint Lucia'),
(191, '590', 'MF', 'Saint Martin'),
(192, '508', 'PM', 'Saint Pierre and Miquelon'),
(193, '1784', 'VC', 'Saint Vincent and the Grenadines'),
(194, '684', 'WS', 'Samoa'),
(195, '378', 'SM', 'San Marino'),
(196, '239', 'ST', 'Sao Tome and Principe'),
(197, '966', 'SA', 'Saudi Arabia'),
(198, '221', 'SN', 'Senegal'),
(199, '381', 'RS', 'Serbia'),
(200, '381', 'CS', 'Serbia and Montenegro'),
(201, '248', 'SC', 'Seychelles'),
(202, '232', 'SL', 'Sierra Leone'),
(203, '65', 'SG', 'Singapore'),
(204, '1', 'SX', 'Sint Maarten'),
(205, '421', 'SK', 'Slovakia'),
(206, '386', 'SI', 'Slovenia'),
(207, '677', 'SB', 'Solomon Islands'),
(208, '252', 'SO', 'Somalia'),
(209, '27', 'ZA', 'South Africa'),
(210, '500', 'GS', 'South Georgia and the South Sandwich Islands'),
(211, '211', 'SS', 'South Sudan'),
(212, '34', 'ES', 'Spain'),
(213, '94', 'LK', 'Sri Lanka'),
(214, '249', 'SD', 'Sudan'),
(215, '597', 'SR', 'Suriname'),
(216, '47', 'SJ', 'Svalbard and Jan Mayen'),
(217, '268', 'SZ', 'Swaziland'),
(218, '46', 'SE', 'Sweden'),
(219, '41', 'CH', 'Switzerland'),
(220, '963', 'SY', 'Syrian Arab Republic'),
(221, '886', 'TW', 'Taiwan, Province of China'),
(222, '992', 'TJ', 'Tajikistan'),
(223, '255', 'TZ', 'Tanzania, United Republic of'),
(224, '66', 'TH', 'Thailand'),
(225, '670', 'TL', 'Timor-Leste'),
(226, '228', 'TG', 'Togo'),
(227, '690', 'TK', 'Tokelau'),
(228, '676', 'TO', 'Tonga'),
(229, '1868', 'TT', 'Trinidad and Tobago'),
(230, '216', 'TN', 'Tunisia'),
(231, '90', 'TR', 'Turkey'),
(232, '7370', 'TM', 'Turkmenistan'),
(233, '1649', 'TC', 'Turks and Caicos Islands'),
(234, '688', 'TV', 'Tuvalu'),
(235, '256', 'UG', 'Uganda'),
(236, '380', 'UA', 'Ukraine'),
(237, '971', 'AE', 'United Arab Emirates'),
(238, '44', 'GB', 'United Kingdom'),
(239, '1', 'US', 'United States'),
(240, '1', 'UM', 'United States Minor Outlying Islands'),
(241, '598', 'UY', 'Uruguay'),
(242, '998', 'UZ', 'Uzbekistan'),
(243, '678', 'VU', 'Vanuatu'),
(244, '58', 'VE', 'Venezuela'),
(245, '84', 'VN', 'Viet Nam'),
(246, '1284', 'VG', 'Virgin Islands, British'),
(247, '1340', 'VI', 'Virgin Islands, U.s.'),
(248, '681', 'WF', 'Wallis and Futuna'),
(249, '212', 'EH', 'Western Sahara'),
(250, '967', 'YE', 'Yemen'),
(251, '260', 'ZM', 'Zambia'),
(252, '263', 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `total_view_count` int(11) DEFAULT 0,
  `register_from` varchar(50) NOT NULL,
  `profile_complete_percent` float(10,2) DEFAULT 0.00,
  `login_id` int(11) DEFAULT NULL,
  `resumeCode_id` int(11) DEFAULT NULL,
  `profile_view_count` varchar(50) DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `experience` varchar(20) DEFAULT NULL,
  `hh_id` varchar(50) DEFAULT NULL,
  `is_onrole` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `is_del` tinyint(4) DEFAULT 0,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `is_fresher` int(11) NOT NULL DEFAULT 0 COMMENT '0 for experience , 1 for fresher',
  `is_cloned` int(11) NOT NULL DEFAULT 0,
  `uploaded_by` int(11) DEFAULT NULL COMMENT 'user table id',
  `client_vendor_id` bigint(20) DEFAULT NULL,
  `candidate_type` varchar(255) DEFAULT '0' COMMENT '0 for national, 1 for international',
  `industry` varchar(255) DEFAULT NULL,
  `is_edited` int(11) NOT NULL DEFAULT 0,
  `is_skip` int(11) DEFAULT 0 COMMENT '0 for not skip,1 for edit skip',
  `resume_id` int(11) NOT NULL DEFAULT 1 COMMENT 'Resume Template Increment ID',
  `country_code` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `total_view_count`, `register_from`, `profile_complete_percent`, `login_id`, `resumeCode_id`, `profile_view_count`, `name`, `contact`, `email`, `password`, `image`, `experience`, `hh_id`, `is_onrole`, `is_active`, `is_del`, `lat`, `lng`, `is_fresher`, `is_cloned`, `uploaded_by`, `client_vendor_id`, `candidate_type`, `industry`, `is_edited`, `is_skip`, `resume_id`, `country_code`, `created_at`, `updated_at`) VALUES
(2, 0, 'website', 0.00, NULL, 6, '0', 'priya shrivastava', '8319116115', 'priya@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, 0, NULL, NULL, '0', NULL, 0, 0, 1, '91', '2023-07-24 14:18:23', '2023-07-24 14:18:23'),
(3, 0, 'website', 0.00, NULL, 7, '0', 'priyanka shrivastava', '8319116115', 'priyanka@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, 0, NULL, NULL, '0', NULL, 0, 0, 1, '91', '2023-07-24 14:29:10', '2023-07-24 14:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `resume_code`
--

CREATE TABLE `resume_code` (
  `id` int(11) NOT NULL,
  `user_code` varchar(255) NOT NULL,
  `increment_code` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume_code`
--

INSERT INTO `resume_code` (`id`, `user_code`, `increment_code`) VALUES
(1, 'priya-1001', 1001),
(2, 'priyashri-1002', 1002),
(3, 'priya-1003', 1003),
(4, 'priya-1004', 1004),
(5, 'priya-1005', 1005),
(6, 'priya-1006', 1006),
(7, 'priyanka-1007', 1007);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$H3BflUc08ks7mSAdppeEsu4Bemu/vwF.rzrUZy./UAj2N1aWP7sNy', NULL, '2023-07-24 05:34:01', '2023-07-24 05:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `image` varchar(244) DEFAULT NULL,
  `social_login_type` varchar(100) DEFAULT NULL,
  `social_id` varchar(244) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `contact`, `email`, `password`, `is_active`, `created_date`, `updated_date`, `image`, `social_login_type`, `social_id`) VALUES
(3, 'priya shrivastava', '8319116115', 'priya@gmail.com', '$2y$10$Y0aAd57et8MbhbfChJpoBuruvH1uda397rbxh3IkYtahF2zwUbP26', 1, '2023-07-24 14:18:23', NULL, NULL, NULL, NULL),
(4, 'priyanka shrivastava', '8319116115', 'priyanka@gmail.com', '$2y$10$htZs3K27cmI.KoaX2CikH.5orn9prGGYeXZ6ZM7IZFThp250eytoq', 1, '2023-07-24 14:29:10', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `resume_code`
--
ALTER TABLE `resume_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resume_code`
--
ALTER TABLE `resume_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
