-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 01 mai 2021 à 17:05
-- Version du serveur :  8.0.23
-- Version de PHP : 7.3.24-(to be removed in future macOS)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `JapAdvisor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` bigint UNSIGNED NOT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur` bigint UNSIGNED NOT NULL,
  `note` int NOT NULL,
  `etablissement` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `commentaire`, `auteur`, `note`, `etablissement`, `created_at`, `updated_at`) VALUES
(6, 'J\'ai adoré les sashimis !', 2, 5, 18, '2021-04-30 19:02:43', '2021-04-30 19:02:43'),
(7, 'J\'adore les Ramen !', 1, 4, 18, '2021-04-30 19:05:16', '2021-04-30 19:05:16'),
(10, 'Kioko est une épicerie japonaise sur deux niveaux en plein coeur du quartier asiatique à opéra. Il y’a une grande diversité d’aliments, de snacks ainsi que d’ustensiles et couverts de types japonais (bols, plats, théières etc). Comme les produits sont importés ils sont forcément un peu chers mais malgré ça il y a souvent du monde car c’est un endroit prisé des jeunes ; donc pour éviter la queue il vaut mieux y aller en matinée ou début d’après midi.', 2, 4, 19, '2021-05-01 14:28:29', '2021-05-01 14:28:29'),
(11, 'C\'est livré rapidement, la commande est emballée avec un soin incroyable, et les produits ont l\'air vraiment de grande qualité.\r\nBref, c\'est parfait, je recommanderais sans hésiter.\r\nSeul petit bémol : énormément de produit indisponible au moment au j\'ai passé commande. J\'imagine que la crise sanitaire ne doit pas aider.', 3, 5, 20, '2021-05-01 14:34:40', '2021-05-01 14:34:40'),
(12, 'Boutique référence dans le domaine des mangas avec beaucoup de choix et des produits de qualités. Vous pourrez y trouver votre bonheur à coup sûr ! Je recommande à 100% !!!', 3, 5, 22, '2021-05-01 14:42:21', '2021-05-01 14:42:21'),
(13, 'C\'est un monsieur très accueillant qui nous fais part de sa passion envers les mangas. C est quelqu\'un de très passionné et ça se voit.(j\'y ai été avec mon père) je recommande', 2, 5, 22, '2021-05-01 14:43:22', '2021-05-01 14:43:22'),
(15, 'N\'ayant toujours pas eu la chance de pouvoir m\'y poser pour lire avec ce confinement qui nous apporte bonheur à tous. J\'ai tout de même été séduit par ce qu\'ils proposent, notamment cette farandole de kit Kat aux goûts non existant dans l\'hexagone. Ainsi que leurs bibliothèque bien fourni.', 1, 5, 17, '2021-05-01 14:58:25', '2021-05-01 14:58:25'),
(16, 'Je passe régulièrement dans ce magasin pour acheter mes mangas et toujours nickel. Le personnel est serviable et sympa', 2, 4, 17, '2021-05-01 14:59:09', '2021-05-01 14:59:09');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`id`, `nom`, `adresse`, `ville`, `code_postal`, `pays`, `description`, `created_at`, `updated_at`, `picture`) VALUES
(17, 'Manga cafe V2', '9 Rue Primo Levi', 'Paris', '75013', 'France', 'Dans ce café-concept store de produits japonais, nombreux mangas et formule déjeuner avec bento et onigiri.', '2021-04-30 12:04:18', '2021-04-30 12:04:18', 'images/1619791458_mangacafeV2.jpg'),
(18, 'tokyo Délices d\'asie', '32 Avenue Jean Moulin', 'Paris', '75014', 'France', 'très bon resto !', '2021-04-30 13:58:36', '2021-04-30 13:58:36', 'images/1619798316_tokyo_delices_asie.jpg'),
(19, 'Epicerie Kioko', '46 Rue des Petits Champs', 'Paris', '75002', 'France', 'Cette épicerie propose des aliments, des boissons, des condiments et des ustensiles en provenance du Japon.', '2021-05-01 14:27:29', '2021-05-01 14:27:29', 'images/1619886449_kioko.jpg'),
(20, 'Nishikidōri - Le Comptoir des Poivres', '6 Rue Villédo', 'Paris', '75001', 'France', 'Superbe épicerie japonaise où l on trouve des ingrédients de très bonne qualité. Sauce soja, riz, vinaigre, panko, sel, saké, miso, thé mais aussi des ingrédients plus rares. On trouve aussi quelques instruments pour la cuisine. En plus il y a une super équipe qui vous donnera de très bons conseils.', '2021-05-01 14:32:49', '2021-05-01 14:32:49', 'images/1619886769_Nishikidori.jpg'),
(22, 'Manga loisirs', '134 Rue de Tolbiac', 'Paris', '75013', 'France', 'Bienvenue à Manga Loisirs ici vous trouverez des produits venant du Japon tels que: Figurines, Mangas Papier, T-Shirt, porte-clé, DvD, peluches, cartes et autres goodies.', '2021-05-01 14:41:36', '2021-05-01 14:41:36', 'images/1619887296_manga_loisirs.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_29_095139_add_role_user', 2),
(7, '2021_04_29_103002_create_etablissement_table', 3),
(8, '2021_04_29_115636_create_commentaire_table', 3),
(9, '2021_04_29_220238_add_picture_etablissement', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '2021-04-29 10:13:43', '$2y$10$6DSmtrIYgSkXFxC88Ly68OcDgHdBpUYxAZ/BdGzF2TYggMPuNkG7m', NULL, '2021-04-29 10:13:43', '2021-04-29 10:13:43', 'admin'),
(2, 'Pheng', 'pheng@gmail.com', NULL, '$2y$10$/FUyozu2ZAwLxyLrDn1yHOBk0id.u3Z3LmMpzLABiOOKs.MLGjlGC', NULL, '2021-04-30 12:49:30', '2021-04-30 12:49:30', 'user'),
(3, 'Rhoy', 'rhoy@gmail.com', NULL, '$2y$10$tqiff.T4GCM/eBxfZ6bvbePVLfUyjhulrUOEgqagafawQxMbSZPja', NULL, '2021-05-01 14:30:37', '2021-05-01 14:30:37', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaire_auteur_foreign` (`auteur`),
  ADD KEY `commentaire_etablissement_foreign` (`etablissement`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etablissement_nom_unique` (`nom`),
  ADD UNIQUE KEY `etablissement_adresse_unique` (`adresse`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `etablissement`
--
ALTER TABLE `etablissement`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_auteur_foreign` FOREIGN KEY (`auteur`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentaire_etablissement_foreign` FOREIGN KEY (`etablissement`) REFERENCES `etablissement` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
