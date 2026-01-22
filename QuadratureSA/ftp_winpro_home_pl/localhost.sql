-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Czas wygenerowania: 05 Lut 2010, 20:16
-- Wersja serwera: 5.0.66
-- Wersja PHP: 5.2.6
-- 
-- Baza danych: `winpro2`
-- 
CREATE DATABASE `winpro2` DEFAULT CHARACTER SET latin2 COLLATE latin2_general_ci;
USE `winpro2`;

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `id_translation`
-- 

CREATE TABLE `id_translation` (
  `id_text` varchar(30) NOT NULL,
  `polish` varchar(150) default NULL,
  `french` varchar(150) default NULL,
  `english` varchar(150) default NULL,
  PRIMARY KEY  (`id_text`)
) ENGINE=MyISAM DEFAULT CHARSET=latin2;

-- 
-- Zrzut danych tabeli `id_translation`
-- 

INSERT INTO `id_translation` VALUES ('id_text', 'Polski', 'french', 'english');
INSERT INTO `id_translation` VALUES ('id_0001', 'L-Polski', 'L-French', 'L-English');
INSERT INTO `id_translation` VALUES ('id_0002', 'Strona administratora', 'Page d''administration', 'Administration page');
INSERT INTO `id_translation` VALUES ('id_0003', 'Wizualizacja zamÛwieÒ       Dawid Trojanowski 508-066-905   zapraszam na  http://www.winpro.pl/pub', 'Visualisation des commandes', 'Order view       WinPro    " Dawid Trojanowski tel. 508 066 905 "');
INSERT INTO `id_translation` VALUES ('id_0004', 'Uøytkownik', 'Utilisateur', 'Login');
INSERT INTO `id_translation` VALUES ('id_0005', 'Has≥o', 'Mot de passe', 'Password');
INSERT INTO `id_translation` VALUES ('id_0006', 'ProszÍ wpisaÊ nazwÍ uøytkownika i has≥o           WinPro', 'Veuillez entrez votre nom d''utilisateur et votre mot de passe', 'Please enter your login and password      WinPro');
INSERT INTO `id_translation` VALUES ('id_0007', 'Instrukcje dostawy', 'Instructions de livraison', 'Delivery instructions');
INSERT INTO `id_translation` VALUES ('id_0008', 'Data koÒca', 'Date de fin', 'End date');
INSERT INTO `id_translation` VALUES ('id_0009', 'ProszÍ wybraÊ daty', 'Veuillez s&#233;lectionner les dates', 'Please select date');
INSERT INTO `id_translation` VALUES ('id_0010', 'Administracja portalu', 'Gestion du site', 'Site management');
INSERT INTO `id_translation` VALUES ('id_0011', 'Administracja uøytkownik', 'Gestion des utilisateurs', 'User management');
INSERT INTO `id_translation` VALUES ('id_0012', 'DodaÊ uøytkownika', 'Ajouter un utilisateur', 'Add a user');
INSERT INTO `id_translation` VALUES ('id_0013', 'Usun±Ê uøytkownika', 'Supprimer un utilisateur', 'Delete a user');
INSERT INTO `id_translation` VALUES ('id_0014', 'ZmodyfikowaÊ uøytkownika', 'Modifier un utilisateur', 'Modify a user');
INSERT INTO `id_translation` VALUES ('id_0015', 'DodaÊ jÍzyk', 'Ajouter une langue', 'Add a language');
INSERT INTO `id_translation` VALUES ('id_0016', 'ZmodyfikowaÊ jÍzyki', 'Modifier les langues', 'Modify the languages');
INSERT INTO `id_translation` VALUES ('id_0017', 'ZmodyfikowaÊ t≥umaczenia', 'Modifier les traductions', 'Modify the translations');
INSERT INTO `id_translation` VALUES ('id_0018', 'ZmodyfikowaÊ maksimum punkt', 'Modifier le maximum de points journaliers', 'Modify the maximum of daily points');
INSERT INTO `id_translation` VALUES ('id_0019', 'Wys≥aÊ', 'Envoyer', 'Send');
INSERT INTO `id_translation` VALUES ('id_0020', 'Typ', 'Type', 'Type');
INSERT INTO `id_translation` VALUES ('id_0021', 'Nazwa WinPro', 'Nom WinPro', 'WinPro name');
INSERT INTO `id_translation` VALUES ('id_0022', 'JÍzyk', 'Langue', 'Language');
INSERT INTO `id_translation` VALUES ('id_0023', 'PotwierdziÊ has≥o', 'Confirmer mot de passe', 'Confirm password');
INSERT INTO `id_translation` VALUES ('id_0024', 'StworzyÊ', 'Cr&#233;er', 'Create');
INSERT INTO `id_translation` VALUES ('id_0025', 'AnulowaÊ', 'Annuler', 'Cancel');
INSERT INTO `id_translation` VALUES ('id_0026', 'Strona g≥Ûwna', 'Acceuil', 'Home');
INSERT INTO `id_translation` VALUES ('id_0027', 'Klient', 'Client', 'Customer');
INSERT INTO `id_translation` VALUES ('id_0028', 'Uøytkownik', 'Employ&#233;', 'Employee');
INSERT INTO `id_translation` VALUES ('id_0029', 'Administrator', 'Administrateur', 'Administrator');
INSERT INTO `id_translation` VALUES ('id_0030', 'Usun±Ê', 'Supprimer', 'Delete');
INSERT INTO `id_translation` VALUES ('id_0031', 'WybraÊ', 'Choisir', 'Select');
INSERT INTO `id_translation` VALUES ('id_0032', 'PrzystosowaÊ', 'Appliquer', 'Apply');
INSERT INTO `id_translation` VALUES ('id_0033', 'Flaga', 'Drapeau', 'Flag');
INSERT INTO `id_translation` VALUES ('id_0034', 'Aktywne', 'Activ&#233;e', 'Active');
INSERT INTO `id_translation` VALUES ('id_0035', 'ZobaczyÊ zamÛwienie', 'Voir les commandes entre ces 2 dates', 'See orders between these 2 dates');
INSERT INTO `id_translation` VALUES ('id_0036', 'ZamÛwienie', 'N&#186; commande', 'Order Nr');
INSERT INTO `id_translation` VALUES ('id_0037', 'Referencja', 'R&#233;f&#233;rence', 'Reference');
INSERT INTO `id_translation` VALUES ('id_0038', 'T≥umaczenie', 'Traduction', 'Translation');
INSERT INTO `id_translation` VALUES ('id_0039', 'Data zamÛwieni', 'Date commande', 'Order date');
INSERT INTO `id_translation` VALUES ('id_0040', 'Data dostawy', 'Date livraison', 'Delivery date');
INSERT INTO `id_translation` VALUES ('id_0041', 'Punkty', 'Points', 'Points');
INSERT INTO `id_translation` VALUES ('id_0042', 'Data produkcji planowana', 'Date de fabrication pr&#233;vue', 'Expected production date');
INSERT INTO `id_translation` VALUES ('id_0043', 'Suma punkt', 'Total des points', 'Total of the points');
INSERT INTO `id_translation` VALUES ('id_0044', 'Maksimum dzienne', 'Maximum journalier', 'Daily maximum');
INSERT INTO `id_translation` VALUES ('id_0045', 'Data pocz±tku', 'Date de d&#233;but', 'Begining date');
INSERT INTO `id_translation` VALUES ('id_0046', 'Data koÒca', 'Date de fin', 'End date');
INSERT INTO `id_translation` VALUES ('id_0047', 'Wybierz', 'Voir', 'View');
INSERT INTO `id_translation` VALUES ('id_0048', 'StyczeÒ', 'Janvier', 'January');
INSERT INTO `id_translation` VALUES ('id_0049', 'Luty', 'F&#233;vrier', 'February');
INSERT INTO `id_translation` VALUES ('id_0050', 'Marzec', 'Mars', 'March');
INSERT INTO `id_translation` VALUES ('id_0051', 'KwiecieÒ', 'Avril', 'April');
INSERT INTO `id_translation` VALUES ('id_0052', 'Maj', 'Mai', 'May');
INSERT INTO `id_translation` VALUES ('id_0053', 'Czerwiec', 'Juin', 'June');
INSERT INTO `id_translation` VALUES ('id_0054', 'Lipiec', 'Juillet', 'July');
INSERT INTO `id_translation` VALUES ('id_0056', '¶ierpieÒ', 'Ao&#251;t', 'August');
INSERT INTO `id_translation` VALUES ('id_0057', 'WrzesieÒ', 'Septembre', 'September');
INSERT INTO `id_translation` VALUES ('id_0058', 'Paºdziernik', 'Octobre', 'October');
INSERT INTO `id_translation` VALUES ('id_0059', 'Listopad', 'Novembre', 'November');
INSERT INTO `id_translation` VALUES ('id_0060', 'GrudzieÒ', 'D&#233;cembre', 'December');
INSERT INTO `id_translation` VALUES ('id_0061', 'Nie', 'Dim', 'Sun');
INSERT INTO `id_translation` VALUES ('id_0062', 'Pon', 'Lun', 'Mon');
INSERT INTO `id_translation` VALUES ('id_0063', 'Wto', 'Mar', 'Tue');
INSERT INTO `id_translation` VALUES ('id_0064', '¶ro', 'Mer', 'Wed');
INSERT INTO `id_translation` VALUES ('id_0065', 'Czw', 'Jeu', 'Thu');
INSERT INTO `id_translation` VALUES ('id_0066', 'Pi±', 'Ven', 'Fri');
INSERT INTO `id_translation` VALUES ('id_0067', 'Sob', 'Sam', 'Sat');
INSERT INTO `id_translation` VALUES ('id_0068', 'Zamkn±Ê', 'Fermer', 'Close');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `planning`
-- 

CREATE TABLE `planning` (
  `numorder` varchar(16) NOT NULL default '',
  `reference` varchar(80) default NULL,
  `customer` varchar(80) default NULL,
  `dateorder` date default NULL,
  `dateproduction` date default NULL,
  `datedelivery` date default NULL,
  `productionlength` float(8,2) default NULL,
  `deliveryinstruction` mediumtext,
  PRIMARY KEY  (`numorder`)
) ENGINE=MyISAM DEFAULT CHARSET=latin2;

-- 
-- Zrzut danych tabeli `planning`
-- 

INSERT INTO `planning` VALUES ('ZAM/2005/00001', '', 'DAREK', '2007-04-11', '2007-04-17', '2007-04-19', 10.50, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00002', 'Piotr', 'DAREK', '2007-04-11', '1899-12-30', '2007-04-19', 10.50, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00003', 'Krzysiu', 'DAREK', '2007-04-11', '2007-04-17', '2007-04-19', 10.50, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00004', '', 'DAREK', '2007-04-11', '2007-04-17', '2007-04-19', 10.50, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00005', '', 'DAREK', '2007-04-11', '2007-04-17', '2007-04-19', 10.50, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00010', 'Dawid', 'DAREK', '2007-04-24', '2007-05-03', '2007-05-05', 30.50, 'dostawa do Achen');
INSERT INTO `planning` VALUES ('ZAM/2007/00011', 'Dawid', 'DAREK', '2007-04-24', '2007-05-05', '2007-05-07', 30.50, 'dostawa do Achen');
INSERT INTO `planning` VALUES ('ZAM/2007/00012', 'Edzio', 'DAREK', '2007-04-24', '2007-05-07', '2007-05-09', 30.50, 'dostawa do Wroc-awia');
INSERT INTO `planning` VALUES ('ZAM/2007/00013', 'Krzyù', 'DAREK', '2007-04-24', '2007-05-07', '2007-05-09', 43.83, 'dostawa do Wroc-awia');
INSERT INTO `planning` VALUES ('ZAM/2007/00014', 'Dawid', 'DAREK', '2007-04-24', '2007-05-07', '2007-05-09', 43.83, 'dostawa do Achen');
INSERT INTO `planning` VALUES ('ZAM/2007/00015', 'Dawid', 'DAREK', '2007-04-24', '2007-05-09', '2007-05-11', 43.83, 'dostawa do Achen');
INSERT INTO `planning` VALUES ('ZAM/2007/00016', 'Dawid', 'DAREK', '2007-04-24', '2007-05-10', '2007-05-16', 43.83, 'dostawa do Liege');
INSERT INTO `planning` VALUES ('ZAM/2007/00017', 'Dawid', 'DAREK', '2007-05-08', '2007-05-10', '2007-05-16', 43.83, 'dostawa do Liege');
INSERT INTO `planning` VALUES ('ZAM/2007/00022', 'Dawid', 'Piotr', '2007-05-25', '2007-05-11', '2007-05-17', 343.33, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00023', 'Dawid', 'DAREK', '2007-11-09', '2007-11-17', '2007-11-19', 59.17, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00024', 'Dawid', 'DAREK', '2007-11-09', '2007-11-19', '2007-11-21', 59.17, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00025', 'Dawid', 'DAREK', '2007-11-09', '2007-11-20', '2007-11-22', 59.17, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00018', 'Dawid', 'Piotr', '2007-05-25', '2007-05-10', '2007-05-16', 43.83, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00019', 'Dawid', 'Piotr', '2007-05-25', '2007-05-10', '2007-05-16', 43.83, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00020', 'Dawid', 'Piotr', '2007-05-25', '2007-05-10', '2007-05-16', 59.17, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00021', 'Dawid', 'DAREK', '2007-05-25', '2007-05-10', '2007-05-16', 59.17, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00006', '', 'DAREK', '2007-04-17', '2007-04-23', '2007-04-25', 10.50, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00007', 'zle-12354-100%', 'DAREK', '2007-04-24', '2007-04-25', '2007-04-30', 90.50, 'zamowienie opoznione o 2 dni');
INSERT INTO `planning` VALUES ('ZAM/2007/00008', 'Dawid', 'DAREK', '2007-04-24', '2007-04-23', '2007-04-27', 90.50, 'zamowienie opoznione o 2 dni');
INSERT INTO `planning` VALUES ('ZAM/2007/00009', 'Jean-Marc', 'DAREK', '2007-04-24', '2007-05-03', '2007-05-05', 90.50, 'zamowienie opoznione o 2 dni');
INSERT INTO `planning` VALUES ('A 0007', '', 'BEREH Sp. z o.o.', '2004-08-12', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('C 00046', '', 'BEREH Sp. z o.o.', '2003-12-30', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('OFE/2005/00169', '', 'BEREH Sp. z o.o.', '2005-04-28', '0000-00-00', '0000-00-00', 0.67, '');
INSERT INTO `planning` VALUES ('OFE/2005/00184', '', 'BEREH Sp. z o.o.', '2005-08-01', '0000-00-00', '0000-00-00', 0.13, '');
INSERT INTO `planning` VALUES ('OFE00155', '', 'Katarzyna Nowak', '2005-03-12', '2005-03-12', '2005-03-12', 0.13, '');
INSERT INTO `planning` VALUES ('OFR0035', '', 'BEREH Sp. z o.o.', '2004-03-16', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('OFR0058', '', 'Katarzyna Nowak', '2004-03-24', '0000-00-00', '2004-04-19', 0.28, '');
INSERT INTO `planning` VALUES ('OFR0062', '', 'Katarzyna Nowak', '2004-03-25', '0000-00-00', '2004-04-19', 0.28, '');
INSERT INTO `planning` VALUES ('OFR0130', '', 'BEREH Sp. z o.o.', '2004-11-18', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('OFR0132', '', 'BEREH Sp. z o.o.', '2005-01-22', '0000-00-00', '0000-00-00', 0.25, '');
INSERT INTO `planning` VALUES ('OFRE00135', '', 'Katarzyna Nowak', '2005-02-17', '0000-00-00', '0000-00-00', 0.67, '');
INSERT INTO `planning` VALUES ('OFRE00143', 'Dawida tr', 'BEREH Sp. z o.o.', '2005-02-24', '0000-00-00', '0000-00-00', 2.00, '');
INSERT INTO `planning` VALUES ('Z/OFR0106', '', 'BEREH Sp. z o.o.', '2004-11-18', '0000-00-00', '0000-00-00', 0.20, '');
INSERT INTO `planning` VALUES ('Z0064', '', 'BEREH Sp. z o.o.', '2004-03-22', '2004-03-23', '0000-00-00', 6.33, '');
INSERT INTO `planning` VALUES ('Z0066', '', 'Katarzyna Nowak', '2004-03-24', '2004-03-24', '2004-04-19', 8.33, '');
INSERT INTO `planning` VALUES ('Z0070', '', 'BEREH Sp. z o.o.', '2004-03-26', '0000-00-00', '0000-00-00', 14.67, '');
INSERT INTO `planning` VALUES ('Z0071', '', 'BEREH Sp. z o.o.', '2004-03-26', '2004-06-11', '0000-00-00', 7.00, '');
INSERT INTO `planning` VALUES ('Z0072', '', 'Katarzyna Nowak', '2004-03-26', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0073', '', 'Daniel Kowalski', '2004-03-26', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0074', '', 'Daniel Kowalski', '2004-03-26', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0075', '', 'Daniel Kowalski', '2004-03-26', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0076', '', 'Daniel Kowalski', '2004-03-26', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0077', '', 'Daniel Kowalski', '2004-03-26', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0078', '', 'Daniel Kowalski', '2004-03-26', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0080', '', 'BEREH Sp. z o.o.', '2004-03-28', '2004-03-26', '0000-00-00', 7.00, '');
INSERT INTO `planning` VALUES ('Z0081', '', 'BEREH Sp. z o.o.', '2004-03-28', '2004-03-26', '0000-00-00', 7.00, '');
INSERT INTO `planning` VALUES ('Z0082', '', 'Daniel Kowalski', '2004-04-15', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0101', '', 'Katarzyna Nowak', '2004-05-25', '0000-00-00', '0000-00-00', 6.67, '');
INSERT INTO `planning` VALUES ('Z0123', '', 'BEREH Sp. z o.o.', '2004-07-02', '0000-00-00', '0000-00-00', 14.67, '');
INSERT INTO `planning` VALUES ('Z0124', '', 'BEREH Sp. z o.o.', '2004-07-02', '2004-08-08', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('Z0165', '', 'BEREH Sp. z o.o.', '2004-09-24', '0000-00-00', '0000-00-00', 0.20, '');
INSERT INTO `planning` VALUES ('Z0169', '', 'BEREH Sp. z o.o.', '2004-10-21', '0000-00-00', '0000-00-00', 7.10, '');
INSERT INTO `planning` VALUES ('Z0173', '', 'BEREH Sp. z o.o.', '2004-11-18', '0000-00-00', '0000-00-00', 0.20, '');
INSERT INTO `planning` VALUES ('Z0175', '', 'BEREH Sp. z o.o.', '2004-12-02', '0000-00-00', '0000-00-00', 5.84, '');
INSERT INTO `planning` VALUES ('Z0178', '', 'BEREH Sp. z o.o.', '2004-12-09', '0000-00-00', '0000-00-00', 5.64, '');
INSERT INTO `planning` VALUES ('Z0180', '', 'BEREH Sp. z o.o.', '2004-12-09', '0000-00-00', '0000-00-00', 8.73, '');
INSERT INTO `planning` VALUES ('Z0187', '', 'BEREH Sp. z o.o.', '2004-12-21', '2005-05-31', '2005-01-17', 7.13, '');
INSERT INTO `planning` VALUES ('Z0193', '', 'BEREH Sp. z o.o.', '2005-01-04', '0000-00-00', '0000-00-00', 6.68, '');
INSERT INTO `planning` VALUES ('Z0204', '', 'BEREH Sp. z o.o.', '2005-01-22', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00273', '', 'Daniel Kowalski', '2005-04-15', '0000-00-00', '0000-00-00', 0.67, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00274', '', 'BEREH Sp. z o.o.', '2005-04-19', '0000-00-00', '2005-05-16', 1.83, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00280', '', 'BEREH Sp. z o.o.', '2005-04-27', '0000-00-00', '0000-00-00', 0.67, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00282', '', 'BEREH Sp. z o.o.', '2005-04-28', '2005-04-28', '2005-05-02', 0.67, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00294', '', 'BEREH Sp. z o.o.', '2005-05-18', '0000-00-00', '0000-00-00', 0.67, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00313', '', 'BEREH Sp. z o.o.', '2005-07-04', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00314', '', 'BEREH Sp. z o.o.', '2005-07-07', '0000-00-00', '0000-00-00', 0.67, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00315', '', 'BEREH Sp. z o.o.', '2005-07-18', '0000-00-00', '0000-00-00', 6.17, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00321', '', 'BEREH Sp. z o.o.', '2005-09-16', '0000-00-00', '0000-00-00', 16.00, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00322', '', 'BEREH Sp. z o.o.', '2005-09-28', '0000-00-00', '0000-00-00', 86.67, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00323', '', 'Katarzyna Nowak', '2005-10-12', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('ZAM/2005/00325', '', 'BEREH Sp. z o.o.', '2006-01-11', '0000-00-00', '0000-00-00', 0.00, '');
INSERT INTO `planning` VALUES ('ZAM00223', '', 'BEREH Sp. z o.o.', '2005-03-09', '0000-00-00', '0000-00-00', 0.67, '');
INSERT INTO `planning` VALUES ('ZAM00229', '', 'Katarzyna Nowak', '2005-03-12', '0000-00-00', '0000-00-00', 0.13, '');
INSERT INTO `planning` VALUES ('ZAM00232', '', 'BEREH Sp. z o.o.', '2005-03-12', '0000-00-00', '0000-00-00', 0.67, '');
INSERT INTO `planning` VALUES ('ZAM00234', '', 'BEREH Sp. z o.o.', '2005-03-15', '2005-03-15', '2005-04-11', 0.13, '');
INSERT INTO `planning` VALUES ('ZAM00241', '', 'BEREH Sp. z o.o.', '2005-03-27', '0000-00-00', '0000-00-00', 13.33, '');
INSERT INTO `planning` VALUES ('ZAM00242', '', 'Katarzyna Nowak', '2005-03-27', '0000-00-00', '0000-00-00', 1.17, '');
INSERT INTO `planning` VALUES ('ZAM00245', '', 'BEREH Sp. z o.o.', '2005-04-01', '2005-04-01', '2005-04-01', 1.17, '');
INSERT INTO `planning` VALUES ('ZAM00269', '', 'BEREH Sp. z o.o.', '2005-04-15', '2005-04-15', '2005-05-09', 0.27, '');
INSERT INTO `planning` VALUES ('ZAM00270', '', 'Katarzyna Nowak', '2005-04-15', '2005-04-15', '2005-05-09', 3.33, '');
INSERT INTO `planning` VALUES ('ZAM00272', '', 'Daniel Kowalski', '2005-04-15', '2005-04-15', '2005-04-15', 0.67, '');
INSERT INTO `planning` VALUES ('ZAM/2007/00026', 'Order David', 'DAREK', '2008-06-07', '2008-06-15', '2008-06-17', 59.17, 'pilny transport do Liege');
INSERT INTO `planning` VALUES ('ZAM-08-00027', 'Order David', 'DAREK', '2008-06-07', '2008-06-15', '2008-06-18', 59.17, 'pilny transport do Liege');
INSERT INTO `planning` VALUES ('ZAM-08-00028', 'Order David', 'DAREK', '2008-06-07', '2008-06-17', '2008-06-19', 59.17, 'pilny transport do Achen');
INSERT INTO `planning` VALUES ('ZAM-08-00029', 'Order David', 'DAREK', '2008-06-07', '2008-06-28', '2008-06-30', 59.17, 'pilny transport do Achen');
INSERT INTO `planning` VALUES ('ZAM-08-00030', 'Order David', 'Piotr', '2008-06-07', '2008-06-28', '2008-06-30', 1410.00, '');
INSERT INTO `planning` VALUES ('ZAM-08-00031', 'Order David', 'Piotr', '2008-06-07', '2008-07-15', '2008-07-17', 1410.00, '');
INSERT INTO `planning` VALUES ('ZAM-08-00032', 'Order David', 'DAREK', '2008-06-07', '2008-07-28', '2008-07-30', 305.00, 'Uwaga bardzo pilne !!!!');
INSERT INTO `planning` VALUES ('ZAM-08-00033', 'Order David', 'DAREK', '2008-06-07', '2008-08-01', '2008-08-03', 305.00, 'Uwaga bardzo pilne !!!!');
INSERT INTO `planning` VALUES ('ZAM-08-00034', 'Dawid', 'Piotr', '2008-06-07', '2007-05-13', '2007-05-15', 305.00, '');
INSERT INTO `planning` VALUES ('ZAM-08-00035', 'Dawid', 'Piotr', '2008-06-07', '2008-05-16', '2008-05-18', 305.00, 'Pilne');
INSERT INTO `planning` VALUES ('ZAM-08-00036', 'Olivier', 'Piotr', '2008-06-07', '2008-05-17', '2008-05-19', 305.00, 'Pilne');
INSERT INTO `planning` VALUES ('ZAM-08-00037', 'Olivier', 'DAREK', '2008-06-07', '2008-05-18', '2008-05-20', 305.00, 'super Pilne !!!!');
INSERT INTO `planning` VALUES ('1', '', 'Dawid Trojanowski', '2009-02-24', '0000-00-00', '0000-00-00', 1.50, '');
INSERT INTO `planning` VALUES ('2', '', 'Dawid Trojanowski', '2009-02-24', '0000-00-00', '0000-00-00', 1.50, '');
INSERT INTO `planning` VALUES ('3', '', 'Dawid Trojanowski   2', '2009-03-24', '0000-00-00', '0000-00-00', 1.49, '');
INSERT INTO `planning` VALUES ('ZAM-015', '', 'Dawid Trojanowski   2', '2009-06-17', '2009-08-18', '2009-08-24', 4.12, '');
INSERT INTO `planning` VALUES ('ZAM-016', '', 'Dawid Trojanowski   2', '2009-08-13', '0000-00-00', '2009-09-19', 3.24, '');
INSERT INTO `planning` VALUES ('ZAM-10', '', 'Dawid Trojanowski   3', '2009-05-08', '0000-00-00', '2009-07-13', 1.50, '');
INSERT INTO `planning` VALUES ('ZAM-11', '', 'Dawid Trojanowski   4', '2009-05-08', '0000-00-00', '2009-07-13', 1.50, '');
INSERT INTO `planning` VALUES ('ZAM-12', '', 'Dawid Trojanowski   2', '2009-05-08', '0000-00-00', '2009-07-13', 1.50, '');
INSERT INTO `planning` VALUES ('ZAM-14', '', 'Dawid Trojanowski   3', '2009-05-12', '0000-00-00', '2009-09-14', 10.67, '');
INSERT INTO `planning` VALUES ('ZAM-4', '', 'Dawid Trojanowski   3', '2009-03-24', '0000-00-00', '2009-09-21', 1.49, '');
INSERT INTO `planning` VALUES ('ZAM-5', '', 'Dawid Trojanowski   3', '2009-03-31', '0000-00-00', '2009-03-31', 1.49, '');
INSERT INTO `planning` VALUES ('ZAM-6', '', 'Dawid Trojanowski   3', '2009-03-31', '0000-00-00', '2009-03-31', 0.76, '');
INSERT INTO `planning` VALUES ('ZAM-7', '', 'Dawid Trojanowski   2', '2009-05-07', '0000-00-00', '2009-07-13', 1.50, '');
INSERT INTO `planning` VALUES ('ZAM-8', '', 'Dawid Trojanowski   3', '2009-05-07', '0000-00-00', '2009-07-13', 1.50, '');
INSERT INTO `planning` VALUES ('ZAM-9', '', 'Dawid Trojanowski   4', '2009-05-07', '0000-00-00', '2009-07-13', 1.50, '');
INSERT INTO `planning` VALUES ('QWERTY', '', 'Dawid Trojanowski   2', '2009-10-07', '0000-00-00', '2009-12-14', 5.55, '');
INSERT INTO `planning` VALUES ('ZAM-019', '', 'Dawid Trojanowski   2', '2009-09-15', '0000-00-00', '2009-11-16', 2.66, '');
INSERT INTO `planning` VALUES ('ZAM-020', '', 'Dawid Trojanowski   3', '2009-09-28', '0000-00-00', '2009-11-30', 1.50, '');
INSERT INTO `planning` VALUES ('ZAM-021', '', 'Dawid Trojanowski   2', '2009-10-07', '0000-00-00', '2009-12-14', 5.55, '');
INSERT INTO `planning` VALUES ('ZAM-022', '', 'DAREK', '2009-10-23', '0000-00-00', '2009-12-28', 15.01, '');
INSERT INTO `planning` VALUES ('ZAM-023', '', 'Dawid Trojanowski   2', '2010-01-13', '0000-00-00', '2009-12-14', 5.55, '');
INSERT INTO `planning` VALUES ('ZAM-024', '', 'DAREK', '2010-01-13', '2010-01-13', '2010-01-13', 22.12, '');
INSERT INTO `planning` VALUES ('ZAM-025', '', 'DAREK', '2010-01-13', '2010-01-13', '2010-01-13', 38.92, '');
INSERT INTO `planning` VALUES ('ZAM-026', '', 'DAREK', '2010-01-13', '2010-01-13', '2010-01-13', 38.91, '');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `sessions`
-- 

CREATE TABLE `sessions` (
  `id_session` varchar(40) NOT NULL default '',
  `login` varchar(10) NOT NULL default '',
  `temps_limite` decimal(10,0) NOT NULL default '0',
  PRIMARY KEY  (`id_session`)
) ENGINE=MyISAM DEFAULT CHARSET=latin2;

-- 
-- Zrzut danych tabeli `sessions`
-- 

INSERT INTO `sessions` VALUES ('e5ec0688a4ce86df52ef1d3d0602c432', '.admin.', 1196454298);
INSERT INTO `sessions` VALUES ('d023c5b0ec7affd79f8bb997b8f0d27a', '.darek.', 1196454674);
INSERT INTO `sessions` VALUES ('e7f132bab1e1d64c34faa002fc3aa60f', '.dawid.', 1196454778);
INSERT INTO `sessions` VALUES ('931647b203fd52f49223654fd382390f', '.darek.', 1197802828);
INSERT INTO `sessions` VALUES ('3517525d908c64bc7b0c6b54974f2c32', '.darek.', 1197803382);
INSERT INTO `sessions` VALUES ('d485ca0f6fa20f4ad6b51951b6c9c74d', '.darek.', 1197803543);
INSERT INTO `sessions` VALUES ('9936d7dab5e57f64630f8e00d9db4343', '.darek.', 1201529441);
INSERT INTO `sessions` VALUES ('30d983249972996458589f9b36b3a4a9', '.darek.', 1212748880);
INSERT INTO `sessions` VALUES ('0de06792a218a071a765b7bfc7b6913f', '.darek.', 1212784609);
INSERT INTO `sessions` VALUES ('026b1340c8db6dd8e6c87a426d23feb6', '.admin.', 1212785134);
INSERT INTO `sessions` VALUES ('904709794b3959877a0b9588b96843d9', '.dawid.', 1212785693);
INSERT INTO `sessions` VALUES ('68d475a597fec9f583b246fcd3b28331', '.admin.', 1212786149);
INSERT INTO `sessions` VALUES ('1f215dff8095b3dc4cf09e71f1707536', '.darek.', 1212787321);
INSERT INTO `sessions` VALUES ('90e2a133056a693c9705700f4ef2d732', '.darek.', 1212827610);
INSERT INTO `sessions` VALUES ('57d36c5eaf9c9287d5a95d356d5ea6ad', '.darek.', 1212830375);
INSERT INTO `sessions` VALUES ('388b8cbb1531c7ace8cf16f8524fc7dc', '.darek.', 1212831316);
INSERT INTO `sessions` VALUES ('78e536e6a97547040be859dd9248bf5f', '.dawid.', 1212831778);
INSERT INTO `sessions` VALUES ('a8e8767a9da4d06d51f1aab36a6369ae', '.dawid.', 1212836852);
INSERT INTO `sessions` VALUES ('eeda5a533a98331a8052ee283ad87b5c', '.admin.', 1212837024);
INSERT INTO `sessions` VALUES ('9cd554e87022c04955f3721a015615d5', '.admin.', 1212837571);
INSERT INTO `sessions` VALUES ('3d2a92740c58347650090561912d0a56', '.dawid.', 1212839711);
INSERT INTO `sessions` VALUES ('559998e0019d1e193225cde06024b78e', '.dawid.', 1212841374);
INSERT INTO `sessions` VALUES ('81ef4025dda29d9c478cd291e994da27', '.darek.', 1212852908);
INSERT INTO `sessions` VALUES ('b9d7b07385e76e775f363ca59198902d', '.darek.', 1212858666);
INSERT INTO `sessions` VALUES ('d11c033453e4768c39a7beb3125bee33', '.dawid.', 1213000376);
INSERT INTO `sessions` VALUES ('2c15f7043ad0bb2bd439e5959f92a705', '.darek.', 1213016141);
INSERT INTO `sessions` VALUES ('9b695a6c5f322d95d0f256beff5dd482', '.dawid.', 1213016267);
INSERT INTO `sessions` VALUES ('acc29ffec9695cdde7344446545fd351', '.dawid.', 1213082122);
INSERT INTO `sessions` VALUES ('e8655fe9532efd09109206b1e7c08464', '.dawid.', 1213105747);
INSERT INTO `sessions` VALUES ('5608ad38e062803ad504a8fb8c2ba8ac', '.darek.', 1213105847);
INSERT INTO `sessions` VALUES ('beac96f7dbad46390d4db0ef71003143', '.darek.', 1213168653);
INSERT INTO `sessions` VALUES ('b25a528410f9bd15cb644c4215f4c19b', '.darek.', 1213272798);
INSERT INTO `sessions` VALUES ('dd44befb653ec07d897cacdf1e26ee47', '.dawid.', 1213304329);
INSERT INTO `sessions` VALUES ('bc9ab58be685d9cf0541555d348303b7', '.dawid.', 1213933723);
INSERT INTO `sessions` VALUES ('e22e3ed1e3a526bc8f141ecf501f5260', '.darek.', 1213934115);
INSERT INTO `sessions` VALUES ('a6807dd158b7381f58edf1bbf191f30d', '.dawid.', 1213934199);
INSERT INTO `sessions` VALUES ('555447cccc2613a5c6e993ea3f4e8c07', '.dawid.', 1214018160);
INSERT INTO `sessions` VALUES ('365ac4191362e00ce4a0cc78d1f5b4ff', '.darek.', 1214638385);
INSERT INTO `sessions` VALUES ('a8541ce10f28fb6e38c4d76023fb386e', '.darek.', 1215609824);
INSERT INTO `sessions` VALUES ('508dde9df2b404c1937484a458be687d', '.darek.', 1215776267);
INSERT INTO `sessions` VALUES ('982878519375b8be658c46f62aeb3121', '.darek.', 1216653163);
INSERT INTO `sessions` VALUES ('008d1ff4444af7d5c730e9b2b14bdb6b', '.darek.', 1217510620);
INSERT INTO `sessions` VALUES ('ce734f36091d550da609690f20077695', '.darek.', 1220254948);
INSERT INTO `sessions` VALUES ('d97dfdf3d96067c9f6b2f28adce38355', '.dawid.', 1220436042);
INSERT INTO `sessions` VALUES ('1994f0982f14db69e7e3527528d118a1', '.darek.', 1220436091);
INSERT INTO `sessions` VALUES ('18049c106c1554d185f11b590fe37312', '.darek.', 1221676586);
INSERT INTO `sessions` VALUES ('dd9968302987264a1e826753a9c01933', '.darek.', 1221740425);
INSERT INTO `sessions` VALUES ('1e39e0812f650a39155b40e05def34a8', '.darek.', 1226058109);
INSERT INTO `sessions` VALUES ('40ab8a338361ea1bd3566170e232f93f', '.darek.', 1227181620);
INSERT INTO `sessions` VALUES ('14960e762ac715c8737b701f439a6a90', '.admin.', 1228326532);
INSERT INTO `sessions` VALUES ('4a30d7a63b63d8ede043875c1057f25a', '.darek.', 1229592727);
INSERT INTO `sessions` VALUES ('83e91ca0261965e0de7a1296738c3aef', '.darek.', 1230943772);
INSERT INTO `sessions` VALUES ('6b6667e4d437026e88e53c736136e855', '.darek.', 1234954206);
INSERT INTO `sessions` VALUES ('d95a69d48a736ec433de706b9379d728', '.darek.', 1235178434);
INSERT INTO `sessions` VALUES ('a33959f9018bc6d6cc08a6933bc22bc1', '.darek.', 1235999812);
INSERT INTO `sessions` VALUES ('2aa2dbbb65f83a5cef3d12627dd3b0f4', '.darek.', 1236593438);
INSERT INTO `sessions` VALUES ('b90073b1e386d8269e5f3e996dcaab15', '.dawid.', 1236792131);
INSERT INTO `sessions` VALUES ('7b30a71ec4b8663199c6af563f1e69e1', '.admin.', 1239814540);
INSERT INTO `sessions` VALUES ('07818e4c2a159027e43045acb5713e1c', '.darek.', 1247164675);
INSERT INTO `sessions` VALUES ('225de3d33a70dab72621ec5c07a59e6e', '.darek.', 1250666916);
INSERT INTO `sessions` VALUES ('180b905ecd9062afa63706fca70e3d6d', '.darek.', 1252178847);
INSERT INTO `sessions` VALUES ('51acdbe5bf052d44638ea427e3e72096', '.darek.', 1252650890);
INSERT INTO `sessions` VALUES ('2007fdd060804350b8d75873a715802c', '.admin.', 1252653543);
INSERT INTO `sessions` VALUES ('5c78f55a6e50382abc58c223693d00f0', '.darek.', 1252653684);
INSERT INTO `sessions` VALUES ('e5b24b96356f6ea8db2959cecd793507', '.dawid.', 1252654803);
INSERT INTO `sessions` VALUES ('33df7bafb9c098a1aafe3ae360269f5e', '.admin.', 1254672160);
INSERT INTO `sessions` VALUES ('5e6b4738f3ff6f34227fa19d7b6d3268', '.dawid.', 1255977702);
INSERT INTO `sessions` VALUES ('bba10762f78883b20ed57e38f04b4017', '.darek.', 1256296574);
INSERT INTO `sessions` VALUES ('e32b5239210208cc2fd8dcddd55ae13d', '.darek.', 1256296939);
INSERT INTO `sessions` VALUES ('ae9ce6fa97fd2dea32a446d67f8cfd9e', '.admin.', 1256667163);
INSERT INTO `sessions` VALUES ('c3547f023cf32c652e2f22bc38b570f0', '.admin.', 1256668086);
INSERT INTO `sessions` VALUES ('20dfbd24be57a4bb1ed069d9b04a795a', '.admin.', 1256669851);
INSERT INTO `sessions` VALUES ('3f324ca76d1b04194147ce8d1389a9af', '.admin.', 1257357849);
INSERT INTO `sessions` VALUES ('64369666ad90522dbd326992ee1654d3', '.darek.', 1257495668);
INSERT INTO `sessions` VALUES ('59dc22e981f733c6b14ab8c4812ef6fc', '.darek.', 1260540244);
INSERT INTO `sessions` VALUES ('87a5b64434b93352b65857fe298e552d', '.dawid.', 1262510928);
INSERT INTO `sessions` VALUES ('52b5a7d8ad33ed877e1bed702329dcd7', '.darek.', 1263384603);
INSERT INTO `sessions` VALUES ('7b8d25b6ad192b073f02e92acd2f698c', '.admin.', 1263386064);

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `settings`
-- 

CREATE TABLE `settings` (
  `section` varchar(40) NOT NULL default '',
  `sectionkey` varchar(60) NOT NULL default '',
  `i` int(11) unsigned default '0',
  `c` varchar(45) default '',
  PRIMARY KEY  (`section`,`sectionkey`)
) ENGINE=MyISAM DEFAULT CHARSET=latin2;

-- 
-- Zrzut danych tabeli `settings`
-- 

INSERT INTO `settings` VALUES ('user', 'customer', 1, '');
INSERT INTO `settings` VALUES ('user', 'employee', 1, '');
INSERT INTO `settings` VALUES ('user', 'admin', 1, '');
INSERT INTO `settings` VALUES ('max_point', 'max_day', 200, '');
INSERT INTO `settings` VALUES ('language', 'french', 1, 'fr.png');
INSERT INTO `settings` VALUES ('language', 'polish', 1, 'pl.png');
INSERT INTO `settings` VALUES ('language', 'english', 1, 'uk.png');
INSERT INTO `settings` VALUES ('default_language', 'english', 0, '');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `user`
-- 

CREATE TABLE `user` (
  `user` varchar(30) NOT NULL,
  `customer` varchar(80) NOT NULL,
  `type` tinyint(4) NOT NULL default '1',
  `language` varchar(25) default '',
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`user`,`customer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin2;

-- 
-- Zrzut danych tabeli `user`
-- 

INSERT INTO `user` VALUES ('admin', 'Aokpl-1', 3, 'polish', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `user` VALUES ('darek', 'DAREK', 1, 'polish', 'b64a76fbfcbc7b85bc416a53240bb077');
INSERT INTO `user` VALUES ('dawid', 'Eokpl-1', 2, 'polish', 'c7424b4f43a592c9939b17c9e60f3ea9');
