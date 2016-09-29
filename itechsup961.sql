-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 16 Septembre 2016 à 17:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `itechsup961`
--

-- --------------------------------------------------------

--
-- Structure de la table `autres_temoignages`
--

CREATE TABLE IF NOT EXISTS `autres_temoignages` (
  `id_autre_temoignage` int(11) NOT NULL AUTO_INCREMENT,
  `nom_autre_temoignage` varchar(150) COLLATE utf8_bin NOT NULL,
  `text_autre_temoignage` text COLLATE utf8_bin NOT NULL,
  `img_autre_temoignage` text COLLATE utf8_bin NOT NULL,
  `id_type_temoignage` int(11) NOT NULL,
  PRIMARY KEY (`id_autre_temoignage`),
  KEY `id_type_temoignage` (`id_type_temoignage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id_carousel` int(11) NOT NULL AUTO_INCREMENT,
  `img_carousel` text COLLATE utf8_bin NOT NULL,
  `text_carousel` text COLLATE utf8_bin NOT NULL,
  `pos_carousel` tinyint(4) NOT NULL,
  `titre_carousel` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_carousel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `img_carousel`, `text_carousel`, `pos_carousel`, `titre_carousel`) VALUES
(1, 'assets/img/carousel/contrat.jpg', 'test', 1, 'test'),
(2, 'assets/img/carousel/vieducentre.jpg', 'test', 2, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

CREATE TABLE IF NOT EXISTS `contrats` (
  `id_contrat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_contrat` varchar(150) COLLATE utf8_bin NOT NULL,
  `description_contrat` text COLLATE utf8_bin NOT NULL,
  `duree_contrat` text COLLATE utf8_bin NOT NULL,
  `rythme_contrat` text COLLATE utf8_bin NOT NULL,
  `remuneration_contrat` text COLLATE utf8_bin NOT NULL,
  `prise_en_charge_contrat` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_contrat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `contrats`
--

INSERT INTO `contrats` (`id_contrat`, `nom_contrat`, `description_contrat`, `duree_contrat`, `rythme_contrat`, `remuneration_contrat`, `prise_en_charge_contrat`) VALUES
(1, 'stage', 'test', 'test', 'test', 'test', 'tes');

-- --------------------------------------------------------

--
-- Structure de la table `dates_portes_ouvertes`
--

CREATE TABLE IF NOT EXISTS `dates_portes_ouvertes` (
  `id_date_porte_ouverte` int(11) NOT NULL AUTO_INCREMENT,
  `date_porte_ouverte` date NOT NULL,
  `id_portes_ouvertes` int(11) NOT NULL,
  PRIMARY KEY (`id_date_porte_ouverte`),
  KEY `id_portes_ouvertes` (`id_portes_ouvertes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `dates_reunion_informations`
--

CREATE TABLE IF NOT EXISTS `dates_reunion_informations` (
  `id_date_reunion_information` int(11) NOT NULL AUTO_INCREMENT,
  `date_reunion_information` date NOT NULL,
  `id_reunion_information` int(11) NOT NULL,
  PRIMARY KEY (`id_date_reunion_information`),
  KEY `id_reunion_information` (`id_reunion_information`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `date_event` date NOT NULL,
  `titre_event` varchar(150) COLLATE utf8_bin NOT NULL,
  `text_event` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id_event`, `date_event`, `titre_event`, `text_event`) VALUES
(1, '2016-09-30', 'Mise à jour du site Itechsup', 'Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE IF NOT EXISTS `formations` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_formation` varchar(150) COLLATE utf8_bin NOT NULL,
  `titre_formation` varchar(150) COLLATE utf8_bin NOT NULL,
  `description_formation` text COLLATE utf8_bin NOT NULL,
  `objectifs_formation` text COLLATE utf8_bin NOT NULL,
  `programme_formation` text COLLATE utf8_bin NOT NULL,
  `debouches_formation` text COLLATE utf8_bin NOT NULL,
  `id_type_formation` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `id_type_formation` (`id_type_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id_formation`, `nom_formation`, `titre_formation`, `description_formation`, `objectifs_formation`, `programme_formation`, `debouches_formation`, `id_type_formation`) VALUES
(2, 'Licence Concepteur/Développeur informatique', 'Titre RNCP Niveau III', 'Le (la) concepteur(rice)/développeur(se) informatique agit avec autonomie et responsabilités dans le cadre de projets visant à automatiser un ou plusieurs processus de l’entreprise. Il peut mener la conception et le développement de nouvelles applications ou la maintenance évolutive d’applications existantes.', '', 'Programme de la formation\r\n\r\n<ul>Première année</br>\r\n\r\n<li>Développer des composants d’interface</li>\r\n<li>Maquetter une application</li>\r\n<li>Développer des composants d’accès aux données</li>\r\n<li>Développer une page web en lien avec une base de données</li>\r\n<li>Développer une interface utilisateur</li>\r\n</ul>\r\nDévelopper la persistance des données\r\nConcevoir une base de données\r\nMettre en place une base de données\r\nDévelopper des composants dans le language d’une base de données\r\nUtiliser l’anglais dans son activité profesionnelle en informatique\r\n\r\nDévelopper une application n-tiers\r\nConcevoir une application\r\nCollaborer à la gestion d’un projet informatique\r\nDévelopper des composants métier\r\nConstruire une application organisée en couches\r\nDévelopper une application de mobilité numérique\r\nPréparer et exécuter les plans de tests d’une application/son déploiement', '', 2),
(3, 'test', 'test', 'test', 'test', 'test', 'test', 2);

-- --------------------------------------------------------

--
-- Structure de la table `img_pages_head`
--

CREATE TABLE IF NOT EXISTS `img_pages_head` (
  `id_img_pages_head` int(11) NOT NULL AUTO_INCREMENT,
  `lien_img_pages_head` text COLLATE utf8_bin NOT NULL,
  `titre_img_pages_head` varchar(150) COLLATE utf8_bin NOT NULL,
  `page_img_pages_head` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_img_pages_head`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `img_pages_head`
--

INSERT INTO `img_pages_head` (`id_img_pages_head`, `lien_img_pages_head`, `titre_img_pages_head`, `page_img_pages_head`) VALUES
(1, 'assets/img/images_pages/candidater.jpg', 'Demande de candidature', 'candidater'),
(2, 'assets/img/images_pages/main-top-body.png', 'Présentation', 'presentation'),
(3, 'assets/img/images_pages/main-top-body.png', 'Formations', 'formations');

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE IF NOT EXISTS `offres` (
  `id_offre` int(11) NOT NULL AUTO_INCREMENT,
  `titre_offre` varchar(150) COLLATE utf8_bin NOT NULL,
  `description_offre` text COLLATE utf8_bin NOT NULL,
  `type_offre` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_offre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE IF NOT EXISTS `partenaires` (
  `id_partenaire` int(11) NOT NULL AUTO_INCREMENT,
  `logo_partenaire` text COLLATE utf8_bin NOT NULL,
  `nom_partenaire` varchar(150) COLLATE utf8_bin NOT NULL,
  `lien_partenaire` text COLLATE utf8_bin NOT NULL,
  `text_partenaire` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_partenaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `portes_ouvertes`
--

CREATE TABLE IF NOT EXISTS `portes_ouvertes` (
  `id_porte_ouverte` int(11) NOT NULL AUTO_INCREMENT,
  `titre_porte_ouverte` varchar(150) COLLATE utf8_bin NOT NULL,
  `description_porte_ouverte` text COLLATE utf8_bin NOT NULL,
  `img_porte_ouverte` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_porte_ouverte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `id_presentation` int(11) NOT NULL AUTO_INCREMENT,
  `titre_presentation` varchar(150) COLLATE utf8_bin NOT NULL,
  `text_presentation` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_presentation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `presentation`
--

INSERT INTO `presentation` (`id_presentation`, `titre_presentation`, `text_presentation`) VALUES
(1, 'Notre centre', 'Intégré au sein de GSI formation, filiale du groupe GSI, ItechSup fait peau neuve pour cette année 2015.\r\nUne mue qui se caractérise par un changement de logo, de couleurs, ce sont surtout des valeurs nouvelles que le centre de formation décide de porter.\r\n\r\nGSI formation, spécialisé dans la formation aux professionnels, s’est associé à ItechSup avec un objectif commun : améliorer l’employabilité de ses stagiaires en les formant au plus près des besoins des entreprises.\r\n\r\nL’alternance est reconnue pour faciliter l’insertion professionnelle ; un rythme plus professionnalisant et en adéquation avec les réalités du marché du travail. \r\n\r\nChez ItechSup, on ne «recrute» pas des étudiants mais des futurs professionnels.'),
(2, 'Nos valeurs', 'Notre établissement mise sur de véritables valeurs pédagogiques telles que le suivi personnalisé, l’accompagnement et l’adaptation de sa formation face aux évolutions continuelles des métiers.\r\n\r\nC’est pourquoi notre organisme s’engage à tout mettre en œuvre pour favoriser la réussite des stagiaires, par le biais de formations de qualité, reconnues sur le marché de l’emploi.\r\n\r\nFormer des diplômés opérationnels et compétents, tel est notre objectif majeur.\r\n\r\nNotre force: une pédagogie innovante et performante.'),
(3, 'Les formations', 'Si Itechsup avait pour vocation première d''école informatique préparant aux métiers du domaine (cycle Expert en ingénierie informatique, Webmaster, programmeur, développeur...), son champ de formation s''est très largement agrandi.\r\n\r\nAujourd''hui ItechSup propose des formations de bac+2 à bac+5 dans les domaines du management, du commerce, de la gestion et des ressources humaines, tout en préservant le secteur informatique.');

-- --------------------------------------------------------

--
-- Structure de la table `reunions_informations`
--

CREATE TABLE IF NOT EXISTS `reunions_informations` (
  `id_reunion_information` int(11) NOT NULL AUTO_INCREMENT,
  `titre_reunion_information` varchar(150) COLLATE utf8_bin NOT NULL,
  `description_reunion_information` text COLLATE utf8_bin NOT NULL,
  `img_reunion_information` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_reunion_information`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salons`
--

CREATE TABLE IF NOT EXISTS `salons` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `nom_salon` varchar(150) COLLATE utf8_bin NOT NULL,
  `description_salon` text COLLATE utf8_bin NOT NULL,
  `date_salon` date NOT NULL,
  `map_salon` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_salon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE IF NOT EXISTS `temoignages` (
  `id_temoignage` int(11) NOT NULL AUTO_INCREMENT,
  `nom_temoignage` varchar(150) COLLATE utf8_bin NOT NULL,
  `text_temoignage` text COLLATE utf8_bin NOT NULL,
  `img_temoignage` text COLLATE utf8_bin NOT NULL,
  `id_formations` int(11) NOT NULL,
  PRIMARY KEY (`id_temoignage`),
  KEY `id_formations` (`id_formations`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `temoignages`
--

INSERT INTO `temoignages` (`id_temoignage`, `nom_temoignage`, `text_temoignage`, `img_temoignage`, `id_formations`) VALUES
(3, 'test', 'test', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `types_temoignages`
--

CREATE TABLE IF NOT EXISTS `types_temoignages` (
  `id_type_temoignage` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_temoignage` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_temoignage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `types_temoignages`
--

INSERT INTO `types_temoignages` (`id_type_temoignage`, `nom_type_temoignage`) VALUES
(2, 'presentation'),
(3, 'contrat de stage'),
(4, 'contrat de professionalisation');

-- --------------------------------------------------------

--
-- Structure de la table `type_formations`
--

CREATE TABLE IF NOT EXISTS `type_formations` (
  `id_type_formation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_formation` varchar(150) COLLATE utf8_bin NOT NULL,
  `secteur_type_formation` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_formations`
--

INSERT INTO `type_formations` (`id_type_formation`, `nom_type_formation`, `secteur_type_formation`) VALUES
(1, 'Marketing/Vente', 'Commerce'),
(2, 'Informatique', 'Informatique'),
(3, 'Ressources Humaines', 'RH');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `autres_temoignages`
--
ALTER TABLE `autres_temoignages`
  ADD CONSTRAINT `autres_temoignages_ibfk_1` FOREIGN KEY (`id_type_temoignage`) REFERENCES `types_temoignages` (`id_type_temoignage`);

--
-- Contraintes pour la table `dates_portes_ouvertes`
--
ALTER TABLE `dates_portes_ouvertes`
  ADD CONSTRAINT `dates_portes_ouvertes_ibfk_1` FOREIGN KEY (`id_portes_ouvertes`) REFERENCES `portes_ouvertes` (`id_porte_ouverte`);

--
-- Contraintes pour la table `dates_reunion_informations`
--
ALTER TABLE `dates_reunion_informations`
  ADD CONSTRAINT `dates_reunion_informations_ibfk_1` FOREIGN KEY (`id_reunion_information`) REFERENCES `reunions_informations` (`id_reunion_information`);

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_ibfk_1` FOREIGN KEY (`id_type_formation`) REFERENCES `type_formations` (`id_type_formation`);

--
-- Contraintes pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD CONSTRAINT `temoignages_ibfk_1` FOREIGN KEY (`id_formations`) REFERENCES `formations` (`id_formation`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
