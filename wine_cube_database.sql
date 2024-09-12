-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 02:22 AM
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
-- Database: `wine_cube_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', NULL, NULL),
(2, 'Albania', NULL, NULL),
(3, 'Algeria', NULL, NULL),
(4, 'Andorra', NULL, NULL),
(5, 'Angola', NULL, NULL),
(6, 'Antigua & Deps', NULL, NULL),
(7, 'Argentina', NULL, NULL),
(8, 'Armenia', NULL, NULL),
(9, 'Australia', NULL, NULL),
(10, 'Austria', NULL, NULL),
(11, 'Azerbaijan', NULL, NULL),
(12, 'Bahamas', NULL, NULL),
(13, 'Bahrain', NULL, NULL),
(14, 'Bangladesh', NULL, NULL),
(15, 'Barbados', NULL, NULL),
(16, 'Belarus', NULL, NULL),
(17, 'Belgium', NULL, NULL),
(18, 'Belize', NULL, NULL),
(19, 'Benin', NULL, NULL),
(20, 'Bhutan', NULL, NULL),
(21, 'Bolivia', NULL, NULL),
(22, 'Bosnia Herzegovina', NULL, NULL),
(23, 'Botswana', NULL, NULL),
(24, 'Brazil', NULL, NULL),
(25, 'Brunei', NULL, NULL),
(26, 'Bulgaria', NULL, NULL),
(27, 'Burkina', NULL, NULL),
(28, 'Burundi', NULL, NULL),
(29, 'Cambodia', NULL, NULL),
(30, 'Cameroon', NULL, NULL),
(31, 'Canada', NULL, NULL),
(32, 'Cape Verde', NULL, NULL),
(33, 'Central African Rep', NULL, NULL),
(34, 'Chad', NULL, NULL),
(35, 'Chile', NULL, NULL),
(36, 'China', NULL, NULL),
(37, 'Colombia', NULL, NULL),
(38, 'Comoros', NULL, NULL),
(39, 'Congo', NULL, NULL),
(40, 'Congo {Democratic Rep}', NULL, NULL),
(41, 'Costa Rica', NULL, NULL),
(42, 'Croatia', NULL, NULL),
(43, 'Cuba', NULL, NULL),
(44, 'Cyprus', NULL, NULL),
(45, 'Czech Republic', NULL, NULL),
(46, 'Denmark', NULL, NULL),
(47, 'Djibouti', NULL, NULL),
(48, 'Dominica', NULL, NULL),
(49, 'Dominican Republic', NULL, NULL),
(50, 'East Timor', NULL, NULL),
(51, 'Ecuador', NULL, NULL),
(52, 'Egypt', NULL, NULL),
(53, 'El Salvador', NULL, NULL),
(54, 'Equatorial Guinea', NULL, NULL),
(55, 'Eritrea', NULL, NULL),
(56, 'Estonia', NULL, NULL),
(57, 'Ethiopia', NULL, NULL),
(58, 'Fiji', NULL, NULL),
(59, 'Finland', NULL, NULL),
(60, 'France', NULL, NULL),
(61, 'Gabon', NULL, NULL),
(62, 'Gambia', NULL, NULL),
(63, 'Georgia', NULL, NULL),
(64, 'Germany', NULL, NULL),
(65, 'Ghana', NULL, NULL),
(66, 'Greece', NULL, NULL),
(67, 'Grenada', NULL, NULL),
(68, 'Guatemala', NULL, NULL),
(69, 'Guinea', NULL, NULL),
(70, 'Guinea-Bissau', NULL, NULL),
(71, 'Guyana', NULL, NULL),
(72, 'Haiti', NULL, NULL),
(73, 'Honduras', NULL, NULL),
(74, 'Hungary', NULL, NULL),
(75, 'Iceland', NULL, NULL),
(76, 'India', NULL, NULL),
(77, 'Indonesia', NULL, NULL),
(78, 'Iran', NULL, NULL),
(79, 'Iraq', NULL, NULL),
(80, 'Ireland {Republic}', NULL, NULL),
(81, 'Israel', NULL, NULL),
(82, 'Italy', NULL, NULL),
(83, 'Ivory Coast', NULL, NULL),
(84, 'Jamaica', NULL, NULL),
(85, 'Japan', NULL, NULL),
(86, 'Jordan', NULL, NULL),
(87, 'Kazakhstan', NULL, NULL),
(88, 'Kenya', NULL, NULL),
(89, 'Kiribati', NULL, NULL),
(90, 'Korea North', NULL, NULL),
(91, 'Korea South', NULL, NULL),
(92, 'Kosovo', NULL, NULL),
(93, 'Kuwait', NULL, NULL),
(94, 'Kyrgyzstan', NULL, NULL),
(95, 'Laos', NULL, NULL),
(96, 'Latvia', NULL, NULL),
(97, 'Lebanon', NULL, NULL),
(98, 'Lesotho', NULL, NULL),
(99, 'Liberia', NULL, NULL),
(100, 'Libya', NULL, NULL),
(101, 'Liechtenstein', NULL, NULL),
(102, 'Lithuania', NULL, NULL),
(103, 'Luxembourg', NULL, NULL),
(104, 'North Macedonia', NULL, NULL),
(105, 'Madagascar', NULL, NULL),
(106, 'Malawi', NULL, NULL),
(107, 'Malaysia', NULL, NULL),
(108, 'Maldives', NULL, NULL),
(109, 'Mali', NULL, NULL),
(110, 'Malta', NULL, NULL),
(111, 'Marshall Islands', NULL, NULL),
(112, 'Mauritania', NULL, NULL),
(113, 'Mauritius', NULL, NULL),
(114, 'Mexico', NULL, NULL),
(115, 'Micronesia', NULL, NULL),
(116, 'Moldova', NULL, NULL),
(117, 'Monaco', NULL, NULL),
(118, 'Mongolia', NULL, NULL),
(119, 'Montenegro', NULL, NULL),
(120, 'Morocco', NULL, NULL),
(121, 'Mozambique', NULL, NULL),
(122, 'Myanmar, {Burma}', NULL, NULL),
(123, 'Namibia', NULL, NULL),
(124, 'Nauru', NULL, NULL),
(125, 'Nepal', NULL, NULL),
(126, 'Netherlands', NULL, NULL),
(127, 'New Zealand', NULL, NULL),
(128, 'Nicaragua', NULL, NULL),
(129, 'Niger', NULL, NULL),
(130, 'Nigeria', NULL, NULL),
(131, 'Norway', NULL, NULL),
(132, 'Oman', NULL, NULL),
(133, 'Pakistan', NULL, NULL),
(134, 'Palau', NULL, NULL),
(135, 'Panama', NULL, NULL),
(136, 'Papua New Guinea', NULL, NULL),
(137, 'Paraguay', NULL, NULL),
(138, 'Peru', NULL, NULL),
(139, 'Philippines', NULL, NULL),
(140, 'Poland', NULL, NULL),
(141, 'Portugal', NULL, NULL),
(142, 'Qatar', NULL, NULL),
(143, 'Romania', NULL, NULL),
(144, 'Russian Federation', NULL, NULL),
(145, 'Rwanda', NULL, NULL),
(146, 'St Kitts & Nevis', NULL, NULL),
(147, 'St Lucia', NULL, NULL),
(148, 'Saint Vincent & the Grenadines', NULL, NULL),
(149, 'Samoa', NULL, NULL),
(150, 'San Marino', NULL, NULL),
(151, 'Sao Tome & Principe', NULL, NULL),
(152, 'Saudi Arabia', NULL, NULL),
(153, 'Senegal', NULL, NULL),
(154, 'Serbia', NULL, NULL),
(155, 'Seychelles', NULL, NULL),
(156, 'Sierra Leone', NULL, NULL),
(157, 'Singapore', NULL, NULL),
(158, 'Slovakia', NULL, NULL),
(159, 'Slovenia', NULL, NULL),
(160, 'Solomon Islands', NULL, NULL),
(161, 'Somalia', NULL, NULL),
(162, 'South Africa', NULL, NULL),
(163, 'South Sudan', NULL, NULL),
(164, 'Spain', NULL, NULL),
(165, 'Sri Lanka', NULL, NULL),
(166, 'Sudan', NULL, NULL),
(167, 'Suriname', NULL, NULL),
(168, 'Swaziland', NULL, NULL),
(169, 'Sweden', NULL, NULL),
(170, 'Switzerland', NULL, NULL),
(171, 'Syria', NULL, NULL),
(172, 'Taiwan', NULL, NULL),
(173, 'Tajikistan', NULL, NULL),
(174, 'Tanzania', NULL, NULL),
(175, 'Thailand', NULL, NULL),
(176, 'Togo', NULL, NULL),
(177, 'Tonga', NULL, NULL),
(178, 'Trinidad & Tobago', NULL, NULL),
(179, 'Tunisia', NULL, NULL),
(180, 'Turkey', NULL, NULL),
(181, 'Turkmenistan', NULL, NULL),
(182, 'Tuvalu', NULL, NULL),
(183, 'Uganda', NULL, NULL),
(184, 'Ukraine', NULL, NULL),
(185, 'United Arab Emirates', NULL, NULL),
(186, 'United Kingdom', NULL, NULL),
(187, 'United States', NULL, NULL),
(188, 'Uruguay', NULL, NULL),
(189, 'Uzbekistan', NULL, NULL),
(190, 'Vanuatu', NULL, NULL),
(191, 'Vatican City', NULL, NULL),
(192, 'Venezuela', NULL, NULL),
(193, 'Vietnam', NULL, NULL),
(194, 'Yemen', NULL, NULL),
(195, 'Zambia', NULL, NULL),
(196, 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Male', NULL, NULL),
(2, 'Female', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wine_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `wine_id`, `customer_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, NULL),
(2, 1, 3, 2, NULL, NULL),
(3, 9, 1, 5, NULL, NULL),
(4, 9, 3, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `features`, `created_at`, `updated_at`) VALUES
(1, 'The Keaton', 'Diane Keaton, American film actress, director and producer, is now directing her own wine label, \"The Keaton.\" This is the inaugural vintage is a robust red wine blend, a white wine is planned for release shortly. Diane says, \"This is how I like my wine: grab a low ball glass, fill with lots of ice, pour until all of the ice is covered with my robust red wine, then enjoy. It tastes just as good without ice, too.\" She adds, \"My debut wine is not only delicious, but it is important that we give back. With this in mind, a percentage of the proceeds will benefit the Alzheimer\'s study at Cleveland Clinic Lou Ruvo Center for brain health.\"', NULL, NULL),
(2, 'Frey', 'We are a third-generation family-owned and operated winery located at the pristine headwaters of the Russian River in Redwood Valley, Mendocino County, California. At Frey Vineyards we combine the best of modern and traditional winemaking methods to showcase distinctive varietal flavors. Through minimal manipulation in the cellar, we allow the wines to express the authentic character of our soils and climate. For over three decades we have been vanguards in crafting wine without added sulfites, a synthetic preservative added to most other wines (even wines made with organically grown grapes!) that can cause adverse allergic reactions in some people. Our organic and Biodynamic farming methods encourage care for the soil, groundwater, and wildlife, promoting rich biodiversity in the vineyard. Ninety percent of our land is held as unspoiled natural habitat with a diverse mix of native plants and animals. As stewards of the land, we emphasize producing organic and Biodynamic wine of the highest quality while caring for planet and palate alike.', NULL, NULL),
(3, 'Angeline', 'Courtney Benham acquired the historic Martini & Prati winery in July 2003, which is now Martin Ray Winery and the home of their Tasting Room. The Tasting Room structure, dating back to the 1900\'s, used to serve as a stable and bunkhouse where Italian immigrants stayed during harvest and crush. The winery also houses a 1 million gallon production facility. Established in 1881 as the Twin Fir Winery, the historic site is distinguished as the oldest winery in continuous operation in Sonoma County and one of the oldest wineries in California. The winery was able to stay in operation during prohibition by selling sacramental wines by train to Rabbis through a winery in New York. Originally known as Martini & Prati, which was established in 1902, the winery was run by five generations of the Martini family. Thirty 11,000 gallon old-growth redwood tanks dating back to 1904 are still used at the winery and can be viewed during the winery tour. French oak barrels are primarily used due to its superb quality and oak accents that give the wines vanilla, spice and often herbaceous aromas and flavor. Most of the barrels are used for 5 to 6 years, depending upon the percentages of new, neutral and old wood they want to use on a particular wine. Beginning a new era for Martin Ray Winery at this historic site in the Russian River Valley has given them the opportunity to create a home for the Martin Ray and Angeline wines in a very unique and inviting setting. Visit us soon to experience Martin Ray Winery first-hand!', NULL, NULL),
(4, 'Oak Grove', 'Our family has been making some of California\'s finest wines for generations. Choosing only the best fruit from the finest coastal vineyards, we strive for excellence in all of our reserve wines. The best our family has to offer.', NULL, NULL),
(5, 'Til the Last Sip', 'Surrounded by true southern California culture with an affinity for everything that stands out, it was no surprise that  Til Last Sip! was born. Founded by two ambitious sisters who all share a love for fine cuisine, travel and the arts, it was natural to start a wine company to showcase our tastes.', NULL, NULL),
(6, 'Courtney Benham', 'Falling in love with wine, meant falling in love with Napa for Courtney Benham. Inspired by his farmland upbringing, Courtney found himself entrenched in the wine industry early in his life. 30 years later, as dedicated to his craft now as he was from day one, he brings you distinctive wines from Napa Valley. A perfect convergence of soil and climate, Napa offers diversity unlike any other wine region in the world. It is distinctive, it is dramatic, its enviable terroir results in wines of complexity, breadth, and beauty. Rooted in the philosophy that great wine cannot exist without ideal growing, Courtney Benham wines are a tribute to his love of terroir, and the heightened sense of clarity when two elements merge. Courtney Benham, a leader in quality wine for nearly 30 years, brings you top bottlings from the Napa Valley. From high elevation mountain appellations, to benchland vineyards and sun-drenched valley sites, he seeks locations of distinction, offering wines that are expressive, terroir driven, and exceed expectations.', NULL, NULL),
(7, 'Hall Ranch', 'Hall Ranch wines are crafted by Amanda Gorter, a passionate young winemaker inspired by the Old West heritage and agricultural roots that continue to anchor the identity of the Paso Robles community.  Amanda employs a non-interventionist approach to winemaking in the spirit that \"great wine comes from great vineyards.\" She has been making wine since 2013 and has trained under some of the best winemakers in the business. In 2016 Amanda moved to Robert Hall Winery as Assistant Winemaker and was promoted to Winemaker in 2019. She holds a degree in Biology with a Winemaking Certificate from University of California, Davis. When she\'s not making wine, Amanda loves gardening, traveling, cooking and live music.', NULL, NULL),
(8, 'Duckhorn', 'Founded by Dan and Margaret Duckhorn in 1976, Duckhorn Vineyards has been crafting classic Napa Valley wines for nearly 40 years. This winemaking tradition has grown to include seven meticulously farmed Estate vineyards, located throughout the various microclimates of the Napa Valley. Focused on quality and consistency, these Estate vineyards are an essential element in making wines of distinction. Pioneering and perfecting Merlot as a premium varietal, Duckhorn Vineyards now makes several elegant Merlot and distinctive Cabernet Sauvignon bottlings that showcase its premium vineyard sites. Duckhorn Vineyards has been named one of the \\“Top 100 Wineries\\” in the world eight times by Wine & Spirits, and the 2014 Duckhorn Vineyards Napa Valley Merlot Three Palms Vineyard was named the “2017 Wine of the Year,” topping Wine Spectator’s annual list of the world’s \\“Top 100 Wines.\\”', NULL, NULL),
(9, 'McBride Sisters', 'Sisters Robin and Andrea McBride have combined the love of their environments and their passion for wine to create The McBride Sisters Collection, a line of wines that reflect each of the Sister\'s upbringing on opposite ends of the globe – Robin in Monterey, California and Andrea in Marlborough, New Zealand. Although the Sisters were unaware of each other most of their lives, once united their appreciation for winemaking blossomed and they were compelled to share their mutual love of with the world. With The McBride Sisters Collection, the pair has perfected two wines from New Zealand – a Sauvignon Blanc and Sparkling Brut Rose, and two wines from the Central Coast of California – a Chardonnay and Red Blend. The collection is crafted in the Sisters\' signature style, a blend of old world elegance with new world finesse. Black Girl Magic is a term used often, but what is it? Black Girl Magic is a concept and movement that was popularized by CaShawn Thompson in 2013 as a way to \"celebrate the beauty, power and resilience of black women\" and to congratulate black women on their accomplishments. Referring to a speech made by Michelle Obama at the Black Girls Rock Awards, Thompson explains that black women around the world persevering despite adversity, inspired her to spread the concept of Black Girl Magic. With these women in mind, Thompson created the social media hashtag and rallying cry \"Black Girl Magic\", in the hopes of counteracting the negativity society places on black women. \"Black Girl Magic is more than a phrase. It’s a feeling. A look. A mood. A taste. Our Black Girl Magic collection is an ode to our culture and story, inspired by the magic and resilience of Black women, to be enjoyed by all. These are premium wines that respect her palate and showcase the flavors of the finest single vineyards in California. These are wines that SLAY.\" - Robin & Andréa McBride', NULL, NULL),
(10, 'Coppola', 'Francis Ford Coppola Winery, re-opened in July 2010, is the latest venture from Francis Ford Coppola, whose passion for wine, food and adventure is nowhere more evident than in this new production – a winery resort located in the heart of Alexander Valley, California. Among the many attractions at the property, Francis Ford Coppola Winery features a wine tasting bar, two restaurants, swimming pools, a movie gallery, a performing arts pavilion and a park area with game tables and bocce courts. Francis puts it best, saying the winery is meant to be \"a wine wonderland, a park of pleasure where people of all ages can enjoy all the best things in life – food, wine, music, dancing, games, swimming and performances of all types. A place to celebrate the love of life.\"', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '1970_12_02_231503_create_genders_table', 1),
(2, '1972_11_24_232530_create_scores_table', 1),
(3, '1987_11_17_200818_create_countries_table', 1),
(4, '1988_11_18_163702_create_manufacturers_table', 1),
(5, '1989_11_17_155522_create_roles_migration', 1),
(6, '1990_11_18_151436_create_types_table', 1),
(7, '1991_11_18_144514_create_varieties_table', 1),
(8, '1992_10_12_000000_create_users_table', 1),
(9, '1993_11_17_121802_create_wines_table', 1),
(10, '1994_12_17_150416_create_reviews_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2022_12_04_181157_create_items_table', 1),
(15, '2022_12_07_100427_create_orders_table', 1),
(16, '2022_12_10_105457_create_orderings_table', 1),
(17, '2022_12_10_111505_create_sorts_table', 1),
(18, '2022_12_11_113935_create_slides_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderings`
--

CREATE TABLE `orderings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderings`
--

INSERT INTO `orderings` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ASC', NULL, NULL),
(2, 'DESC', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wine_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wine_id` bigint(20) UNSIGNED NOT NULL,
  `score_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `critic_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `wine_id`, `score_id`, `comment`, `critic_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Good 2 drink.', 1, NULL, NULL),
(2, 1, 5, 'Excellent 4 u.', 1, NULL, NULL),
(3, 1, 5, 'Meh.', 2, NULL, NULL),
(4, 1, 5, 'Nah.', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL),
(2, 'Critic', NULL, NULL),
(3, 'Customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `score`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Very Ordinary', NULL, NULL),
(2, 2, 'Casual Quaffing', NULL, NULL),
(3, 3, 'Good Everyday Drinking', NULL, NULL),
(4, 4, 'Excellent', NULL, NULL),
(5, 5, 'Superlative. A Cape Classic', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Wine Cube - The best liquor store out there!', 'Find all of your favorite California wines on one place!', '#welcome', 'welcome.jpg', NULL, NULL),
(2, 'Tradition, since 1949', 'Our continuity throughout the decades says it all about quality of wines in our arsenal.', '#history', 'history.jpg', NULL, NULL),
(3, 'Checkout', 'Buy your liquor of choice easily in no time through our online checkout.', '#buy', 'clerk.jpg', NULL, NULL),
(4, 'City of Angels\' store', 'You need a wine as soon as possible for a date? Come over to our Los Angeles store and pick up the wine that will make your date special.', '#interior', 'interior.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sorts`
--

CREATE TABLE `sorts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sorts`
--

INSERT INTO `sorts` (`id`, `name`, `column`, `ordering_id`, `created_at`, `updated_at`) VALUES
(1, 'Sort by name ascending', 'name', 1, NULL, NULL),
(2, 'Sort by name descending', 'name', 2, NULL, NULL),
(3, 'Sort by price ascending', 'price', 1, NULL, NULL),
(4, 'Sort by price descending', 'price', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Red', NULL, NULL),
(2, 'White', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `gender_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `image`, `home_address`, `email_address`, `user_name`, `country_id`, `gender_id`, `role_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Steve', 'Martin', 'male_user.png', 'Rich Drive 9, Los Angeles, California', 'stevemartin@pinterest.com', 'martin_44', 1, 1, 3, 'eb3eac4630d7215a8903ccbfc78a52a54bb30ff4', NULL, NULL, NULL),
(2, 'Nancy', 'Myers', 'female_user.png', 'Fifth Avenue 5, New York, New York', 'nancymyers@gmail.com', 'myers_49', 2, 2, 1, 'eb3eac4630d7215a8903ccbfc78a52a54bb30ff4', NULL, NULL, NULL),
(3, 'Frank', 'Sinatra', 'male_user.png', 'My Way 10, New York, New York', 'frankie@outlook.com', 'frankie_15', 3, 1, 2, 'eb3eac4630d7215a8903ccbfc78a52a54bb30ff4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `varieties`
--

CREATE TABLE `varieties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varieties`
--

INSERT INTO `varieties` (`id`, `name`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'Red Blends', 1, NULL, NULL),
(2, 'Sangiovese', 1, NULL, NULL),
(3, 'Pinot Noir', 1, NULL, NULL),
(4, 'Merlot', 1, NULL, NULL),
(5, 'Malbec', 1, NULL, NULL),
(6, 'Cabernet Sauvignon', 1, NULL, NULL),
(7, 'Zinfandel', 1, NULL, NULL),
(8, 'Syrah', 1, NULL, NULL),
(9, 'White Blands', 2, NULL, NULL),
(10, 'Chardonnay', 2, NULL, NULL),
(11, 'Viognier', 2, NULL, NULL),
(12, 'Sauvignon Blanc', 2, NULL, NULL),
(13, 'Pinot Grigio', 2, NULL, NULL),
(14, 'Riesling', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wines`
--

CREATE TABLE `wines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `variety_id` bigint(20) UNSIGNED NOT NULL,
  `manufacturer_id` bigint(20) UNSIGNED NOT NULL,
  `alcohol` double(8,2) NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `available` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wines`
--

INSERT INTO `wines` (`id`, `name`, `image`, `price`, `variety_id`, `manufacturer_id`, `alcohol`, `features`, `available`, `created_at`, `updated_at`) VALUES
(1, 'The Keaton Red Blend', 'the_keaton_red_blend_big.png', 15.99, 1, 1, 13.70, 'This is the inaugural vintage of The Keaton Red wine by Diane Keaton. The Keaton Red is a blend of Zinfandel, Syrah, and Petite Sirah all sourced from the north coast of California. Upon pouring in the glass the color is a rich purple-crimson. The aromas have good intensity and complexity, with fruit that hints of strawberries, raspberry, and plum notes, with an added dash of spice vanilla. This robust red has good structure and balance across the palate, with the flavors following the nose. The tannins are rich but restrained and the finish lingers nicely.', 1, NULL, NULL),
(2, 'Frey Organic Sangiovese', 'frey_organic_sangiovese_big.png', 12.49, 2, 2, 13.90, 'Rich, ruby color. Smoked spiced nuts, dried lemon peel, piney herbs, pomegranate, and pink peppercorn aromas. Well-balanced and mellow follow through on a soft, supple entry to a dry-yet-fruity full body with a rounded texture, good fruit, and lively acidity underneath.', 0, NULL, NULL),
(3, 'Angeline Pinot Noir Reserve', 'angeline_pinot_noir_reserve_big.png', 16.99, 3, 3, 13.90, 'Rich, ruby color. Smoked spiced nuts, dried lemon peel, piney herbs, pomegranate, and pink peppercorn aromas. Well-balanced and mellow follow through on a soft, supple entry to a dry-yet-fruity full body with a rounded texture, good fruit, and lively acidity underneath.', 1, NULL, NULL),
(4, 'Oak Grove Merlot Reserve', 'oak_grove_merlot_reserve_big.png', 9.99, 4, 4, 13.00, 'Complex flavors of blackberries and plums mingle with toasty oak notes in this smooth, easy-to-drink style of Merlot. Oak Grove Winery selects the finest grapes from the cool appellations of California to bring you this crowd pleasing wine.', 0, NULL, NULL),
(5, 'Til the Last Sip Rose of Malbec', 'til_the_last_sip_rose_of_malbec_big.png', 15.99, 5, 5, 14.20, 'This fine wine is a full-bodied (14.2% alcohol) rose and blush wine from the brand\'s Paso Robles vineyard. It offers a nose of stone fruit, strawberry, and watermelon that complement the smooth and crisp finish.', 1, NULL, NULL),
(6, 'Courtney Benham Cabernet Sauvignon Reserve Napa', 'courtney_benham_cabernet_sauvignon_reserve_napa_big.png', 33.99, 6, 6, 14.20, 'A classic Napa Valley Cab. Fruit forward and rich, backed by savory notes and structured tannins. Blackberry, cherry, mulberry and plum with elder flower, leather, allspice and dried thyme notes. Pairs perfectly with barbecue.', 1, NULL, NULL),
(7, 'Hall Ranch Zinfandel Paso Robles', 'hall_ranch_zinfandel_paso_robles_big.png', 12.99, 7, 7, 15.50, 'A full-bodied wine with a dense core of fresh raspberry and cranberry intertwined with a peppery spice. Soft tannins and moderate acidity nicely balance the robust fruit and cedar spice flavors.', 1, NULL, NULL),
(8, 'Decoy by Duckhorn Rose', 'decoy_by_duckhorn_rose_big.png', 19.99, 8, 8, 13.50, 'This lovely Rose displays enticing aromas of pink grapefruit and fresh melon, along with hints of strawberry and spring wildflowers. On the palate, it is bright and elegant, with refreshing acidity and minerality adding poise and definition to the vibrant fruit flavors.', 0, NULL, NULL),
(9, 'The Keaton White Blend', 'the_keaton_white_blend_big.png', 13.97, 9, 1, 20.00, 'This is the second wine from Diane Keaton and her winemakers, and just like her debut robust red, it\'s great on the rocks! A percentage of the proceeds for Keaton\'s wines benefit the Alzheimer\'s Study at Cleveland Clinic Lou Ruvo Center for Brain Health. \"The Keaton is a celebration of life\", she says, \"Dare to be the first! The Keaton White blends Verdelho (Paso Robles), Pinot Grigio (Sonoma Valley) and Riesling (Mendocino). The nose is largely floral with a touch of spice, while the palate is full-bodied, slightly off dry, and contains a good balance of acidity.', 1, NULL, NULL),
(10, 'Decoy by Duckhorn Chardonnay', 'decoy_by_duckhorn_chardonnay_big.png', 13.99, 10, 8, 13.90, 'This deliciously bright and inviting Chardonnay offers layers of apricot, citrus and green apple, as well as hints of fresh honeysuckle and cinnamon. On the palate, the lovely pure fruit flavors are underscored by delicate acidity and a supple richness from sur lie aging.', 1, NULL, NULL),
(11, 'Oak Grove Viognier Reserve', 'oak_grove_viognier_reserve_big.png', 13.99, 11, 4, 13.00, 'This rich and full-bodied California wine exhibits a beautiful floral aroma followed by lush flavors of melon, honey and a slight tinge of citrus. It has the body and flavor to stand up to even the heartiest of poultry dishes.', 1, NULL, NULL),
(12, 'Angeline Sauvignon Blanc Reserve', 'angeline_sauvignon_blanc_reserve_big.png', 8.99, 12, 3, 12.80, 'The ideal refresher for warm weather. Enticing aromas of exotic spices, freshly picked limes and green apple lead to a crisp and lively finish.', 0, NULL, NULL),
(13, 'Oak Grove Pinot Grigio Reserve', 'oak_grove_pinot_grigio_reserve_big.png', 14.99, 13, 4, 13.00, 'This soft, fruity and delightful wine is reminiscent of classic Italian Pinot Grigio. Light, fresh and crisp, with flavors of delicate citrus and tropical fruits, it is an excellent aperitif wine, as well as a good choice to serve with chilled shrimp and cold salads.', 0, NULL, NULL),
(14, 'McBride Sisters Black Girl Magic Riesling', 'mcbride_sisters_black_girl_magic_riesling_big.png', 13.99, 14, 9, 12.50, 'This intensely aromatic wine shows characteristics of honey, apricot, white florals, tangerine and jasmine. The palate turns to tropical flavors of guava, pineapple, citrus and honeysuckle. The mild sweetness is balanced by bright and tangy citrus.', 1, NULL, NULL),
(15, 'Oak Grove Sauvignon Blanc Reserve', 'oak_grove_sauvignon_blanc_reserve_big.png', 8.99, 12, 4, 13.00, 'Starting off with a bouquet of ripe grapefruit, the flavors of fig, melon and spiced orange unfold in an understated manner. The light finish lingers. This undeniable value is a perfect aperitif or great with chicken or shrimp salad.', 1, NULL, NULL),
(16, 'Hall Ranch Cabernet Sauvignon Paso Reserve', 'hall_ranch_cabernet_sauvignon_paso_reserve_big.png', 24.99, 6, 7, 14.50, 'Featuring fruit from Hall Ranch Vineyards, this Cabernet showcases traditional notes of black currant and cedar along with plum and blackberry. Flavors of dried herbs and spices will envelop the palate, and notes of cocoa & leather finish of this velvety wine.', 0, NULL, NULL),
(17, 'Courtney Benham Pinot Noir Napa', 'courtney_benham_pinot_noir_napa_big.png', 24.99, 3, 6, 13.80, 'A bold expression of classic varietal character. Rich and opulent, with layered dark fruit highlighted by delicately earthy smoke and spice notes. Enjoy!', 1, NULL, NULL),
(18, 'Coppola Director\'s Cut Cabernet Sauvignon Sonoma', 'coppola_directors_cut_cabernet_sauvignon_sonoma_big.png', 15.47, 6, 10, 14.40, 'The wine has an elegant structure with layered fruit and a long, aromatic finish. I tasted flavors of cassis and black cherries enhanced by hints of espresso bean, spice and toasted oak.', 1, NULL, NULL),
(19, 'Coppola Director\'s Chardonnay', 'coppola_directors_chardonnay_big.png', 14.79, 10, 10, 13.50, 'Director\'s Chardonnay displays an aromatic bouquet where hints of cinnamon toast mingle with pears, pineapple, and a hint of citrus. Good weight and palate texture is enhanced by crisp natural acidity and a silky mouthfeel.', 0, NULL, NULL),
(20, 'Coppola Diamond Red Blend', 'coppola_diamond_red_blend_big.png', 14.49, 1, 10, 13.50, 'Our Diamond Red Blend has a velvety texture and fragrant notes of violets, spices and toasted oak layered with rich, luscious flavors of blueberries, cherries and plum.', 1, NULL, NULL),
(21, 'Courtney Benham Sauvignon Blanc Terroir Selection', 'courtney_benham_sauvignon_blanc_terroir_selection_big.png', 16.99, 12, 6, 13.10, 'The Terroir Selection series is all about finding the best wines throughout California, not limiting to Napa Valley. This crisp and light Sauvignon Blanc is sourced from multiple AVA\'s within Sonoma County. It has vibrant flavors of guava, honeysuckle and citrus.', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genders_name_unique` (`name`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_wine_id_foreign` (`wine_id`),
  ADD KEY `items_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `manufacturers_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderings`
--
ALTER TABLE `orderings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderings_name_unique` (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_wine_id_foreign` (`wine_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_address_index` (`email_address`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_wine_id_foreign` (`wine_id`),
  ADD KEY `reviews_score_id_foreign` (`score_id`),
  ADD KEY `reviews_critic_id_foreign` (`critic_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sorts`
--
ALTER TABLE `sorts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sorts_name_unique` (`name`),
  ADD KEY `sorts_ordering_id_foreign` (`ordering_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_address_unique` (`email_address`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD KEY `users_country_id_foreign` (`country_id`),
  ADD KEY `users_gender_id_foreign` (`gender_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `varieties`
--
ALTER TABLE `varieties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `varieties_name_unique` (`name`),
  ADD KEY `varieties_type_id_foreign` (`type_id`);

--
-- Indexes for table `wines`
--
ALTER TABLE `wines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wines_name_unique` (`name`),
  ADD KEY `wines_variety_id_foreign` (`variety_id`),
  ADD KEY `wines_manufacturer_id_foreign` (`manufacturer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orderings`
--
ALTER TABLE `orderings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sorts`
--
ALTER TABLE `sorts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `varieties`
--
ALTER TABLE `varieties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wines`
--
ALTER TABLE `wines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `items_wine_id_foreign` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_wine_id_foreign` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_critic_id_foreign` FOREIGN KEY (`critic_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_score_id_foreign` FOREIGN KEY (`score_id`) REFERENCES `scores` (`id`),
  ADD CONSTRAINT `reviews_wine_id_foreign` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`);

--
-- Constraints for table `sorts`
--
ALTER TABLE `sorts`
  ADD CONSTRAINT `sorts_ordering_id_foreign` FOREIGN KEY (`ordering_id`) REFERENCES `orderings` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `users_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `varieties`
--
ALTER TABLE `varieties`
  ADD CONSTRAINT `varieties_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Constraints for table `wines`
--
ALTER TABLE `wines`
  ADD CONSTRAINT `wines_manufacturer_id_foreign` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`),
  ADD CONSTRAINT `wines_variety_id_foreign` FOREIGN KEY (`variety_id`) REFERENCES `varieties` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
