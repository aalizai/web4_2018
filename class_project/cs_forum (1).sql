-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2018 at 04:13 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(12) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_body` text NOT NULL,
  `u_id` int(12) NOT NULL,
  `p_id` int(12) NOT NULL,
  `rc_id` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `c_title`, `c_body`, `u_id`, `p_id`, `rc_id`) VALUES
(1, 'John M. Wargo', 'He spent many years as a consultant and has created award-winning enterprise\r\nand commercial software products.', 1, 2, 0),
(2, 'Motion (RIM)', 'His involvement with mobile development began with a stint at Research In\r\nMotion (RIM) as a developer supporting a large U.S.-based carrier and its customers.\r\nAfter leaving RIM, he wrote one of the first books dedicated to BlackBerry\r\ndevelopment called BlackBerry® Development Fundamentals (Addison-Wesley,\r\n2010; www.bbdevfundamentals.com).', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_category_id` int(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `user_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `title`, `body`, `post_category_id`, `date`, `user_id`) VALUES
(1, 'Last updated post Credits', 'this post is updated in the class\r\nIt was, for years, developed and maintained by EllisLab, the ExpressionEngine Development Team and a group of community members called the Reactor Team.\r\n\r\nIn 2014, CodeIgniter was acquired by the British Columbia Institute of Technology and was then officially announced as a community-maintained project.\r\n\r\nBleeding edge development is spearheaded by the handpicked contributors of the Reactor Team.\r\n\r\nA hat tip goes to Ruby on Rails for inspiring us to create a PHP framework, and for bringing frameworks into the general consciousness of the web community.\r\n\r\n', 0, '0000-00-00 00:00:00.000000', 0),
(6, 'Auto-loading Resources', 'CodeIgniter comes with an “Auto-load” feature that permits libraries, helpers, and models to be initialized automatically every time the system runs. If you need certain resources globally throughout your application you should consider auto-loading them for convenience.\r\n\r\nThe following items can be loaded automatically:\r\n\r\nClasses found in the libraries/ directory\r\nHelper files found in the helpers/ directory\r\nCustom config files found in the config/ directory\r\nLanguage files found in the system/language/ directory\r\nModels found in the models/ folder\r\nTo autoload resources, open the application/config/autoload.php file and add the item you want loaded to the autoload array. You’ll find instructions in that file corresponding to each type of item.', 0, '0000-00-00 00:00:00.000000', 0),
(7, 'Installation Instructions', 'CodeIgniter is installed in four steps:\r\n\r\nUnzip the package.\r\nUpload the CodeIgniter folders and files to your server. Normally the index.php file will be at your root.\r\nOpen the application/config/config.php file with a text editor and set your base URL. If you intend to use encryption or sessions, set your encryption key.\r\nIf you intend to use a database, open the application/config/database.php file with a text editor and set your database settings.\r\nIf you wish to increase security by hiding the location of your CodeIgniter files you can rename the system and application folders to something more private. If you do rename them, you must open your main index.php file and set the $system_path and $application_folder variables at the top of the file with the new name you’ve chosen.\r\n\r\nFor the best security, both the system and any application folders should be placed above web root so that they are not directly accessible via a browser. By default, .htaccess files are included in each folder to help prevent direct access, but it is best to remove them from public access entirely in case the web server configuration changes or doesn’t abide by the .htaccess.\r\n\r\nIf you would like to keep your views public it is also possible to move the views folder out of your application folder.\r\n\r\nAfter moving them, open your main index.php file and set the $system_path, $application_folder and $view_folder variables, preferably with a full path, e.g. ‘/www/MyUser/system’.\r\n\r\nOne additional measure to take in production environments is to disable PHP error reporting and any other development-only functionality. In CodeIgniter, this can be done by setting the ENVIRONMENT constant, which is more fully described on the security page.', 0, '0000-00-00 00:00:00.000000', 0),
(8, 'Benchmarking Class', 'CodeIgniter has a Benchmarking class that is always active, enabling the time difference between any two marked points to be calculated.', 0, '0000-00-00 00:00:00.000000', 0),
(9, 'News section', 'In the last section, we went over some basic concepts of the framework by writing a class that includes static pages. We cleaned up the URI by adding custom routing rules. Now it’s time to introduce dynamic content and start using a database.', 0, '0000-00-00 00:00:00.000000', 0),
(10, 'Setting up your model', 'Instead of writing database operations right in the controller, queries should be placed in a model, so they can easily be reused later. Models are the place where you retrieve, insert, and update information in your database or other data stores. They represent your data.\r\n\r\n', 0, '0000-00-00 00:00:00.000000', 0),
(11, 'Controllers', 'A Controller is simply a class file that is named in a way that can be associated with a URI.\r\n\r\nConsider this URI:\r\n\r\nexample.com/index.php/blog/\r\nIn the above example, CodeIgniter would attempt to find a controller named Blog.php and load it.\r\n\r\nWhen a controller’s name matches the first segment of a URI, it will be loaded.', 0, '0000-00-00 00:00:00.000000', 0),
(12, 'Reserved Names', 'In order to help out, CodeIgniter uses a series of function, method, class and variable names in its operation. Because of this, some names cannot be used by a developer. Following is a list of reserved names that cannot be used.\r\n\r\nController names\r\nSince your controller classes will extend the main application controller you must be careful not to name your methods identically to the ones used by that class, otherwise your local methods will override them. The following is a list of reserved names. Do not name your controller any of these:\r\nCI_Controller\r\nDefault\r\nindex', 0, '0000-00-00 00:00:00.000000', 0),
(13, '', '', 0, '0000-00-00 00:00:00.000000', 0),
(14, 'New post', 'Practice one', 0, '0000-00-00 00:00:00.000000', 0),
(15, 'Codeigniter', 'some thing about codeigniter ', 4, '2018-09-24 04:44:31.625099', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `post_category_id` int(50) NOT NULL,
  `post_category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`post_category_id`, `post_category_name`) VALUES
(3, 'Software '),
(4, 'Database'),
(5, 'Network'),
(6, 'Artificial Intelligence  ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `db` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `db`, `email`, `telephone`, `Image`, `user_name`, `password`, `user_category_id`) VALUES
(1, 'Hussain', 'Mohammadi', '', 'hum.20254@yahoo.com', 700464225, 'Hussain', 'Hussain', '12344', 2),
(2, 'Ashuqullah', 'Alizai', '2018-09-11', 'alizai.csf@hotmail.com', 795642400, '', 'MyName', '4566666', 2),
(3, 'Hussain', 'Mohammadi', '', 'hum.20254@yahoo.com', 700464225, '1537816551.png', 'Hussain', '1233', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `user_category_id` int(50) NOT NULL,
  `user_category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`user_category_id`, `user_category_name`) VALUES
(1, 'Admin'),
(2, 'normal'),
(3, 'Editor ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`post_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`user_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `post_category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `user_category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
