-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2019 at 09:37 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemania`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `KorisnickoIme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  KEY `R_11` (`KorisnickoIme`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`KorisnickoIme`) VALUES
('admin'),
('racicmina');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `Naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Zanr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DatumPrikazivanja` date NOT NULL,
  `DuzinaTrajanja` int(11) NOT NULL,
  `Glumci` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Reziser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Opis` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `ImgSrc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDFilma` int(11) NOT NULL AUTO_INCREMENT,
  `Scenarista` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sinhronizacija` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OcenaKorisnika` int(11) DEFAULT NULL,
  `TrailerSrc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IDFilma`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`Naziv`, `Zanr`, `DatumPrikazivanja`, `DuzinaTrajanja`, `Glumci`, `Reziser`, `Opis`, `ImgSrc`, `IDFilma`, `Scenarista`, `Sinhronizacija`, `OcenaKorisnika`, `TrailerSrc`) VALUES
('Aladin i leteći ćilim', 'Dečiji,Animirani', '2019-01-01', 105, 'Peđa Damnjanović, Miomira Dragićević, Marko Dolaš, Alek Rodić, Ana Mirović', 'Alek Rodić, Ana Mirović', 'Aladdin is a lovable street urchin who meets Princess Jasmine, the beautiful daughter of the sultan of Agrabah. While visiting her exotic palace, Aladdin stumbles upon a magic oil lamp that unleashes a powerful, wisecracking, larger-than-life genie. As Aladdin and the genie start to become friends, they must soon embark on a dangerous mission to stop the evil sorcerer Jafar from overthrowing young Jasmines kingdom.', 'aladinILeteciCilim.png', 1, 'Peđa Damnjanović', 'Peđa Damnjanović', 6, 'https://www.youtube.com/embed/Or8AZTFlaw8'),
('Avangers Endgame', 'Triler,Akcija', '2019-01-01', 105, 'Robert Downey Jr., Chris Evans, Mark Ruffalo', 'Anthony Russo, Joe Russo', 'Avengers: Endgame is a 2019 American superhero film based on the Marvel .... both as a \"[move] to selflessness\" and as an end to the \"chapter\" Stark started.', 'avangers.jpg', 2, 'Joe Russo', NULL, 10, 'https://www.youtube.com/embed/0jNvJU52LvU'),
('Izmedju dana i noći', 'Drama,Misterija', '2019-06-08', 120, 'Lazar Ristovski, Tihomir Stanic, Srdjan Grahovac', 'Andro Martinovic', 'Tri priče o ocu i sinu u tri vremenska razdoblja: kraj Drugog svetskog rata, vreme pada Berlinskog zida i nakon raspada Jugoslavije.', 'izmedjuDanaINoci.jpg', 9, 'Andro Martinovic', NULL, 9, 'https://www.youtube.com/embed/NmrNIml5Gws'),
('Prevaranti', 'Komedija, Avantura', '2019-06-12', 91, 'Rebel Wilson, Anne Hathaway, Tim Blake Nelson', 'Chris Addison', 'U novoj urnebesnoj komediji, En Hatavej i Rebel Vilson glume prevarantkinje, jedna je u nižoj ligi, dok je druga profilisana za visoku klasu. Njih dve se udružuju kako bi sredile prljavog, pokvarenog muškarca koji ih je nasamario.', 'prevaranti.jpg', 6, 'Rebel Wilson', NULL, 6, 'https://www.youtube.com/embed/ebzMot23GAk'),
('Tajne avanture kućnih ljubimaca 2', 'Animirani, Dečiji', '2019-07-17', 90, 'Patton Oswalt, Eric Stonestreet, Kevin Hart', 'Chris Renaud', 'Deseti animirani dugometražni film iz studija Illumination “Tajne avanture kućnih ljubimaca 2” jedan je od najočekivanijih filmova ove godine.', 'kucniLjubimci2.jpg', 7, 'Patton Oswalt', 'Petar Petric', 5, 'https://www.youtube.com/embed/2L3Gvo40DzQ'),
('Lice', 'Drama,Triler', '2019-06-18', 91, 'Mateusz Kosciukiewicz, Agnieszka Podsiadlik, Malgorzata Gorol', ' Malgorzata Szumowska', 'Jasek voli hevi metal, svoju devojku i svog psa. Njegova porodica i stanovnici njegovog malog rodnog mesta posmatraju ga kao čudaka. On radi na konstrukciji koja bi trebalo da predstavlja najveću statuu Isusa na svetu. Kada ga teška nesreća potpuno unakazi sve oči su uprte u njega, dok on prolazi kroz prvu transplataciju lica u zemlji.', 'lice.jpg', 10, 'Michal Englert, Malgorzata Szumowska', NULL, 7, 'https://youtube/embed/9bQX8egIbxA'),
('Balkanska međa', 'Akcija, Ratni', '2019-04-09', 142, 'Anton Pampušni, Milena Radulović, Miloš Biković, Aleksandar Radoičić', 'Andrej Volgin', 'Neposredno posle ratnog plamena u Bosni, na Balkanu raste novo žarište. Sukobi Srba i Albanaca na Kosovu nekontrolisano rastu, srpske snage pokušavaju da potisnu “Oslobodilačku vojsku Kosova”. Međunarodna zajednica optužuje Vladu u Beogradu za prekomernu upotrebu sile i bez saglasnosti Ujedinjenih nacija NATO počinje bombardovanje Srbije.', 'Balkanska.jpg', 11, 'Andrey Anaykin, Ivan Naumov, Natalya Nazarova', NULL, 8, 'https://youtube/embed/0IEGJMtIx_c'),
('Hotel Mumbaj', 'Drama,Istorijski', '2019-06-02', 125, 'Dev Patel, Armie Hammer, Nazanin Boniadi', 'Anthony Maras', 'Triler \"Hotel Mumbaj\" (Hotel Mumbai) zasnovan je na istinitoj priči o terorističkom napadu na Taj Mahal Palace Hotel u Mumbaju 2008, sastavljen iz nekoliko priča gostiju i radnika koji su se zatekli u hotelu, kao i četvorice terorista koji su izvršili napad. Dev Patel (\"Slumdog Milionaire\") igra jednog od zaposlenih koji iznenada mora da postane spasilac svojih gostiju. U ostalim pričama vidimo druge goste, radnike koji su odlučili da pobegnu sa lica mesta kao i one koji su odlučili da ostanu, policiju, napadače, i porodice zatočenih koje sa strepnjom prate vesti o napadu. Debitant Entoni Maras zasnovao je priču na intervjuima sa žrtvama ovog događaja, i trudio se da na autentičan način prenese napetu atmosferu iznenadnog napada. Film je prikazan na festivalima u Torontu i Kanu, gde je doživeo ovacije čak 10 minuta.', 'hotelmumbaj.jpg', 12, 'John Collee, Anthony Maras', NULL, 9, 'https://youtube/embed/njKTLVWCNFY'),
('Rocketman', 'Drama,Biografski', '2019-06-03', 121, 'Richard Madden, Bryce Dallas Howard, Taron Egerton', 'Dexter Fletcher', 'ROCKETMAN je epska muzička fantazija o necenzurisanoj životnoj priči muzičke zvezde Eltona Džona. U glavnim ulogama su Taron Egerton, Džejmi Bel, Ričard Mejden i Brajs Dalas Hauard.', 'rocketman.jpg', 13, 'Lee Hall', NULL, 9, 'https://youtube/embed/cctERLKMwMc');

-- --------------------------------------------------------

--
-- Table structure for table `karta`
--

DROP TABLE IF EXISTS `karta`;
CREATE TABLE IF NOT EXISTS `karta` (
  `IDKarte` int(11) NOT NULL AUTO_INCREMENT,
  `IDProjekcije` int(11) NOT NULL,
  `Cena` int(11) NOT NULL,
  `KorisnickoIme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BrojSedista` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDKarte`),
  KEY `R_10` (`IDProjekcije`),
  KEY `R_15` (`KorisnickoIme`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `karta`
--

INSERT INTO `karta` (`IDKarte`, `IDProjekcije`, `Cena`, `KorisnickoIme`, `BrojSedista`) VALUES
(1, 1, 350, 'mnb', '1A'),
(2, 1, 350, 'mnb', '1B');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
CREATE TABLE IF NOT EXISTS `komentar` (
  `IDKomentar` int(11) NOT NULL AUTO_INCREMENT,
  `Opis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `KorisnickoIme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDFilma` int(11) NOT NULL,
  PRIMARY KEY (`IDKomentar`),
  KEY `R_8` (`IDFilma`),
  KEY `R_13` (`KorisnickoIme`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`IDKomentar`, `Opis`, `KorisnickoIme`, `IDFilma`) VALUES
(11, 'Odlican film', 'sara', 1),
(14, 'asdf', 'racicmina', 1),
(17, 'Odlican', 'ks', 1),
(18, 'Nije lose', 'ks', 2),
(19, 'Iznenadjujuce dobar! Preporucujem svima', 'ks', 10),
(20, 'Zanimljiv od pocetka do kraja', 'ks', 12),
(21, 'Tuzan i tezak..', 'ks', 11),
(22, 'Predobar', 'ks', 13);

-- --------------------------------------------------------

--
-- Table structure for table `ocena`
--

DROP TABLE IF EXISTS `ocena`;
CREATE TABLE IF NOT EXISTS `ocena` (
  `Vrednost` int(11) NOT NULL,
  `KorisnickoIme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDFilma` int(11) NOT NULL,
  KEY `R_7` (`IDFilma`),
  KEY `R_14` (`KorisnickoIme`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ocena`
--

INSERT INTO `ocena` (`Vrednost`, `KorisnickoIme`, `IDFilma`) VALUES
(1, 'racicmina', 1),
(2, 'david', 1),
(7, 'sara', 1),
(5, 'ks', 1),
(4, 'ks', 2),
(8, 'racicmina', 2),
(10, 'sara', 2),
(7, 'ks', 10),
(9, 'ks', 12),
(4, 'ks', 11),
(9, 'ks', 13);

-- --------------------------------------------------------

--
-- Table structure for table `projekcija`
--

DROP TABLE IF EXISTS `projekcija`;
CREATE TABLE IF NOT EXISTS `projekcija` (
  `IDProjekcije` int(11) NOT NULL AUTO_INCREMENT,
  `IDSale` int(11) NOT NULL,
  `Termin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDFilma` int(11) NOT NULL,
  `Cena` int(11) NOT NULL,
  PRIMARY KEY (`IDProjekcije`),
  KEY `R_6` (`IDFilma`),
  KEY `R_11` (`IDSale`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projekcija`
--

INSERT INTO `projekcija` (`IDProjekcije`, `IDSale`, `Termin`, `IDFilma`, `Cena`) VALUES
(1, 1, '2019-06-05T14:22', 2, 590),
(2, 1, '2019-06-06T12:32', 2, 600),
(3, 2, '2019-07-07T13:30', 1, 490),
(4, 1, '2019-07-07T16:30', 1, 390),
(5, 2, '2019-07-07T16:30', 1, 300),
(6, 3, '2019-07-17T10:00', 6, 400),
(7, 3, '2019-07-17T13:00', 6, 350),
(8, 4, '2019-06-10T18:00', 7, 550),
(9, 5, '2019-06-10T20:00', 7, 550),
(10, 3, '2019-07-10T22:00', 9, 500),
(11, 5, '2019-07-10T18:00', 9, 650),
(12, 1, '2019-07-17T13:00', 10, 400),
(13, 2, '2019-07-15T15:00', 12, 400),
(14, 3, '2019-07-16T20:00', 12, 400),
(15, 1, '2019-07-13T18:00', 10, 500),
(16, 4, '2019-06-17T20:00', 10, 400),
(17, 3, '2019-06-06T13:00', 11, 550),
(18, 3, '2019-06-07T13:00', 11, 550),
(19, 4, '2019-07-10T20:00', 13, 600),
(20, 4, '2019-07-10T18:00', 13, 600);

-- --------------------------------------------------------

--
-- Table structure for table `registrovankorisnik`
--

DROP TABLE IF EXISTS `registrovankorisnik`;
CREATE TABLE IF NOT EXISTS `registrovankorisnik` (
  `BodoviPopust` int(11) DEFAULT NULL,
  `BodoviVIP` int(11) DEFAULT NULL,
  `VIPKorisnik` int(12) DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pol` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DatumRodjenja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sifra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `KorisnickoIme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`KorisnickoIme`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrovankorisnik`
--

INSERT INTO `registrovankorisnik` (`BodoviPopust`, `BodoviVIP`, `VIPKorisnik`, `Email`, `Pol`, `DatumRodjenja`, `Sifra`, `KorisnickoIme`, `Ime`, `Prezime`) VALUES
(100, 0, 0, 'racicmina@gmail.com', 'Z', '1997-10-13', '123', 'racicmina', 'Mina', 'Racic'),
(NULL, NULL, 0, 'cinemateam6@gmail.com', 'N', '1.1.1.', 'admin1234', 'admin', 'Cinemateam', 'Cinematimic'),
(100, 120, 0, 'ks@gmail.com', 'Z', '1998/03/04', '1234', 'ks', 'Ksenija', 'Jankovic'),
(NULL, NULL, 2, 'sara@gmail.com', 'Z', '13.10.1997.', '123', 'sara', 'Sara', 'Racic');

-- --------------------------------------------------------

--
-- Table structure for table `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `IDSale` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IDSale`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`IDSale`) VALUES
(1),
(2),
(3),
(4),
(5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
