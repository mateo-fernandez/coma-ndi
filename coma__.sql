-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 03 déc. 2021 à 05:10
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coma__`
--

--
-- Déchargement des données de la table `Article`
--

INSERT INTO `Article` (`idArticle`, `contenu`, `derniereModif`) VALUES
(1, 'Ordonnance de 1770 de Caumartin repris par les baillis Echevins de la région de Dunkerque conduite à tenir devant une personne noyée.\r\n', '2021-12-03 04:53:42'),
(2, '1836 Instructions sur les premiers secours à donner aux noyés pour la Société Humaine de Dunkerque.\r\n', '2021-12-03 04:53:42'),
(3, '1866 Instruction pour nager au secours de personnes en danger.', '2021-12-03 04:53:42');

--
-- Déchargement des données de la table `Bateau`
--

INSERT INTO `Bateau` (`idBateau`, `nomBateau`, `histoire`, `anneeDebutUtilisation`, `anneeFinUtilisation`, `NomPays`, `nomModele`) VALUES
(1, 'Canot de la Société Humaine', 'Un canot demandé par le maire de Dunkerque au Ministre de la Marine et des Colonies a été commandé le 7 mai 1835.\r\n\r\nIl sera construit par l’État aux constructions navales de Cherbourg. C’est le cutter LE VIGILEANT qui ramènera le canot depuis Cherbourg. Celui-ci arrive le 7 juin à Dunkerque. Il est remis officiellement à la Société Humaine le 15 juin.\r\n\r\nLe canot est installé dans les locaux de la Société Humaine à l’est du chenal du port. Il est monté sur un solide chariot à 4 roues qui peut être tiré par un cheval ou trois hommes. Le bateau peut ainsi être lancé depuis la jetée à l’entrée ou à l’ouest du port.\r\n\r\nDes essais sont organisés le 14 juin 1836 – le redressement pose un problème lié à l’absence de lest à bord.\r\n\r\nLe 17 juin nouveaux essais avec 200 kilos de gueuze de fer. Ce dernier essai est un succès.\r\n\r\nLe 3 juillet un dernier essai concluant  testera la capacité du canot à naviguer avec 26 personnes à bord.\r\n\r\nLe deuxième canot qui remplacera le premier ne sera plus mis à l’eau par un chariot tiré par des chevaux mais grâce à un système de treuils et poulies depuis le quai.\r\n\r\nCe premier canot participera* à 17 opérations de sauvetage.\r\nIl permettra de sauver 7 équipages et 56 personnes.', '1836', NULL, 'France', 'Canots dunkerquois'),
(2, 'SUSAN GRAY', 'Le nouveau canot nous vient de l’Angleterre, il porte le nom de SUSAN GRAY. Voici dans quelles circonstances il a été offert.*\r\n\r\nEn 1877, une goélette anglaise se brisait sur les plages de Margate, qui avait alors un matériel insuffisant pour le sauvetage dans la grande mer.\r\n\r\nUn homme généreux, M. Thomas Gray, voulut doter sa ville natale d’une embarcation de sauvetage pareille aux life-boats usités sur nos côtes.\r\n\r\nIl en fit construire un, que les pêcheurs de Margate trouvèrent trop grand et trop lourd pour leurs plages, M. Thomas Gray fit mettre sur les chantiers un canot plus léger, il mourut avant qu’il fût achevé.\r\n\r\nPlus tard sa veuve, Mme Gray, a voulu utiliser le life-boat, elle l’a offert à la Société Humaine de Dunkerque.\r\n\r\nM. Thomas Gray avait fait ses études à Dunkerque, il en avait conservé un excellent souvenir, il en parlait souvent, c’est ce souvenir que Mme Gray a voulu perpétuer en offrant une embarcation destinée au service du sauvetage dans cette localité ou dans ses environs.\r\nM. [pers,Alfred Brunet,1], maire de Margate, a désiré s’associer à cette généreuse pensée ; accompagné de son conseil, il est venu remettre le canot de sauvetage à notre Société.\r\n\r\n', '1878', '1880', 'Allemagne', 'Canots dunkerquois'),
(3, 'AMICIA', 'Le Président du Comité M. Collet, vice-président de la Chambre de Commerce, allait  chercher la marraine du canot Mme Olmi remplaçant Mme Collet, sa tante, retenue chez elle, à son très grand regret, par une indisposition. Le parrain était le Maire de Dunkerque, M. Dumont, qui a bien voulu donner aux marins cette preuve d’amitié. M. l’abbé [pers,Pierre Louis DELUGNY,2], curé-doyen, a tenu à bénir lui-même le canot. Nous nous sommes joints au Comité et aux anciens sauveteurs pour nous rendre au quai des pêcheurs, centre même du quartier maritime. Le canot fort bien pavoisé nous y attendait avec son armement complet. M. Collet a, dans une aimable allocution, chargé le Représentant de la Société des remerciements de la population pour le donateur et pour la Société. Il s’est exprimé en ces termes :\r\n\r\n« Messieurs,\r\n\r\nCe m’est un devoir très agréable de remercier aujourd’hui au nom de mes collègues du Comité et de tous nos braves sauveteurs, M. l’inspecteur Brossard de Corbigny d’avoir bien voulu rehausser par sa présence cette cérémonie du baptême du nouveau canot l’AMICIA , dont un généreux philanthrope vient de doter la Société Centrale de Sauvetage des Naufragés, et que le conseil d’administration a bien voulu affecter à notre station. Nous ne pouvons que nous incliner devant la décision du donateur de garder l’anonymat, mais rien ne peut nous dispenser de lui témoigner notre gratitude et je suis certain d’être votre interprète à tous en priant M. de Corbigny de demander à notre vénérable président, l’amiral Lafont, de vouloir bien faire parvenir à cette personne généreuse l’expression de nos sentiments de reconnaissance ; d’y ajouter l’assurance que l’AMICIA est remis en bonnes mains et que nos braves sauveteurs sauront l’utiliser pour continuer la noble et grande mission de notre Société en s’efforçant d’arracher à la mer les malheureux naufragés qu’elle tenterait d’engloutir. Vous me reprocheriez avec raison, en cette circonstance, d’être incomplet si je n’ajoutais à ces paroles quelques mots de remerciements à l’amiral pour sa sollicitude constante pour notre station, de même qu’à M. le Maire de Dunkerque, M. Alfred Dumont, qui a bien voulu, avec sa bonne grâce habituelle, accepter d’être le parrain de notre nouveau canot ; je me permettrai d’être plus discret en ce qui concerne la marraine Mme Charles Collet, que son état de santé retient chez elle et qui m’a chargé de vous prier d’excuser son absence forcée. Son concours en cette occasion était tout naturellement acquis à notre Compagnie et elle vous remercie de l’honneur que vous lui aviez fait en la désignant ; je vous prierai donc de reporter vos remerciements sur sa nièce, Mme Eugénie Olmi, qui a bien voulu de la meilleure grâce du monde remplacer sa tante empêchée. Ceci dit, je passe la parole à M. le commandant Brossard de Corbigny, inspecteur de la Société Centrale de Sauvetage des Naufragés ».\r\n\r\nJ’ai répondu par ces quelques mots :\r\n\r\n«  MM. les membres du Comité de Sauvetage, marins de Dunkerque,\r\n\r\nJe suis appelé par le président de la Société de Sauvetage des Naufragés, l’amiral Lafont, à l’honneur de remettre entre vos mains le superbe canot que voici. Les embarcations qu’il remplace ont été vaillamment utilisées par vos prédécesseurs. Je les aperçois parmi vous, ils viennent à cette cérémonie en souvenir du passé. Marins de sauvetage d’aujourd’hui, vous avez déjà suivi les beaux exemples qu’ils vous ont légués. Aucune tempête, si forte qu’elle fût, n’a pu arrêter ni eux, ni vous, à la vue du signal de détresse, et les capitaines de vos remorqueurs, méprisant les chances d’avaries, ont toujours tenu à honneur de vous apporter le concours de leurs forces et l’appui de leurs équipages. Ce canot de sauvetage, mieux encore que les précédents, répondra à vos généreux efforts ; L’AMICIA comporte en effet des perfectionnements nouveaux et ses grandes dimensions satisferont les désirs que vous avez exprimés. La station de Dunkerque, si importante, si bien desservie, reçoit donc aujourd’hui un beau et parfait cadeau, dernier terme de ce genre spécial de constructions, habilement exécuté par les grands chantiers de M. Normand, du Havre. Qui dit cadeau dit donateur, et, dans le cas actuel, donateur très généreux, ami des marins, capable d’élever son esprit à la hauteur de cette grande idée anonyme : Le sauvetage des naufragés. Anonyme en effet ! car si vous savez quelquefois le nom, la nationalité des victimes que vous arrachez à la mer, c’est seulement après les avoir recueillies. Vous ne comprenez pas toujours leur langage reconnaissant, mais leur cri d’appel a d’abord été pour vous d’une claire éloquence. Les mêmes sentiments, la même grande idée ont rempli l’esprit et le cœur de celui ou de celle qui vous offre L’AMICIA ; l’anonymat le plus complet cachera son nom. Est-ce un riche philanthrope, un grand armateur, ou une mère de naufragé qui met entre vos mains ce moyen de la venger d’une perte cruelle ? \r\n', '1899', '1929', 'France', 'Canots gravelinois');

--
-- Déchargement des données de la table `Modeles`
--

INSERT INTO `Modeles` (`nomModele`) VALUES
('Canots dunkerquois'),
('Canots gravelinois'),
('Remorqueurs dunquerquois');

--
-- Déchargement des données de la table `Pays`
--

INSERT INTO `Pays` (`NomPays`) VALUES
('Allemagne'),
('France');

--
-- Déchargement des données de la table `Personnes`
--

INSERT INTO `Personnes` (`IdPersonne`, `nom`, `prenom`, `dateNaissance`, `dateDeces`, `biographie`, `derniereModif`, `NomPays`) VALUES
(1, 'Brunet', 'Alfred', '2021-12-16', 1896, 'Discours de l’Amiral Duperré de remise de la Croix de la Légion d’honneur à Alfred Brunet notre sous-patron de Gravelines. Le Ministre de la Marine a jugé que trente-huit ans et demi de services dont trente-sept ans et deux mois à la mer, le sauvetage de 110 personnes dans les canots qu’il commandait, le rendaient digne de porter l’Etoile des braves. Jamais sous cette croix n’a battu cœur plus vaillant. Alfred-Joseph Brunet, au nom du Président de la République et en vertu des pouvoirs qui nous sont conférés, je vous fais Chevalier de la Légion d’Honneur.', '2021-12-03 04:57:38', 'Allemagne'),
(2, ' Louis DELUGNY', 'Pierre', '2021-12-15', 1475, '1878 suspendu pour un an de ses fonctions de chef à la mer et 6 jours de prison  pour avoir frappé un pilote', '2021-12-03 05:05:54', 'France');

--
-- Déchargement des données de la table `ProposerArticle`
--

INSERT INTO `ProposerArticle` (`idUtilisateur`, `idArticle`, `nbPersonneSauves`) VALUES
(1, 2, 14),
(2, 3, 45);

--
-- Déchargement des données de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`idUtilisateur`, `nom`, `prenom`, `motDePasse`, `adresse_email`) VALUES
(1, 'Dano', 'Matthieu', 'abedidabo', 'ya@gmail.com'),
(2, 'Goupil', 'Matthias', 'jojolebo', 'goupilbg667@laposte.net');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
