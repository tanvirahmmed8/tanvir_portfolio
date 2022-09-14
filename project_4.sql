-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 09:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_image`) VALUES
(1, '1662469311.png'),
(2, '1662469320.png'),
(3, '1662469326.png'),
(4, '1662469332.png'),
(5, '1662469337.png'),
(6, '1662469342.png');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `features_name` varchar(100) NOT NULL,
  `features_count` varchar(100) NOT NULL,
  `features_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `features_name`, `features_count`, `features_icon`) VALUES
(1, 'Calvin Gamble', '202', 'fa fa-camera'),
(8, 'Jael Sampson', '65', 'fa fa-asterisk'),
(9, 'Kyra Walsh', '90', 'fa fa-beer'),
(10, 'Marvin Knowles', '57', 'fa fa-briefcase');

-- --------------------------------------------------------

--
-- Table structure for table `logo_images`
--

CREATE TABLE `logo_images` (
  `id` int(11) NOT NULL,
  `image_type` varchar(100) NOT NULL,
  `image_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo_images`
--

INSERT INTO `logo_images` (`id`, `image_type`, `image_value`) VALUES
(1, 'logo', 'logo.png'),
(2, 'profile_image', 'profile.png'),
(3, 'about_image', 'about.png'),
(4, 'small_screen_logo', 's_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `read_status` varchar(100) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `read_status`) VALUES
(12, 'Lysandra Osborn', 'cokyf@mailinator.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem I', 'read'),
(13, 'Colby Roberts', 'jajoduna@mailinator.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem I', 'read'),
(14, 'Lester Owens', 'cyvyrat@mailinator.com', 'Ullam tempor at dese', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `portfolio_category` varchar(100) NOT NULL,
  `portfolio_name` varchar(100) NOT NULL,
  `portfolio_image` varchar(50) DEFAULT NULL,
  `portfolio_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_category`, `portfolio_name`, `portfolio_image`, `portfolio_details`) VALUES
(1, 'Design', 'Deirdre Day', '1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.'),
(2, 'Video', 'Wylie Pennington', '2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.'),
(3, 'Image', 'Shaeleigh Mcbride', '3.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.'),
(4, 'Audio', 'Sean Mckenzie', '4.jpg', 'Voluptatum et dolLorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sapiente rerum facilis id consectetur tempore magnam perspiciatis excepturi atque autem, possimus aut similique quibusdam placeat quam eius alias voluptas consequuntur.or ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_des` text NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_des`, `service_icon`, `status`) VALUES
(1, 'Hollee Lowery', 'Quia nostrum fugiat ', 'fa fa-balance-scale', 'active'),
(2, 'Krish', 'Dolorem fugiat elit', 'fa fa-book', 'active'),
(3, 'Brittany Mcpherson', 'Aliquam aut rerum pl', 'fa fa-apple', 'active'),
(4, 'Lydia Waters', 'Deserunt optio modi', 'fa fa-bicycle', 'active'),
(6, 'Pearl Glass', 'Itaque cillum aliqua', 'fa fa-fighter-jet', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'owner_name', ' Tanvir Ahmmed'),
(2, 'owner_about', 'I&#039;m Tanvir Ahmmed, professional web developer with long time experience in this field​.'),
(3, 'owner_email', 'zuzesu@mailinator.com'),
(4, 'owner_phone', '+1 (443) 169-4372'),
(5, 'owner_address', '123 Main Street, New York, United State.'),
(6, 'about_me', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit. Numquam!'),
(7, 'contact_info_description', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.'),
(8, 'office_in', 'NEW YORK');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `sujbect` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `percentage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `sujbect`, `year`, `percentage`) VALUES
(1, 'Exercitationem expli', '2004', '73'),
(2, 'Sint in enim ipsa q', '1988', '92'),
(3, 'Ut est sed vel dolo', '1974', '98'),
(4, 'Qui pariatur Nihil ', '2002', '45'),
(7, 'Omnis voluptatem Ni', '1981', '66');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedias`
--

CREATE TABLE `socialmedias` (
  `id` int(11) NOT NULL,
  `socialmedialink` varchar(100) NOT NULL,
  `socialmedia_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socialmedias`
--

INSERT INTO `socialmedias` (`id`, `socialmedialink`, `socialmedia_icon`) VALUES
(4, 'https://www.facebook.com', 'fa fa-facebook'),
(6, 'fsadfsda', 'fa fa-youtube-square'),
(7, 'fgsdgerawg', 'fa fa-apple');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `description`, `image`) VALUES
(2, 'Nathaniel Poole', 'head of idea', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result ', '1663176191.png'),
(6, 'Hasad Tyler', 'Vitae quia magnam la', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result', '1662469534.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `account_status` varchar(20) NOT NULL DEFAULT 'active',
  `profile_photo` varchar(200) NOT NULL DEFAULT 'default_profile_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `account_status`, `profile_photo`) VALUES
(2, 'Salvador Lane', 'tetexurux@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+1 (643) 268-5887', 'active', 'default_profile_photo.jpg'),
(3, 'tanvir anik', 'poful@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 'active', '3.JPG'),
(10, 'Tanvir Ahmmed', 'tanvir@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '+8801731171023', 'active', '10.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_images`
--
ALTER TABLE `logo_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedias`
--
ALTER TABLE `socialmedias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logo_images`
--
ALTER TABLE `logo_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `socialmedias`
--
ALTER TABLE `socialmedias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
