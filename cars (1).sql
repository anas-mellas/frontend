-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 déc. 2021 à 02:02
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cars`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `carID` int(11) NOT NULL,
  `carBrand` varchar(20) DEFAULT NULL,
  `carModel` varchar(20) DEFAULT NULL,
  `carColor` varchar(20) DEFAULT NULL,
  `isDisponible` enum('1','-1') NOT NULL DEFAULT '1',
  `purchaseDate` date DEFAULT NULL,
  `priceKm` decimal(10,0) NOT NULL,
  `typeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`carID`, `carBrand`, `carModel`, `carColor`, `isDisponible`, `purchaseDate`, `priceKm`, `typeID`) VALUES
(1, 'bmw', '2020', 'red', '1', '2021-12-02', '200', 2),
(2, 'nissane', '2014', 'blue', '-1', '2021-09-15', '150', 2),
(4, 'logan', '2014', 'red', '-1', '2021-12-16', '155', 1),
(6, 'peugot', '2014', 'blue', '1', '2021-12-15', '500', 2),
(7, 'maserati', '2015', 'blue', '-1', '2015-12-15', '200', 1);

-- --------------------------------------------------------

--
-- Structure de la table `car_type`
--

CREATE TABLE `car_type` (
  `typeID` int(11) NOT NULL,
  `typeLabel` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `car_type`
--

INSERT INTO `car_type` (`typeID`, `typeLabel`) VALUES
(1, 'sportif'),
(2, 'famille'),
(3, 'voyage');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `city` text NOT NULL,
  `adresse` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `reservationID` int(11) NOT NULL,
  `pickupDay` date NOT NULL,
  `returnDay` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pickupLocation` varchar(50) NOT NULL,
  `returnLocation` varchar(50) NOT NULL,
  `customerID` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `isConfirmed` enum('-1','1') NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`reservationID`, `pickupDay`, `returnDay`, `price`, `pickupLocation`, `returnLocation`, `customerID`, `carID`, `isConfirmed`) VALUES
(1, '2021-12-19', '2021-12-21', '5000', 'meknes', 'fes', 2, 1, '1'),
(5, '2021-12-15', '2021-12-29', '144', 'meknes', 'meknes', 2, 2, '-1'),
(6, '2021-12-22', '2021-12-23', '155', 'Casa', 'meknes', 2, 4, '1'),
(10, '2021-12-10', '2021-12-24', '2170', 'test', 'fes', 8, 4, '-1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `customerID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` enum('admin','user') NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`customerID`, `firstName`, `lastName`, `mobile`, `city`, `adresse`, `email`, `type`, `password`) VALUES
(1, 'hassan', 'ajlaoui', '61547895', 'mekness', 'mekness morocco', 'hassan@gmail.com', 'admin', '25f9e794323b453885f5181f1b624d0b'),
(2, 'ayoubinou', 'ayoubi', '654568', 'meknesi', 'fes morocco agadir', 'ayoub@gmail.com', 'user', '4321'),
(8, 'salam', 'test', '14785', 'test', 'Adresse', 'test@gmail.com', 'user', '1234'),
(9, 'ayoub', 'ahmadi', '78945', 'agadir', 'agadir morocco', 'ayoub.ahmadi@gmail.com', 'user', '25f9e794323b453885f5181f1b624d0b');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`),
  ADD KEY `typeID` (`typeID`);

--
-- Index pour la table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`typeID`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservationID`),
  ADD KEY `carID` (`carID`),
  ADD KEY `customerID` (`customerID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `car_type`
--
ALTER TABLE `car_type`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`typeID`) REFERENCES `car_type` (`typeID`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`carID`) REFERENCES `cars` (`carID`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `users` (`customerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
