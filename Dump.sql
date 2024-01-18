-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 mars 2021 à 08:50
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ldh`
--

-- --------------------------------------------------------

--
-- Structure de la table `avancement`
--

DROP TABLE IF EXISTS `avancement`;
CREATE TABLE IF NOT EXISTS `avancement` (
  `Etape_Validation` int NOT NULL,
  PRIMARY KEY (`Etape_Validation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `avancement`
--

INSERT INTO `avancement` (`Etape_Validation`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `ID_Competence` int NOT NULL AUTO_INCREMENT,
  `Nom_competence` varchar(64) NOT NULL,
  PRIMARY KEY (`ID_Competence`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`ID_Competence`, `Nom_competence`) VALUES
(1, 'C'),
(2, 'C++'),
(3, 'JS'),
(4, 'HTML'),
(5, 'Réseau'),
(6, 'Signal'),
(7, 'Python'),
(8, 'CSS'),
(9, 'C#'),
(10, '.NET');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `ID_CV` int NOT NULL AUTO_INCREMENT,
  `CV` varchar(1500) NOT NULL,
  PRIMARY KEY (`ID_CV`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`ID_CV`, `CV`) VALUES
(1, 'CVdjayan.pdf'),
(2, 'CVarthur.pdf'),
(3, 'CVarnaud.pdf'),
(4, 'CVfrederic.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrer`
--

DROP TABLE IF EXISTS `enregistrer`;
CREATE TABLE IF NOT EXISTS `enregistrer` (
  `ID_Enreng` int NOT NULL AUTO_INCREMENT,
  `Centre` varchar(64) NOT NULL,
  `Promotion` varchar(64) NOT NULL,
  PRIMARY KEY (`ID_Enreng`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `enregistrer`
--

INSERT INTO `enregistrer` (`ID_Enreng`, `Centre`, `Promotion`) VALUES
(1, 'Nancy', 'A1'),
(2, 'Nancy', 'A2'),
(3, 'Le Mans', 'A1'),
(4, 'Le Mans', 'A2');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `ID_Entreprise` int NOT NULL AUTO_INCREMENT,
  `Nom_entreprise` varchar(64) NOT NULL,
  `Secteur_activite` varchar(64) NOT NULL,
  `Evaluation_entreprise` int NOT NULL,
  `Confiance_pilote` int NOT NULL,
  `NB_stage_validee` int NOT NULL,
  PRIMARY KEY (`ID_Entreprise`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`ID_Entreprise`, `Nom_entreprise`, `Secteur_activite`, `Evaluation_entreprise`, `Confiance_pilote`, `NB_stage_validee`) VALUES
(1, 'CESi', 'Education', 1, 5, 0),
(2, 'Apple', 'Téléphonie', 4, 4, 42),
(3, 'Atlético de Madrid ', 'Club de football', 5, 5, 1),
(4, 'Samsung', 'Téléphonie', 3, 3, 11);

-- --------------------------------------------------------

--
-- Structure de la table `est`
--

DROP TABLE IF EXISTS `est`;
CREATE TABLE IF NOT EXISTS `est` (
  `ID_Enreng` int NOT NULL,
  `ID_Personne` int NOT NULL,
  PRIMARY KEY (`ID_Enreng`,`ID_Personne`),
  KEY `Est_Personne0_FK` (`ID_Personne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `est`
--

INSERT INTO `est` (`ID_Enreng`, `ID_Personne`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `etat_d_avancement`
--

DROP TABLE IF EXISTS `etat_d_avancement`;
CREATE TABLE IF NOT EXISTS `etat_d_avancement` (
  `ID_Stage` int NOT NULL,
  `ID_Personne` int NOT NULL,
  `Etape_Validation` int NOT NULL,
  PRIMARY KEY (`ID_Stage`,`ID_Personne`,`Etape_Validation`),
  KEY `Etat_d_avancement_Personne0_FK` (`ID_Personne`),
  KEY `Etat_d_avancement_Avancement1_FK` (`Etape_Validation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etat_d_avancement`
--

INSERT INTO `etat_d_avancement` (`ID_Stage`, `ID_Personne`, `Etape_Validation`) VALUES
(1, 1, 6),
(2, 4, 6);

-- --------------------------------------------------------

--
-- Structure de la table `lm`
--

DROP TABLE IF EXISTS `lm`;
CREATE TABLE IF NOT EXISTS `lm` (
  `ID_LM` int NOT NULL AUTO_INCREMENT,
  `LM` varchar(2000) NOT NULL,
  PRIMARY KEY (`ID_LM`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lm`
--

INSERT INTO `lm` (`ID_LM`, `LM`) VALUES
(1, 'lettre.pdf'),
(2, 'lettre.pdf'),
(3, 'lettre.pdf'),
(4, 'lettre.pdf'),
(5, 'lettre.pdf'),
(6, 'lettre.pdf'),
(7, 'lettre.pdf'),
(8, 'lettre.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `ID_Localisation` int NOT NULL AUTO_INCREMENT,
  `Pays` varchar(64) NOT NULL,
  `Ville` varchar(64) NOT NULL,
  `CP` int NOT NULL,
  `Rue` varchar(64) NOT NULL,
  `Numero` varchar(8) NOT NULL,
  `ID_Entreprise` int NOT NULL,
  PRIMARY KEY (`ID_Localisation`),
  KEY `Localisation_Entreprise_FK` (`ID_Entreprise`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`ID_Localisation`, `Pays`, `Ville`, `CP`, `Rue`, `Numero`, `ID_Entreprise`) VALUES
(1, 'France', 'Vandoeuvre-les-Nancy', 54000, 'rue de Crédence', '2 bis', 1),
(2, 'USA', 'New York', 10016, 'Wall streat', '14', 2),
(3, 'Espagne', 'Madrid', 28022, 'Av. Luis Aragones', '4', 3),
(4, 'Chine', 'Shanghai', 20698, 'Rue Coronavirus', '7', 4);

-- --------------------------------------------------------

--
-- Structure de la table `necessite`
--

DROP TABLE IF EXISTS `necessite`;
CREATE TABLE IF NOT EXISTS `necessite` (
  `ID_Competence` int NOT NULL,
  `ID_Stage` int NOT NULL,
  PRIMARY KEY (`ID_Competence`,`ID_Stage`),
  KEY `Necessite_Stage0_FK` (`ID_Stage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `necessite`
--

INSERT INTO `necessite` (`ID_Competence`, `ID_Stage`) VALUES
(3, 1),
(4, 1),
(8, 1),
(9, 2);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `ID_Personne` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(32) NOT NULL,
  `Prenom` varchar(32) NOT NULL,
  `Mail` varchar(64) NOT NULL,
  `Portable` varchar(32) NOT NULL,
  `Promo` varchar(32) NOT NULL,
  `Centre` varchar(32) NOT NULL,
  `Login` varchar(64) NOT NULL,
  `Mdp` varchar(128) NOT NULL,
  PRIMARY KEY (`ID_Personne`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`ID_Personne`, `Nom`, `Prenom`, `Mail`, `Portable`, `Promo`, `Centre`, `Login`, `Mdp`) VALUES
(1, 'DEMAISON', 'Djayan', 'djayan.demaison@viacesi.fr', '0613055829', 'A5', 'Vandoeuvre-lés-Nancy', 'ddemaison', '3aadf99f05627d32a5d789f8b657dd53e0671e41'),
(2, 'LAMBERT', 'Arthur', 'arthur.lambert@viacesi.fr', '0611559977', 'A5', 'Vandoeuvre-lés-Nancy',  'alambert', '3aadf99f05627d32a5d789f8b657dd53e0671e41'),
(3, 'HITTINGER', 'Arnaud', 'arnaud.hittinger@viacesi.fr', '0677889988', 'A5', 'Vandoeuvre-lés-Nancy', 'ahittinger', '3aadf99f05627d32a5d789f8b657dd53e0671e41'),
(4, 'SPATARO', 'Fred', 'frederic.sparato@viacesi.fr', '0611221122', 'A5', 'Vandoeuvre-lés-Nancy', 'fredou', '3aadf99f05627d32a5d789f8b657dd53e0671e41'),
(5, 'BRESCIANI', 'Julie', 'bj@cesi.fr', '0699887744', 'Pilote', 'Vandoeuvre-lés-Nancy',  'bjcesi', '3aadf99f05627d32a5d789f8b657dd53e0671e41');

-- --------------------------------------------------------

--
-- Structure de la table `possedecv`
--

DROP TABLE IF EXISTS `possedecv`;
CREATE TABLE IF NOT EXISTS `possedecv` (
  `ID_CV` int NOT NULL,
  `ID_Personne` int NOT NULL,
  PRIMARY KEY (`ID_CV`,`ID_Personne`),
  KEY `PossedeCV_Personne0_FK` (`ID_Personne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `possedecv`
--

INSERT INTO `possedecv` (`ID_CV`, `ID_Personne`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `possedelm`
--

DROP TABLE IF EXISTS `possedelm`;
CREATE TABLE IF NOT EXISTS `possedelm` (
  `ID_Personne` int NOT NULL,
  `ID_LM` int NOT NULL,
  PRIMARY KEY (`ID_Personne`,`ID_LM`),
  KEY `PossedeLM_LM0_FK` (`ID_LM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `possedelm`
--

INSERT INTO `possedelm` (`ID_Personne`, `ID_LM`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `possederole`
--

DROP TABLE IF EXISTS `possederole`;
CREATE TABLE IF NOT EXISTS `possederole` (
  `ID_Role` int NOT NULL,
  `ID_Personne` int NOT NULL,
  PRIMARY KEY (`ID_Role`,`ID_Personne`),
  KEY `PossedeRole_Personne0_FK` (`ID_Personne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `possederole`
--

INSERT INTO `possederole` (`ID_Role`, `ID_Personne`) VALUES
(4, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `possede_un`
--

DROP TABLE IF EXISTS `possede_un`;
CREATE TABLE IF NOT EXISTS `possede_un` (
  `ID_Personne` int NOT NULL,
  `ID_Stage` int NOT NULL,
  PRIMARY KEY (`ID_Personne`,`ID_Stage`),
  KEY `Possede_un_Stage0_FK` (`ID_Stage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `possede_un`
--

INSERT INTO `possede_un` (`ID_Personne`, `ID_Stage`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `ID_Role` int NOT NULL AUTO_INCREMENT,
  `Nom_role` varchar(64) NOT NULL,
  PRIMARY KEY (`ID_Role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`ID_Role`, `Nom_role`) VALUES
(1, 'Etudiant'),
(2, 'Délégué'),
(3, 'Pilote de formation'),
(4, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `sait`
--

DROP TABLE IF EXISTS `sait`;
CREATE TABLE IF NOT EXISTS `sait` (
  `ID_Personne` int NOT NULL,
  `ID_Competence` int NOT NULL,
  PRIMARY KEY (`ID_Personne`,`ID_Competence`),
  KEY `Sait_Competence0_FK` (`ID_Competence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `sait`
--

INSERT INTO `sait` (`ID_Personne`, `ID_Competence`) VALUES
(1, 1),
(4, 1),
(1, 2),
(4, 2),
(2, 3),
(4, 3),
(2, 4),
(4, 4),
(3, 5),
(3, 6),
(1, 7),
(3, 7),
(1, 9),
(3, 9),
(4, 9),
(4, 10);

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

DROP TABLE IF EXISTS `stage`;
CREATE TABLE IF NOT EXISTS `stage` (
  `ID_Stage` int NOT NULL AUTO_INCREMENT,
  `Descriptif_stage` varchar(150) NOT NULL,
  `Commentaire_stage` varchar(64) NOT NULL,
  `Note_etudiant_stage` int NOT NULL,
  `Duree_stage` int NOT NULL,
  `Base_remuneration` int NOT NULL,
  `Date_offre` date NOT NULL,
  `Type_promos` varchar(64) NOT NULL,
  `Nbre_places_offertes` int NOT NULL,
  `Convention_stage` varchar(2000) NOT NULL,
  `Fiche_validation` varchar(2000) NOT NULL,
  `ID_Entreprise` int NOT NULL,
  PRIMARY KEY (`ID_Stage`),
  KEY `Stage_Entreprise_FK` (`ID_Entreprise`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`ID_Stage`, `Descriptif_stage`, `Commentaire_stage`, `Note_etudiant_stage`, `Duree_stage`, `Base_remuneration`, `Date_offre`, `Type_promos`, `Nbre_places_offertes`, `Convention_stage`, `Fiche_validation`, `ID_Entreprise`) VALUES
(1, 'Dev web', 'commentaire1.txt', 4, 14, 601, '2020-04-07', 'A1', 1, 'conventionapple.pdf', 'fichevalidationcesi.pdf', 2),
(2, 'Développement application en .NET', 'commentaire2.txt', 0, 14, 776, '2021-04-06', 'A2', 2, 'conventionsignee.pdf', 'fichevalidationaremplir.pdf', 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `est`
--
ALTER TABLE `est`
  ADD CONSTRAINT `Est_Enregistrer_FK` FOREIGN KEY (`ID_Enreng`) REFERENCES `enregistrer` (`ID_Enreng`),
  ADD CONSTRAINT `Est_Personne0_FK` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);

--
-- Contraintes pour la table `etat_d_avancement`
--
ALTER TABLE `etat_d_avancement`
  ADD CONSTRAINT `Etat_d_avancement_Avancement1_FK` FOREIGN KEY (`Etape_Validation`) REFERENCES `avancement` (`Etape_Validation`),
  ADD CONSTRAINT `Etat_d_avancement_Personne0_FK` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`),
  ADD CONSTRAINT `Etat_d_avancement_Stage_FK` FOREIGN KEY (`ID_Stage`) REFERENCES `stage` (`ID_Stage`);

--
-- Contraintes pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD CONSTRAINT `Localisation_Entreprise_FK` FOREIGN KEY (`ID_Entreprise`) REFERENCES `entreprise` (`ID_Entreprise`);

--
-- Contraintes pour la table `necessite`
--
ALTER TABLE `necessite`
  ADD CONSTRAINT `Necessite_Competence_FK` FOREIGN KEY (`ID_Competence`) REFERENCES `competence` (`ID_Competence`),
  ADD CONSTRAINT `Necessite_Stage0_FK` FOREIGN KEY (`ID_Stage`) REFERENCES `stage` (`ID_Stage`);

--
-- Contraintes pour la table `possedecv`
--
ALTER TABLE `possedecv`
  ADD CONSTRAINT `PossedeCV_CV_FK` FOREIGN KEY (`ID_CV`) REFERENCES `cv` (`ID_CV`),
  ADD CONSTRAINT `PossedeCV_Personne0_FK` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);

--
-- Contraintes pour la table `possedelm`
--
ALTER TABLE `possedelm`
  ADD CONSTRAINT `PossedeLM_LM0_FK` FOREIGN KEY (`ID_LM`) REFERENCES `lm` (`ID_LM`),
  ADD CONSTRAINT `PossedeLM_Personne_FK` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);

--
-- Contraintes pour la table `possederole`
--
ALTER TABLE `possederole`
  ADD CONSTRAINT `PossedeRole_Personne0_FK` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`),
  ADD CONSTRAINT `PossedeRole_Role_FK` FOREIGN KEY (`ID_Role`) REFERENCES `role` (`ID_Role`);

--
-- Contraintes pour la table `possede_un`
--
ALTER TABLE `possede_un`
  ADD CONSTRAINT `Possede_un_Personne_FK` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`),
  ADD CONSTRAINT `Possede_un_Stage0_FK` FOREIGN KEY (`ID_Stage`) REFERENCES `stage` (`ID_Stage`);

--
-- Contraintes pour la table `sait`
--
ALTER TABLE `sait`
  ADD CONSTRAINT `Sait_Competence0_FK` FOREIGN KEY (`ID_Competence`) REFERENCES `competence` (`ID_Competence`),
  ADD CONSTRAINT `Sait_Personne_FK` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `Stage_Entreprise_FK` FOREIGN KEY (`ID_Entreprise`) REFERENCES `entreprise` (`ID_Entreprise`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
