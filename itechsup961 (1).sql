-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 24 Novembre 2016 à 15:47
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
-- Structure de la table `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id_carousel` int(11) NOT NULL AUTO_INCREMENT,
  `img_carousel` varchar(255) COLLATE utf8_bin NOT NULL,
  `text_carousel` text COLLATE utf8_bin NOT NULL,
  `pos_carousel` tinyint(4) NOT NULL,
  `titre_carousel` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_carousel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `img_carousel`, `text_carousel`, `pos_carousel`, `titre_carousel`) VALUES
(1, '6d319-contrat.jpg', '<p>\r\n	test</p>\r\n', 1, 'test'),
(2, '48f1a-vieducentre.jpg', '<div>\r\n	You simply add the field name that you would like<strong> to &quot;transform&quot;</strong> it to field for uploading and add the path that you would like to upload.</div>\r\n<div>\r\n	<strong>Below you can find an example with screenshots.&nbsp;</strong></div>\r\n', 2, '100% de réussite !'),
(3, 'ea9ea-68cdc-img_20161022_123030.jpg', '<p>\r\n	Test</p>\r\n', 3, 'Test');

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
  `public_contrat` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_contrat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `contrats`
--

INSERT INTO `contrats` (`id_contrat`, `nom_contrat`, `description_contrat`, `duree_contrat`, `rythme_contrat`, `remuneration_contrat`, `prise_en_charge_contrat`, `public_contrat`) VALUES
(1, 'Contrat de professionnalisation', '<ul>\r\n	<li>\r\n		Un contrat de travail qui peut &ecirc;tre conclu sous deux formes :\r\n		<ul>\r\n			<li>\r\n				CDD de 6 &agrave; 12 mois</li>\r\n			<li>\r\n				CDI</li>\r\n		</ul>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n		Entre 6 et 12 mois</li>\r\n	<li>\r\n		Possibilit&eacute; de l&#39;&eacute;tendre jusqu&#39;&agrave; 24 mois (ASS, RSA, AAH).</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p style="list-style-type: disc; margin-left: 15px;">\r\n	Alternance d&#39;enseignement g&eacute;n&eacute;raux, professionnel et technologique avec l&#39;exercice de ses fonctions en entreprise .</p>\r\n', '<ul>\r\n	<li>\r\n		-16 &agrave; 20 ans : de 55 &agrave; 65% du smic</li>\r\n	<li>\r\n		-21 &agrave; 25 ans : de 75 &agrave; 85% du smic</li>\r\n	<li>\r\n		+ de 26 ans : 100% du smic ou 85% de la r&eacute;mun&eacute;ration minimum en rigueur dans la convention collective.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n		9,15&euro;/heure pris en charge par l&#39;OPCA &agrave; d&eacute;fault de forfait fix&eacute; par accord de branche.(se r&eacute;f&eacute;rer aux accords collectifs)</li>\r\n	<li>\r\n		Aide suppl&eacute;mentaire p&ocirc;le emplois dans certains cas particuliers.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n		Jeune de 16 &agrave; 25 ans r&eacute;volus qui souhaitent acqu&eacute;rir de l&#39;exp&eacute;rience professionnel et faciliter leur insertion professionnel.</li>\r\n	<li>\r\n		Demandeurs d&#39;emplois de 26 ans et plus.</li>\r\n	<li>\r\n		B&eacute;n&eacute;ficiaires du revenue de solidarit&eacute; active (RSA), de l&#39;allocation de solidarit&eacute; sp&eacute;cifique (ASS) ou de l&#39;allocation aux adultes handicap&eacute;s (AAH).</li>\r\n</ul>\r\n'),
(2, 'Stage conventionné', '<p>\r\n	C&#39;est un <em><strong>stage</strong></em></p>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	7J&gt;JJ</p>\r\n', '', '', '', ''),
(3, 'CPF', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Contenu de la table `dates_reunion_informations`
--

INSERT INTO `dates_reunion_informations` (`id_date_reunion_information`, `date_reunion_information`, `id_reunion_information`) VALUES
(1, '2016-11-10', 1),
(2, '2016-11-17', 1),
(5, '2016-11-24', 1),
(6, '2016-12-01', 1),
(7, '2016-11-03', 1),
(12, '2016-12-08', 1),
(14, '2016-12-15', 1),
(15, '2016-12-22', 1),
(16, '2016-12-29', 1);

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
(1, '2016-11-11', 'Itechsup fait peau neuve', '<p>\r\n	Visiter notre site internet et d&eacute;couvrez toutes nos formations !</p>\r\n');

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
  `resume_formation` text COLLATE utf8_bin NOT NULL,
  `img_formation` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `id_type_formation` (`id_type_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id_formation`, `nom_formation`, `titre_formation`, `description_formation`, `objectifs_formation`, `programme_formation`, `debouches_formation`, `id_type_formation`, `resume_formation`, `img_formation`) VALUES
(1, 'Concepteur / Développeur Informatique', 'Titre RNCP niveau II', '<p>\r\n	Le (la) concepteur(rice)/d&eacute;veloppeur(se) informatique agit avec autonomie et responsabilit&eacute;s dans le cadre de projets visant &agrave; automatiser un ou plusieurs processus de l&rsquo;entreprise. Il peut mener la conception et le d&eacute;veloppement de nouvelles applications ou la maintenance &eacute;volutive d&rsquo;applications existantes.</p>\r\n', '<p>\r\n	config.forcePasteAsPlainText = true;</p>\r\n', '<ul>\r\n	<li>\r\n		D&eacute;velopper des composants d&rsquo;interface</li>\r\n	<li style="margin-left: 40px;">\r\n		Maquetter une application</li>\r\n	<li style="margin-left: 40px;">\r\n		D&eacute;velopper des composants d&rsquo;acc&egrave;s aux donn&eacute;es</li>\r\n	<li style="margin-left: 40px;">\r\n		D&eacute;velopper une page web en lien avec une base de donn&eacute;es</li>\r\n	<li style="margin-left: 40px;">\r\n		D&eacute;velopper une interface utilisateur</li>\r\n</ul>\r\n<p style="margin-left: 40px;">\r\n	&nbsp;</p>\r\n<ul>\r\n	<li>\r\n		D&eacute;velopper la persistance des donn&eacute;es\r\n		<ul>\r\n			<li>\r\n				Concevoir une base de donn&eacute;es</li>\r\n			<li>\r\n				Mettre en place une base de donn&eacute;es</li>\r\n			<li>\r\n				D&eacute;velopper des composants dans le language d&rsquo;une base de donn&eacute;es</li>\r\n			<li>\r\n				Utiliser l&rsquo;anglais dans son activit&eacute; profesionnelle en informatique</li>\r\n		</ul>\r\n	</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n<ul>\r\n	<li>\r\n		D&eacute;velopper une application n-tiers\r\n		<ul>\r\n			<li>\r\n				Concevoir une application</li>\r\n			<li>\r\n				Collaborer &agrave; la gestion d&rsquo;un projet informatique</li>\r\n			<li>\r\n				D&eacute;velopper des composants m&eacute;tier</li>\r\n			<li>\r\n				Construire une application organis&eacute;e en couches</li>\r\n		</ul>\r\n	</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n<ul>\r\n	<li>\r\n		D&eacute;velopper une application de mobilit&eacute; num&eacute;rique\r\n		<ul>\r\n			<li>\r\n				Pr&eacute;parer et ex&eacute;cuter les plans de tests d&rsquo;une application/son d&eacute;ploiement</li>\r\n		</ul>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n		D&eacute;veloppeur informatique, web</li>\r\n	<li>\r\n		D&eacute;veloppeur en nouvelles technologies</li>\r\n	<li>\r\n		Analyste programmeur</li>\r\n	<li>\r\n		Informaticien de d&eacute;veloppement</li>\r\n</ul>\r\n', 2, '<p>\r\n	Le (la) concepteur(rice)/d&eacute;veloppeur(se) informatique agit avec autonomie et responsabilit&eacute;s dans le cadre de projets visant &agrave; automatiser un ou plusieurs processus de l&rsquo;entreprise.</p>\r\n', '3c0d2-programmation.jpg'),
(2, 'Test', '', '', '', '', '', 4, '', '4c2fd-2.png');

-- --------------------------------------------------------

--
-- Structure de la table `img_pages_head`
--

CREATE TABLE IF NOT EXISTS `img_pages_head` (
  `id_img_pages_head` int(11) NOT NULL AUTO_INCREMENT,
  `lien_img_pages_head` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre_img_pages_head` varchar(150) COLLATE utf8_bin NOT NULL,
  `page_img_pages_head` varchar(150) COLLATE utf8_bin NOT NULL,
  `id_pages` int(11) NOT NULL,
  PRIMARY KEY (`id_img_pages_head`),
  KEY `id_pages` (`id_pages`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=30 ;

--
-- Contenu de la table `img_pages_head`
--

INSERT INTO `img_pages_head` (`id_img_pages_head`, `lien_img_pages_head`, `titre_img_pages_head`, `page_img_pages_head`, `id_pages`) VALUES
(15, '', 'Nous contacter', 'contact', 1),
(16, '', 'Les contrats', 'contrats', 2),
(17, '', 'Nos évènements', 'event', 3),
(18, 'e6502-main-top-body.png', 'Nos formations', 'formations', 4),
(19, '', 'Nos offres par secteur', 'offres_form', 5),
(20, '', 'Nos portes ouvertes', 'porte_ouverte', 6),
(21, '', 'Nos partenaires recherchent', 'offres', 7),
(22, '', 'Nos partenaires', 'partenaires', 8),
(23, '', 'Nos réunions d''informations', 'reunion_info', 9),
(24, '', 'Présentation', 'presentation', 10),
(25, '', 'Nous trouver', 'trouver', 11),
(26, '', 'Nos salons', 'salons', 12),
(28, '', 'Candidater', 'candidater', 13),
(29, '', 'Nos prochaines rentrées', 'rentres', 14);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE IF NOT EXISTS `offres` (
  `id_offre` int(11) NOT NULL AUTO_INCREMENT,
  `titre_offre` varchar(150) COLLATE utf8_bin NOT NULL,
  `description_offre` text COLLATE utf8_bin NOT NULL,
  `id_type_formation` int(11) NOT NULL,
  `date_offre` date NOT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `id_type_formation` (`id_type_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `offres`
--

INSERT INTO `offres` (`id_offre`, `titre_offre`, `description_offre`, `id_type_formation`, `date_offre`) VALUES
(1, 'Développeur informatique', '<div>\r\n	Vous voulez devenir un expert en informatique ?</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Cette alternance est donc faite pour vous ! Booster votre avenir en int&eacute;grant ITECHSUP !</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Dans le cadre de la pr&eacute;paration d&rsquo;un titre RNCP de niveau II Concepteur d&eacute;veloppeur Informatique ou Expert Informatique en alternance, ITECHSUP recrute pour l&#39;une de ses entreprises partenaires sp&eacute;cialis&eacute;e dans la d&eacute;mat&eacute;rialisation des traitements de &nbsp;facture un ou un(e) D&eacute;veloppeur (euse) Informatique.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<div>\r\n		Durant votre alternance vous aurez comme mission :</div>\r\n	<ul>\r\n		<li>\r\n			-Concevoir des am&eacute;liorations de produits et des interfaces</li>\r\n		<li>\r\n			-Assurer la maintenance et le suivi client en collaboration avec le chef de projet</li>\r\n	</ul>\r\n	<div>\r\n		&nbsp;</div>\r\n	<div>\r\n		Profil :</div>\r\n	<div>\r\n		&nbsp;</div>\r\n	<ul>\r\n		<li>\r\n			Titulaire d&rsquo;un Bac+2 &agrave; Bac+3 id&eacute;alement en informatique avec une exp&eacute;rience significative en SQL, &nbsp;JAVA et HTML.</li>\r\n		<li>\r\n			Vous &ecirc;tes rigoureux (se), curieux (se) et motiv&eacute;(e).</li>\r\n		<li>\r\n			Vos connaissances en informatique seront vos meilleurs atouts.</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 2, '2016-11-07');

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `nom_page` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_page`),
  KEY `nom_page` (`nom_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id_page`, `nom_page`) VALUES
(13, 'Candidater'),
(1, 'Contact'),
(2, 'Contrats'),
(3, 'Evènements'),
(4, 'Formations'),
(11, 'Nous trouver'),
(7, 'Offres par formations'),
(5, 'Offres par secteurs'),
(8, 'Partenaires'),
(6, 'Portes ouvertes'),
(10, 'Présentation'),
(14, 'Rentrées'),
(9, 'Réunions d''informations'),
(12, 'Salons');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `portes_ouvertes`
--

INSERT INTO `portes_ouvertes` (`id_porte_ouverte`, `titre_porte_ouverte`, `description_porte_ouverte`, `img_porte_ouverte`) VALUES
(1, 'Porte ouverte Janvier', '', '');

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
(1, 'Notre centre', '<p>\r\n	Int&eacute;gr&eacute; au sein de GSI formation, filiale du groupe GSI,<strong> ItechSup</strong> fait <strong>peau neuve</strong> pour cette ann&eacute;e 2015. Une mue qui se caract&eacute;rise par un changement de logo, de couleurs, ce sont surtout des valeurs nouvelles que le centre de formation d&eacute;cide de porter.</p>\r\n<p>\r\n	GSI formation, sp&eacute;cialis&eacute; dans la formation aux professionnels, s&rsquo;est associ&eacute; &agrave; ItechSup avec un objectif commun :<strong> am&eacute;liorer l&rsquo;employabilit&eacute;</strong> de ses stagiaires en les formant au plus pr&egrave;s des besoins des entreprises.<strong> </strong></p>\r\n<p>\r\n	<strong>L&rsquo;alternance </strong>est reconnue pour faciliter l&rsquo;insertion professionnelle ; un rythme plus professionnalisant et en ad&eacute;quation avec les r&eacute;alit&eacute;s du march&eacute; du travail. Chez ItechSup, on ne &laquo;recrute&raquo; pas des &eacute;tudiants mais des <strong>futurs professionnels</strong>.</p>\r\n'),
(2, 'Nos valeurs', '<p>\r\n	Notre &eacute;tablissement mise sur de v&eacute;ritables valeurs p&eacute;dagogiques telles que le <strong>suivi personnalis&eacute;</strong>, l&rsquo;<strong>accompagnement</strong> et l<strong>&rsquo;adaptation</strong> de sa formation face aux &eacute;volutions continuelles des m&eacute;tiers. C&rsquo;est pourquoi notre organisme s&rsquo;engage &agrave; tout mettre en &oelig;uvre pour favoriser la r&eacute;ussite des stagiaires, par le biais de formations de qualit&eacute;,<strong> reconnues</strong> sur le march&eacute; de l&rsquo;emploi.</p>\r\n<p>\r\n	Former des dipl&ocirc;m&eacute;s op&eacute;rationnels et comp&eacute;tents, tel est notre objectif majeur. Notre force : <strong>une p&eacute;dagogie innovante et performante</strong>.</p>\r\n'),
(3, 'Les formations', '<p>\r\n	Si <strong>Itechsup</strong> avait pour vocation premi&egrave;re d&#39;&eacute;cole informatique pr&eacute;parant aux m&eacute;tiers du domaine (cycle Expert en ing&eacute;nierie informatique, Webmaster, programmeur, d&eacute;veloppeur...), son champ de formation <strong>s&#39;est tr&egrave;s largement agrandi</strong>.</p>\r\n<p>\r\n	Aujourd&#39;hui ItechSup propose des formations de <strong>bac+2 &agrave; bac+5</strong> dans les domaines du management, du<strong> commerc</strong>e, de la <strong>gestion et des ressources humaines</strong>, tout en pr&eacute;servant le <strong>secteur informatique</strong>.</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `rentres`
--

CREATE TABLE IF NOT EXISTS `rentres` (
  `id_rentres` int(11) NOT NULL AUTO_INCREMENT,
  `secteur_rentres` int(11) NOT NULL,
  `date_rentres` date NOT NULL,
  `formation_rentres` int(11) NOT NULL,
  PRIMARY KEY (`id_rentres`),
  KEY `secteur_rentres` (`secteur_rentres`),
  KEY `formation_renters` (`formation_rentres`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rentres`
--

INSERT INTO `rentres` (`id_rentres`, `secteur_rentres`, `date_rentres`, `formation_rentres`) VALUES
(1, 1, '2016-11-30', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `reunions_informations`
--

INSERT INTO `reunions_informations` (`id_reunion_information`, `titre_reunion_information`, `description_reunion_information`, `img_reunion_information`) VALUES
(1, 'Réunions d''informations 2016', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: primeregular; font-size: medium; text-align: justify;">Encore quelques places disponibles pour la rentr&eacute;e 2016 !</span><br style="color: rgb(0, 0, 0); font-family: primeregular; font-size: medium; text-align: justify;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: primeregular; font-size: medium; text-align: justify;">Boostez votre avenir professionnel en int&eacute;grant ITECHSUP</span><br style="color: rgb(0, 0, 0); font-family: primeregular; font-size: medium; text-align: justify;" />\r\n	<br style="color: rgb(0, 0, 0); font-family: primeregular; font-size: medium; text-align: justify;" />\r\n	<span style="color: rgb(0, 0, 0); font-family: primeregular; font-size: medium; text-align: justify;">Venez valider votre projet d&rsquo;alternance ! Inscrivez-vous &agrave; nos sessions de recrutements des jeudis &agrave; partir de 9h30 &agrave; l&rsquo;adresse suivante : contact@itechsup.fr Chacune de nos r&eacute;unions d&rsquo;informations sont assorties d&rsquo;entretiens individuels personnalis&eacute;s afin de valider votre objectif professionnel et de vous positionner aupr&egrave;s de nos entreprises partenaires .</span></p>\r\n', '');

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
  `id_type_formation` int(11) NOT NULL,
  PRIMARY KEY (`id_temoignage`),
  KEY `id_formations` (`id_type_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `temoignages`
--

INSERT INTO `temoignages` (`id_temoignage`, `nom_temoignage`, `text_temoignage`, `img_temoignage`, `id_type_formation`) VALUES
(1, 'A.Nathan', '<p>\r\n	Disposant d&rsquo;une &eacute;quipe p&eacute;dagogique poss&eacute;dant une forte exp&eacute;rience dans le monde professionnel, le centre ITECHSUP ne nous enseigne pas seulement des comp&eacute;tences th&eacute;oriques il nous pr&eacute;pare aussi &agrave; la vie active.</p>\r\n<p>\r\n	En nous accompagnant tout au long de notre formation, les formateurs nous aident &agrave; trouver notre place dans le monde du travail et &agrave; nous y sentir &eacute;panoui.</p>\r\n', '', 2),
(2, 'Jeanne Marchive', '<p>\r\n	Disposant d&rsquo;une &eacute;quipe p&eacute;dagogique poss&eacute;dant une forte exp&eacute;rience dans le monde professionnel, le centre ITECHSUP ne nous enseigne pas seulement des comp&eacute;tences th&eacute;oriques il nous pr&eacute;pare aussi &agrave; la vie active.</p>\r\n<p>\r\n	En nous accompagnant tout au long de notre formation, les formateurs nous aident &agrave; trouver notre place dans le monde du travail et &agrave; nous y sentir &eacute;panoui.</p>\r\n', '49d42-personnaadmin.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `temoignages_contrat`
--

CREATE TABLE IF NOT EXISTS `temoignages_contrat` (
  `id_temoignage_contrat` int(11) NOT NULL AUTO_INCREMENT,
  `img_temoignage_contrat` text COLLATE utf8_bin NOT NULL,
  `nom_temoignage_contrat` varchar(150) COLLATE utf8_bin NOT NULL,
  `text_temoignage_contrat` text COLLATE utf8_bin NOT NULL,
  `id_contrats` int(11) NOT NULL,
  PRIMARY KEY (`id_temoignage_contrat`),
  KEY `id_contrats` (`id_contrats`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `temoignages_presentation`
--

CREATE TABLE IF NOT EXISTS `temoignages_presentation` (
  `id_temoignage_presentation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_temoignage_presentation` varchar(150) COLLATE utf8_bin NOT NULL,
  `text_temoignage_presentation` text COLLATE utf8_bin NOT NULL,
  `img_temoignage_presentation` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_temoignage_presentation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `temoignages_presentation`
--

INSERT INTO `temoignages_presentation` (`id_temoignage_presentation`, `nom_temoignage_presentation`, `text_temoignage_presentation`, `img_temoignage_presentation`) VALUES
(2, 'Ludovic Hervé', '<p>\r\n	Aujourd&#39;hui former est bien plus qu&#39;une simple transmission de savoirs, c&#39;est &eacute;galement l&#39;accompagnement individualis&eacute; et diff&eacute;renci&eacute; des stagiaires vers le d&eacute;veloppement d&#39;un savoir-faire et d&#39;un savoir-&ecirc;tre professionnel.</p>\r\n<p>\r\n	La formation professionnelle continue en alternance repr&eacute;sente, pour les stagiaires, le moyen id&eacute;al de construire de nouvelles comp&eacute;tences et de les consolider, en phase avec l&#39;&eacute;volution constante des m&eacute;tiers.</p>\r\n', '');

-- --------------------------------------------------------

--
-- Structure de la table `trouver`
--

CREATE TABLE IF NOT EXISTS `trouver` (
  `id_trouver` int(11) NOT NULL AUTO_INCREMENT,
  `tel_trouver` varchar(20) COLLATE utf8_bin NOT NULL,
  `fax_trouver` varchar(20) COLLATE utf8_bin NOT NULL,
  `mail_trouver` varchar(150) COLLATE utf8_bin NOT NULL,
  `map_trouver` text COLLATE utf8_bin NOT NULL,
  `transport_trouver` text COLLATE utf8_bin NOT NULL,
  `adresse_trouver` text COLLATE utf8_bin NOT NULL,
  `ville_trouver` varchar(150) COLLATE utf8_bin NOT NULL,
  `cp_trouver` varchar(6) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_trouver`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `trouver`
--

INSERT INTO `trouver` (`id_trouver`, `tel_trouver`, `fax_trouver`, `mail_trouver`, `map_trouver`, `transport_trouver`, `adresse_trouver`, `ville_trouver`, `cp_trouver`) VALUES
(1, '02 51 89 01 69', '02 51 89 03 49', 'contact@ItechSup.fr', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.6300290018626!2d-1.6394732843777167!3d47.22382097916118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ecc9b02fa583%3A0xab5ed1fd4ba2e88a!2sItechsup!5e0!3m2!1sfr!2sfr!4v1476360922095', '<ul>\r\n<li>En transport en commun<ul>\r\n\r\n<li>Tram l.1 - arrêt François Mitterrand\r\nBus 73/84/93 - arrêt Jacques Cartier</li></ul></li>\r\n\r\n<li>En voiture<ul>\r\n\r\n<li>Périphérique - porte d’Atlantis\r\nVoie rapide - axe Vannes/St Nazaire, sortie 1</li></ul></li></ul', 'Parc Héliopolis 1 101 avenue Jacques Cartier', 'Saint Herblain', '44 800');

-- --------------------------------------------------------

--
-- Structure de la table `type_formations`
--

CREATE TABLE IF NOT EXISTS `type_formations` (
  `id_type_formation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_formation` varchar(150) COLLATE utf8_bin NOT NULL,
  `secteur_type_formation` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `type_formations`
--

INSERT INTO `type_formations` (`id_type_formation`, `nom_type_formation`, `secteur_type_formation`) VALUES
(1, 'Marketing/Vente', 'Commerce'),
(2, 'Informatique', 'Informatique'),
(3, 'Ressources Humaines', 'RH'),
(4, 'Formations Inter-Intra', 'Formations courtes');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `log_utilisateur` varchar(50) COLLATE utf8_bin NOT NULL,
  `mdp_utilisateur` varchar(50) COLLATE utf8_bin NOT NULL,
  `mail_utilisateur` varchar(150) COLLATE utf8_bin NOT NULL,
  `admin_utilisateur` tinyint(1) NOT NULL,
  `nom_utilisateur` varchar(150) COLLATE utf8_bin NOT NULL,
  `prenom_utilisateur` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `log_utilisateur`, `mdp_utilisateur`, `mail_utilisateur`, `admin_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`) VALUES
(1, 'Nathan', '110ab908953eeb649a886b09fe655a16', 'nabraham@sofra-recouvrements.com', 1, 'ABRAHAM', 'Nathan'),
(2, 'Mickaël', '8ef997c2e7f6c046dab57da59914ddb2', 'mpereira@sofra-recouvrements.com', 1, 'PEREIRA', 'Mickaël'),
(6, 'paillettes', '8ef997c2e7f6c046dab57da59914ddb2', 'kdiz@gsi-formations.fr', 0, 'DIZ', 'Karine');

--
-- Contraintes pour les tables exportées
--

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
  ADD CONSTRAINT `formations` FOREIGN KEY (`id_type_formation`) REFERENCES `type_formations` (`id_type_formation`);

--
-- Contraintes pour la table `img_pages_head`
--
ALTER TABLE `img_pages_head`
  ADD CONSTRAINT `img_pages_head_ibfk_1` FOREIGN KEY (`id_pages`) REFERENCES `pages` (`id_page`);

--
-- Contraintes pour la table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_ibfk_1` FOREIGN KEY (`id_type_formation`) REFERENCES `type_formations` (`id_type_formation`);

--
-- Contraintes pour la table `rentres`
--
ALTER TABLE `rentres`
  ADD CONSTRAINT `rentres_ibfk_1` FOREIGN KEY (`secteur_rentres`) REFERENCES `type_formations` (`id_type_formation`),
  ADD CONSTRAINT `rentres_ibfk_2` FOREIGN KEY (`formation_rentres`) REFERENCES `formations` (`id_formation`);

--
-- Contraintes pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD CONSTRAINT `temoignages_ibfk_1` FOREIGN KEY (`id_type_formation`) REFERENCES `type_formations` (`id_type_formation`);

--
-- Contraintes pour la table `temoignages_contrat`
--
ALTER TABLE `temoignages_contrat`
  ADD CONSTRAINT `temoignages_contrat_ibfk_1` FOREIGN KEY (`id_contrats`) REFERENCES `contrats` (`id_contrat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
