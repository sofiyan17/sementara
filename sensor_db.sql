-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 06:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensorsoil`
--

CREATE TABLE `sensorsoil` (
  `id` int(11) NOT NULL,
  `sensor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sensorsoil`
--

INSERT INTO `sensorsoil` (`id`, `sensor`) VALUES
(1, 4095),
(2, 4095),
(3, 4095),
(4, 4095),
(5, 4095),
(6, 4095),
(7, 4095),
(8, 4095),
(9, 4095),
(10, 4095),
(11, 4095),
(12, 4095),
(13, 4095),
(14, 4095),
(15, 4095),
(16, 4095),
(17, 4095),
(18, 4095),
(19, 4095),
(20, 4095),
(21, 4095),
(22, 4095),
(23, 4095),
(24, 4095),
(25, 4095),
(26, 4095),
(27, 4095),
(28, 4095),
(29, 4095),
(30, 4095),
(31, 4095),
(32, 4095),
(33, 4095),
(34, 4095),
(35, 4095),
(36, 4095),
(37, 4095),
(38, 4095),
(39, 4095),
(40, 4095),
(41, 4095),
(42, 4095),
(43, 4095),
(44, 4095),
(45, 4095),
(46, 4095),
(47, 4095),
(48, 4095),
(49, 4095),
(50, 4095),
(51, 4095),
(52, 4095),
(53, 4095),
(54, 4095),
(55, 4095),
(56, 4095),
(57, 4095),
(58, 4095),
(59, 4095),
(60, 4095),
(61, 4095),
(62, 4095),
(63, 4095),
(64, 4095),
(65, 4095),
(66, 4095),
(67, 4095),
(68, 4095),
(69, 4095),
(70, 4095),
(71, 4095),
(72, 4095),
(73, 4095),
(74, 4095),
(75, 4095),
(76, 4095),
(77, 4095),
(78, 4095),
(79, 4095),
(80, 4095),
(81, 4095),
(82, 4095),
(83, 4095),
(84, 4095),
(85, 4095),
(86, 4095),
(87, 4095),
(88, 4095),
(89, 4095),
(90, 4095),
(91, 4095),
(92, 4095),
(93, 4095),
(94, 4095),
(95, 4095),
(96, 4095),
(97, 4095),
(98, 4095),
(99, 4095),
(100, 4095),
(101, 4095),
(102, 4095),
(103, 4095),
(104, 4095),
(105, 4095),
(106, 4095),
(107, 4095),
(108, 4095),
(109, 4095),
(110, 4095),
(111, 4095),
(112, 4095),
(113, 4095),
(114, 4095),
(115, 4095),
(116, 4095),
(117, 4095),
(118, 4095),
(119, 4095),
(120, 4095),
(121, 4095),
(122, 4095),
(123, 4095),
(124, 4095),
(125, 4095),
(126, 4095),
(127, 4095),
(128, 4095),
(129, 4095),
(130, 4095),
(131, 4095),
(132, 4095),
(133, 4095),
(134, 4095),
(135, 4095),
(136, 4095),
(137, 4095),
(138, 4095),
(139, 4095),
(140, 4095),
(141, 4095),
(142, 4095),
(143, 4095),
(144, 4095),
(145, 4095),
(146, 4095),
(147, 4095),
(148, 4095),
(149, 4095),
(150, 4095),
(151, 4095),
(152, 4095),
(153, 4095),
(154, 4095),
(155, 4095),
(156, 4095),
(157, 4095),
(158, 4095),
(159, 4095),
(160, 4095),
(161, 4095),
(162, 4095),
(163, 4095),
(164, 4095),
(165, 4095),
(166, 4095),
(167, 4095),
(168, 4095),
(169, 4095),
(170, 4095),
(171, 4095),
(172, 4095),
(173, 4095),
(174, 4095),
(175, 4095),
(176, 4095),
(177, 4095),
(178, 4095),
(179, 4095),
(180, 4095),
(181, 4095),
(182, 4095),
(183, 4095),
(184, 4095),
(185, 4095),
(186, 4095),
(187, 4095),
(188, 4095),
(189, 4095),
(190, 4095),
(191, 4095),
(192, 4095),
(193, 4095),
(194, 4095),
(195, 4095),
(196, 4095),
(197, 4095),
(198, 4095),
(199, 4095),
(200, 4095),
(201, 4095),
(202, 4095),
(203, 4095),
(204, 4095),
(205, 4095),
(206, 4095),
(207, 4095),
(208, 4095),
(209, 4095),
(210, 4095),
(211, 4095),
(212, 4095),
(213, 4095),
(214, 4095),
(215, 4095),
(216, 4095),
(217, 4095),
(218, 4095),
(219, 4095),
(220, 4095),
(221, 4095),
(222, 4095),
(223, 4095),
(224, 4095),
(225, 4095),
(226, 4095),
(227, 4095),
(228, 4095),
(229, 4095),
(230, 4095),
(231, 4095),
(232, 4095),
(233, 4095),
(234, 4095),
(235, 4095),
(236, 4095),
(237, 4095),
(238, 4095),
(239, 4095),
(240, 4095),
(241, 4095),
(242, 4095),
(243, 4095),
(244, 3237),
(245, 3120),
(246, 3044),
(247, 3010),
(248, 2978),
(249, 2955),
(250, 3063),
(251, 4095),
(252, 2739),
(253, 2942),
(254, 2879),
(255, 2843),
(256, 2853),
(257, 2769),
(258, 2746),
(259, 2725),
(260, 2702),
(261, 2656),
(262, 2627),
(263, 2611),
(264, 2579),
(265, 2553),
(266, 2599),
(267, 2547),
(268, 2545),
(269, 2519),
(270, 2512),
(271, 2544),
(272, 2480),
(273, 2495),
(274, 2506),
(275, 2492),
(276, 2479),
(277, 2477),
(278, 2477),
(279, 2470),
(280, 2466),
(281, 2489),
(282, 2471),
(283, 2463),
(284, 2480),
(285, 2475),
(286, 2478),
(287, 2450),
(288, 2469),
(289, 2435),
(290, 2449),
(291, 2455),
(292, 2487),
(293, 2472),
(294, 2471),
(295, 2480),
(296, 2469),
(297, 2479),
(298, 2475),
(299, 2496),
(300, 2484),
(301, 2490),
(302, 4095),
(303, 1930),
(304, 2544),
(305, 2577),
(306, 2543),
(307, 2544),
(308, 2523),
(309, 2518),
(310, 2510),
(311, 2503),
(312, 2501),
(313, 2403),
(314, 2473),
(315, 2470),
(316, 2446),
(317, 2464),
(318, 4095),
(319, 2234),
(320, 2659),
(321, 2598),
(322, 2583),
(323, 2593),
(324, 2555),
(325, 2556),
(326, 2557),
(327, 2555),
(328, 2544),
(329, 2526),
(330, 2544),
(331, 2496),
(332, 2507),
(333, 2514),
(334, 2523),
(335, 2521),
(336, 2521),
(337, 2526),
(338, 2511),
(339, 2512),
(340, 2520),
(341, 2523),
(342, 2515),
(343, 2515),
(344, 2508),
(345, 2512),
(346, 2512),
(347, 2509),
(348, 2509),
(349, 2521),
(350, 2502),
(351, 2513),
(352, 2514),
(353, 2513),
(354, 2517),
(355, 2519),
(356, 2523),
(357, 2514),
(358, 2502),
(359, 2518),
(360, 2522),
(361, 2509),
(362, 2517),
(363, 2516),
(364, 2512),
(365, 2498),
(366, 2505),
(367, 2512),
(368, 2514),
(369, 2503),
(370, 2515),
(371, 2512),
(372, 2514),
(373, 2521),
(374, 2519),
(375, 2545),
(376, 2544),
(377, 2528),
(378, 2533),
(379, 2543),
(380, 2531),
(381, 2542),
(382, 2530),
(383, 2519),
(384, 2526),
(385, 2507),
(386, 2531),
(387, 2522),
(388, 2526),
(389, 2518),
(390, 2515),
(391, 2512),
(392, 2535),
(393, 2529),
(394, 2486),
(395, 2512),
(396, 2509),
(397, 2496),
(398, 2506),
(399, 2513),
(400, 2499),
(401, 2507),
(402, 2512),
(403, 2491),
(404, 2512),
(405, 2499),
(406, 2511),
(407, 2519),
(408, 2517),
(409, 2512),
(410, 2507),
(411, 2497),
(412, 2480),
(413, 2495),
(414, 2512),
(415, 2499),
(416, 2509),
(417, 2518),
(418, 2517),
(419, 2515),
(420, 2518),
(421, 2516),
(422, 2499),
(423, 2507),
(424, 2498),
(425, 2506),
(426, 2497),
(427, 2496),
(428, 2498),
(429, 2501),
(430, 2491),
(431, 2496),
(432, 2497),
(433, 2491),
(434, 2495),
(435, 2493),
(436, 2501),
(437, 2483),
(438, 2495),
(439, 2484),
(440, 2499),
(441, 2481),
(442, 2490),
(443, 2496),
(444, 2522),
(445, 2499),
(446, 2489),
(447, 2486),
(448, 2494),
(449, 2482),
(450, 2497),
(451, 2493),
(452, 2498),
(453, 2479),
(454, 2490),
(455, 2495),
(456, 2492),
(457, 2491),
(458, 2514),
(459, 2494),
(460, 2491),
(461, 2498),
(462, 2497),
(463, 2509),
(464, 2483),
(465, 2503),
(466, 2498),
(467, 2499),
(468, 2506),
(469, 2480),
(470, 2496),
(471, 2496),
(472, 2499),
(473, 2497),
(474, 2489),
(475, 2497),
(476, 2491),
(477, 2478),
(478, 2485),
(479, 2462),
(480, 2495),
(481, 3805),
(482, 3045),
(483, 3059),
(484, 3301),
(485, 3364),
(486, 3419),
(487, 3447),
(488, 345),
(489, 2876),
(490, 3405),
(491, 173),
(492, 432),
(493, 208),
(494, 0),
(495, 0),
(496, 0),
(497, 0),
(498, 0),
(499, 3381),
(500, 0),
(501, 0),
(502, 3414),
(503, 3727),
(504, 4087),
(505, 4095),
(506, 167),
(507, 49),
(508, 26),
(509, 10),
(510, 16),
(511, 6),
(512, 3),
(513, 0),
(514, 0),
(515, 0),
(516, 0),
(517, 0),
(518, 0),
(519, 0),
(520, 0),
(521, 0),
(522, 2132),
(523, 358),
(524, 2593),
(525, 2960),
(526, 944),
(527, 2759),
(528, 2913),
(529, 2949),
(530, 2849),
(531, 2797),
(532, 2830),
(533, 2858),
(534, 2923),
(535, 2894),
(536, 2912),
(537, 2913),
(538, 2912),
(539, 2928),
(540, 2914),
(541, 2925),
(542, 2921),
(543, 2896),
(544, 2928),
(545, 2895),
(546, 2915),
(547, 2926),
(548, 2923),
(549, 2917),
(550, 2913),
(551, 2896),
(552, 2911),
(553, 2925),
(554, 2913),
(555, 2909),
(556, 2899),
(557, 2896),
(558, 2959),
(559, 2924),
(560, 2910),
(561, 2918),
(562, 2912),
(563, 2931),
(564, 2931),
(565, 2930),
(566, 2933),
(567, 2911),
(568, 2923),
(569, 2909),
(570, 2943),
(571, 2909),
(572, 2994),
(573, 2928),
(574, 2928),
(575, 2933),
(576, 2934),
(577, 2949),
(578, 2943),
(579, 2955),
(580, 2921),
(581, 2957),
(582, 2945),
(583, 2917),
(584, 2954),
(585, 2940),
(586, 2953),
(587, 2943),
(588, 2960),
(589, 2960),
(590, 2935),
(591, 2956),
(592, 2963),
(593, 2961),
(594, 2976),
(595, 2985),
(596, 2949),
(597, 2965),
(598, 2960),
(599, 2969),
(600, 2965),
(601, 2997),
(602, 2969),
(603, 2970),
(604, 2960),
(605, 2974),
(606, 2983),
(607, 2942),
(608, 2965),
(609, 2962),
(610, 2960),
(611, 2957),
(612, 2961),
(613, 2958),
(614, 2950),
(615, 2941),
(616, 2941),
(617, 2931),
(618, 2989),
(619, 2933),
(620, 2956),
(621, 2942),
(622, 2939),
(623, 2883),
(624, 2954),
(625, 2939),
(626, 2922),
(627, 2919),
(628, 2933),
(629, 2907),
(630, 2932),
(631, 2946),
(632, 2997),
(633, 2951),
(634, 3179),
(635, 2882),
(636, 2982),
(637, 3046),
(638, 4095),
(639, 4095),
(640, 3414),
(641, 2767),
(642, 3109),
(643, 3152),
(644, 3152),
(645, 3133),
(646, 3114),
(647, 3086),
(648, 3088),
(649, 3086),
(650, 3025),
(651, 3046),
(652, 3056),
(653, 3046),
(654, 3034),
(655, 3024),
(656, 3010),
(657, 3014),
(658, 3014),
(659, 2998),
(660, 2997),
(661, 2996),
(662, 2989),
(663, 2992),
(664, 3006),
(665, 2982),
(666, 2984),
(667, 2970),
(668, 2979),
(669, 2970),
(670, 2979),
(671, 2969),
(672, 2972),
(673, 2949);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensorsoil`
--
ALTER TABLE `sensorsoil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sensorsoil`
--
ALTER TABLE `sensorsoil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=674;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
