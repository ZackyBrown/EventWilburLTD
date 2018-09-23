-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2018 at 09:37 PM
-- Server version: 5.5.60-0+deb8u1
-- PHP Version: 5.6.36-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Wilbur`
--

-- --------------------------------------------------------

--
-- Table structure for table `WilInv`
--

CREATE TABLE IF NOT EXISTS `WilInv` (
  `mail` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `societe` varchar(100) NOT NULL,
  `reponse` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `WilInv`
--

INSERT INTO `WilInv` (`mail`, `prenom`, `nom`, `societe`, `reponse`) VALUES
('a.nunc@elementum.ca', 'Camilla', 'Black', 'At Pretium Ltd', 1),
('Aliquam.auctor.velit@Phasellusin.ca', 'Imani', 'Lloyd', 'Turpis Company', 1),
('Aliquam.ultrices@Aliquamtinciduntnunc.net', 'Craig', 'Puckett', 'Morbi LLP', NULL),
('aliquam@sedpede.org', 'Amity', 'Preston', 'Donec Consectetuer Mauris Associates', 0),
('aliquet.diam@Sedeu.net', 'Hilda', 'Nieves', 'Vulputate Velit Eu Institute', 0),
('aliquet.vel@estMauriseu.ca', 'Kiona', 'Gilliam', 'Leo Elementum Sem Consulting', 0),
('aliquet@CrasinterdumNunc.org', 'Devin', 'Patton', 'Dignissim Pharetra Associates', NULL),
('amet.luctus.vulputate@nisl.edu', 'Vivien', 'Sweeney', 'Proin Eget Corp.', NULL),
('amet@massa.org', 'Aladdin', 'Henry', 'Nunc Inc.', NULL),
('ante.ipsum.primis@sem.co.uk', 'Ingrid', 'Clay', 'Sagittis Lobortis Mauris Foundation', NULL),
('arcu@commodoauctor.net', 'Edward', 'Cervantes', 'Fringilla Est Corp.', NULL),
('consequat.purus@congueIn.co.uk', 'Grady', 'Rosa', 'Mi Institute', NULL),
('Curae.Donec@vestibulumMaurismagna.edu', 'Katell', 'Whitley', 'Fermentum Convallis Ligula Ltd', NULL),
('dictum.magna@sitamet.com', 'Madaline', 'Justice', 'Lorem Lorem Limited', NULL),
('Donec.est@nasceturridiculusmus.org', 'Addison', 'Reyes', 'Egestas Sed Pharetra Company', 0),
('Donec.feugiat@sit.edu', 'Phillip', 'Moses', 'In Felis Corporation', NULL),
('Donec.nibh.Quisque@ipsum.ca', 'Madeline', 'Oconnor', 'Donec Ltd', 0),
('egestas.blandit@scelerisquemollisPhasellus.edu', 'Winifred', 'Horne', 'A Industries', NULL),
('egestas@arcueuodio.net', 'Miriam', 'Hunt', 'Pharetra Nam Foundation', NULL),
('eget.metus@iaculisenimsit.co.uk', 'Dennis', 'Rice', 'Adipiscing Company', NULL),
('eget@egestas.ca', 'Deacon', 'Foreman', 'Justo Proin Non Corporation', NULL),
('elementum.lorem.ut@et.ca', 'Desirae', 'Cooke', 'Cursus Et Inc.', NULL),
('elit.erat@Morbiquis.net', 'Hermione', 'Phillips', 'Fermentum LLC', NULL),
('enim.Sed@consectetuer.net', 'Tyrone', 'Mercer', 'Magnis Dis Parturient LLC', NULL),
('est@tristiqueneque.net', 'Isaac', 'Leach', 'Nulla Eget Metus Limited', 1),
('et.magnis@antebibendum.ca', 'Giselle', 'Ortega', 'Eget Ipsum Suspendisse Corporation', NULL),
('et.risus.Quisque@idmagnaet.ca', 'Ian', 'Woodward', 'Imperdiet Ullamcorper Duis Limited', NULL),
('eu.enim.Etiam@duilectus.co.uk', 'Illiana', 'Burton', 'Ultrices LLC', NULL),
('eu@nasceturridiculus.net', 'Abdul', 'Sullivan', 'Fringilla LLP', NULL),
('fermentum.convallis.ligula@condimentum.net', 'Ria', 'Wade', 'Phasellus At Augue Corporation', NULL),
('fermentum.metus.Aenean@diamPellentesquehabitant.net', 'Kennan', 'Nguyen', 'Bibendum Ullamcorper Company', NULL),
('fringilla@sodaleselit.net', 'Ira', 'Kemp', 'Cras Pellentesque Sed LLP', NULL),
('Fusce.fermentum@velnisl.com', 'Timothy', 'Ellis', 'Lacinia Vitae Sodales Inc.', NULL),
('gravida.molestie.arcu@lacus.edu', 'Ahmed', 'Lester', 'Ornare Inc.', NULL),
('habitant@liberoProinsed.com', 'Linus', 'Tyson', 'Vel Sapien Corporation', NULL),
('iaculis.enim@ac.com', 'Reed', 'Riddle', 'Et Foundation', NULL),
('iaculis.lacus@lectusantedictum.org', 'Orlando', 'Moran', 'Neque Sed Industries', NULL),
('In.at.pede@porttitortellusnon.net', 'Chanda', 'Dodson', 'Massa Foundation', NULL),
('in@nibhDonecest.edu', 'Ivy', 'Cameron', 'Ullamcorper Nisl Arcu Corporation', NULL),
('Integer.mollis.Integer@nibhdolornonummy.edu', 'Rogan', 'Guy', 'Libero Morbi Corporation', NULL),
('Integer@diam.org', 'Jesse', 'Berry', 'Dui Semper Et Ltd', NULL),
('interdum.Nunc@necmollis.org', 'Alice', 'Witt', 'Blandit Company', NULL),
('ipsum.cursus@et.edu', 'Chase', 'Lynn', 'Ac Corporation', NULL),
('ipsum.non@facilisis.edu', 'Xandra', 'Whitley', 'Rhoncus Industries', NULL),
('justo.faucibus.lectus@sapiengravida.ca', 'Darrel', 'Rivers', 'Nam Ac Corporation', NULL),
('justo@vehiculaaliquetlibero.net', 'Rahim', 'Marks', 'Lacus Corp.', NULL),
('lacus.Nulla@massa.co.uk', 'Chava', 'Kerr', 'Proin Velit Ltd', NULL),
('lacus@augueeutempor.org', 'Elliott', 'Mosley', 'Primis Corporation', NULL),
('laoreet@quam.ca', 'Aaron', 'Sparks', 'Iaculis Industries', NULL),
('libero.dui@Sedidrisus.edu', 'Hector', 'Frazier', 'Blandit Congue In LLC', NULL),
('ligula.Aenean@lorem.org', 'Teegan', 'Workman', 'Nibh Sit Associates', NULL),
('ligula.Aenean@tinciduntvehicularisus.org', 'Lydia', 'Wyatt', 'Luctus LLC', NULL),
('ligula@consectetueripsumnunc.co.uk', 'Duncan', 'Frederick', 'Egestas A Scelerisque Industries', NULL),
('lobortis@aliquetvelvulputate.net', 'Felix', 'Sampson', 'Massa Quisque Institute', NULL),
('luctus.vulputate.nisi@porttitorinterdumSed.co.uk', 'Garth', 'Harding', 'Ut Corporation', NULL),
('Maecenas.mi.felis@egestas.ca', 'Ariana', 'Buck', 'Mi Ac LLP', NULL),
('magnis.dis@Inmi.co.uk', 'Kaden', 'Baker', 'Eu Nibh Inc.', NULL),
('Mauris.nulla@arcuVestibulumut.net', 'Akeem', 'Strickland', 'Augue Inc.', NULL),
('Mauris.quis@cursus.org', 'William', 'Snow', 'Suspendisse Tristique Neque Industries', NULL),
('mi.eleifend@magna.co.uk', 'Yoko', 'Mooney', 'Pede Corporation', NULL),
('mi.pede.nonummy@placerat.com', 'Jescie', 'Mccray', 'Aliquet Libero Integer Ltd', NULL),
('molestie.tortor.nibh@arcuSed.org', 'Kai', 'Dodson', 'A Corporation', NULL),
('mollis.non@ametultriciessem.co.uk', 'Lucian', 'Lawrence', 'Aliquet Libero Foundation', NULL),
('mollis@pede.edu', 'Imelda', 'Bishop', 'Volutpat Nulla Facilisis Inc.', NULL),
('nec.leo.Morbi@Aliquamgravida.co.uk', 'Audrey', 'Montgomery', 'Pellentesque Corporation', NULL),
('neque.Morbi@inlobortis.co.uk', 'Ivy', 'Valentine', 'Dictum Corp.', NULL),
('neque@utmolestiein.edu', 'Chaney', 'Osborne', 'Cras Dolor Company', NULL),
('nulla.at@magnanecquam.co.uk', 'Zeph', 'Montgomery', 'Amet Luctus Limited', NULL),
('Nulla@nonvestibulum.co.uk', 'Ebony', 'Roy', 'Quam Curabitur Associates', NULL),
('odio@interdumlibero.co.uk', 'Hall', 'Dyer', 'Diam Sed Diam Incorporated', NULL),
('odio@velitPellentesque.edu', 'Brooke', 'Mcintosh', 'Nam Incorporated', NULL),
('orci@nuncrisus.net', 'Carson', 'Burris', 'Morbi Limited', NULL),
('ornare@elit.org', 'Wesley', 'Carroll', 'Phasellus In Felis PC', NULL),
('Pellentesque.ut@Nulla.com', 'Demetria', 'Anthony', 'Orci Lacus Vestibulum LLP', NULL),
('penatibus@odiovelest.ca', 'Remedios', 'Sweet', 'Placerat Corporation', NULL),
('pharetra.nibh@auctor.net', 'Halla', 'Morton', 'Vulputate Industries', NULL),
('porttitor.tellus@convallisincursus.net', 'Kadeem', 'Stanton', 'Ut Semper Pretium Associates', NULL),
('posuere@ipsumnunc.net', 'Cameron', 'Robles', 'Tempor Foundation', NULL),
('Praesent.interdum@tortorat.ca', 'Holly', 'Hansen', 'Mauris Morbi Institute', NULL),
('Proin.dolor.Nulla@loremut.org', 'Jolie', 'Patel', 'Nec LLC', NULL),
('purus.in@sagittisDuisgravida.net', 'Rhona', 'Meyers', 'Sollicitudin LLC', NULL),
('quam.quis.diam@idblandit.net', 'Richard', 'Allen', 'Dictum Cursus Nunc Associates', NULL),
('Quisque.varius@Donecat.co.uk', 'Phelan', 'Waters', 'Morbi Tristique Senectus Corporation', NULL),
('rhoncus@nisinibhlacinia.org', 'Quinn', 'Horne', 'Egestas A Incorporated', NULL),
('risus@purus.net', 'Lucian', 'Higgins', 'Eleifend Inc.', NULL),
('risus@sit.ca', 'Mariko', 'Savage', 'At Inc.', NULL),
('sapien@nonlacinia.co.uk', 'Noelani', 'Marsh', 'Integer Inc.', NULL),
('Sed@diamSed.com', 'Hermione', 'Pacheco', 'Proin Corp.', NULL),
('semper.egestas.urna@consectetuer.com', 'Heidi', 'Hoffman', 'Rutrum Magna PC', NULL),
('sit@tellusidnunc.net', 'Colby', 'Perez', 'Vivamus Incorporated', NULL),
('tempor.augue@ametornare.com', 'Kyla', 'Hoover', 'Risus Quis Diam Consulting', NULL),
('tincidunt.pede.ac@Maecenasliberoest.com', 'Medge', 'Giles', 'Dictum Sapien Aenean Associates', NULL),
('ut.cursus@varius.org', 'Yoshio', 'Fleming', 'Odio Tristique Pharetra Inc.', NULL),
('vel.quam.dignissim@dolorelit.co.uk', 'Jared', 'Lamb', 'Dolor Tempus Non Institute', NULL),
('velit.dui.semper@risusNulla.ca', 'Coby', 'Becker', 'Ornare Placerat PC', NULL),
('vitae.erat.vel@semmolestie.com', 'Palmer', 'Chen', 'Fringilla Ltd', NULL),
('vitae.odio.sagittis@aliquet.co.uk', 'Griffith', 'Witt', 'Velit Quisque Varius Foundation', NULL),
('Vivamus@aliquetProin.ca', 'Erich', 'Brady', 'Eget Limited', NULL),
('vulputate.risus@Sed.org', 'Amir', 'Bentley', 'Ultrices Sit Institute', NULL),
('vulputate@quam.co.uk', 'Britanney', 'Carrillo', 'Enim Company', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `WilInv`
--
ALTER TABLE `WilInv`
 ADD PRIMARY KEY (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
