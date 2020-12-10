--
-- Database: `carshare`
--

CREATE TABLE `carshare_users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--
--
ALTER TABLE `carshare_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
ALTER TABLE `carshare_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
