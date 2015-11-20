-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 20 Ιουλ 2014 στις 23:58:30
-- Έκδοση Διακομιστή: 5.5.37
-- Έκδοση PHP: 5.3.10-1ubuntu3.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `Eudoxus`
--

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `Books`
--

CREATE TABLE IF NOT EXISTS `Books` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(17) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `author` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Άδειασμα δεδομένων του πίνακα `Books`
--

INSERT INTO `Books` (`id_book`, `isbn`, `publisher`, `bookname`, `year`, `author`) VALUES
(1, '978-960-03-5639-7', 'ΚΛΕΙΔΑΡΙΘΜΟΣ', 'ΕΑΜ', 2000, 'Πέτρου'),
(2, '978-960-03-5639-1', 'ΕΚΔΟΣΕΙΣ ΚΡΗΤΗ', 'ΕΑΜ', 2000, 'Χατζή'),
(3, '178-960-03-5639-7', 'ΚΛΕΙΔΑΡΙΘΜΟΣ', 'Μηχανολογία', 2002, 'Φραγκίσκος'),
(4, '148-960-03-5639-7', 'ΕΚΔΟΣΕΙΣ ΠΛΑΚΑ', 'Πληροφορική', 2003, 'Αναστασίου'),
(5, '978-961-03-5639-7', 'ΚΛΕΙΔΑΡΙΘΜΟΣ', 'Φυσική 1', 1997, 'Παππά'),
(6, '978-962-03-5639-1', 'ΕΚΔΟΣΕΙΣ ΚΡΗΤΗ', 'Φυσική 2', 2005, 'Πανιεράκης'),
(7, '178-963-03-5639-7', 'ΚΛΕΙΔΑΡΙΘΜΟΣ', 'Ανάλυση 1', 2006, 'Κουζούπης'),
(8, '148-964-03-5639-7', 'ΕΚΔΟΣΕΙΣ ΠΛΑΚΑ', 'Ανάλυση 2', 2010, 'Ντουμάνης'),
(9, '978-960-03-4639-7', 'ΚΛΕΙΔΑΡΙΘΜΟΣ', 'Ιστορία και Πληροφορική', 2011, 'Κυρίτση'),
(10, '978-960-03-5639-1', 'ΕΚΔΟΣΕΙΣ ΚΡΗΤΗ', 'Δίκτυα', 2007, 'Παύλου'),
(11, '178-960-03-2639-7', 'ΚΛΕΙΔΑΡΙΘΜΟΣ', 'Μηχανολογία 2', 2002, 'Παππάς'),
(12, '148-960-03-1639-7', 'ΕΚΔΟΣΕΙΣ ΠΛΑΚΑ', 'Βάσεις', 2003, 'Τσίου');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `College`
--

CREATE TABLE IF NOT EXISTS `College` (
  `idcollege` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Idrima_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idcollege`),
  KEY `fk_College_Idrima1_idx` (`Idrima_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Άδειασμα δεδομένων του πίνακα `College`
--

INSERT INTO `College` (`idcollege`, `name`, `Idrima_name`) VALUES
(1, 'Πληροφορικής και Τηλ', 'ΕΚΠΑ'),
(2, 'Μαθηματικών', 'ΕΚΠΑ'),
(3, 'Ηλεκτρολόγων Μηχανικ', 'ΕΜΠ'),
(4, 'Πληροφορική', 'ΠΑΠΕΙ');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `College_has_mathima`
--

CREATE TABLE IF NOT EXISTS `College_has_mathima` (
  `College_idcollege` int(11) NOT NULL,
  `mathima_idmathima` int(11) NOT NULL,
  `examhno` int(11) NOT NULL,
  PRIMARY KEY (`College_idcollege`,`mathima_idmathima`),
  KEY `fk_College_has_mathima_mathima1_idx` (`mathima_idmathima`),
  KEY `fk_College_has_mathima_College1_idx` (`College_idcollege`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `College_has_mathima`
--

INSERT INTO `College_has_mathima` (`College_idcollege`, `mathima_idmathima`, `examhno`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 2),
(1, 4, 4),
(1, 5, 4),
(1, 6, 8),
(1, 7, 8),
(1, 8, 8),
(2, 2, 1),
(2, 3, 2),
(2, 8, 2),
(3, 2, 1),
(3, 5, 6),
(3, 7, 8),
(4, 2, 1),
(4, 8, 6),
(4, 4, 6);

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `College_has_mathima_has_Books`
--

CREATE TABLE IF NOT EXISTS `College_has_mathima_has_Books` (
  `College_has_mathima_College_idcollege` int(11) NOT NULL,
  `College_has_mathima_mathima_idmathima` int(11) NOT NULL,
  `Books_id_book` int(11) NOT NULL,
  PRIMARY KEY (`College_has_mathima_College_idcollege`,`College_has_mathima_mathima_idmathima`,`Books_id_book`),
  KEY `fk_College_has_mathima_has_Books_Books1_idx` (`Books_id_book`),
  KEY `fk_College_has_mathima_has_Books_College_has_mathima1_idx` (`College_has_mathima_College_idcollege`,`College_has_mathima_mathima_idmathima`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `College_has_mathima_has_Books`
--

INSERT INTO `College_has_mathima_has_Books` (`College_has_mathima_College_idcollege`, `College_has_mathima_mathima_idmathima`, `Books_id_book`) VALUES
(1, 1, 1),
(1, 1, 2),
(1, 2, 7),
(1, 2, 8),
(1, 3, 5),
(1, 4, 12),
(1, 5, 3),
(1, 6, 10),
(1, 7, 6),
(1, 8, 4),
(1, 8, 9),
(2, 2, 7),
(2, 2, 8),
(2, 3, 5),
(2, 8, 4),
(3, 2, 7),
(3, 2, 8),
(3, 5, 3),
(3, 7, 5),
(3, 7, 6),
(4, 2, 7),
(4, 2, 8),
(4, 4, 12),
(4, 8, 4);

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `Dhlwsh`
--

CREATE TABLE IF NOT EXISTS `Dhlwsh` (
  `idDhlwsh` int(11) NOT NULL AUTO_INCREMENT,
  `idStudent` int(11) NOT NULL,
  `idBook` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `examhno` int(11) NOT NULL,
  PRIMARY KEY (`idDhlwsh`),
  KEY `fk_Dhlwsh_Students_has_Books1_idx` (`idStudent`,`idBook`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Άδειασμα δεδομένων του πίνακα `Dhlwsh`
--

INSERT INTO `Dhlwsh` (`idDhlwsh`, `idStudent`, `idBook`, `year`, `examhno`) VALUES
(1, 3, 0, 2014, 123123),
(2, 3, 0, 2014, 123123);

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `Idrima`
--

CREATE TABLE IF NOT EXISTS `Idrima` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Idrima`
--

INSERT INTO `Idrima` (`name`) VALUES
('ΕΚΠΑ'),
('ΕΜΠ'),
('ΠΑΠΕΙ');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `mathima`
--

CREATE TABLE IF NOT EXISTS `mathima` (
  `idmathima` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idmathima`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Άδειασμα δεδομένων του πίνακα `mathima`
--

INSERT INTO `mathima` (`idmathima`, `name`) VALUES
(1, 'Επικοινωνία Ανθρώπου Μηχανής'),
(2, 'Μαθηματικά'),
(3, 'Φυσική'),
(4, 'Βάσεις δεδομένων '),
(5, 'Μηχανολογία '),
(6, 'Δίκτυα τηλεπικοινωνιών'),
(7, 'ΗΜΟ'),
(8, 'Προγραμματισμός');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `Students`
--

CREATE TABLE IF NOT EXISTS `Students` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `afm` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idruma` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sxolh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kinhto` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `examhno` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_student`),
  KEY `fk_Students_College1_idx` (`sxolh`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Άδειασμα δεδομένων του πίνακα `Students`
--

INSERT INTO `Students` (`id_student`, `username`, `passwd`, `afm`, `name`, `surname`, `email_adress`, `idruma`, `sxolh`, `kinhto`, `examhno`) VALUES
(1, 'Exosouler', '098f6bcd4621d373cade4e832627b4f6', '123123', 'exosouler', 'test', 'sdi1100130@di.uoa.gr', 'ΕΚΠΑ', 'Μαθηματικών', '6944444444', '123123'),
(2, 'Exosouler12', '098f6bcd4621d373cade4e832627b4f6', '123123', 'exosouler', 'fragkos', 'yasuko@windowslive.com', 'ΕΚΠΑ', 'Μαθηματικών', '6944444444', '123123'),
(3, 'Exosouler11', '1184cbb743223e126677455af7f634fb', '123123', 'exosouler', 'fragkos', 'yasuko@windowslive.com', 'ΕΚΠΑ', 'Μαθηματικών', '6944444444', '123123'),
(4, 'test1', '098f6bcd4621d373cade4e832627b4f6', '123123', 'exosouler', 'fragkos', 'yasuko@windowslive.com', 'ΕΚΠΑ', 'Μαθηματικών', '6944444444', '123123'),
(5, 'test5', '202cb962ac59075b964b07152d234b70', '1115201000138', 'Γιάννης', 'Πέτρου', 'ektorakos@gmail.com', 'ΕΚΠΑ', 'Μαθηματικών', '6943214567', '1115201000138');

-- --------------------------------------------------------

--
-- Δομή Πίνακα για τον Πίνακα `Students_has_Books`
--

CREATE TABLE IF NOT EXISTS `Students_has_Books` (
  `Students_id_student` int(11) NOT NULL,
  `Books_id_book` int(11) NOT NULL,
  `Students_has_Bookscol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Students_id_student`,`Books_id_book`),
  KEY `fk_Students_has_Books_Books1_idx` (`Books_id_book`),
  KEY `fk_Students_has_Books_Students_idx` (`Students_id_student`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
