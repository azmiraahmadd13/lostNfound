--
-- Database: `lostnfound`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admini', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lost_item`
--

CREATE TABLE `lost_item` (
  `item_id` int(10) NOT NULL,
  `item_details` varchar(50) NOT NULL,
  `item_status` text NOT NULL,
  `retrieved_by` varchar(15) NOT NULL,
  `retrieval_date` date NOT NULL,
  `received_date` date NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost_item`
--

INSERT INTO `lost_item` (`item_id`, `item_details`, `item_status`, `retrieved_by`, `retrieval_date`, `received_date`, `file_path`) VALUES
(136, 'Matric card  ', 'Retrieved', '', '0000-00-00', '2019-05-23', 'images/5f26cc984eaa1376b07fc0439d531dbaWhatsApp Image 2019-05-23 at 22.59.40.jpeg'),
(137, 'Matric card  ', 'Pending', '', '0000-00-00', '2019-05-14', 'images/35fe071cd4426fe8a90666101fff1bf0WhatsApp Image 2019-05-23 at 22.59.40.jpeg'),
(139, 'powerbank', '', '', '0000-00-00', '2019-04-10', 'images/90599c8fdd2f6e7a03ad173e2f535751WhatsApp Image 2019-05-29 at 03.01.05.jpeg'),
(140, 'kunci  ', 'Retrieved', ' b031810042', '2019-05-29', '2019-04-16', 'images/0891cd43c7fd406cddf4cf4bf29eea41WhatsApp Image 2019-05-29 at 03.01.34.jpeg'),
(141, 'lanyard', '', '', '0000-00-00', '2019-03-07', 'images/b93e662b3e5e06be3555e0e087a2acb8WhatsApp Image 2019-05-29 at 03.02.11.jpeg'),
(142, 'novel', '', '', '0000-00-00', '2019-02-01', 'images/e5a419ed77a4e034849e1e1b68ba015eWhatsApp Image 2019-05-29 at 03.04.09.jpeg'),
(143, 'Matric card   ', 'Retrieved', ' b031810042', '2019-05-29', '2019-05-24', 'images/0e7c7d6c41c76b9ee6445ae01cc0181dWhatsApp Image 2019-05-29 at 03.02.37.jpeg'),
(144, 'buku', '', '', '0000-00-00', '2019-03-10', 'images/af8d9c4e238c63fb074b44eb6aed80aeWhatsApp Image 2019-05-29 at 03.03.24.jpeg'),
(145, 'external hardisk', '', '', '0000-00-00', '2019-05-03', 'images/a6b53bfc745967804d5aa24a3126d2f4WhatsApp Image 2019-05-29 at 03.04.43.jpeg'),
(146, 'powerbank', '', '', '0000-00-00', '2019-05-29', 'images/c71c14199fd7d86b0be2a0d4ee4c738fWhatsApp Image 2019-05-29 at 03.01.05.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `student_report`
--

CREATE TABLE `student_report` (
  `item_id` int(11) NOT NULL,
  `matric_no` varchar(20) NOT NULL,
  `item_lost` text NOT NULL,
  `lost_path` varchar(255) NOT NULL,
  `report_date` date NOT NULL,
  `reportStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_report`
--

INSERT INTO `student_report` (`item_id`, `matric_no`, `item_lost`, `lost_path`, `report_date`, `reportStatus`) VALUES
(25, 'b031810042', 'keys', 'imagesLost/092cb13c22d51c22b9035a2b4fe76b00WhatsApp Image 2019-05-23 at 22.59.40.jpeg', '2019-05-22', 'WAITING'),
(26, 'b031810042', 'matric card', 'imagesLost/a30b36cd9c2e0343ae527b263a7b0abbWhatsApp Image 2019-05-29 at 03.02.37.jpeg', '2019-05-10', 'Claim'),
(27, 'b031810042', 'buku', 'imagesLost/485a14fd62b66db23227ab287b1eea1bWhatsApp Image 2019-05-29 at 03.03.24.jpeg', '2019-05-13', 'Claim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `matric_no` varchar(10) NOT NULL,
  `Fname` char(30) NOT NULL,
  `cnum` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`matric_no`, `Fname`, `cnum`, `password`) VALUES
('b031810040', 'fatihah', '0198765432', 'qwe'),
('b031810042', 'azmira', '123456789', 'qwe'),
('b031810051', 'aira', '0123242131', 'qwe'),
('b031810052', 'haziq', '0123242132', '123abc'),
('b031810137', 'azmira', '1234567890', 'qaz'),
('b031810577', 'Sarina', '0132679148', 'sar1'),
('b21131321', 'Ali', '013243465', 'a1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lost_item`
--
ALTER TABLE `lost_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `student_report`
--
ALTER TABLE `student_report`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`matric_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lost_item`
--
ALTER TABLE `lost_item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `student_report`
--
ALTER TABLE `student_report`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
