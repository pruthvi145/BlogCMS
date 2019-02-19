-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 08:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(54, 'html'),
(55, 'javascrpit'),
(56, 'java'),
(57, 'c'),
(58, 'cpp'),
(59, 'c#'),
(60, 'node'),
(70, 'android'),
(71, 'news'),
(72, 'games');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(3, 396, 'dvssdvdsvds', 'vsvsdvsdvs', 'vsdvsdvdsvsd', 'approved', '0000-00-00'),
(6, 396, 'me', 'fdbdfbdfb', 'dfbdfbdbdfbdfb', 'approved', '0000-00-00'),
(7, 421, 'bvdfbdfbdf', 'bfdbfbdfbdfbdfbdf', 'bfbdfbdfbdfbdfbdbf', 'approved', '0000-00-00'),
(8, 396, 'acvdsv', 'dsvsdvsvsd', 'vsdvsdvsdvdsv', 'approved', '0000-00-00'),
(9, 396, 'dcvdsavdsv', 'dsvdsvdsvdsv', 'dsvdsvdvsdv', 'approved', '0000-00-00'),
(10, 425, 'dvsdvdsv', 'svsvdsvsdv', 'sdvsdvdsvsdv', 'approved', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_cat_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author_id` int(5) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author_id`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(426, 70, 'Worldâ€™s First Nintendo Switch Emulator For Android â€“ Download Now', 26, '2019-02-19 19:55:12', 'Worlds-First-Nintendo-Switch-Emulator-For-Android-Download-Now.png', '<blockquote><h3>The tech giant Googleâ€™s most used mobile operating system, of course, I am talking about Android has shown that it can become a complete gaming platform. As some examples, we have in the bets of giants like Nvidia, who have seen in Android the possibilities to turn the system into a videogame console.</h3></blockquote><p>And not only that even the app store of Android, of course, the Google Play Store is also full of emulators that allow us to enjoy old and new console gaming or television if we have an Android device. Now, a developer has launched the first major project to emulate Nintendo Switch games on Android.</p><p>The Nintendo Switch was released two years ago and by the end of 2018, Nintendo had sold 32 million units. The possibilities of the console and its exclusive titles of great success as The Legend of Zelda: Breath of the Wild, Super Smash Bros. Ultimate, Pokemon: Letâ€™s Go and much more, that simply makes many Android users look sideways at Google Play, hoping that one day appears a Nintendo Switch emulator.</p><p>The first major project in this regard has just started and is called â€œMonoNXâ€, it is an emulator currently which is in its early stages of development and seeks to emulate Nintendo Switch in Android. The development has been unveiled in the XDA forums by the user Cyubii. At the moment the emulator does not show any graph and only shows the main access console.</p><p>The operation is very slow and for the moment the game has not been enabled. However, the project is beginning to take shape and the creator has shared the code, so it is possible that with the collaboration of the entire community, we will soon see the first results of this app.</p><p>The first tests performed by the developer have been made, as detailed, with a Snapdragon 625, getting executions of Switch graphics at only 15 fps. In the details given to other developers, it is indicated that you need at least 4 GB of RAM and an ARM64 or X86 64-bit processor.</p><p>If you are a developer and you want to enter to shape the MonoNX emulator, its creator has left the direct <a href=\"https://play.google.com/store/apps/details?id=com.cyuubiapps.mononx\">link</a> for download on Google Play, as well as the test ROM that can be downloaded from Google Drive. So, what do you think about this? Simply share all your views and thoughts in the comment section below.</p>', 'android', 0, 'published'),
(431, 71, 'Facebook Is A â€˜Digital Gangsterâ€™', 26, '2019-02-19 20:09:44', 'Facebook-Is-A-Digital-Gangster.png', '<blockquote><p>Recently, according to the latest reports, the authority of the UK Govt. told that the social network giant Facebook needs to significantly change its business model and its practices to maintain trust. According to the latest reports, the social network giant Facebook intentionally and deliberately violated the laws of data privacy, and the Information Commissionerâ€™s Office must conduct a detailed investigation of the practices of the social network giant Facebook. Hence, now according to the latest reports, the UK Govt. marked the social network giant Facebook as a digital gangster.</p><h2>Facebook Is A â€˜Digital Gangsterâ€™</h2><p>The authority of the UK Govt. told that the social network giant Facebook needs to significantly change its business model and its practices to maintain trust. According to the latest reports, the social network giant Facebook intentionally and deliberately violated the laws of data privacy and the Information Commissionerâ€™s Office must conduct a detailed investigation of the practices of the social network giant Facebook, its use of user data and the use of â€œreciprocityâ€ in the exchange of data.</p><p>According to the latest reports and documents, committee members have concluded that â€œthe social network giant Facebook wanted to bypass the privacy settings of its users to transfer data to some application developers, charge high advertising prices to some developers for the exchange of information.</p><p>Members of parliament simply recommend that the Competition and Markets Authority investigate â€œwhether the social network giant Facebook is abusing its dominant position in the social media market to decide which companies should be successful and which should not.â€</p><p>Representatives of the social network giant Facebook could have intentionally misinformed the British authorities about the extent of Moscowâ€™s alleged interference in Brexit, according to a report from the Digital Technology, Culture, Media and Sports committee of the House of Commons.</p><p>In February 2018, experts from the North American company the social network giant Facebook informed the committee that they had not found advertisements related to Russia that showed interference from Moscow in the referendum on Brexit.</p><p>â€œWe are left with the impression that Simon Milner and Mike Schroepfer deliberately deceived the Committee or they were intentionally not informed by the social network giant Facebookâ€™s top executives about the extent of Russiaâ€™s interference in foreign elections,â€ says the reports.</p><p>In this context, the members of British parliament simply ask the Government to â€œmake a statement about the amount of research that is being carried out on the interference of Russia in the policy of the United Kingdomâ€.</p></blockquote><blockquote><p>ALSO READ:&nbsp;<a href=\"https://techviral.net/convert-video-into-a-gif-online/\">HOW TO CONVERT A VIDEO INTO A GIF ONLINE</a></p></blockquote><p>â€œWe also recommend that the Government initiate an independent investigation into the past elections, including the 2017 UK elections, the 2016 referendum and the Scotland referendum in 2014, to find out what really happened with respect to foreign influence, disinformation, financing, voter manipulation, and data exchange, so that the corresponding changes in legislation can be introduced and lessons learned for future elections and referendums,â€ the document points out.</p><p>As Russia is regularly accused of meddling in the development of electoral campaigns in other countries such as the US, France or Germany. So, what do you think about this? Simply share all your views and thoughts in the comment section below.</p><blockquote><p>&nbsp;</p></blockquote>', 'facebook', 0, 'published'),
(432, 72, 'PUBG Erangel Map: Top 8 Best Loot Locations 2019', 30, '2019-02-19 20:42:42', 'PUBG-Mobile-Map.jpg', '<blockquote><p>Erangel is the most famous ones and itâ€™s the biggest map of PUBG Mobile. Until now, we have shared a few articles on PUBG Mobile in which we have discussed few PUBG Advanced Tips, Guides, etc. So, in this article, we have decided to share the list of best locations on Erangel game to get most of the loots.</p></blockquote><p>If we look nearby, we will find that almost everyone is now busy playing PUBG Mobile. PUBG Mobile is indeed a great battle royale game which is loved by millions of users. Right now PUBG Mobile is trending on both Android and iOS app stores and this is the game that everyone wants to play.</p><p>Itâ€™s an intense battle royale game in which you will be dropped with 99 other players on an island. The ultimate goal of the player is to survive until the very end while killing everyone. The last man standing will be the winner here. The game is high on visuals and itâ€™s pretty addictive as well.</p><p>Right now PUBG Mobile has four maps â€“ Erangel, Miramar, Sanhok and Vikendi. Out of all those, Erangel is the most famous ones and itâ€™s the biggest map of PUBG Mobile. Until now, we have shared a few articles on PUBG Mobile in which we have discussed few PUBG Advanced Tips, Guides, etc. So, in this article, we have decided to share the list of best locations on Erangel game to get most of the loots.</p><h2>PUBG Erangel Map: Top 8 Best Loot Locations 2019</h2><p>Itâ€™s worth to note that the best loot on Erangel is generated randomly. So, thereâ€™s no guarantee that you will always get the weapon you are looking. Still, these are the places where you will find maximum loots. So, lets the top 10 spots to land on Erangel to get decent loot.</p><h3>#1 School</h3><figure class=\"image\"><img src=\"https://techviral.net/wp-content/uploads/2019/02/School.png\" alt=\"School\" srcset=\"https://techviral.net/wp-content/uploads/2019/02/School.png 553w, https://techviral.net/wp-content/uploads/2019/02/School-300x175.png 300w\" sizes=\"100vw\" width=\"553\"></figure><p><i>School</i></p><p>Well, School is one of the favorite landing spots of many PUBG Mobile users. The reason is pretty simple, here you will get the maximum loot quantity. You will find lots of level 2 things like Level 2 vests, level 2 helmet, decent weapons, medkits, first aid kits, etc. However, the risk of dying is pretty high because lots of players choose to land on School.</p><h3>#2 Prison</h3><figure class=\"image\"><img src=\"https://techviral.net/wp-content/uploads/2019/02/Prison.jpg\" alt=\"Prison\" srcset=\"https://techviral.net/wp-content/uploads/2019/02/Prison.jpg 500w, https://techviral.net/wp-content/uploads/2019/02/Prison-300x187.jpg 300w\" sizes=\"100vw\" width=\"500\"></figure><p><i>Prison</i></p><p>Well, if you have been playing PUBG Mobile for a while, then you might know about Prison. Prison is literally covered with huge weapons. We are not saying that you will get tons of loots here, but if you are looking for quality loot, then Prison might be the best place to land. You will get lots of top quality weapons on Prison like Mini14, SKS, Kar98K, 8X Scope, etc.</p><h3>#3 Pochinki</h3><figure class=\"image\"><img src=\"https://techviral.net/wp-content/uploads/2019/02/Pochinki.jpg\" alt=\"Pochinki\" srcset=\"https://techviral.net/wp-content/uploads/2019/02/Pochinki.jpg 511w, https://techviral.net/wp-content/uploads/2019/02/Pochinki-300x169.jpg 300w\" sizes=\"100vw\" width=\"511\"></figure><p><i>Pochinki</i></p><p>If you have recently started to play PUBG Mobile, then we recommend you to leave this place because the risk of dying is considerably high on Pochinki. Guess what? Almost 40% of people jump on Pochinki and if you are not so good with gunfights, then landing on Pochinki might eventually get you Killed. However, if you are good at gunfights, then Pochinki is the good place to land because there are lots of houses containing a good amount of loots.</p><h3>#4 Georgopol</h3><figure class=\"image\"><img src=\"https://techviral.net/wp-content/uploads/2019/02/Georgopol.png\" alt=\"Georgopol\" srcset=\"https://techviral.net/wp-content/uploads/2019/02/Georgopol.png 939w, https://techviral.net/wp-content/uploads/2019/02/Georgopol-300x175.png 300w, https://techviral.net/wp-content/uploads/2019/02/Georgopol-768x448.png 768w, https://techviral.net/wp-content/uploads/2019/02/Georgopol-696x406.png 696w, https://techviral.net/wp-content/uploads/2019/02/Georgopol-720x420.png 720w\" sizes=\"100vw\" width=\"621\"></figure><p><i>Georgopol</i></p><p>Well, the Container terminal at Georgopol is one of the top landing spots of pro-PUBG Players. You will get lots of good quality assault and sniper rifles. Not just that, but there are SMGs as well. Apart from that, people always find 8X scopes, Level 3 helmets, MedKit, Adrenaline Syringe, etc on Georgopol. However, itâ€™s an overcrowded place, so, you should avoid jumping into the Georgopol if you are not so good at Gunfights.</p><h3>#5 Yasnaya Polyana</h3><figure class=\"image\"><img src=\"https://techviral.net/wp-content/uploads/2019/02/Yasnaya-Polyana.jpg\" alt=\"Yasnaya Polyana\"></figure><p><i>Yasnaya Polyana</i></p><p>Yasnaya Polyana is another best place on the Erangel Map to land on. Guess what? the loot concentration at Yasnaya Polyana is quite high and so does the player traffic. However, Yasnaya Polyana is not a good place to land if you donâ€™t have weapons skills. Since Yasnaya Polyana has less hiding spots, finding protections is a challenge. You will get lots of high-quality weapons on Yasnaya Polyana like Kar98K, AKM, UMP9, etc.</p><h3>#6 Military Base</h3><figure class=\"image\"><img src=\"https://techviral.net/wp-content/uploads/2019/02/Military-Base.png\" alt=\"Military Base\" srcset=\"https://techviral.net/wp-content/uploads/2019/02/Military-Base.png 560w, https://techviral.net/wp-content/uploads/2019/02/Military-Base-300x188.png 300w\" sizes=\"100vw\" width=\"560\"></figure><p><i>Military Base</i></p><p>If you are searching for the perfect spot to land on Erangel Map to get maximum loot, then Military Base might be the best place for you. The loot level at Military Base is quite high and so does the player traffic. Military Base is also a perfect landing spot if you are looking for bridge camping. The loot level is high and you will get almost all major quality weapons and scopes including Kar98K, 8X Scopes, Level 3 Helmet, Level 3 vests, etc.</p><h3>#7 Rozhok</h3><figure class=\"image\"><img src=\"https://techviral.net/wp-content/uploads/2019/02/Rozhok.jpg\" alt=\"Rozhok\"></figure><p><i>Rozhok</i></p><p>Well, if you are not so good at Gunfight and looking for a place to get maximum loot, then Rozhok including the watery place might be the perfect spot to land on. Rozhok has lots of building and these buildings often have good quality loots. The risk of dying is considerably less. However, donâ€™t expect Kar98, 8X Scope, Level 3 Helmet or other top tier things on Rozhok.</p><h3>#8 Hospital</h3><figure class=\"image\"><img src=\"https://techviral.net/wp-content/uploads/2019/02/Hospital.jpg\" alt=\"Hospital\" srcset=\"https://techviral.net/wp-content/uploads/2019/02/Hospital.jpg 800w, https://techviral.net/wp-content/uploads/2019/02/Hospital-300x216.jpg 300w, https://techviral.net/wp-content/uploads/2019/02/Hospital-768x552.jpg 768w, https://techviral.net/wp-content/uploads/2019/02/Hospital-696x500.jpg 696w, https://techviral.net/wp-content/uploads/2019/02/Hospital-584x420.jpg 584w\" sizes=\"100vw\" width=\"624\"></figure><p><i>Hospital</i></p><p>Hospital is another best place to land if the place goes near it. On Hospital, you can get a decent amount of loot if you know how to land faster than others. You are quick to loot, then you can find lots of level 3 pieces of stuff along with Kar98K, AKM, etc. The risk is also quite low if you are playing solo. So, Hospital is another best place to land on Erangel Map.</p>', 'games, pubg', 0, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$zaxscdvfbgnhmjaqswdefr'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(26, 'test', '098f6bcd4621d373cade4e832627b4f6', 'john', 'doe', 'john@yahho.com', 'Screenshot (25).png', 'admin', 'passenc'),
(27, 'test2', 'ad0234829205b9033196ba818f7a872b', 'john', 'smith', 'johns@yahho.com', 'Screenshot (1).png', 'editor', 'passenc'),
(30, 'pruthvipatel', '098f6bcd4621d373cade4e832627b4f6', 'Pruthvi', 'Patel', 'pruthvipatel145@gmail.com', 'Screenshot (18).png', 'admin', 'passenc'),
(33, 'new', '098f6bcd4621d373cade4e832627b4f6', '', '', 'hi@gmail.com', '', 'admin', 'passenc'),
(34, 'test3', '8ad8757baa8564dc136c1e07507f4a98', '', '', 'test3@gmail.com', '2018-11-15.png', 'admin', 'passenc'),
(35, 'nice', '7c6483ddcd99eb112c060ecbe0543e86', 'Pruthvi', 'Patel', 'pruthvipatel', '', 'admin', 'passenc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
