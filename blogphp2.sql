-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 12:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogphp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `IdContact` int(255) NOT NULL,
  `Poruka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Korisnik` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`IdContact`, `Poruka`, `Korisnik`) VALUES
(1, 'Caooo', 'nevena4'),
(2, 'aaaaaaaaaa', 'nevena4'),
(3, 'Kako si?', 'nevena4');

-- --------------------------------------------------------

--
-- Table structure for table `hashtag`
--

CREATE TABLE `hashtag` (
  `IdHash` int(255) NOT NULL,
  `Naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hashtag`
--

INSERT INTO `hashtag` (`IdHash`, `Naziv`) VALUES
(1, '#Beauty'),
(2, '#Life'),
(3, '#Style'),
(4, '#Makeup'),
(5, '#Dress'),
(6, '#Hairr');

-- --------------------------------------------------------

--
-- Table structure for table `kljucneakt`
--

CREATE TABLE `kljucneakt` (
  `IdKljucne` int(255) NOT NULL,
  `Opis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Korisnik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kljucneakt`
--

INSERT INTO `kljucneakt` (`IdKljucne`, `Opis`, `Korisnik`, `Datum`) VALUES
(15, 'Logout', 'nevena4', '2019-04-13'),
(16, 'Logovanje', 'nevena4', '2019-04-13'),
(17, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-13'),
(18, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-13'),
(19, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-13'),
(20, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-13'),
(21, 'Logout', 'nevena4', '2019-04-13'),
(22, 'Logovanje', 'nevena4', '2019-04-13'),
(23, 'Insert comment ADMIN PANEL', 'nevena4', '2019-04-13'),
(24, 'Insert comment ADMIN PANEL', 'nevena4', '2019-04-13'),
(25, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-13'),
(26, 'Logovanje', 'nevena4', '2019-04-14'),
(27, 'Register', 'nevena4', '2019-04-14'),
(28, 'Insert user ADMIN PANEL', 'nevena4', '2019-04-14'),
(29, 'Edit user ADMIN PANEL', 'nevena4', '2019-04-14'),
(30, 'Edit user ADMIN PANEL', 'nevena4', '2019-04-14'),
(31, 'Insert comment ADMIN PANEL', 'nevena4', '2019-04-14'),
(32, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-14'),
(33, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-14'),
(34, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-14'),
(35, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-14'),
(36, 'Logovanje', 'nevena4', '2019-04-14'),
(37, 'Update hashtag ADMIN PANEL', 'nevena4', '2019-04-14'),
(38, 'Insert hashtag ADMIN PANEL', 'nevena4', '2019-04-14'),
(39, 'Update hashtag ADMIN PANEL', 'nevena4', '2019-04-14'),
(40, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-14'),
(41, 'Insert hashtag ADMIN PANEL', 'nevena4', '2019-04-14'),
(42, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-14'),
(43, 'Insert uloga ADMIN PANEL', 'nevena4', '2019-04-14'),
(44, 'Update roles ADMIN PANEL', 'nevena4', '2019-04-14'),
(45, 'Delete roles ADMIN PANEL', 'nevena4', '2019-04-14'),
(46, 'Delete roles ADMIN PANEL', 'nevena4', '2019-04-14'),
(47, 'Insert comment', 'nevena4', '2019-04-14'),
(48, 'Insert post ADMIN PANEL', 'nevena4', '2019-04-14'),
(49, 'Logovanje', 'luke', '2019-04-15'),
(50, 'Insert comment', 'luke', '2019-04-15'),
(51, 'Insert comment', 'luke', '2019-04-15'),
(52, 'Insert comment', 'luke', '2019-04-15'),
(53, 'Insert comment', 'luke', '2019-04-15'),
(54, 'Insert comment', 'luke', '2019-04-15'),
(55, 'Logout', 'luke', '2019-04-15'),
(56, 'Logovanje', 'nevena4', '2019-04-15'),
(57, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(58, 'Logovanje', 'nevena4', '2019-04-15'),
(59, 'Insert comment', 'nevena4', '2019-04-15'),
(60, 'Insert comment', 'nevena4', '2019-04-15'),
(61, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(62, 'Insert post ADMIN PANEL', 'nevena4', '2019-04-15'),
(63, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(64, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(65, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(66, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(67, 'Insert comment', 'nevena4', '2019-04-15'),
(68, 'Update comment ADMIN PANEL', 'nevena4', '2019-04-15'),
(69, 'Update comment ADMIN PANEL', 'nevena4', '2019-04-15'),
(70, 'Update comment ADMIN PANEL', 'nevena4', '2019-04-15'),
(71, 'Insert comment', 'nevena4', '2019-04-15'),
(72, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-15'),
(73, 'Logout', 'nevena4', '2019-04-15'),
(74, 'Logovanje', 'nikola4', '2019-04-15'),
(75, 'Update comment ADMIN PANEL', 'nikola4', '2019-04-15'),
(76, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(77, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(78, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(79, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(80, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(81, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(82, 'Logout', 'nikola4', '2019-04-15'),
(83, 'Logovanje', 'nevena4', '2019-04-15'),
(84, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-15'),
(85, 'Logout', 'nevena4', '2019-04-15'),
(86, 'Logovanje', 'nikola4', '2019-04-15'),
(87, 'Insert comment', 'nikola4', '2019-04-15'),
(88, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(89, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(90, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(91, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(92, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(93, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(94, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(95, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(96, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(97, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(98, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(99, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(100, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(101, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(102, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(103, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(104, 'Update comment nikola4', 'nikola4', '2019-04-15'),
(105, 'Logout', 'nikola4', '2019-04-15'),
(106, 'Logovanje', 'nevena4', '2019-04-15'),
(107, 'Edit post ADMIN PANEL', 'nevena4', '2019-04-15'),
(108, 'Edit post ADMIN PANEL', 'nevena4', '2019-04-15'),
(109, 'Edit user ADMIN PANEL', 'nevena4', '2019-04-15'),
(110, 'Edit post ADMIN PANEL', 'nevena4', '2019-04-15'),
(111, 'Insert post ADMIN PANEL', 'nevena4', '2019-04-15'),
(112, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(113, 'Insert post ADMIN PANEL', 'nevena4', '2019-04-15'),
(114, 'Insert post ADMIN PANEL', 'nevena4', '2019-04-15'),
(115, 'Insert post ADMIN PANEL', 'nevena4', '2019-04-15'),
(116, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(117, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(118, 'Delete post ADMIN PANEL', 'nevena4', '2019-04-15'),
(119, 'Edit post ADMIN PANEL', 'nevena4', '2019-04-15'),
(120, 'Edit post ADMIN PANEL', 'nevena4', '2019-04-15'),
(121, 'Insert photo ADMIN PANEL', 'nevena4', '2019-04-15'),
(122, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(123, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(124, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(125, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(126, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(127, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(128, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(129, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(130, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(131, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(132, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(133, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(134, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(135, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(136, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-15'),
(137, 'Edit photo ADMIN PANEL', 'nevena4', '2019-04-15'),
(138, 'Logovanje', 'nevena4', '2019-04-16'),
(139, 'Insert user ADMIN PANEL', 'nevena4', '2019-04-16'),
(140, 'Edit user ADMIN PANEL', 'nevena4', '2019-04-16'),
(141, 'Edit user ADMIN PANEL', 'nevena4', '2019-04-16'),
(142, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-16'),
(143, 'Update comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(144, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(145, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(146, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(147, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(148, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(149, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(150, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(151, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(152, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(153, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(154, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(155, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(156, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(157, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(158, 'Insert post ADMIN PANEL', 'nevena4', '2019-04-16'),
(159, 'Edit post ADMIN PANEL', 'nevena4', '2019-04-16'),
(160, 'Update comment nevena4', 'nevena4', '2019-04-16'),
(161, 'Insert comment', 'nevena4', '2019-04-16'),
(162, 'Delete comment ADMIN PANEL', 'nevena4', '2019-04-16'),
(163, 'Logout', 'nevena4', '2019-04-16'),
(164, 'Logovanje', 'nevena4', '2019-04-16'),
(165, 'Send contact form', 'nevena4', '2019-04-16'),
(166, 'Send contact form', 'nevena4', '2019-04-16'),
(167, 'Insert user ADMIN PANEL', 'nevena4', '2019-04-16'),
(168, 'Edit user ADMIN PANEL', 'nevena4', '2019-04-16'),
(169, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-16'),
(170, 'Insert uloga ADMIN PANEL', 'nevena4', '2019-04-16'),
(171, 'Update roles ADMIN PANEL', 'nevena4', '2019-04-16'),
(172, 'Delete roles ADMIN PANEL', 'nevena4', '2019-04-16'),
(173, 'Insert hashtag ADMIN PANEL', 'nevena4', '2019-04-16'),
(174, 'Update hashtag ADMIN PANEL', 'nevena4', '2019-04-16'),
(175, 'Delete hastag ADMIN PANEL', 'nevena4', '2019-04-16'),
(176, 'Insert photo ADMIN PANEL', 'nevena4', '2019-04-16'),
(177, 'Edit photo ADMIN PANEL', 'nevena4', '2019-04-16'),
(178, 'Delete user ADMIN PANEL', 'nevena4', '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `IdKomentar` int(255) NOT NULL,
  `Tekst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`IdKomentar`, `Tekst`, `Datum`) VALUES
(1, 'NEVENA KRALJICA!!!', '2019-04-16'),
(2, 'Najbolji', '2019-04-15'),
(3, 'KOmentar333', '2019-03-04'),
(4, 'Nevena CAR', '2019-04-12'),
(15, 'Novi komentar', '2019-03-15'),
(16, 'NEVENA KRALJICA', '2019-04-12'),
(18, 'CAOOOOOOOO', '2019-04-14'),
(20, 'Caooo', '2019-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `IdKorisnik` int(255) NOT NULL,
  `KorIme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Lozinka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IdSlika` int(255) NOT NULL,
  `IdUloga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`IdKorisnik`, `KorIme`, `Lozinka`, `Email`, `IdSlika`, `IdUloga`) VALUES
(1, 'nevena4', '776ca25543b7f7e430382a2bb5403dd4', 'nevena@gmail.com', 1, 1),
(2, 'nikola4', '7eb4cfc72b644fabac5b96dc3c8f7dcd', 'nikola@gmail.com', 2, 2),
(25, 'nevena', '776ca25543b7f7e430382a2bb5403dd4', 'dadas@gmail.com', 85, 2),
(26, 'nikolayijkhg', '1386a83eb1b387ace3d57c28e1e30b72', 'asdzfxghnm,. /@gmail.com', 81, 2),
(27, 'Nevena Kraljica', '441b328b4a247949753588398984ba71', 'kraljica@gmail.com', 82, 2),
(28, 'filipxsdfgh', '3a30e08c1a8b88386d984e7708fee71e', 'filip@gmail.com', 84, 2),
(30, 'osnovipkotlovaaa2', '3d44e0aa0b97188ea1bfd155588f9c94', 'luka.lukic@ict.edu.rs', 98, 2),
(31, 'nikola4aaa', 'c162de19c4c3731ca3428769d0cd593d', 'helena.heky.kostic97@gmail.com', 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `korkom`
--

CREATE TABLE `korkom` (
  `IdKomentar` int(255) NOT NULL,
  `IdKorisnik` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korkom`
--

INSERT INTO `korkom` (`IdKomentar`, `IdKorisnik`) VALUES
(1, 1),
(2, 2),
(4, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `IdPost` int(255) NOT NULL,
  `Naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Opis` text COLLATE utf8_unicode_ci NOT NULL,
  `SkraceniOpis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Datum` date NOT NULL,
  `IdKorisnik` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`IdPost`, `Naslov`, `Opis`, `SkraceniOpis`, `Datum`, `IdKorisnik`) VALUES
(1, 'Outrageous Pink Dresses Ruled The Oscars Red Carpet', 'It seems that everyone got the ruffled pink dress memo for the Oscars red carpet on Sunday night. \r\n\r\nKacey Musgraves, Gemma Chan, Linda Cardellini, Angela Bassett, Sarah Paulson, Helen Mirren and Maya Rudolph wore some of the most over-the-top looks of the night, wowing in wild ruffles, tulle galore and bright pink realness. \r\n\r\nMusgraves wowed in Giambattista Valli and told E! that she needed extra room just to walk in her dress. \r\n\r\n“It’s an honor to be able to get to wear this dress,” the singer said, joking that “it’s like make way for the dress. I need about 10 feet!”\r\n\r\nChan looked stunning in a Valentino Haute Couture gown, while Bassett chose a hot-pink, ruffled Reem Acra number that her stylist loved. \r\n\r\n“She’s somebody that can pull off drama,” Bassett’s stylist, Jennifer Austin, told The Hollywood Reporter. “I loved the drama on the sleeve.”\r\n\r\nAustin added, “Everybody knows Angela has amazing arms and she loves her arms, so anything that showcases that and heightens that.”\r\n\r\nJust look at these gorgeous gowns: ', 'Kacey Musgraves, Gemma Chan, Angela Basset and more rocked the look.', '2019-03-01', 1),
(2, 'The Best Way To Use Hair Oil, According To Experts', 'Let’s talk about hair oil, one of the many products out there that promises to give you shiny, healthy, Pantene commercial-worthy hair.\r\n\r\nIt’s typically used to moisturize and hydrate the hair, as well as smooth and protect it from all your styling tools. But hair oil is definitely not a one-size-fits-all product.\r\n\r\nWe spoke to a few hair experts to get the lowdown on all things hair oil, including how to use it.\r\n\r\nSo what’s the point of using hair oil?\r\nOur hair is dead once it breaks through the surface of the scalp, as Jasmine Merinsky, a Toronto-based hairstylist, explained to HuffPost. And if it weren’t for our sebaceous glands, which secrete natural oils, that hair would be dry and brittle.\r\n\r\n“Similar to skin, we need oil to have healthy, strong hair,” Merinsky said. “Oil lubricates the outer cuticle and strengthens the inner core by providing moisture to help keep the bonds strong.”\r\n\r\nEveryone’s scalp and hair are different and some people are just oilier than others, she added.\r\n\r\nThat’s where hair oils come in. The store-bought product is meant to replicate and supplement the natural oils that our bodies already make. Plus, Merinsky said, hair oils smell nice and provide you with control over the amount and application.\r\n\r\nBobby Eliot, a Los Angeles-based celebrity hairstylist with Starworks Artists, told HuffPost that hair oils can be used both as a nourishing treatment and as a styling tool to help smooth the hair.\r\n\r\nShould you be using hair oil?\r\nTakisha Sturdivant-Drew, a New York-based celebrity hairstylist with Exclusive Artists, believes there’s a hair oil out there for everyone. But there are a few things to consider ― especially in regards to your hair type and texture ― before you start slathering it all over your locks.\r\n\r\nSturdivant-Drew said hair oils are particularly good for individuals with dry or tight scalps that are lacking moisture. If your hair itself is also dry, she said applying hair oil can help “give it a nice, natural shine.” She added that she often uses oil on her clients, especially those with coarser, textured, or curly hair, to finish off the hairstyle.\r\n\r\n“Hair with a curl is naturally drier so an oil coats the hair and absorbs for a smoother cuticle,” Eliot explained.\r\n\r\nYou would also likely benefit from the moisturizing effects of a hair oil if you have chemically treated or processed hair or use relaxers, which can also be very drying.\r\n\r\nOn the other hand, those with very fine, straight hair might not want to use oil, Merinsky said, noting that the natural oils produced by their scalp “are probably enough, especially if you brush regularly and wash every other day.”\r\n\r\n“Brushing helps distribute the oils from your scalp throughout your mid-shaft and ends,” she said. “It also stimulates blood flow to the scalp, which helps with new growth as it removes dead skin cells and opens up your hair follicles.”\r\n\r\nIndividuals with fine hair can still use oil, Eliot said, if they avoid applying it directly to the roots “as it can weigh the hair down and make it look greasy.”\r\n\r\nHow do you use hair oil?\r\nOne way to use hair oil is as a moisturizing treatment. To do so, Eliot said he tells his clients “to apply before you take a shower, pin your hair up and let the steam from the shower open the cuticle and penetrate into the hair.”\r\n\r\nThen, he said, you shampoo and condition as normal and “your hair will feel amazing!”\r\n\r\nSturdivant-Drew described a somewhat similar hot-oil treatment, which she said can be done at home or at the salon. (She noted that actress Kerry Washington is a fan.) The process works on pretty much any hair type, the stylist said.\r\n\r\nEssentially, you put a mixture of hot oil and conditioner onto the hair and scalp and massage it in really well. Then you sit under a heating cap, steamer or dryer for about 20 minutes. After you wash the oil out, your hair will feel revamped and rehydrated, Sturdivant-Drew said.\r\n\r\n“If your hair’s feeling dead, it brings it back to life,” she said.\r\n\r\nAnother way to use hair oil is as a styling product, Eliot said. He likes to apply it before blow-drying to help keep hair smooth and free of flyaways.\r\n\r\nSturdivant-Drew noted that you can apply oil when hair is wet or dry, depending on your styling routine.\r\n\r\n“Some natural women wear their hair wet, like me,” she said. If that’s the case, you can definitely add oil while your hair is still wet. On the other hand, if you have a blowout and your hair feels dry, you can add oil to those dry strands, Sturdivant-Drew added.\r\n\r\nOne warning: You can apply too much hair oil.\r\n\r\nSturdivant-Drew suggested working a dime-sized amount through strands of dry hair and a nickel-sized amount for “really, really dry” hair. Merinsky recommended using a blob the size of a quarter and rubbing it between your palms before distributing it evenly through your strands.\r\n\r\n“Start in the back where your hair is thicker and use whatever is left for the front,” Merinsky said.\r\n\r\nRemember, you can always add more if you feel your hair needs it.', 'We got the lowdown on this hydrating and styling hair product.', '2019-03-02', 1),
(3, '5 Statement-Worthy Pantsuits To Rock This Spring', 'The pantsuit making a comeback ― but it’s also getting a makeover with lots of bright colors and bold patterns.\r\n\r\nWe saw a ton of celebrities wearing pantsuits on the Oscars red carpet. The classic outfit is also an important part of “herstory” and continues to be worn by the growing number of women running for (and holding) public office.\r\n\r\nWhether you’re looking to wear a pantsuit to work, a wedding, or just to serve up some serious swagger on the weekends, there are so many fun takes on the traditional ensemble to choose from. We found a light pink linen pantsuit that’s perfect for late spring and can be worn well into summer, as well as an oversized suit with wide leg pants for a more relaxed look and feel.\r\n\r\nWe’ve rounded up 10 pantsuits that are perfect for spring and beyond so you can step into the season with some serious style.\r\n\r\nTake a look below:', 'Pantsuits for work, weddings and fun.', '2019-03-07', 1),
(4, '20 Of The Best Spring Jackets For 2019', 'Stash your ski jackets, put away your parkas and and fold away your faux fur. Spring is around the corner, and that means we’re living in weather limbo. It’s a Goldilocks-level situation: You’re too hot or too cold, but never just right.\r\n\r\nFor those moments when your favorite Amazon coat is too much but your Levi’s trucker jacket just won’t cut it, you need transitional outerwear that’ll take you from chilly mornings to rainy afternoons to breezy nights.\r\n\r\nTake a look below at 20 of our favorite jackets for spring 2019 that’ll get you through weather limbo:', 'Survive weather limbo with these lightweight jackets, trench coats and denim jackets', '2019-03-06', 1),
(5, '13 Gifts For Your Supportive BFFs Who Should Be Celebrated Every Damn Day', 'Women already know we’re magic, we’re just waiting on the rest of the world to get with the program. That’s why it’s so important to celebrate all of the magical women in our lives this Women’s History Month and beyond.\r\n\r\nRemind your friends how fabulous they are with patriarchy-smashing gifts like catchy cuff bracelets or body-positive wall art. Whether you’re buying from women-owned businesses or brands that are giving back to women, there are so many thoughtful gifts for all of the women who deserve more than one month or day a year. AKA all women.\r\n\r\nBelow, we’ve rounded up 13 gifts for your supportive feminist BFFs, just in time for International Women’s Day:', 'Because every month is Women\'s History Month if you try hard enough ♀', '2019-03-05', 2),
(6, '20 V-Neck Cardigans That Look Just As Cute As Tops', 'Layering used to be the name of the sweater game, but lately we’ve seen women wearing cardigans in a whole new way.\r\n\r\nThe classic wardrobe staple has been reimagined as a casual and cozy top. Women are wearing V-neck cardigans like blouses, buttoning them up for a sweet and slouchy look or wearing snugger fits and tucking them into jeans, bodysuit style.\r\n\r\nIf you’re like me and made the mistake of purging your closet of all button sweaters two years ago, here are 20 dreamy V-neck cardigans you can actually wear as tops.\r\n\r\nTake a look below:', 'Cropped, fitted and sans undershirt. These aren\'t your grandmother’s cardigans.', '2019-03-05', 2),
(7, '12 Gingham Pants For Women Perfect For Spring 2019', 'Gingham for spring isn’t groundbreaking, but we’re calling it as one of the spring fashion trends for 2019 that you’re about to see everywhere.\r\n\r\nFrom cropped and high-rise gingham pants, to gingham trousers with a bit of flare, there’s a style out there for every aesthetic. We’re loving this dusty rose pair for plus from PrettyLittleThing as well as this effortlessly cool set from & Other Stories.\r\n\r\nFor the gingham skeptic, these go-everywhere, do-anything trousers pair nicely with pretty much all of the spring 2019 shoe trends we’re eyeing, from flatforms and sneakers to tie-up sandals and woven flats.\r\n\r\nBelow, we’ve rounded up 12 stylish pairs of gingham trousers for women that you’ll want to wear all spring long. Take a look below:', 'This trouser trend was made for spring.', '2019-03-07', 2),
(8, '20 Stunning Shoes That\'ll Go With Any Holiday Party Dress', 'Whether you’re the hostess in heels or need something comfortable, but cute to dance the night away — the perfect of party shoes are out there, and there’s still time to order them!\r\n\r\nEveryone needs a pair of statement-making shoes in time for the holidays. Perhaps a pair of sparkling heeled sandals or velvet slingbacks will be the finishing touch on your holiday outfit. Still, need a holiday dress? We’ve got plenty of ideas for holiday dresses that will sleigh this season too!\r\n\r\nSo you don’t have to go stumbling across the internet, we’ve rounded up 15 pairs of party shoes that are perfect for the holiday season.', 'Your perfect party shoes are waiting.', '2019-03-03', 1),
(12, 'outrageous Pink Dresses Ruled The Oscars Red Carpet', 'It seems that everyone got the ruffled pink dress memo for the Oscars red carpet on Sunday night. Kacey Musgraves, Gemma Chan, Linda Cardellini, Angela Bassett, Sarah Paulson, Helen Mirren and Maya Rudolph wore some of the most over-the-top looks of the night, wowing in wild ruffles, tulle galore and bright pink realness. Musgraves wowed in Giambattista Valli and told E! that she needed extra room just to walk in her dress. “It’s an honor to be able to get to wear this dress,” the singer said, joking that “it’s like make way for the dress. I need about 10 feet!”Chan looked stunning in a Valentino Haute Couture gown, while Bassett chose a hot-pink, ruffled Reem Acra number that her stylist loved. “She’s somebody that can pull off drama,” Bassett’s stylist, Jennifer Austin, told The Hollywood Reporter. “I loved the drama on the sleeve.”Austin added, “Everybody knows Angela has amazing arms and she loves her arms, so anything that showcases that and heightens that.”Just look at these gorgeous gowns:', 'Kacey Musgraves, Gemma Chan, Angela Basset and more rocked the look.', '2019-03-17', 1),
(16, 'aaaaaaaaaaaaaa', 'aaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2019-04-15', 1),
(17, 'nevenaaaa', 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaq', '2019-04-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posthash`
--

CREATE TABLE `posthash` (
  `IdPost` int(255) NOT NULL,
  `IdHash` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posthash`
--

INSERT INTO `posthash` (`IdPost`, `IdHash`) VALUES
(1, 1),
(1, 5),
(1, 2),
(2, 6),
(2, 2),
(2, 1),
(5, 1),
(5, 2),
(4, 1),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `postkom`
--

CREATE TABLE `postkom` (
  `IdPost` int(255) NOT NULL,
  `IdKomentar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `postkom`
--

INSERT INTO `postkom` (`IdPost`, `IdKomentar`) VALUES
(3, 1),
(5, 1),
(5, 4),
(4, 3),
(4, 4),
(8, 4),
(8, 2),
(6, 2),
(6, 1),
(1, 1),
(1, 2),
(2, 2),
(2, 1),
(28, 1),
(29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `postslika`
--

CREATE TABLE `postslika` (
  `IdPost` int(255) NOT NULL,
  `IdSlika` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `postslika`
--

INSERT INTO `postslika` (`IdPost`, `IdSlika`) VALUES
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 3),
(2, 4),
(5, 15),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(4, 17),
(4, 16),
(4, 18),
(5, 22),
(4, 21),
(1, 19),
(2, 20),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(6, 30),
(6, 31),
(6, 33),
(6, 32),
(6, 35),
(6, 34),
(7, 38),
(7, 39),
(7, 40),
(7, 41),
(7, 36),
(7, 37),
(8, 43),
(8, 44),
(8, 45),
(8, 46),
(8, 42),
(16, 94),
(17, 99);

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

CREATE TABLE `slika` (
  `IdSlika` int(255) NOT NULL,
  `Putanja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Children` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slika`
--

INSERT INTO `slika` (`IdSlika`, `Putanja`, `Alt`, `Children`) VALUES
(1, 'img/nevena.jpg', 'Nevena Pejcic', NULL),
(2, 'img/nikola.jpg', 'Nikola Kostic', NULL),
(3, 'img/postpink.jpg', 'slikaNaslov', 1),
(4, 'img/postoil.jpg', 'slikaNaslov', 1),
(5, 'img/pink1.jpg', 'Linda Cardellini', 0),
(6, 'img/pink2.jpg', 'Sarah Paulson', 0),
(7, 'img/pink3.jpg', 'Gemma Chan', 0),
(8, 'img/pink4.jpg', 'Angela Bassett', 0),
(9, 'img/pink5.jpg', 'Kasey Musgraves', 0),
(10, 'img/gif1.jpg', 'A cup for your bff', 0),
(11, 'img/gif2.jpg', 'Monkey for nails', 0),
(12, 'img/gif3.jpg', 'Ledd mirror', 0),
(13, 'img/gif4.jpg', 'Pillow cushion', 0),
(14, 'img/gif5.jpg', 'Boyfriend pillow', 0),
(15, 'img/best.jpg', 'slikaNaslov', 1),
(16, 'img/jacket2.jpg', 'Halogen Drape-Front Lightweight Jacket', 0),
(17, 'img/jacket1.jpg', 'Asos Design Utility Washed Cotton Jacket', 0),
(18, 'img/jackets.jpg', 'slikaNaslov', 1),
(19, 'img/pinkVelika.jpg', 'Pink Dress', 2),
(20, 'img/hairVelika.jpg', 'Hair oil', 2),
(21, 'img/jacketVelika.jpg', 'Jacket', 2),
(22, 'img/bestVelika.jpg', 'Best Friends', 2),
(23, 'img/pansuit1.jpg', 'This slouchy lilac suit', 0),
(24, 'img/pansuit2.jpg', 'This double-breasted blazer with wide-leg pants', 0),
(25, 'img/pansuit3.jpg', 'This trendy checkered crop suit\r\n', 0),
(26, 'img/pansuit4.jpg', 'The cute fitted cotton suit', 0),
(27, 'img/pansuit5.jpg', 'This fitted suit with a tie waist', 0),
(28, 'img/pansuitNaslov.png', 'Pansuit', 1),
(29, 'img/pansuitVelika.jpg', 'Pansuit', 2),
(30, 'img/top1.png', 'Cropped Textured Cotton Cardigan', 0),
(31, 'img/top2.png', 'Fitted Ribbed Cardigan\r\n', 0),
(32, 'img/top3.png', 'Smoother Than Silk Cardigan', 0),
(33, 'img/top4.png', 'Slouchy Soft-Brushed V-Neck Cardi for Women', 0),
(34, 'img/topVelika.png', 'LA Hearts Cable Stitch Cardigan Details', 2),
(35, 'img/topNaslov.png', 'Leah Ribbed Cardigan', 1),
(36, 'img/pansNaslov.png', 'Nude Gingham Skinny Pants', 1),
(37, 'img/pansVelika.png', 'A New Day Straight Leg Slim Ankle Pants', 2),
(38, 'img/pans1.png', 'HIgh Waist Gingham Pants', 0),
(39, 'img/pans2.png', 'English Factory Gingham Check Belted Trousers', 0),
(40, 'img/pans3.png', 'UO Susie High-Rise Zip-Front pant', 0),
(41, 'img/pans4.png', 'Forever21 Plus Size Gingham Wide-Leg Pants', 0),
(42, 'img/shooVelika.png', 'A holographic heel', NULL),
(43, 'img/shoo1.png', 'These thin strappy heels', NULL),
(44, 'img/shoo2.png', 'A pair of glittering gold heels', NULL),
(45, 'img/shoo3.png', 'A statement sock book', NULL),
(46, 'img/shooNaslov.png', 'These feather heeled sandals', NULL),
(59, 'img/1552830784viber image3.jpg', 'gbcdfgrfd', NULL),
(60, 'img/1552830872IMG_20170507_002001_002.jpg', 'dasd', NULL),
(62, 'img/1552831006IMG_20170507_002001_002.jpg', 'dasd', NULL),
(63, 'img/1552831032viber image.jpg', 'dfsa', NULL),
(64, 'img/1552831137viber image1.jpg', 'dasdfasfsdafsd', NULL),
(65, 'img/1552831447viber image1.jpg', 'daca', NULL),
(66, 'img/1552831555viber image4.jpg', 'daca', NULL),
(67, 'img/1552831724IMG_20170507_002001_002.jpg', 'nemanja', NULL),
(72, 'img/1552846885viber image3.jpg', 'nemanja44', NULL),
(73, 'img/1552847407IMG_20160319_180649.jpg', 'sasa', NULL),
(74, 'img/1552847462IMG_20160319_180649.jpg', 'sasa', NULL),
(77, 'img/1552857598viber image2.jpg', 'daca44', NULL),
(78, 'img/1555165403c1.jpg', 'nevenaa', NULL),
(79, 'img/1555165535c1.jpg', 'nevena444', NULL),
(80, 'img/1555167945eg1.jpg', 'daca', NULL),
(81, 'img/1555228725g2.jpg', 'nikolayijkhg', NULL),
(82, 'img/1555229058c1.jpg', 'Nevena Kraljica', NULL),
(83, 'img/1555229187h1.jpg', 'filip', NULL),
(84, 'img/1555232238i.jpg', 'filipxsdfgh', NULL),
(85, 'img/1555232265t2.jpg', 'nevena', NULL),
(87, 'img/155533728157213724_418499148969005_2256675679602999296_n.jpg', 'luke', NULL),
(89, 'img/155535853656320435_514701522392266_6384564538720649216_n.jpg', 'sadfgtyhjukihol', NULL),
(90, 'img/1555366108image_2.jpg', 'nevna', NULL),
(94, 'img/1555370423image_7.jpg', 'aaaaaaaaaaaaaa', 1),
(95, 'img/1555372621bg_3.jpg', 'nevenaaa3333333', NULL),
(96, 'img/1555403150image_1.jpg', 'osnovipkotlova', NULL),
(97, 'img/1555403545image_1.jpg', 'osnovipkotlovaaa', NULL),
(98, 'img/1555403582person_4.jpg', 'osnovipkotlovaaa2', NULL),
(99, 'img/1555405840bg_4.jpg', 'nevenaaaa', 1),
(100, 'img/1555408224ch4.jpg', 'nikola4aaa', NULL),
(101, 'img/1555408822c1.jpg', 'caooo', NULL),
(102, 'img/1555408834ch1.jpg', 'caoooa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `IdUloga` int(255) NOT NULL,
  `Naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`IdUloga`, `Naziv`) VALUES
(1, 'Admin'),
(2, 'Korisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`IdContact`);

--
-- Indexes for table `hashtag`
--
ALTER TABLE `hashtag`
  ADD PRIMARY KEY (`IdHash`);

--
-- Indexes for table `kljucneakt`
--
ALTER TABLE `kljucneakt`
  ADD PRIMARY KEY (`IdKljucne`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`IdKomentar`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`IdKorisnik`),
  ADD KEY `IdSlika` (`IdSlika`),
  ADD KEY `IdUloga` (`IdUloga`);

--
-- Indexes for table `korkom`
--
ALTER TABLE `korkom`
  ADD KEY `IdKomentar` (`IdKomentar`) USING BTREE,
  ADD KEY `IdKorisnik` (`IdKorisnik`) USING BTREE;

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`IdPost`),
  ADD KEY `post_ibfk_3` (`IdKorisnik`);

--
-- Indexes for table `posthash`
--
ALTER TABLE `posthash`
  ADD KEY `IdPost` (`IdPost`) USING BTREE,
  ADD KEY `IdHash` (`IdHash`) USING BTREE;

--
-- Indexes for table `postkom`
--
ALTER TABLE `postkom`
  ADD KEY `IdPost` (`IdPost`),
  ADD KEY `IdKomentar` (`IdKomentar`);

--
-- Indexes for table `postslika`
--
ALTER TABLE `postslika`
  ADD KEY `IdPost` (`IdPost`) USING BTREE,
  ADD KEY `IdSlika` (`IdSlika`) USING BTREE;

--
-- Indexes for table `slika`
--
ALTER TABLE `slika`
  ADD PRIMARY KEY (`IdSlika`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`IdUloga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `IdContact` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hashtag`
--
ALTER TABLE `hashtag`
  MODIFY `IdHash` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kljucneakt`
--
ALTER TABLE `kljucneakt`
  MODIFY `IdKljucne` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `IdKomentar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `IdKorisnik` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `IdPost` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `IdSlika` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `IdUloga` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_2` FOREIGN KEY (`IdSlika`) REFERENCES `slika` (`IdSlika`),
  ADD CONSTRAINT `korisnik_ibfk_3` FOREIGN KEY (`IdUloga`) REFERENCES `uloga` (`IdUloga`);

--
-- Constraints for table `korkom`
--
ALTER TABLE `korkom`
  ADD CONSTRAINT `korkom_ibfk_2` FOREIGN KEY (`IdKorisnik`) REFERENCES `korisnik` (`IdKorisnik`),
  ADD CONSTRAINT `korkom_ibfk_3` FOREIGN KEY (`IdKomentar`) REFERENCES `komentar` (`IdKomentar`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`IdKorisnik`) REFERENCES `korisnik` (`IdKorisnik`);

--
-- Constraints for table `posthash`
--
ALTER TABLE `posthash`
  ADD CONSTRAINT `posthash_ibfk_1` FOREIGN KEY (`IdHash`) REFERENCES `hashtag` (`IdHash`),
  ADD CONSTRAINT `posthash_ibfk_2` FOREIGN KEY (`IdPost`) REFERENCES `post` (`IdPost`);

--
-- Constraints for table `postslika`
--
ALTER TABLE `postslika`
  ADD CONSTRAINT `postslika_ibfk_1` FOREIGN KEY (`IdPost`) REFERENCES `post` (`IdPost`),
  ADD CONSTRAINT `postslika_ibfk_2` FOREIGN KEY (`IdSlika`) REFERENCES `slika` (`IdSlika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
