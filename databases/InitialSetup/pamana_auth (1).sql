-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 09:51 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pamana_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('ACCOUNT_ADMIN', '13', 1643942743),
('ACCOUNTING_ADMIN', '2', 1642755017),
('backend_admin', '270', 1635045584),
('CASHIER_ADMIN', '2', 1642745745),
('CASHIER_ADMIN', '7', 1642747527),
('cashier_user', '270', 1635045583),
('common', '1', 1634107399),
('common', '10', 1642747612),
('common', '11', 1642747633),
('common', '12', 1642747642),
('common', '13', 1643942747),
('common', '2', 1637820344),
('common', '270', 1635045589),
('common', '3', 1637820352),
('common', '4', 1638170421),
('common', '5', 1638170458),
('common', '6', 1639125306),
('common', '7', 1642747535),
('common', '8', 1642747584),
('common', '9', 1642747600),
('gen_dashboard', '1', 1637820368),
('gen_dashboard', '10', 1642747613),
('gen_dashboard', '11', 1642747633),
('gen_dashboard', '12', 1642747642),
('gen_dashboard', '13', 1643942750),
('gen_dashboard', '2', 1637820374),
('gen_dashboard', '3', 1637820362),
('gen_dashboard', '4', 1638170418),
('gen_dashboard', '5', 1638170459),
('gen_dashboard', '6', 1639125303),
('gen_dashboard', '7', 1642747532),
('gen_dashboard', '8', 1642747584),
('gen_dashboard', '9', 1642747600),
('hr_admin', '270', 1635045581),
('INCOMING_USER', '10', 1642747609),
('INCOMING_USER', '11', 1642747633),
('INCOMING_USER', '12', 1642747642),
('INCOMING_USER', '8', 1642747551),
('INCOMING_USER', '9', 1642747597),
('setup_employee', '13', 1644394930),
('setup_employee', '2', 1642748191),
('SUPER_ADMIN', '1', 1634107313);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/accounts-payable-type/*', 2, NULL, NULL, NULL, 1638865411, 1638865411),
('/accounts-payable-type/create', 2, NULL, NULL, NULL, 1638865437, 1638865437),
('/accounts-payable-type/delete', 2, NULL, NULL, NULL, 1638865444, 1638865444),
('/accounts-payable-type/index', 2, NULL, NULL, NULL, 1638865453, 1638865453),
('/accounts-payable-type/update', 2, NULL, NULL, NULL, 1638865463, 1638865463),
('/accounts-payable-type/view', 2, NULL, NULL, NULL, 1638865470, 1638865470),
('/admin/*', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1634107131, 1634107131),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1634107139, 1634107139),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1634107134, 1634107134),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1634107137, 1634107137),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1634107136, 1634107136),
('/admin/default/*', 2, NULL, NULL, NULL, 1634107143, 1634107143),
('/admin/default/index', 2, NULL, NULL, NULL, 1634107141, 1634107141),
('/admin/menu/*', 2, NULL, NULL, NULL, 1634107147, 1634107147),
('/admin/menu/create', 2, NULL, NULL, NULL, 1634107147, 1634107147),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1634107147, 1634107147),
('/admin/menu/index', 2, NULL, NULL, NULL, 1634107142, 1634107142),
('/admin/menu/update', 2, NULL, NULL, NULL, 1634107147, 1634107147),
('/admin/menu/view', 2, NULL, NULL, NULL, 1634107145, 1634107145),
('/admin/permission/*', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/permission/create', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/permission/get-users', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/permission/index', 2, NULL, NULL, NULL, 1634107147, 1634107147),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/permission/update', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/permission/view', 2, NULL, NULL, NULL, 1634107147, 1634107147),
('/admin/role/*', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/role/assign', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/role/create', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/role/delete', 2, NULL, NULL, NULL, 1634107151, 1634107151),
('/admin/role/get-users', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/role/index', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/role/remove', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/role/update', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/role/view', 2, NULL, NULL, NULL, 1634107150, 1634107150),
('/admin/route/*', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/route/assign', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/route/create', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/route/index', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/route/remove', 2, NULL, NULL, NULL, 1634107153, 1634107153),
('/admin/rule/*', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/rule/create', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/rule/index', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/rule/update', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/rule/view', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/user/*', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/admin/user/activate', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/admin/user/delete', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/user/index', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/user/login', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/user/logout', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/admin/user/signup', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/admin/user/view', 2, NULL, NULL, NULL, 1634107156, 1634107156),
('/appointment-status/*', 2, NULL, NULL, NULL, 1644393914, 1644393914),
('/appointment-status/create', 2, NULL, NULL, NULL, 1644393922, 1644393922),
('/appointment-status/delete', 2, NULL, NULL, NULL, 1644393928, 1644393928),
('/appointment-status/index', 2, NULL, NULL, NULL, 1644393935, 1644393935),
('/appointment-status/update', 2, NULL, NULL, NULL, 1644393947, 1644393947),
('/appointment-status/view', 2, NULL, NULL, NULL, 1644393953, 1644393953),
('/cashier/*', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/cashier/default/*', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/cashier/default/index', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/cashier/incoming-document/*', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/cashier/incoming-document/create', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/cashier/incoming-document/create-check', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/create-engas', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/create-lddap', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/create-receipt', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/delete', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/cashier/incoming-document/index', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/cashier/incoming-document/loadidnumber', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/loadsections', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/update', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/cashier/incoming-document/update-check', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/update-engas', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/update-lddap', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/update-receipt', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/cashier/incoming-document/view', 2, NULL, NULL, NULL, 1639459406, 1639459406),
('/dashboard/*', 2, NULL, NULL, NULL, 1637820085, 1637820085),
('/dashboard/default/*', 2, NULL, NULL, NULL, 1637820087, 1637820087),
('/dashboard/default/index', 2, NULL, NULL, NULL, 1637820089, 1637820089),
('/debug/*', 2, NULL, NULL, NULL, 1634107163, 1634107163),
('/debug/default/*', 2, NULL, NULL, NULL, 1634107162, 1634107162),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1634107162, 1634107162),
('/debug/default/index', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/debug/default/view', 2, NULL, NULL, NULL, 1634107159, 1634107159),
('/debug/user/*', 2, NULL, NULL, NULL, 1634107162, 1634107162),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1634107162, 1634107162),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1634107162, 1634107162),
('/divisions/*', 2, NULL, NULL, NULL, 1644394010, 1644394010),
('/divisions/create', 2, NULL, NULL, NULL, 1644394025, 1644394025),
('/divisions/delete', 2, NULL, NULL, NULL, 1644394030, 1644394030),
('/divisions/index', 2, NULL, NULL, NULL, 1644394035, 1644394035),
('/divisions/update', 2, NULL, NULL, NULL, 1644394040, 1644394040),
('/divisions/view', 2, NULL, NULL, NULL, 1644394053, 1644394053),
('/employee/*', 2, NULL, NULL, NULL, 1644999197, 1644999197),
('/fund-cluster/*', 2, NULL, NULL, NULL, 1639460749, 1639460749),
('/fund-cluster/create', 2, NULL, NULL, NULL, 1639460757, 1639460757),
('/fund-cluster/delete', 2, NULL, NULL, NULL, 1639460765, 1639460765),
('/fund-cluster/index', 2, NULL, NULL, NULL, 1639460773, 1639460773),
('/fund-cluster/update', 2, NULL, NULL, NULL, 1639460779, 1639460779),
('/fund-cluster/view', 2, NULL, NULL, NULL, 1639460785, 1639460785),
('/gii/*', 2, NULL, NULL, NULL, 1634107163, 1634107163),
('/gii/default/*', 2, NULL, NULL, NULL, 1634107163, 1634107163),
('/gii/default/action', 2, NULL, NULL, NULL, 1634107163, 1634107163),
('/gii/default/diff', 2, NULL, NULL, NULL, 1634107163, 1634107163),
('/gii/default/index', 2, NULL, NULL, NULL, 1634107163, 1634107163),
('/gii/default/preview', 2, NULL, NULL, NULL, 1634107163, 1634107163),
('/gii/default/view', 2, NULL, NULL, NULL, 1634107163, 1634107163),
('/gridview/*', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/gridview/export/*', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/gridview/export/download', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/gridview/grid-edited-row/*', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/gridview/grid-edited-row/back', 2, NULL, NULL, NULL, 1643005723, 1643005723),
('/item-numbers/*', 2, NULL, NULL, NULL, 1644394068, 1644394068),
('/item-numbers/create', 2, NULL, NULL, NULL, 1644394076, 1644394076),
('/item-numbers/delete', 2, NULL, NULL, NULL, 1644394083, 1644394083),
('/item-numbers/index', 2, NULL, NULL, NULL, 1644394089, 1644394089),
('/item-numbers/update', 2, NULL, NULL, NULL, 1644394095, 1644394095),
('/item-numbers/view', 2, NULL, NULL, NULL, 1644394099, 1644394099),
('/leave-types/*', 2, NULL, NULL, NULL, 1644394118, 1644394118),
('/leave-types/create', 2, NULL, NULL, NULL, 1644394133, 1644394133),
('/leave-types/delete', 2, NULL, NULL, NULL, 1644394140, 1644394140),
('/leave-types/index', 2, NULL, NULL, NULL, 1644394145, 1644394145),
('/leave-types/update', 2, NULL, NULL, NULL, 1644394150, 1644394150),
('/leave-types/view', 2, NULL, NULL, NULL, 1644394155, 1644394155),
('/manage/*', 2, NULL, NULL, NULL, 1644997973, 1644997973),
('/manage/default/*', 2, NULL, NULL, NULL, 1643952504, 1643952504),
('/manage/default/index', 2, NULL, NULL, NULL, 1643952504, 1643952504),
('/manage/security/*', 2, NULL, NULL, NULL, 1644991849, 1644991849),
('/manage/security/create', 2, NULL, NULL, NULL, 1644991848, 1644991848),
('/manage/security/delete', 2, NULL, NULL, NULL, 1644991848, 1644991848),
('/manage/security/index', 2, NULL, NULL, NULL, 1644991848, 1644991848),
('/manage/security/update', 2, NULL, NULL, NULL, 1644991848, 1644991848),
('/manage/security/view', 2, NULL, NULL, NULL, 1644991848, 1644991848),
('/manage/staff/*', 2, NULL, NULL, NULL, 1644214992, 1644214992),
('/manage/staff/index', 2, NULL, NULL, NULL, 1644214992, 1644214992),
('/mode-of-payment/*', 2, NULL, NULL, NULL, 1638414336, 1638414336),
('/mode-of-payment/create', 2, NULL, NULL, NULL, 1638414489, 1638414489),
('/mode-of-payment/delete', 2, NULL, NULL, NULL, 1638414497, 1638414497),
('/mode-of-payment/index', 2, NULL, NULL, NULL, 1638414506, 1638414506),
('/mode-of-payment/update', 2, NULL, NULL, NULL, 1638414516, 1638414516),
('/mode-of-payment/view', 2, NULL, NULL, NULL, 1638414522, 1638414522),
('/position-types/*', 2, NULL, NULL, NULL, 1644394223, 1644394223),
('/position-types/create', 2, NULL, NULL, NULL, 1644394246, 1644394246),
('/position-types/delete', 2, NULL, NULL, NULL, 1644394236, 1644394236),
('/position-types/index', 2, NULL, NULL, NULL, 1644394241, 1644394241),
('/position-types/update', 2, NULL, NULL, NULL, 1644394231, 1644394231),
('/position-types/view', 2, NULL, NULL, NULL, 1644394227, 1644394227),
('/positions/*', 2, NULL, NULL, NULL, 1644394178, 1644394178),
('/positions/create', 2, NULL, NULL, NULL, 1644394182, 1644394182),
('/positions/delete', 2, NULL, NULL, NULL, 1644394193, 1644394193),
('/positions/index', 2, NULL, NULL, NULL, 1644394198, 1644394198),
('/positions/update', 2, NULL, NULL, NULL, 1644394189, 1644394189),
('/positions/view', 2, NULL, NULL, NULL, 1644394203, 1644394203),
('/salary-grades-steps/*', 2, NULL, NULL, NULL, 1644394331, 1644394331),
('/salary-grades-steps/create', 2, NULL, NULL, NULL, 1644394336, 1644394336),
('/salary-grades-steps/delete', 2, NULL, NULL, NULL, 1644394341, 1644394341),
('/salary-grades-steps/index', 2, NULL, NULL, NULL, 1644394346, 1644394346),
('/salary-grades-steps/update', 2, NULL, NULL, NULL, 1644394350, 1644394350),
('/salary-grades-steps/view', 2, NULL, NULL, NULL, 1644394354, 1644394354),
('/salary-grades/*', 2, NULL, NULL, NULL, 1644394274, 1644394274),
('/salary-grades/create', 2, NULL, NULL, NULL, 1644394278, 1644394278),
('/salary-grades/delete', 2, NULL, NULL, NULL, 1644394304, 1644394304),
('/salary-grades/index', 2, NULL, NULL, NULL, 1644394289, 1644394289),
('/salary-grades/update', 2, NULL, NULL, NULL, 1644394284, 1644394284),
('/salary-grades/view', 2, NULL, NULL, NULL, 1644394312, 1644394312),
('/salary-groups/*', 2, NULL, NULL, NULL, 1644394373, 1644394373),
('/salary-groups/create', 2, NULL, NULL, NULL, 1644394378, 1644394378),
('/salary-groups/delete', 2, NULL, NULL, NULL, 1644394393, 1644394393),
('/salary-groups/index', 2, NULL, NULL, NULL, 1644394383, 1644394383),
('/salary-groups/update', 2, NULL, NULL, NULL, 1644394389, 1644394389),
('/salary-groups/view', 2, NULL, NULL, NULL, 1644394403, 1644394403),
('/sections/*', 2, NULL, NULL, NULL, 1644394416, 1644394416),
('/sections/create', 2, NULL, NULL, NULL, 1644394425, 1644394425),
('/sections/delete', 2, NULL, NULL, NULL, 1644394449, 1644394449),
('/sections/index', 2, NULL, NULL, NULL, 1644394438, 1644394438),
('/sections/update', 2, NULL, NULL, NULL, 1644394431, 1644394431),
('/sections/view', 2, NULL, NULL, NULL, 1644394420, 1644394420),
('/security/*', 2, NULL, NULL, NULL, 1644998048, 1644998048),
('/security/create', 2, NULL, NULL, NULL, 1644394469, 1644394469),
('/security/delete', 2, NULL, NULL, NULL, 1644394478, 1644394478),
('/security/index', 2, NULL, NULL, NULL, 1644394486, 1644394486),
('/security/update', 2, NULL, NULL, NULL, 1644394474, 1644394474),
('/security/view', 2, NULL, NULL, NULL, 1644394497, 1644394497),
('/status-of-appointments/*', 2, NULL, NULL, NULL, 1644394518, 1644394518),
('/status-of-appointments/create', 2, NULL, NULL, NULL, 1644394551, 1644394551),
('/status-of-appointments/delete', 2, NULL, NULL, NULL, 1644394530, 1644394530),
('/status-of-appointments/index', 2, NULL, NULL, NULL, 1644394523, 1644394523),
('/status-of-appointments/update', 2, NULL, NULL, NULL, 1644394526, 1644394526),
('/status-of-appointments/view', 2, NULL, NULL, NULL, 1644394542, 1644394542),
('ACCOUNT_ADMIN', 1, 'Account Administrator (CRUD User)', NULL, NULL, 1636426701, 1642745828),
('ACCOUNTING_ADMIN', 1, 'Accounting Administrator', NULL, NULL, 1642754978, 1642754995),
('accounting_user', 2, 'Create, Update and View of Accounting Module', NULL, NULL, 1642754557, 1642754788),
('backend_admin', 2, 'Backend Administrator', NULL, NULL, 1634107206, 1643944213),
('CASHIER_ADMIN', 1, 'Cashier Administrator', NULL, NULL, 1642744761, 1642745652),
('cashier_user', 2, 'Create, Update and View of Cashier Module', NULL, NULL, 1634533713, 1642754663),
('cashier_view', 2, 'View of List of Cashier Module', NULL, NULL, 1636365254, 1642754678),
('common', 2, 'Public Access (Site, Index)', NULL, NULL, 1634107376, 1642754758),
('EMPLOYEE_USER', 1, 'Employee View', NULL, NULL, 1639124335, 1642745148),
('gen_dashboard', 2, 'General Dashboard', NULL, NULL, 1637820142, 1637820142),
('hr_admin', 2, 'HR Administrator', NULL, NULL, 1634533750, 1643944201),
('INCOMING_USER', 1, 'Incoming Module User', NULL, NULL, 1636427517, 1636427747),
('INCOMING_VIEW', 1, 'Incoming Module View', NULL, NULL, 1636428461, 1636428461),
('setup_employee', 2, 'Employee Module Setup', NULL, NULL, 1639124137, 1644394750),
('setup_financial', 2, 'Financial Module Setup', NULL, NULL, 1638425278, 1644394789),
('SUPER_ADMIN', 1, 'Backend Administrator', NULL, NULL, 1634107273, 1636426822),
('VOUCHER_USER', 1, 'Disbursement Voucher User', NULL, NULL, 1638169933, 1638169933),
('VOUCHER_VIEW', 1, 'Disbursement Voucher View', NULL, NULL, 1638169983, 1638169983);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('ACCOUNT_ADMIN', '/employee/*'),
('ACCOUNT_ADMIN', 'hr_admin'),
('ACCOUNTING_ADMIN', 'accounting_user'),
('ACCOUNTING_ADMIN', 'hr_admin'),
('backend_admin', '/admin/*'),
('backend_admin', '/debug/*'),
('backend_admin', '/gii/*'),
('backend_admin', '/gridview/*'),
('CASHIER_ADMIN', 'cashier_user'),
('CASHIER_ADMIN', 'setup_financial'),
('cashier_user', '/cashier/*'),
('cashier_view', '/cashier/incoming-document/index'),
('cashier_view', '/cashier/incoming-document/view'),
('EMPLOYEE_USER', 'setup_employee'),
('gen_dashboard', '/dashboard/default/*'),
('hr_admin', '/admin/assignment/*'),
('hr_admin', '/admin/default/*'),
('hr_admin', '/admin/user/*'),
('INCOMING_USER', 'cashier_user'),
('INCOMING_VIEW', 'cashier_view'),
('setup_employee', '/appointment-status/*'),
('setup_employee', '/divisions/*'),
('setup_employee', '/item-numbers/*'),
('setup_employee', '/leave-types/*'),
('setup_employee', '/position-types/*'),
('setup_employee', '/positions/*'),
('setup_employee', '/salary-grades-steps/*'),
('setup_employee', '/salary-grades/*'),
('setup_employee', '/salary-groups/*'),
('setup_employee', '/sections/*'),
('setup_employee', '/status-of-appointments/*'),
('setup_financial', '/accounts-payable-type/create'),
('setup_financial', '/accounts-payable-type/index'),
('setup_financial', '/accounts-payable-type/update'),
('setup_financial', '/accounts-payable-type/view'),
('setup_financial', '/fund-cluster/create'),
('setup_financial', '/fund-cluster/index'),
('setup_financial', '/fund-cluster/update'),
('setup_financial', '/fund-cluster/view'),
('setup_financial', '/mode-of-payment/create'),
('setup_financial', '/mode-of-payment/index'),
('setup_financial', '/mode-of-payment/update'),
('setup_financial', '/mode-of-payment/view'),
('SUPER_ADMIN', 'backend_admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1634105057),
('m140506_102106_rbac_init', 1634105411),
('m140602_111327_create_menu_table', 1634105061),
('m160312_050000_create_user', 1634105062),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1634105412),
('m180523_151638_rbac_updates_indexes_without_prefix', 1634105413),
('m200409_110543_rbac_update_mssql_trigger', 1634105413);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rhaiyne18', 'P9bwizc_eQSlIH0Tgv6i9UvEorBkkqKf', '$2y$13$HLV530u/MpHzWeklj3xnDehyCkzuLI6Z.tmaxemzedCm.4at4pAf.', NULL, 'jras.rhaiyne18@gmail.com', 10, 1636358740, 1636358740),
(2, 'cashier_user', 'ogYfosStCEmocWOom722Df4ugSmFa8vt', '$2y$13$LmfWe1//Y3zFevKtIkT1CeaeuKiOz7S9XtwP02294tl2Ci5ajpnb6', NULL, 'nm.jrasolomon@gmail.com', 10, 1636365210, 1636365210),
(3, 'cashier_view', 'xBYBMTBQP_BpsEEAUrTl1wsUVTJ4hM0E', '$2y$13$.xEPqrIGB3EwwzvzBQebluPKKORcbcc3KDacoLl3.YlAaRp1LZCEG', NULL, 'asean.museum.congress@gmail.com', 10, 1636435297, 1636435297),
(4, 'accounting_user', 'lPS_woSBYOG5vNhUnnJ8tkYuhUymKuxt', '$2y$13$NDfgqrkJ2AEsZdrm9P94WumzW4/7KEl2al2A5g.k5BR63TsOMZudq', NULL, 'accounting_user@gmail.com', 10, 1638170219, 1638170219),
(5, 'accounting_view', 'FUgLYrc8289c-hu9pAcDdeuIjxemi1Pf', '$2y$13$pCg8oyoJ1jCiie0./iydTOHhlpO0t7BOUG4ICZrCWxUMAer/VuShW', NULL, 'accounting_view@gmail.com', 10, 1638170389, 1638170389),
(6, 'employee', 'wTfpgyvDsHjuIGN9wgqpMVaDJu6DQTI_', '$2y$13$./AGCoLq2wc5jDwescSoG.RtC3aakwgjO3KwCQfkn2hI5Nt5KXGXC', NULL, 'employee@gmail.com', 10, 1639124263, 1639124263),
(7, 'marichu.sison', 'Fv8BjJvOM3JE_FCUVy_xAyKS0DZvroDa', '$2y$13$HB0Hyao3U5Z/b39lq94l4eJUHt7mNUE9XkE03GnZjx4a8gK2089BO', NULL, 'machusison@gmail.com', 10, 1642743156, 1642743156),
(8, 'abigail.marquez', 'WGreb4LM7qyR80iQxZ8b778Y00kGhADc', '$2y$13$Kj6usjiHeg0n1Uk33DRlpuw8NZz8fvqi830PNsD.eFZ4s289JduOG', NULL, 'abiemarquez003@gmail.com', 10, 1642743237, 1642743237),
(9, 'grace.morales', 'YyGiGLBpGf9yt-z4_GXeGcYfkiD2Va2A', '$2y$13$01SfGdcf6DP6Dwil70um4OP5WnNCR.qrYG4MjjUiUqGgU63HdZtx2', NULL, 'bypsy24@gmail.com', 10, 1642743289, 1642743289),
(10, 'justine.satuito', 'nym-lFlHsrf57rd3rksdXNh2iJlO8Ht9', '$2y$13$O1qnGBhDTXcrLh93ggi4LOwioAmY0PvqhldFZ3DW.jRSu1ydu.A.y', NULL, 'justineraysatuito03@gmail.com', 10, 1642743352, 1642743352),
(11, 'ronald.natividad', 'e5E9ur3I0TL0EAFojpVXWB2FwiImlb8_', '$2y$13$468ChHbyj4m/gh1zcf53KOVmN97NKMWhOK0XMq9bRiSIvlYOho0AW', NULL, 'ronaldnatz@gmail.com', 10, 1642743395, 1642743395),
(12, 'rowena.reyes', 'M0uUNAW3kmGsOrApPlu-8O4yzImqdmDP', '$2y$13$dYK6CFWX.FKl9CvwnZ0/cO7qFRjvhOZoar7WuMCnLfHZAveIlyk6e', NULL, 'no@email.com', 10, 1642743449, 1642743449),
(13, 'account_admin', '8QvqBIbIEBceBMHJ7gAQqXW97_7U1Wta', '$2y$13$15./Gg0MI5puYMOTyXOmFO.n7dDza4yanbW9Uzo6rrbw8ZWlRC7sq', NULL, 'account.admin@email.com', 10, 1643942726, 1643942726);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
