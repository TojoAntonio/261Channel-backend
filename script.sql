-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Sam 31 Mai 2014 à 10:53
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `testaes`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE IF NOT EXISTS `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelle` (`libelle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id`, `libelle`, `description`) VALUES
(28, 'Forage', 'Technique permettant le creusement de puits plus facilement, plus rapidement et à plus grande profondeur que les puits creusés à la main ou foncés.\r\n'),
(29, 'Vulcanisation', 'La vulcanisation comprend une opération consistant à traiter le caoutchouc naturel ou synthétique par addition de soufre, pour en améliorer les propriétés mécaniques et la résistance aux variations de température; résultat de cette opération. Vulcanisation à chaud, à froid.\r\n'),
(30, 'Construction BTP', 'Les constructions BTP consistent à regrouper toutes les activités de conception et de construction des bâtiments publics et privés, industriels ou non, et des infrastructures telles que les routes ou les canalisations. Il est l’un des premiers secteurs d’activité économique.\r\n'),
(31, 'Construction de puit', 'La construction  consiste à bâtir un forage vertical permettant l''exploitation d''une nappe d''eau souterraine, autrement dit un aquifère. L''eau peut être remontée au niveau du sol grâce à un seau ou une pompe, manuelle ou non.\r\n'),
(32, 'Adduction d''eau potable', 'L''adduction d''eau regroupe les techniques permettant d''amener l''eau depuis sa source à travers un réseau de conduites ou d''ouvrages architecturaux (aqueduc) vers les lieux de consommation.\r\n'),
(33, 'Construction d''abreuvoir', 'Il s''agit de la construction d''une mare ou abord de rivière ou de zone humide spécialement aménagée pour permettre à des animaux d''élevage ou à des chevaux de s''abreuver. Ces abreuvoirs servaient aussi autrefois de réserve d''eau pour les incendies.\r\n'),
(34, 'Dépannage', 'Le dépannage bénéficie de l’extension du parc automobile, de l’allongement de la durée de vie des véhicules et de l’augmentation de la fréquence des contrôles techniques et de leur sévérité accrue.\r\n'),
(35, 'Station de pompage', ''),
(36, 'Matériels', 'Matériel à disposition de l''AES');

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `dateart` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `contenu`, `dateart`, `image`) VALUES
(49, 'Réunions et Ateliers Atelier Coopération Décentralisée – eau et assainissement – le mardi 21 et le mercredi 22 novembre 2012', 'Dans le cadre, d’une part, du cycle d’ateliers sur la coopération décentralisée mené par le Service de coopération et d’action culturelle (SCAC) et, d’autre part, de la réunion nationale du Réseau Ran’Eau, l’Ambassade de France à Madagascar, le CITE et le pS-Eau ont organisé en partenariat avec le Ministère de l’Eau et le Ministère de la Décentralisation malgache deux journées d’ateliers sur le thème de l’eau et l’assainissement à Madagascar le mardi 21 et le mercredi 22 novembre 2012 à l’Hôtel du Louvre à Tananarive.\r\n\r\n<img src="http://localhost/siteAES/assets/images/article/reunion/eau1.jpg" />\r\n\r\nDans un contexte de changement climatique, de raréfaction des ressources naturelles et de croissance démographique, l’eau et l’assainissement constituent un enjeu majeur pour le futur de la planète, en général, et de Madagascar en particulier.\r\n\r\nDepuis quelques années, le pays s’est engagé dans un processus de décentralisation et dans une importante réforme du secteur « eau et assainissement ». C’est dans ce cadre rénové que de nombreux acteurs se mobilisent et, notamment, la coopération décentralisée française qui a fait de l’eau et l’assainissement l’un de ses principaux secteurs d’intervention.\r\n\r\nDepuis 2010, il existe à Madagascar un réseau appuyé par le Programme Solidarité-Eau (PS-Eau) et qui réunit l’ensemble des acteurs non gouvernementaux et de la coopération décentralisée. C’est le Réseau Ran’Eau, qui reçoit annuellement de la part de l’Ambassade de France un soutien financier important. Cet événement, qui a réuni l’ensemble des acteurs du secteur : ministères, collectivités territoriales décentralisées, coopérations décentralisées, ONG, partenaires techniques et financiers… avait pour objectif de renforcer les capacités de maitrise d’ouvrage des communes dans le secteur de l’eau et l’assainissement par une meilleure synergie des actions et une amélioration du cadre institutionnel. Il s’agissait également de renforcer la pertinence des interventions en contribuant à l’atteinte des objectifs fixés par le Ministère de l’Eau en avril 2012 lors du High Level Meeting qui s’est tenu aux Etats Unis.\r\n\r\n<img src="http://localhost/siteAES/assets/images/article/reunion/eau2.jpg" />\r\n\r\nLe partage d’expérience et le dialogue multi-acteurs en vue de soutenir l’amélioration des services publics dans ce secteur à Madagascar ont été les buts recherchés par cet événement.\r\n\r\nCes ateliers ont été l’occasion pour chacun de s’exprimer sur ses projets, ses difficultés et ses attentes afin de trouver ensemble des solutions pour permettre à tous les malgaches d’accéder à l’eau et vivre dans des conditions d’hygiène et de salubrité améliorées.', '2014-05-31 08:22:18', ''),
(52, 'Journée Mondiale de Lavage des Mains avec du Savon (J.M.L.M.S.)', '<img src="http://localhost/siteAES/assets/images/article/jmlms/jmlms1.jpg" />\r\n\r\nMadagascar n’a pas manqué de célébrer la Journée mondiale du lavage des mains avec du savon (JMLMS) qui est à sa 5e édition cette année et est placée sous le thème « Ny fanasanao tànana amin’ny savony, mamonjy ny ainao sy ny ankohonanao » ou « Le lavage des mains avec de l’eau et du savon sauve des vies et des familles ».\r\n\r\nComme chaque année, le Ministère de l’Eau, en étroite collaboration avec ses partenaires, a participé avec le monde entier à la célébration de la Journée Mondiale du Lavage des Mains avec du Savon.\r\n\r\nCette journée coïncide également avec les 10 années de Diorano Wash qui ne cesse de contribuer à la promotion du lavage des mains avec du savon pour le bien-être des familles, dont les enfants de moins de cinq ans. Et elle a pour objectif de renforcer la sensibilisation et d’accroître la compréhension sur l’importance du lavage des mains avec du savon comme un moyen efficace pour prévenir les maladies liées au manque d’eau, d’hygiène et d’assainissement.\r\n\r\n<img src="http://localhost/siteAES/assets/images/article/jmlms/jmlms2.jpg" />\r\n\r\nLa célébration officielle de la JMLMS qui s’est déroulée le 26 Octobre à Manjaka Ilafy a été une occasion de réaliser diverses manifestations, entre autres, le carnaval autour de Manjaka Ilafy, les animations de l’équipe de Fou Hehy et des animations axées sur le thème.\r\n\r\nDans le cadre même de cette célébration, une série d’activités a été au menu, notamment une variété d’animations relatives au Lavage des Mains avec du Savon effectuées par l’équipe de Fou Hehy, incitant les gens (enfants, mères, ménages) en particulier les écoliers, à laver les mains avec du savon.\r\n\r\n<img src="http://localhost/siteAES/assets/images/article/jmlms/jmlms3.jpg" />\r\n\r\nDans sa prise de parole, le Maire de la commune d’Ilafy a stipulé que les parents et les instituteurs doivent apporter un énorme effort dans la sensibilisation des enfants sur le Lavage des Mains avec du Savon.', '2014-05-31 08:38:47', '');

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE IF NOT EXISTS `centre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `siege` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `donneetech` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `centre`
--

INSERT INTO `centre` (`id`, `nom`, `siege`, `description`, `donneetech`) VALUES
(11, 'Centre d''Isoanala', 'Isoanala', 'description du centre d''Isoanala', '<b><u>les données techniques du centre</u></b>'),
(12, 'Centre de Beloha', 'Beloha', '<img src="http://127.0.0.1:8080/siteAES/assets/images/descCentre/beloha/Beloha.10.gif" title="La ville de Beloha Androy" />\r\n\r\n<u><b>Données socio-économiques</b></u>\r\n\r\nSituée à l''extrême sud de TOLIARA, en pays Karimbola, la ville de BELOHA se trouve à 225 km à l''Ouest de Tolagnaro, avec possibilités d''accès toute l''année, même si la route y menant est difficilement praticable, surtout en période de pluies.\r\n\r\n<u><b>Population:</b></u>\r\n- Ville : 3.000 hab\r\n- Rurale : 30.200 hab.\r\n- Superficie : 5.000 km2\r\n <img src="http://127.0.0.1:8080/siteAES/assets/images/descCentre/beloha/28098336.jpg" title="" />\r\n\r\n<u><b>Activités économiques</b></u>\r\n<img src="http://127.0.0.1:8080/siteAES/assets/images/descCentre/beloha/Toliara_Beloha.png" title="Mini carte de la région d''Androy" />\r\n\r\nPossibilités agricoles très limitées compte tenu des conditions naturelles défavorables à l''agriculture. Toutefois, l''élevage reste l''activité de base de la population, en sus des animaux de basse-cour.\r\n\r\n- Bovins\r\n- Ovins/caprins\r\n- Volailles\r\n\r\n\r\nPrésence de quelques variétés de gisements miniers, tels que graphites, quartz etc ...\r\n\r\n<u><b>Secteurs présents</b></u>\r\nAdministration territoriale (Sous-Préfet du Fiv.) -P.T.T. - Poste Vétérinaire - Service de l''Agriculture - Valorisation des Ressources Humaines - Percéption principale - CISCO - Centre Médical - Secteur anti-acridien - Travaux Publics - Jeunesse et Sport - Eaux et Forêts - Brigade de la ZP - BDE - CGDIS - AES - Missions Cathilique, Luthérienne .... \r\n', '    - Canalisation et conduite d''eau sur 142,5 Km\r\n    - PVC de diamètre 160 mm = diamètre 110 mm et diamètre 75 mm\r\n    - 03 stations de pompage d''une capacité totale de 200 m3\r\n    - 8 réservoirs de distributions dont:\r\n        - 03 de 100 m3 de chaque\r\n        - 02 de 50 m3 de chaque\r\n        - 03 de 20 m3 de chaque\r\n    - Bâtiments administratifs pour usage de bureau, magasin, salle de machines et maisons pour gardiens.\r\n    - Modes d''approvisionnements:\r\n        - par camions citernes à partir de des stations de pompage et réservoir de distribution pour les villages à plus de 5 km\r\n        - par charrettes (secteur informel) pour les villages à moins de 5 km\r\n        - direct pour les villages bénéficiant de stations de pompage et de réservoirs de distribution\r\n    - Méthodes d'' épuration utilisée: par filtration lente au sable\r\n    - Zones couvertes par le projet: villes et villages au Sud de la RN10\r\n        - population: 82.000 hab\r\n        - superficie: 8.000 km2\r\n    - Démarrage des travaux: Août 1996\r\n    - Fin des travaux: Mars 1999\r\n'),
(13, 'Centre de Tsihombe', 'Tsihombe', '<b><u>Données socio-économiques</u></b>\r\nSituée à l''extrême sud de TOLIARA, en pays Androyen la Ville de TSIHOMBE se trouve à 171 km au Sud de Tolagnaro, à mi-chemin entre Toliara et Tolagnaro accessible toute l''année; toutefois difficile en saison de pluie.\r\n\r\n    Population:\r\n        Ville : 22.300 hab\r\n        Rurale : 24.900 hab.\r\n    Superficie : 3.000 km2\r\n\r\n<b><u>Activités économiques</u></b>\r\nLes deux communes étant limitrophes et ayant des conditons climatiques similaires, les activités économiques de la population de Tsihombe sont analogues à celles de Beloha.\r\nPrésence de gisements de mica à SAKAMASY, situé à 15 km au Sud-Est de la Ville.\r\n\r\n<b><u>Secteurs présents</u></b>\r\nAdministration territoriale (Sous-Préfet du Fiv.) -P.T.T. - Poste Vétérinaire - Service de l''Agriculture - Valorisation des Ressources Humaines - Percéption principale - CISCO - Centre Médical - Secteur anti-acridien - Travaux Publics - Jeunesse et Sport - Eaux et Forêts - Brigade de la ZP - BDE - CGDIS - AES - Missions Cathilique, Luthérienne .... ', ''),
(14, 'Centre AEP d''Andalatanosy', 'Direction d''Exploitation d''Ambovombe', '<img src="http://127.0.0.1:8080/siteAES/assets/images/zones/beloha.gif" title="Andalatanosy" />', ''),
(15, 'Centre AEP de Beraketa', 'Beraketa', '<b><u>La population de Beraketa</u></b>\r\n\r\n<img src="http://127.0.0.1:8080/siteAES/assets/images/descCentre/beloha/peuple.jpg" title="Mponin''i Beraketa" />\r\n\r\n\r\n<table border=1>\r\n\r\n<tr>\r\n<td>Nom</td>\r\n<td>Prénom</td>\r\n</tr>\r\n\r\n<tr>\r\n<td>Rabe</td>\r\n<td>Jacob</td>\r\n</tr>\r\n\r\n</table>', ''),
(16, 'Centre AEP d''Antanimora (Sud)', 'Ambovombe', '', '<b><u>Caractéristiques des forages</u></b>\r\n\r\n<table>\r\n\r\n<tr>\r\n<th>Référence</th>\r\n<th>Niveau Statique (m)</th>\r\n<th>Profondeur (m)</th>\r\n<th>Débit d''Exploitation (m<sup>3</sup>/h)</th>\r\n<th>Débit disponible (m<sup>3</sup>/h)</th>\r\n<th>Observations</th>\r\n</tr>\r\n\r\n<tr>\r\n<td>B1</td>\r\n<td>2.81</td>\r\n<td>77</td>\r\n<td>15</td>\r\n<td>30</td>\r\n<td>En panne</td>\r\n</tr>\r\n\r\n<tr>\r\n<td>B2</td>\r\n<td>2.81</td>\r\n<td>78</td>\r\n<td>15</td>\r\n<td>20</td>\r\n<td>Fonctionnel</td>\r\n</tr>\r\n\r\n</table>\r\nraha soratra hafa ve no teto dia mbola nilatsaka any ihany tena isany');

-- --------------------------------------------------------

--
-- Structure de la table `dg`
--

CREATE TABLE IF NOT EXISTS `dg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discours` text NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `dg`
--

INSERT INTO `dg` (`id`, `discours`, `images`) VALUES
(0, '« Il y a quatre-vingt sept ans, nos pères donnèrent naissance sur ce continent à une nouvelle nation conçue dans la liberté et vouée à la thèse selon laquelle tous les hommes sont créés égaux.\r\n\r\nNous sommes maintenant engagés dans une grande guerre civile, épreuve qui vérifiera si cette nation, ou toute autre nation ainsi conçue et vouée au même idéal, peut résister au temps. Nous sommes réunis sur un grand champ de bataille de cette guerre. Nous vînmes consacrer une part de cette terre qui deviendra le dernier champ de repos de tous ceux qui moururent pour que vive notre pays. Il est à la fois juste et digne de le faire.\r\nMais, dans un sens plus large, nous ne pouvons dédier, nous ne pouvons consacrer, nous ne pouvons sanctifier ce sol. Les braves, vivants et morts, qui se battirent ici le consacrèrent bien au-delà de notre faible pouvoir de magnifier ou de minimiser. Le monde ne sera guère attentif à nos paroles, il ne s''en souviendra pas longtemps, mais il ne pourra jamais oublier ce que les hommes firent. C''est à nous les vivants de nous vouer à l''œuvre inachevée que d''autres ont si noblement entreprise. C''est à nous de nous consacrer plus encore à la cause pour laquelle ils offrirent le suprême sacrifice ; c''est à nous de faire en sorte que ces morts ne soient pas morts en vain ; à nous de vouloir qu''avec l''aide de Dieu notre pays renaisse dans la liberté ; à nous de décider que le gouvernement du peuple, par le peuple et pour le peuple, ne disparaîtra jamais de la surface de la terre. »', '3e4cc7d21fddf22419778934e37e4d2c.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `imageactivite`
--

CREATE TABLE IF NOT EXISTS `imageactivite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_encrypte` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text,
  `idactivite` int(11) NOT NULL,
  `thumb_path` varchar(255) NOT NULL,
  `real_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `imageactivite`
--

INSERT INTO `imageactivite` (`id`, `nom_encrypte`, `nom`, `description`, `idactivite`, `thumb_path`, `real_path`) VALUES
(15, 'f4ce8e365d2c5f9b0364223c47dc68e0.jpg', 'Matériels', '', 36, 'http://localhost/siteAES/assets/images/visitor_image/banniere/thumbs/', 'http://localhost/siteAES/assets/images/visitor_image/banniere/'),
(17, 'c981eee526ee9126f870cec186bb639b.jpg', 'Matériels', '', 36, 'http://localhost/siteAES/assets/images/visitor_image/banniere/thumbs/', 'http://localhost/siteAES/assets/images/visitor_image/banniere/'),
(18, '5600c8c94362103a8a63b5855c129919.jpg', 'Station de pompage', '', 35, 'http://localhost/siteAES/assets/images/visitor_image/banniere/thumbs/', 'http://localhost/siteAES/assets/images/visitor_image/banniere/');

-- --------------------------------------------------------

--
-- Structure de la table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `logo`
--

INSERT INTO `logo` (`id`, `image`) VALUES
(1, '9675f5e036b0e5ef63a9af7cd94b591f.gif');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `idmess` int(11) NOT NULL AUTO_INCREMENT,
  `datemess` datetime NOT NULL,
  `nomexp` varchar(255) NOT NULL,
  `emailexp` varchar(255) NOT NULL,
  `siteexp` varchar(255) DEFAULT NULL,
  `sujet` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `message_vu` text NOT NULL,
  PRIMARY KEY (`idmess`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`idmess`, `datemess`, `nomexp`, `emailexp`, `siteexp`, `sujet`, `contenu`, `message_vu`) VALUES
(1, '2014-04-22 14:07:50', 'RATISBONNE', 'lebotarabonne@yahoo.fr', '', 'Demande Devis', 'Prière me faire parvenir un devis estimatif pour métre linaire', 'vu'),
(2, '2014-04-24 14:55:22', 'ENGEDRAFALE Elyno Zatovo', 'elyno@yahoo.fr', '', 'Test', 'Ceci est un message de test', 'vu');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE IF NOT EXISTS `partenaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `site` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `partenaire`
--

INSERT INTO `partenaire` (`id`, `nom`, `description`, `site`, `email`) VALUES
(9, 'JIRAMA', 'La Jirama est une société anonyme de droit commun détenue entièrement par l''Etat Malagasy. Elle est dirigée par un Conseil d''administration auquel répond le Directeur Général. Il est nommé par le Ministère chargé de l''énergie. \r\n\r\nLe Conseil d''administration est composé des représentants de l''Etat - notamment des ministères de tutelle - et des représentants des employés. L''organisation de la Jirama reflète ses deux grandes activités que sont l''eau et l''électricité. L''entreprise déploie aussi parallèlement une organisation géographique faite de directions interrégionales dans chacune des six provinces de Madagascar.', 'http://www.jirama.mg', '');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`idp`, `libelle`) VALUES
(1, 'Développeur'),
(2, 'Admin'),
(3, 'Direction'),
(4, 'Personnel'),
(5, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `test`
--

INSERT INTO `test` (`id`, `title`) VALUES
(1, 'direction generale'),
(2, 'direction d''exploitation');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `dnaissance` date NOT NULL,
  `lnaissance` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `idprofil` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `connectes` varchar(9) NOT NULL,
  `visites` int(11) NOT NULL,
  `nouveau` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idu`, `nom`, `prenom`, `sexe`, `dnaissance`, `lnaissance`, `adresse`, `ville`, `province`, `pays`, `idprofil`, `login`, `mdp`, `connectes`, `visites`, `nouveau`) VALUES
(8, 'HARIVONY', 'Nilaina', 'Femme', '1994-12-15', 'Maternité Majunga', 'Bloc 2 Ambohitsaina', 'Ankatso', 'Antananarivo', 'Madagascar', 4, 'nilaina', 'bb664aaf10c3d36f175e39644f5574a21c54f7a0', '', 0, 0),
(12, 'ANDRIAMITIA', 'Annicka', 'Femme', '1995-03-20', 'Maternité HJRA', 'Lot 14 B', 'Antsahavola', 'Antananarivo', 'Madagascar', 5, 'annicka', '764e87ed67b09dc2145955070317543c61134f49', '', 0, 0),
(13, 'ANDRIANJOHANY', 'Fabrice', 'Homme', '1996-03-11', 'Maternité Antsirabe', 'Lot 125 Bis', 'Antsirabe', 'Antananarivo', 'Madagascar', 5, 'fabrice', '0d2f7097c5a8692407fc370ecb48910e4b1e4794', '', 0, 0),
(14, 'ANDRIAMIRINDRA', 'Stephanie', 'Femme', '1994-03-01', 'Maternité Soavinndriana', 'IV 11', 'Andoharanofotsy', 'Antananarivo', 'Madagascar', 5, 'stephanie', '072b49525e72b15f33e88413e30615c0f128fb81', '', 0, 0),
(15, 'RAZAFIMANANTSOA', 'Tsanta', 'Femme', '1994-08-10', 'Maternité Soavinandriana', 'Lot 45 bis', 'Ambohibao Est', 'Antananarivo', 'Madagascar', 5, 'tsanta', 'a1b7cea48d658f7d9d4ae09d617ed3e9c0ae95e9', '', 0, 0),
(16, 'RAKOTONDRALAMBO', 'Christiane Karen', 'Femme', '1995-09-24', 'Maternité Befelatanana', '1096', 'Cités des67ha Sud', 'Antananarivo', 'Madagascar', 5, 'karen', '55107e193e648a27778fa98736b2e8e24b3cd6e1', '', 0, 0),
(17, 'ANDRIANARIVO', 'Miora', 'Femme', '1986-07-22', 'Maternité Arivonimamo', 'lot 658 ', 'Ambohikandrina', 'Antananarivo', 'Madagascar', 5, 'miora', '49829aad43098226d77e9693f346c6d6274cf0a7', '', 0, 0),
(18, 'ANDRIANJOHANY', 'Nandrianina', 'Homme', '1987-07-17', 'Maternité Soavinandriana', '1563', 'Cité des 67ha Nord-Est', 'Antananarivo', 'Madagascar', 5, 'dina', 'ed6e2ba79981a2b7a2bfe64abc4ba40b6586e391', '', 0, 0),
(19, 'RAKOTONDRALAMBO', 'Johariniaina', 'Homme', '1994-01-23', 'Maternité Sambava', '1068', 'Cité des 67ha Sud', 'Antananarivo', 'Madagascar', 5, 'johary', '98a1e64e0256118de2dcb6c6a4772e6fb48b871b', '', 0, 0),
(20, 'ANDRIANJAFINORO', 'Fetra Tsilavina', 'Homme', '1985-04-29', 'Materité Alasora', 'Lot 405 bis ', 'Alasora', 'Antananarivo', 'Madagascar', 5, 'tsilavina', '44b30b61a07f5c23900988431e44a1cd3e2c3686', '', 0, 0),
(21, 'RAKOTOARIJAONA', 'Onitiana', 'Femme', '1993-07-27', 'Maternité Ampasapito', ' Lot 1321', 'Ampasapito', 'Antananarivo', 'Madagascar', 5, 'onitiana', 'c8d6fe4323f1de955d7427f189904c035e29aa7f', '', 0, 0),
(22, 'ANDRIAMAHEFA', 'Sonia', 'Femme', '1993-07-27', 'Maternité Arivonimamo', 'IV 101', 'Arivonimamo', 'Antananarivo', 'Madagascar', 5, 'sonia', '40fdaeddab9567ad24bb9610ca88930ae1b2d7cc', '', 0, 0),
(25, 'RONDROHARIZAKA', 'Hantarisoa', 'Femme', '1961-02-15', 'Maternité Arivonomamo', '104 III bis', 'Arivonimamo', 'Antananarivo', 'Madagascar', 5, 'hanta', '78fe1b39e2454c650b068264396d196034cf008e', '', 0, 0),
(26, 'RALAHIMIHOATRA', 'Marylin', 'Femme', '1995-09-05', 'Maternité Befelatanana', '1256', 'Cité des 67ha nord-Ouest', 'Antananarivo', 'Madagascar', 5, 'marylin', '72c2da93f3000a4742645ef2575c9d38f1ed396f', '', 0, 0),
(34, 'RAKOTOMALALA', 'Herimampionona Sedera', 'Homme', '1990-05-12', 'Antananarivo', 'Tsimbazaza', 'Antananarivo', 'Antananarivo', 'Madagascar', 1, 'sedera', 'ecb6eb7a1ede3fa58a22cfa7f1eb691d4ce2aba1', '', 0, 0),
(35, 'RATISBONNE', 'Richard', 'Homme', '1954-10-26', 'TULEAR', 'AMPANOTAKA', 'ANTANANARIVO', 'ANTANANARIVO', 'MADAGASCAR', 5, 'RIRI', '5a4c7f44e9a42f2bd02d64f6db7f2068ba916fb6', 'connecté', 7, 0),
(36, 'Engendrafale', 'Zatovo Elyno', 'Homme', '1989-12-10', 'Toliara', 'Ankatso', 'Tanà', 'Tanà', 'Mada', 3, 'noely', '737086a7c5f63d0547cbb6584d4663f9bdbe0a70', '', 3, 0),
(41, 'RAKOTO ZO', 'Alain', 'Homme', '1988-01-16', '67Ha', 'Cité', '67Ha', 'Antananarivo', 'MADAGASCAR', 2, 'zoalain', '8e564adaa54d9d03f5a9e4bf27d17c2aeb9efc95', 'connecté', 3, 0);



--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chemin` (`chemin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `chemin`, `titre`, `description`) VALUES
(2, 'tcq1JKcH3BY', 'Interview du DG', ''),
(3, 'o6C67-nYJFY', 'Conseil d''administration 2014', '');
