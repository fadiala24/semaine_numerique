-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 12 oct. 2021 à 12:30
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `numeric_history`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `nom_image` varchar(255) NOT NULL,
  `historique` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`id`, `nom_complet`, `nom_image`, `historique`) VALUES
(1, 'Hedy Lamarr', 'styles/images/a.jpg', 'Considérée comme l\'une des plus belles femmes du cinéma des années 1940, \r\nHedy Lamarr a, toute sa vie, rêvé d\'être reconnue pour «bien plus que la courbe d\'un nez ou la couleur d\'un regard». \r\nL\'actrice au parcours romanesque est aussi l\'inventrice d\'un système de guidage indétectable des torpilles grâce au saut de fréquence. \r\nLe brevet qu\'elle dépose en 1941 avec son ami George Antheil a servi de point de départ au système de sécurisation des télécommunications aujourd\'hui utilisé pour le Wi-Fi, \r\nle Bluetooth ou le GPS.'),
(2, 'Arthur Zang', 'styles/images/arthur.jpg', 'Pour lutter contre ce phénomène, commun à plusieurs pays africains et qui entraîne de nombreux décès chaque année, \r\nArthur Zang, un jeune ingénieur camerounais, \r\nimaginera un outil spécialisé dans la détection des maladies cardiaques : le cardiopad.\r\n« Le Cardiopad, ça permet d’avoir tout d’un coup un nombre assez important de patients nécessitant des soins de cardiologie qui trouvent directement une solution à leur problème quelle que soit la distance de ceux-ci avec les cardiologues » \r\ncommentait à cet effet Alain Bala, cardiologue dans l’un des principaux centre de santé du pays. \r\nEn 2016, à la tête de son entreprise Himore Medical, \r\nl’ingénieur de 32 ans lancera la commercialisation de son cardiopad monté au Cameroun, \r\net vendu à environ 3200 $. \r\nUn projet qui a pu être concrétisé grâce à de nombreux financements participatifs \r\net à un soutien de l’Etat qui représentait en 2017, 40% des ventes de l’entreprise avec \r\nune commande de 82 millions de francs CFA, destinée notamment à alimenter des centres de santé publics.\r\nUne invention révolutionnaire dans un pays qui comptait en 2017, seulement 60 cardiologues pour 22 millions d’habitants.'),
(3, 'Linus Torvalds', 'styles/images/Linus.jpg', 'Linus Torvalds est le parrain de ce qui constitue peut-être le dernier et meilleur espoir d’une solution de rechange à Windows \r\n(outre les ordinateurs Apple que certains considèrent trop dispendieux). \r\nLe système d’exploitation Linux est en développement incessant depuis sa création par Torvalds en 1991, \r\net ne cesse de gagner en popularité à chaque année. \r\nAprès une longue attente, Linux a finalement franchi le seuil des salles de serveurs et atteint progressivement les ordinateurs de bureau, \r\nplus particulièrement les ordinateurs portables à faible coûts, tel que le Asus Eee PC. \r\nLe système d’exploitation occupe à présent plus de 2 % du marché des ordinateurs de bureau.\r\n'),
(4, 'Federico Faggin', 'styles/images/Federico.jpg', 'Physicien italien ayant émigré aux Etats-Unis à la fin des années 60, \r\nil a mis au point le premier microprocesseur commercialisé par l’entreprise américaine Intel en 1971, le Intel 4004.\r\nLe microprocesseur est un composant électronique qui permet aux ordinateurs actuels d’exécuter un programme et de traiter des données. \r\nAvant son invention, les ordinateurs devaient être beaucoup plus gros (de la taille d’une pièce de maison) pour pouvoir fonctionner. \r\nC’est cette invention qui a ouvert la voie à la diffusion large de l’informatique telle qu’on la connait aujourd’hui, \r\nen particulier dans les maisons et les entreprises.\r\n'),
(5, 'Nnenna Nwakanma', 'styles/images/Nnenn.jpg', 'Experte en technologie tenue en haute estime en Afrique, \r\nNnenna Nwakanma s’efforce de promouvoir un accès abordable à Internet, \r\nles droits afférents aux données et la liberté numérique. \r\nElle a cofondé la Fondation africaine pour les logiciels libres et ouverts (Free Software and Open Source Foundation for Africa, FOSSFA) ; \r\ncette organisation met en avant les logiciels gratuits et le modèle des logiciels libres en tant qu’outils de développement pour le continent africain.\r\n'),
(6, 'Kofo Akinkugbe', 'styles/images/kofo.jpg', 'Aeroview : une nouvelle façon de voir l’agriculture\r\n\r\n Il y a quatre ans, la société Aerobotics, fondée par de jeunes ingénieurs sud-africains, \r\ndécide de créer un outil visant à améliorer les rendements du secteur agricole. \r\nDans ce pays où le secteur agricole est vital pour l’économie, \r\ncette start-up va proposer des solutions pour permettre aux agriculteurs d’identifier \r\ntrès tôt les cultures à risques de leurs plantations.\r\nAeroview, leur plateforme en ligne, regroupe des analyses détaillées de l’état de leurs cultures, \r\ngrâce à des images filmées par des satellites et des drones. \r\nPour 4 euros par hectare et par mois, \r\nAerobotics propose ensuite aux agriculteurs un accès à la plateforme et application mobile Aeroview, \r\nqui permet de consulter ces images aériennes afin d’identifier les potentielles zones à risques et de \r\n« résoudre les problèmes avant qu’ils ne deviennent une réelle menace ».'),
(7, 'Rebecca Enonchong', 'styles/images/Rebecca.jpg', 'En plus d’être la fondatrice et la directrice générale d’AppsTech, \r\nRebecca Enonchong est une promotrice très médiatisée des technologies en Afrique. \r\nSa société fournit des solutions applicatives pour entreprises dans le monde entier. \r\nRebecca Enonchong est également présidente d’ActivSpaces, association créée pour aider les jeunes entrepreneurs technologiques du Cameroun. \r\nActivSpaces rassemble des communautés technologiques et leur offre un espace pour se former et développer de nouvelles idées.\r\n'),
(8, 'John Von Neumann', 'styles/images/vonneumann.jpg', '\r\n\r\nD’origine hongroise, ce génie précoce est l’un des nombreux savants d’Europe centrale à avoir émigré aux Etats Unis pendant l’occupation nazie. \r\nIl s’est intéressé à de nombreuses disciplines, mais en informatique, \r\non a donné son nom à l’organisation de base des ordinateurs. \r\nCette organisation distingue quatre composantes : une unité arithmétique et logique qui effectue les opérations de base, \r\nune unité de contrôle chargée du séquencement des opérations, \r\nla mémoire qui contient les données et le programme qui commande au traitement de ces données, \r\net enfin les dispositifs d’entrées et sorties qui permettent à l’ordinateur de communiquer avec le monde extérieur. \r\nLa paternité de ses travaux est cependant contestée.\r\nCe n’est pas le seul à avoir travaillé sur la machine informatique. \r\nOn le considère aujourd’hui comme l’un des pères de l’ordinateur, avec Turing et bien d’autres…\r\nJohn Von Neumann a fait partie des savants qui ont participé au développement de la bombe atomique et de la bombe à hydrogène. \r\nC’est d’ailleurs l’exposition aux fortes radiations lors de ses nombreux tests qui a raccourci sa vie.\r\n\r\n'),
(9, 'Rosalind Picard', 'styles/images/rosalind.jpg', '\r\nProfesseure au MIT Media Lab, laboratoire américain de renommée mondiale, \r\nRosalind Picard y dirige la recherche en informatique affective. \r\nOn lui doit la création des études dans cette discipline, \r\nqui porte sur le développement de systèmes et d’appareils capables de reconnaître, \r\nd’interpréter et de traiter les émotions humaines et autres stimulus et d’y répondre. \r\nSon travail est actuellement appliqué aux objets connectés portables afin d’améliorer le bien-être humain.\r\n');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
