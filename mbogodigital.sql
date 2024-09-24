-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 sep 2024 om 09:46
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbogodigital`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `education`
--

CREATE TABLE `education` (
  `id` char(36) NOT NULL,
  `creboNumber` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `description` blob DEFAULT NULL,
  `registerUntil` date DEFAULT NULL,
  `graduateUntil` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `education`
--

INSERT INTO `education` (`id`, `creboNumber`, `name`, `level`, `description`, `registerUntil`, `graduateUntil`) VALUES
('6c93a885-9c11-4746-af76-b4b79ed3f1d0', '25998', 'Software developer (vanaf 1-8-2024)', 4, '', NULL, NULL),
('6e606817-054b-4752-b801-0459dd8c2789', '25604', 'Software developer', 4, 0x536f667477617265206f6e7477696b6b656c696e672069732065656e207370656369616c697374697363682076616b2e204465736f6e64616e6b73206469656e7420646520536f66747761726520646576656c6f706572207a696368206865656c206272656564207465206f7269c3ab6e746572656e20616c73206865742067616174206f6d206b656e6e697320656e2076616172646967686564656e20287a6f616c73207765726b6d6574686f6469656b656e2c2070726f6772616d6d65657274616c656e20656e206465206469766572736520696e666f726d6174696573797374656d656e20656e20706c6174666f726d656e20776161722064652070726f6772616d6d6174757572207765726b656e64206d6f6574207a696a6e292e20426f76656e6469656e206d6f65742068696a2f7a696a206272656564206f6e6465726c656764207a696a6e20646161722077616172206865742067616174206f6d20646520656e6f726d652064697665727369746569742061616e206d6f67656c696a6b6520736f66747761726520656e206465766963657320776161722068696a2f7a696a206d6565207465206d616b656e206b72696a67742e2044656e6b206869657262696a2062696a766f6f726265656c642061616e20686574206f6e7477696b6b656c656e2076616e20776562626173656420736f6674776172652c2077656273697465732c20746f6570617373696e6773736f6674776172652c2067616d657320656e20616e6465726520656e7465727461696e6d656e74736f66747761726520656e206d656469612d756974696e67656e2e0d0a0d0a446520536f66747761726520646576656c6f706572207765726b7420766f6f726e616d656c696a6b207a656c667374616e6469672061616e20686574207265616c69736572656e2076616e20736f6674776172652e2044652065696e64766572616e74776f6f7264656c696a6b6865696420766f6f72206865742065696e6470726f64756374206c696774207661616b2062696a2064652070726f6a6563746c6569646572206f66206c656964696e67676576656e64652e20496e207665656c20676576616c6c656e207765726b742068696a2f7a696a2073616d656e206d657420616e64657265206469736369706c696e65732c207a6f616c7320616e6465726520646576656c6f7065727320656e2064657369676e6572732e204765647572656e646520686574206f6e7477696b6b656c70726f6365732068656566742068696a2f7a696a20626f76656e6469656e20726567656c6d6174696720636f6e74616374206d6574206465206f7064726163687467657665722f206c656964696e67676576656e64652f2062656c616e6768656262656e64656e2c207761742073706563696669656b6520656973656e207374656c742061616e20636f6d6d756e69636174696576652076616172646967686564656e2e0d0a0d0a446520536f66747761726520646576656c6f706572207765726b7420696e207672696a77656c20616c6c6520736563746f72656e2076616e2064652065636f6e6f6d69652c207a6f616c73206465206272656465204943542d736563746f722c2067616d652d696e647573747269652c2064652063726561746965766520736563746f722c206465206c6f6769737469656b6520736563746f722c206465206d6f62696c6974656974736272616e6368652c206465206d61616b696e647573747269652c206465207a6f726720656e206e6f67207665656c206d6565722e2042696e6e656e20646520736563746f7220776161722068696a2f7a696a2067616174207765726b656e206d6f65742068696a2f7a696a20746576656e73206272656564206f6e6465726c656764207a696a6e206d657420646520766f6f722064696520736563746f722062656c616e6772696a6b65206f6e646572737465756e656e6465206b656e6e69732e205665656c616c20697320646520626567696e6e656e64206265726f65707362656f6566656e616172207765726b7a61616d20696e20686574206d696464656e2d20656e206b6c65696e62656472696a662e0d0a0d0a4865742069732076616e20657373656e746965656c2062656c616e672064617420646520536f66747761726520646576656c6f70657220646520707269766163792076616e206b6c616e74656e2c206f706472616368746765766572732c20656e2076616e20616c6c652028746f656b6f6d737469676529206765627275696b6572732076616e20646520736f66747761726520626573636865726d742e20446161726e61617374206d6f657420736f667477617265207665696c6967207a696a6e20656e20626573636865726d64207a696a6e20746567656e206f6e656967656e6c696a6b206f66206372696d696e65656c206765627275696b2e2020202020202020202020202020, '2024-08-01', '2030-08-01'),
('8749f1bb-ac9c-41d8-8f80-cb6ccb413f7a', '25605', 'Allround medewerker IT systems and devices', 3, 0x446520416c6c726f756e64206d6564657765726b65722049542073797374656d7320616e642064657669636573207765726b74207a656c667374616e646967206f702065656e2049435420616664656c696e67206f6620696e2065656e20736572766963656465736b6f6d676576696e672e2048696a2f7a696a207765726b7420766f6c67656e73207374616e64616172642070726f6365647572657320656e206d6574686f64657320656e20746f6f6e742062696e6e656e207661737467657374656c6465206b61646572732c20656967656e20696e7a6963687420656e20696e69746961746965662e2048696a2f7a696a20686565667420676f65646520636f6d6d756e69636174696576652076616172646967686564656e20656e207765726b74206b6c616e74676572696368742e, NULL, NULL),
('be7ee254-2ea6-45e3-860c-e762d54d04de', '25606', 'Expert IT systems and devices', 4, 0x4465204578706572742049542073797374656d7320616e642064657669636573207765726b74207a656c667374616e646967206f702064652049435420616664656c696e672076616e2065656e206f7267616e697361746965206f6620696e2065656e20736572766963656465736b6f6d676576696e672e2048696a2f7a696a206865656674206f6f6720766f6f72206465206f7267616e69736174696520656e2062657a69742065656e2068656c696b6f70746572766965772e2048696a2f7a696a20636f6d6d756e696365657274206d657420616c6c6520626574726f6b6b656e656e2e0d0a0d0a4e6161737420686574206265686572656e2076616e20646520495420696e6672617374727563747575722c206170706c6963617469657320656e206465766963657320686f756474206465204578706572742049542073797374656d7320616e642064657669636573207a6963682062657a6967206d6574206865742062657665696c6967656e2076616e20696e666f726d6174696573797374656d656e2e2048696a2f7a696a206765656674207365637572697479206164766965732c207665726265746572742064652073656375726974792076616e2073797374656d656e20656e207265616765657274206f7020637962657273656375726974792061616e76616c6c656e2e204f6f6b206865656674206465204578706572742049542073797374656d7320616e6420646576696365732065656e20726f6c2062696a2068657420636f6d6d756e69636572656e206f7665722077656e73656e2076616e206f7064726163687467657665727320656e206865742076657274616c656e2076616e2064657a652077656e73656e206e6161722061616e70617373696e67656e206f66207665726e69657577696e67656e20696e20646520495420696e667261737472756374757572206f66206170706c696361746965732e20486574206b756e6e656e207765726b656e206d65742064617461626173657320656e2070726f6772616d6d6565726572766172696e6720737065656c742068696572696e2065656e20726f6c2e, NULL, NULL),
('d6ba472d-c84c-4b33-a6be-e1af53b32276', '25999', 'Medewerker ICT (vanaf 1-8-2024)', 2, '', NULL, NULL),
('f0aa137e-3bd8-46b2-a716-c8bad5137a3c', '25607', 'Medewerker ICT support', 2, 0x4465204d6564657765726b65722049435420737570706f7274207765726b7420696e206f7064726163687420656e206f6e64657220626567656c656964696e672076616e2065656e206c656964696e67676576656e64652e2048696a2f7a696a207765726b7420696e2065656e207765696e696720636f6d706c657865206f6d676576696e6720656e20766f6572742065656e766f75646967652074616b656e2c20726f7574696e656d617469676520656e207374616e64616172647765726b7a61616d686564656e207569742e2048696a2f7a696a20686f756474207a696368206461617262696a20737472696b742061616e2064652067656c64656e646520726567656c732c20696e73747275637469657320656e2070726f636564757265732e2057616e6e656572206965747320616677696a6b742076616e206465206f70647261636874206f7665726c6567742068696a2f7a696a20646972656374206d6574206465206c656964696e67676576656e64652e0d0a4465204d6564657765726b65722049435420737570706f7274207765726b74206f7020686574206765626965642076616e20686172647761726520656e20646576696365732e2048657420676161742062696a766f6f726265656c64206f6d206865742061616e6c656767656e2c20696e7374616c6c6572656e20656e20636f6e66696775726572656e2076616e20686172647761726520656e2f6f66206e65747765726b656e20656e20686574206f706c6f7373656e2076616e2073746f72696e67656e2e204d65742062657472656b6b696e6720746f74206465766963657320766f657274206465204d6564657765726b65722049435420737570706f72742061637469766974656974656e20756974206f702068657420766c616b2076616e20617373656d626c6167652c207265706172617469652c207665726c656e656e2076616e20736572766963652c20676576656e2076616e207569746c656720656e2028696e20736f6d6d696765206272616e6368657329207665726b6f6f702076616e206465766963657320287a6f616c73206d6f6269656c652074656c65666f6f6e732c207461626c6574732c206c6170746f70732f6e6f7465626f6f6b732c206465736b746f70732c20496f5420646576696365732c20736d61727420686f6d6520646576696365732c2041562d617070617261747575722c2056522f41522d6465766963657320656e2064726f6e6573292e, '2024-08-01', '2028-08-01');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `keuzedeel`
--

CREATE TABLE `keuzedeel` (
  `id` char(36) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sbu` int(11) NOT NULL,
  `description` blob DEFAULT NULL,
  `goalsDescription` blob DEFAULT NULL,
  `preconditions` blob DEFAULT NULL,
  `teachingMethods` blob DEFAULT NULL,
  `certificate` tinyint(1) NOT NULL,
  `linkVideo` varchar(255) DEFAULT NULL,
  `linkKD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level_number` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `levels`
--

INSERT INTO `levels` (`id`, `level_number`, `title`, `description`) VALUES
(1, 1, 'LEVEL 1', 'Eenvoudige HTML-projecten maken en samenwerken in een team.\n'),
(2, 2, 'LEVEL 2', 'HTML-pagina’s ontwerpen met CSS en eenvoudige JavaScript toevoegen.'),
(3, 3, 'LEVEL 3', 'Zelfstandige HTML-projecten opzetten en communiceren binnen een team.'),
(4, 4, 'LEVEL 4', 'Complexe webtoepassingen ontwikkelen en teamleiderschap tonen.'),
(5, 5, 'LEVEL 5', 'Schaalbare softwareoplossingen ontwikkelen en strategisch leiderschap tonen.'),
(6, 6, 'LEVEL 6', 'Innovatieve softwareoplossingen ontwerpen en strategische leiding geven aan projecten.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `level_details`
--

CREATE TABLE `level_details` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `level_details`
--

INSERT INTO `level_details` (`id`, `level_id`, `category`, `detail`) VALUES
(1, 1, 'Realiseert Software', 'Student kan eenvoudige HTML-projecten maken en kan HTML-tags uitleggen.'),
(2, 1, 'Werken in een Ontwikkelteam', 'Student kan samenwerken en communiceren in een team.'),
(3, 1, 'Generieke Onderdelen RE', 'H1-10'),
(4, 1, 'Generieke Onderdelen BS', 'Student kan basisnormen en waarden uitleggen.'),
(5, 1, 'Generieke Onderdelen NE', 'Student kan eenvoudige teksten lezen en begrijpen.'),
(6, 1, 'Generieke Onderdelen EN', 'Student kan eenvoudige brieven en e-mails schrijven.'),
(7, 2, 'Realiseert Software', 'Student kan HTML-pagina’s ontwerpen met CSS-stijlen en eenvoudige JavaScript-functies toevoegen.'),
(8, 2, 'Werken in een Ontwikkelteam', 'Student kan bijdragen aan teamprojecten en eenvoudige conflicten oplossen.'),
(9, 2, 'Generieke Onderdelen RE', 'H11-20'),
(10, 2, 'Generieke Onderdelen BS', 'Student kan presenteren en basisnormen en waarden uitleggen.'),
(11, 2, 'Generieke Onderdelen NE', 'Student kan basis Nederlands gebruiken in gesprekken en teksten.'),
(12, 2, 'Generieke Onderdelen EN', 'Student kan korte, eenvoudige teksten schrijven en mededelingen maken.'),
(13, 3, 'Realiseert Software', 'Student kan op zelfstandige basis HTML-projecten opzetten en heeft drie verschillende soorten HTML-tags gepresenteerd met een CSS-basis en JavaScript-basis.'),
(14, 3, 'Werken in een Ontwikkelteam', 'Student kan effectief communiceren en samenwerken binnen een team, inclusief het oplossen van conflicten en het maken van gezamenlijke beslissingen.'),
(15, 3, 'Generieke Onderdelen RE', 'H14-21'),
(16, 3, 'Generieke Onderdelen BS', 'Student heeft een eigen presentatie in een groepje gegeven en weet wat normen en waarden zijn in een specifieke situatie.'),
(17, 3, 'Generieke Onderdelen NE', 'Student heeft twee verschillende “Nederlands-Bricks” succesvol voltooid.'),
(18, 3, 'Generieke Onderdelen EN', 'Student kan een verslag schrijven met een duidelijke structuur en inhoudelijke diepgang over een complex onderwerp.'),
(19, 4, 'Realiseert Software', 'Student kan complexe webtoepassingen ontwerpen en ontwikkelen met HTML, CSS en JavaScript, inclusief het integreren van externe APIs en frameworks.'),
(20, 4, 'Werken in een Ontwikkelteam', 'Student kan als teamlid en leider functioneren, waarbij hij/zij verantwoordelijkheden verdeelt, doelen stelt en samenwerkt aan complexe projecten.'),
(21, 4, 'Generieke Onderdelen RE', 'H21-30'),
(22, 4, 'Generieke Onderdelen BS', 'Student kan ethische dilemma\'s in technische contexten analyseren en oplossingen aandragen.'),
(23, 4, 'Generieke Onderdelen NE', 'Student kan complexe teksten en rapporten in het Nederlands lezen en begrijpen.'),
(24, 4, 'Generieke Onderdelen EN', 'Student kan een gedetailleerd en goed onderbouwd rapport schrijven over een complex onderwerp.'),
(25, 5, 'Realiseert Software', 'Student kan een volledig functionele en schaalbare softwareoplossing ontwikkelen, inclusief geavanceerde functionaliteiten en best practices.'),
(26, 5, 'Werken in een Ontwikkelteam', 'Student kan leiderschap tonen binnen een ontwikkelteam, projecten managen en strategische beslissingen nemen.'),
(27, 5, 'Generieke Onderdelen RE', 'H31-40'),
(28, 5, 'Generieke Onderdelen BS', 'Student kan complexe ethische en maatschappelijke vraagstukken analyseren en effectieve oplossingen voorstellen.'),
(29, 5, 'Generieke Onderdelen NE', 'Student heeft een uitgebreide en diepgaande kennis van het Nederlands aangetoond door verschillende geavanceerde opdrachten te voltooien.'),
(30, 5, 'Generieke Onderdelen EN', 'Opdrachten voor A2 schrijven ERK niveau schrijven: Ik kan gestructureerde en gedetailleerde teksten schrijven over complexe onderwerpen en mijn mening onderbouwen.'),
(31, 6, 'Realiseert Software', 'Student kan innovatieve softwareoplossingen ontwerpen en implementeren met gebruik van de nieuwste technologieën en methodologieën.'),
(32, 6, 'Werken in een Ontwikkelteam', 'Student kan strategische leiding geven aan ontwikkelprojecten, inclusief het managen van meerdere teams en stakeholders.'),
(33, 6, 'Generieke Onderdelen RE', 'H41-50'),
(34, 6, 'Generieke Onderdelen BS', 'Student kan diepgaande ethische en maatschappelijke vraagstukken analyseren en innovatieve oplossingen voorstellen.'),
(35, 6, 'Generieke Onderdelen NE', 'Student heeft een voortreffelijke beheersing van het Nederlands aangetoond door complexere en specialistische opdrachten te voltooien.'),
(36, 6, 'Generieke Onderdelen EN', 'Student kan diepgaande en analytische teksten schrijven die complexe onderwerpen in detail onderzoeken en kritisch evalueren.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `role`
--

CREATE TABLE `role` (
  `id` char(36) NOT NULL,
  `name` varchar(30) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `role`
--

INSERT INTO `role` (`id`, `name`, `level`) VALUES
('126c5a69-792c-427a-8bd9-0e20b8651f2b', 'Docent', 20),
('37914d3e-8e27-46e5-982f-30651d3276da', 'Applicatiebeheerder', 80),
('5482254d-709b-4f59-adf4-83d7f67d9553', 'Administrator', 100),
('6e27105c-c42a-46c8-9cd6-34ff1fe52572', 'Student', 10);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `duoNumber` int(11) DEFAULT NULL,
  `firstName` varchar(50) NOT NULL,
  `prefix` varchar(20) DEFAULT NULL,
  `lastName` varchar(50) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `changeSecretAtLogon` tinyint(1) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL,
  `roleId` char(36) DEFAULT NULL,
  `educationId` char(36) DEFAULT NULL,
  `cohort` bigint(20) DEFAULT NULL,
  `creationDate` datetime NOT NULL,
  `modificationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `duoNumber`, `firstName`, `prefix`, `lastName`, `secret`, `email`, `phone`, `changeSecretAtLogon`, `enabled`, `roleId`, `educationId`, `cohort`, `creationDate`, `modificationDate`) VALUES
('23a4b3e7-9e01-47b7-b73a-ce7544379d89', 0, 'Test', 'van', 'Administrator', '$2y$10$FuDLLcVEd.PE0I1QCJHZUej2JnVrSh/Y5vkKv.YphQkjaN7B/H2Yy', 't.van.administrator@vistacollege.nl', '0677778888', 0, 1, '5482254d-709b-4f59-adf4-83d7f67d9553', '6e606817-054b-4752-b801-0459dd8c2789', 2024, '2024-08-10 13:35:23', '2024-08-10 13:35:23'),
('2e71e52d-0d12-4ac5-9f06-1ece4190a30f', 111222, 'Test', 'van', 'Student', '$2y$10$JwZm9zgLZDVC.i8sGiKywO0O0qgTuOnxYnT3k2AhwTnRYCYV/8C3O', 't.van.student@vistacollege.nl', '0611112222', 0, 1, '6e27105c-c42a-46c8-9cd6-34ff1fe52572', 'f0aa137e-3bd8-46b2-a716-c8bad5137a3c', 2024, '2024-08-10 13:26:07', '2024-08-10 13:26:24'),
('8d2408cd-89cd-4c9c-95cc-9c97ae841a5f', 0, 'Test', 'van', 'Docent', '$2y$10$/XL14jtCw5l.Xh8AgLbgm.bKkhK3NmsQ0V.7A6mtqlkjnTdjozyzS', 't.van.docent@vistacollege.nl', '0633334444', 0, 1, '126c5a69-792c-427a-8bd9-0e20b8651f2b', '8749f1bb-ac9c-41d8-8f80-cb6ccb413f7a', 2024, '2024-08-10 13:32:05', '2024-08-10 13:32:05'),
('b506ba11-9b0e-486a-a379-80ca953f5d24', 12345, 'Firre', '', 'Heemskerk', '$2y$10$cMieC8306NpLst5Oi.J2JOTIa0Yn10mHDoq5dwn1oOJtlcmfWqoC6', 'firre.heemskerk@ziggo.nl', '0615200161', 1, 1, '5482254d-709b-4f59-adf4-83d7f67d9553', '6e606817-054b-4752-b801-0459dd8c2789', 2024, '2024-09-18 13:08:38', '2024-09-18 13:08:38'),
('c359cb24-fb45-4613-9a71-1ede47c473bd', 516786, 'Baraa', '', 'Hawa', '$2y$10$BQOe0SbULypWx6LdW4BijeSl6YWJbgLbtNkNjIdvk1tsiPNbKYxha', 'Baraahawa2@gmail.com', '0681686463', 1, 1, '5482254d-709b-4f59-adf4-83d7f67d9553', '6e606817-054b-4752-b801-0459dd8c2789', 2024, '2024-09-16 08:07:02', '2024-09-16 08:07:02'),
('c530cb1d-d60b-4a45-b066-892f040d5059', 0, 'Test', 'van', 'Applicatiebeheerder', '$2y$10$jYDnL7r1Il.JTvewCdjvZewAedEWnqoZVBB4wJ.jtUeLJ/ULlsPkG', 't.van.applicatiebeheerder@vistacollege.nl', '0655556666', 0, 1, '37914d3e-8e27-46e5-982f-30651d3276da', 'be7ee254-2ea6-45e3-860c-e762d54d04de', 2024, '2024-08-10 13:33:41', '2024-08-10 13:33:57');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `education_crebonumber_unique` (`creboNumber`),
  ADD UNIQUE KEY `education_name_unique` (`name`);

--
-- Indexen voor tabel `keuzedeel`
--
ALTER TABLE `keuzedeel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keuzedeel_code_unique` (`code`);

--
-- Indexen voor tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `level_details`
--
ALTER TABLE `level_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexen voor tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name_unique` (`name`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_educationid_foreign` (`educationId`),
  ADD KEY `user_roleid_foreign` (`roleId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `level_details`
--
ALTER TABLE `level_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `level_details`
--
ALTER TABLE `level_details`
  ADD CONSTRAINT `level_details_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_educationid_foreign` FOREIGN KEY (`educationId`) REFERENCES `education` (`id`),
  ADD CONSTRAINT `user_roleid_foreign` FOREIGN KEY (`roleId`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
