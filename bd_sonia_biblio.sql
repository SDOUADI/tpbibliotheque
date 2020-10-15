-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 15 oct. 2020 à 15:27
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_sonia_biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nationalite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'CAMUS', 'Albert', 'FranÃ§aise '),
(2, 'BUCKOVSKI', 'Charles', 'AmÃ©ricaine '),
(3, 'CESAIRE', 'AimÃ©', 'FranÃ§aise '),
(4, 'RABHI', 'Pierre', 'FranÃ§aise '),
(5, 'ZIZEK', 'Slavoj', 'SlovÃ©ne '),
(6, 'ZWEIG', 'Stefan', 'Autrichienne'),
(8, 'TEST MARDI', 'TEST MARDI', ' TEST MARDI');

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

CREATE TABLE `bibliotheque` (
  `id_bibliotheque` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES
(1, 'BNF BNF', 'Quai FranÃ§ois Mauriac75 013 Paris', '01 53 79 59 59'),
(2, 'SONIA LIBRARY', '2 Rue des Monts Gets\r\n94400 Vitry sur Seine', '01 44 55 66 77'),
(3, 'MEHDI LIBRARY', '12 Rue de la Justice\r\n93400 Saint Ouen', '0122 33 44 55'),
(4, 'SOSO LIBRARY', '12 RUE DE LA GARE\r\n95100 ARGENTEUIL', '01 21 13 14 15'),
(5, 'MIMI LIBRARY', '22 ALLEE DE BATELIERS\r\n93110 ROSNY SOUS BOIS', '01 21 34 45 56'),
(6, 'SAFIA LIBRARY', '40 AVENUE DE LA RANCUNE\r\n95100 ARGENTEUIL', '01 24 46 68 80'),
(7, 'DZ LIBRARY', '62 BOULEVARD DE LA FIERTE\r\n93110 ROSNY SOUS BOIS', '01 64 42 88 00');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `telephone`) VALUES
(1, 'DOUADI', 'Sonias', '06 07 08 09 00 '),
(2, 'SCHOENARTS', 'Matthias', '06 05 04 03 02'),
(3, 'KIEFER', 'Lucile', '01 39 47 36 71'),
(4, 'FIMMEL', 'Travis', '07 80 94 62 78'),
(5, 'HANSOLO', 'Mehdi', '06 22 48 08 02'),
(6, 'TEST2', 'TEST2', ' 04 04 02 02 02'),
(8, 'FLETCHER', 'Greyson', '07 02 02 04 04 ');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `id_editeur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id_editeur`, `nom`, `adresse`) VALUES
(1, 'FLAMMARION', '87 Quai Panhard et Levassor\r\n75016 Paris'),
(2, 'GALLIMARD', '25 Rue des Champs\r\n75018 Paris'),
(3, 'ACTE SUD', '72 Avenue des Fleurs\r\n75015 Paris'),
(4, 'STOCK', '62 Rue de la Joie\r\n75013 Paris'),
(5, 'LAFONT', '42 Avenue des Ternes\r\n75008 Paris'),
(6, 'TEST', 'TEST'),
(8, 'TEST MARDI TEST MARDI', 'TEST MARDI');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `date_emprunt` date NOT NULL,
  `id_client` int(200) NOT NULL,
  `id_livre` int(200) NOT NULL,
  `id_emprunter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emprunter`
--

INSERT INTO `emprunter` (`date_emprunt`, `id_client`, `id_livre`, `id_emprunter`) VALUES
('2020-09-18', 2, 4, 4),
('2020-10-01', 1, 4, 5),
('2020-10-02', 4, 2, 6),
('2020-06-02', 5, 8, 7),
('2020-10-06', 3, 3, 8),
('2019-10-19', 2, 7, 9);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `id_bibliotheque` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `logolivre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logolivre`) VALUES
(1, 2, 'L\'étranger', 'Littérature française', ''),
(2, 4, 'Caligula', 'LittÃ©rature franÃ§aise', '5f88007b73a9d-caligula.jpg'),
(3, 5, 'Correspondance', 'LittÃ©rature franÃ§aise', '5f88009d25e98-correspondance.jpg'),
(4, 2, 'Contes de la folie ordinaire', 'LittÃ©rature amÃ©ricaine', '5f8837628d14b-contesdelafolie.jpg'),
(5, 1, 'La peste', 'Littérature française', ''),
(6, 5, 'Discours sur le colonialisme', 'Essai', ''),
(7, 4, 'La nouvelle lutte des classes', 'Economie', '5f8800df62aaa-luttedesclasses.jpg'),
(8, 2, 'Vers la sobriÃ©tÃ© heureuse', 'Essai', '5f8800bfc188f-sobriete.jpg'),
(10, 5, 'TEST MARDI', 'TEST MARDI', '5f85568a5c493-matthias.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

CREATE TABLE `publier` (
  `id_editeur` int(200) NOT NULL,
  `id_auteur` int(200) NOT NULL,
  `id_livre` int(200) NOT NULL,
  `id_publier` int(11) NOT NULL,
  `date_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publier`
--

INSERT INTO `publier` (`id_editeur`, `id_auteur`, `id_livre`, `id_publier`, `date_publication`) VALUES
(1, 2, 4, 1, '2020-10-07'),
(2, 1, 2, 2, '2019-12-02'),
(2, 1, 3, 3, '2020-09-02'),
(4, 4, 8, 4, '2020-10-01'),
(3, 5, 7, 5, '2018-12-02'),
(3, 2, 10, 7, '2020-10-02');

-- --------------------------------------------------------

--
-- Structure de la table `rendre`
--

CREATE TABLE `rendre` (
  `id_livre` int(150) NOT NULL,
  `id_client` int(150) NOT NULL,
  `date_retour` date NOT NULL,
  `id_rendre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD PRIMARY KEY (`id_bibliotheque`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`id_emprunter`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `id_bibliotheque` (`id_bibliotheque`);

--
-- Index pour la table `publier`
--
ALTER TABLE `publier`
  ADD PRIMARY KEY (`id_publier`),
  ADD KEY `id_auteur` (`id_auteur`),
  ADD KEY `id_editeur` (`id_editeur`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD PRIMARY KEY (`id_rendre`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_livre` (`id_livre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  MODIFY `id_bibliotheque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `emprunter`
--
ALTER TABLE `emprunter`
  MODIFY `id_emprunter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `publier`
--
ALTER TABLE `publier`
  MODIFY `id_publier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `rendre`
--
ALTER TABLE `rendre`
  MODIFY `id_rendre` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`id_bibliotheque`) REFERENCES `bibliotheque` (`id_bibliotheque`);

--
-- Contraintes pour la table `publier`
--
ALTER TABLE `publier`
  ADD CONSTRAINT `publier_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `publier_ibfk_2` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`),
  ADD CONSTRAINT `publier_ibfk_3` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD CONSTRAINT `rendre_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `rendre_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
