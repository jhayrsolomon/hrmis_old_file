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
-- Database: `pamana_fsd_cashier`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_payable_type`
--

CREATE TABLE `accounts_payable_type` (
  `id` int(50) NOT NULL,
  `code` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts_payable_type`
--

INSERT INTO `accounts_payable_type` (`id`, `code`, `name`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 'Reimbursement', 'Reimbursement', '2021-12-09 05:46:29', '2021-12-09 05:46:42', NULL),
(2, 'FS', 'First Salary', '2021-12-09 05:46:37', '2021-12-09 05:46:46', NULL),
(3, 'S', 'Salary', '2022-01-20 07:58:23', '2022-01-20 07:58:23', NULL),
(4, 'P', 'Payment', '2022-01-20 07:58:43', '2022-01-20 07:58:43', NULL),
(5, 'L', 'Loan', '2022-01-20 08:01:47', '2022-01-20 08:01:47', NULL),
(6, 'C', 'Contribution', '2022-01-20 08:02:05', '2022-01-20 08:02:05', NULL),
(7, 'R', 'Refund', '2022-01-20 08:02:39', '2022-01-20 08:02:39', NULL),
(8, 'PBB', 'Performance Base Bonus', '2022-01-20 08:04:34', '2022-01-20 08:04:34', NULL),
(9, 'I', 'Incentive', '2022-01-20 08:05:06', '2022-01-20 08:05:06', NULL),
(10, 'T', 'Tax', '2022-01-20 08:05:49', '2022-01-20 08:05:49', NULL),
(11, 'CNA', 'CNA', '2022-01-20 08:06:05', '2022-01-20 08:06:05', NULL),
(12, 'GP', 'Gratuity Pay', '2022-01-20 08:07:25', '2022-01-21 06:10:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE `cheque` (
  `id` int(50) NOT NULL,
  `incoming_document_id` int(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `processed_by` varchar(100) NOT NULL,
  `checking_account_id` int(50) NOT NULL,
  `check_number` varchar(255) NOT NULL,
  `issued_to` varchar(255) NOT NULL,
  `amount` double(11,2) NOT NULL,
  `created_date` date NOT NULL,
  `status_id` int(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `engas`
--

CREATE TABLE `engas` (
  `id` int(50) NOT NULL,
  `incoming_document_id` int(50) NOT NULL,
  `encoded_by` varchar(100) NOT NULL,
  `jev_number` varchar(255) NOT NULL,
  `encoded_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `status_id` int(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fund_cluster`
--

CREATE TABLE `fund_cluster` (
  `id` int(50) NOT NULL,
  `code` varchar(250) NOT NULL,
  `name` text NOT NULL,
  `account` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fund_cluster`
--

INSERT INTO `fund_cluster` (`id`, `code`, `name`, `account`, `description`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 'ATMP', 'ATM Payroll', '0012-1172-80', 'National Museum ATM Payroll', '2021-11-09 05:27:28', '2021-11-09 05:29:05', NULL),
(2, 'RF', 'Revolving Fund', '0012-1155-63', 'National Museum Revolving Fund', '2021-11-09 05:28:56', '2021-11-09 05:28:56', NULL),
(3, 'EF', 'Endorsement Fund', '0012-1168-29', 'National Museum Endorsement Fund', '2021-11-09 05:30:06', '2021-11-09 05:30:06', NULL),
(4, 'SL/EF', 'Special Projects / Endorsement Fund', '0012-1176-98', 'National Museum Special Projects / Endorsement Fund', '2021-11-09 05:31:19', '2021-11-09 05:31:19', NULL),
(5, 'SPCA', 'Special Projects and Cultural Activities', '0012-1145-08', 'National Museum Special Projects and Cultural Activities', '2021-11-09 05:32:12', '2021-11-09 05:32:12', NULL),
(6, 'IF', 'Income Fund', '0012-1184-30', 'National Museum Income Fund', '2021-11-09 05:33:01', '2021-11-09 05:33:01', NULL),
(7, 'GF (MDS)', 'General Fund', '2001-9004-81', 'National Museum General Fund (MDS)', '2021-11-09 05:34:16', '2021-11-09 05:35:10', NULL),
(8, 'TF (MDS)', 'Trust Fund', '2001-9015-09', 'National Museum Trust Fund (MDS)', '2021-11-09 05:34:57', '2021-11-09 05:34:57', NULL),
(9, 'MSS (MDS)', 'Malacañan sa Sugbo (MDS)', '2001-9026-39', 'National Museum Malacañan sa Sugbo (MDS)', '2021-11-09 05:38:20', '2021-11-09 05:38:20', NULL),
(10, 'DF', 'Donation Fund', '0012-1184-49', 'National Museum Donation Fund', '2021-11-09 05:38:54', '2021-11-09 05:38:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `incoming_document`
--

CREATE TABLE `incoming_document` (
  `id` int(50) NOT NULL,
  `fund_cluster_id` int(50) NOT NULL,
  `mode_of_payment_id` int(50) NOT NULL,
  `account_type_id` int(50) NOT NULL,
  `received_by` varchar(100) NOT NULL,
  `from_section_id` varchar(100) NOT NULL,
  `from_division_id` varchar(100) NOT NULL,
  `dv_number` varchar(250) NOT NULL,
  `ors_burs_number` varchar(250) NOT NULL,
  `mfo_pap_number` varchar(250) NOT NULL,
  `payee` varchar(250) NOT NULL,
  `particulars` text NOT NULL,
  `amount` double(11,2) NOT NULL,
  `responsibility_section_id` varchar(100) NOT NULL,
  `responsibility_division_id` varchar(100) NOT NULL,
  `date_received` date NOT NULL,
  `created_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `status_id` int(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incoming_document`
--

INSERT INTO `incoming_document` (`id`, `fund_cluster_id`, `mode_of_payment_id`, `account_type_id`, `received_by`, `from_section_id`, `from_division_id`, `dv_number`, `ors_burs_number`, `mfo_pap_number`, `payee`, `particulars`, `amount`, `responsibility_section_id`, `responsibility_division_id`, `date_received`, `created_date`, `created_by`, `status_id`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 10, 1, 9, '1629971646953156557957', '1626919689813248536497', '1626919012004517493996', '98741684512', '123456', '68746354163548', '1', 'Sample', 12000000.00, '1626919713256244677881', '1626919028848038721176', '2022-02-10', '2022-02-15', 2, 1, '2022-02-02 08:08:36', '2022-02-02 08:08:36', NULL),
(2, 3, 3, 12, '1629971646953156557957', '1626919694558112768493', '1626919015405348149800', '789456', '841035465321', '3010100000', '1', 'sample 2', 500000.00, '1626919408282647305947', '1626919045243433331517', '2022-02-15', '2022-02-03', 2, 1, '2022-02-02 08:28:15', '2022-02-02 08:28:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lddap`
--

CREATE TABLE `lddap` (
  `id` int(50) NOT NULL,
  `incoming_document_id` int(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `processed_by` varchar(100) NOT NULL,
  `lddap_number` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `status_id` int(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lddap`
--

INSERT INTO `lddap` (`id`, `incoming_document_id`, `created_by`, `processed_by`, `lddap_number`, `created_date`, `status_id`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 1, 2, '1629971646953156557957', '145498743165412', '2022-02-10', 1, '2022-02-02 08:08:54', '2022-02-02 08:08:54', NULL),
(2, 2, 2, '1629971646953156557957', '02536-52632', '2022-02-08', 1, '2022-02-02 08:28:33', '2022-02-02 08:28:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mode_of_payment`
--

CREATE TABLE `mode_of_payment` (
  `id` int(50) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mode_of_payment`
--

INSERT INTO `mode_of_payment` (`id`, `code`, `description`, `date_created`, `date_updated`) VALUES
(1, 'ADA', 'ADA', '2021-11-12 07:24:23', '2021-11-12 07:24:23'),
(2, 'CHECK', 'Check', '2021-11-12 07:24:47', '2021-11-12 07:24:47'),
(3, 'LDDAP', 'LDDPA', '2022-01-20 08:38:29', '2022-01-20 08:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `official_reciept`
--

CREATE TABLE `official_reciept` (
  `id` int(50) NOT NULL,
  `incoming_document_id` int(50) NOT NULL,
  `issued_by` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `or_number` varchar(255) NOT NULL,
  `or_date` date NOT NULL,
  `issued_to` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `status_id` int(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payee_employee`
--

CREATE TABLE `payee_employee` (
  `id` int(50) NOT NULL,
  `incoming_document_id` int(50) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `section_id` varchar(100) NOT NULL,
  `division_id` varchar(100) NOT NULL,
  `employee_number` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payee_employee`
--

INSERT INTO `payee_employee` (`id`, `incoming_document_id`, `employee_id`, `section_id`, `division_id`, `employee_number`, `status`) VALUES
(1, 1, '1628127657651945719450', '1626919713256244677881', '1626919028848038721176', '2002-005', '0'),
(2, 2, '1628127144261535884887', '1626919408282647305947', '1626919045243433331517', '1999-005', '0');

-- --------------------------------------------------------

--
-- Table structure for table `payee_external`
--

CREATE TABLE `payee_external` (
  `id` int(50) NOT NULL,
  `incoming_document_id` int(50) NOT NULL,
  `name` text NOT NULL,
  `office` text NOT NULL,
  `address` text NOT NULL,
  `tin_number` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts_payable_type`
--
ALTER TABLE `accounts_payable_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheque`
--
ALTER TABLE `cheque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engas`
--
ALTER TABLE `engas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund_cluster`
--
ALTER TABLE `fund_cluster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incoming_document`
--
ALTER TABLE `incoming_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lddap`
--
ALTER TABLE `lddap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mode_of_payment`
--
ALTER TABLE `mode_of_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official_reciept`
--
ALTER TABLE `official_reciept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payee_employee`
--
ALTER TABLE `payee_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payee_external`
--
ALTER TABLE `payee_external`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts_payable_type`
--
ALTER TABLE `accounts_payable_type`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cheque`
--
ALTER TABLE `cheque`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `engas`
--
ALTER TABLE `engas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund_cluster`
--
ALTER TABLE `fund_cluster`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `incoming_document`
--
ALTER TABLE `incoming_document`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lddap`
--
ALTER TABLE `lddap`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mode_of_payment`
--
ALTER TABLE `mode_of_payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `official_reciept`
--
ALTER TABLE `official_reciept`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payee_employee`
--
ALTER TABLE `payee_employee`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payee_external`
--
ALTER TABLE `payee_external`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
