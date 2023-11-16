CREATE TABLE admin (id INT NOT NULL AUTO_INCREMENT , name VARCHAR(255) NOT NULL , email VARCHAR(255) NOT NULL,password VARCHAR (255)NOT NULL , user_type VARCHAR(255) NOT NULL,PRIMARY KEY (id));
INSERT INTO admin (id, name, email, password, user_type) VALUES (1, 'admin', 'vinccentparrot@gmail.com', '$2y$10$jl0sD4kkctvSaLGKy5DPKOkl2Z.PwiSh608UdnTOY7msBePeBkCFm', 'admin'),(6, 'second_user', 'second_user@gmail.com', '$2y$10$8p5HunD7Y9Fy8djX3gQWwOmBVEfR9PAdYibXoPlVsRnMpdzjw490i', 'employe');
CREATE TABLE employe (id INT NOT NULL AUTO_INCREMENT , name VARCHAR(50) NOT NULL , email VARCHAR(255) NOT NULL,password VARCHAR (255)NOT NULL , user_type VARCHAR(255) NOT NULL,PRIMARY KEY (id));
INSERT INTO employe (id, name, email, password, user_type) VALUES (5, 'second_user', 'second_user@gmail.com', '$2y$10$8p5HunD7Y9Fy8djX3gQWwOmBVEfR9PAdYibXoPlVsRnMpdzjw490i', 'employe');
CREATE TABLE voitures (id int NOT NULL AUTO_INCREMENT,id_details int NOT NULL,brand varchar(255) NOT NULL,prix int NOT NULL, kilometrage int NOT NULL, annee int NOT NULL,image longblob NOT NULL,PRIMARY KEY (id));
INSERT INTO voitures (id, id_details, brand, prix, kilometrage, annee, image) VALUES (1, 1, 'BMW M4', 25000, 187000, 2008, 0x2e2e2f75706c6f6164732f626d772d6d342e6a7067),(2, 2, 'Peugeot 2008', 27000, 115000, 2011, 0x2e2e2f75706c6f6164732f70657567656f742d323030382e6a7067),(3, 3, 'Audi', 28000, 125000, 2010, 0x2e2e2f75706c6f6164732f617564692e6a7067),(4, 4, 'Mercedes benz', 22900, 145000, 2017, 0x2e2e2f75706c6f6164732f6d657263656465732d62656e7a2d313337303533365f3634302e6a7067),(5, 5, 'Fiat 500', 7500, 85000, 2017, 0x2e2e2f75706c6f6164732f53352d466961742d34303432392e6a7067),(6, 6, 'Toyota yaris cross', 25900, 95000, 2018, 0x2e2e2f75706c6f6164732f746f796f74612d79617269732e6a7067);
CREATE TABLE review_table ( review_id int NOT NULL AUTO_INCREMENT, user_name varchar(50) NOT NULL,user_rating int NOT NULL,user_review text NOT NULL,datetime int NOT NULL, PRIMARY KEY (review_id));
INSERT INTO review_table (review_id, user_name, user_rating, user_review, datetime) VALUES (16, 'Adam', 5, 'trés bon équipe', 1698053268),(17, 'Christophe', 4, 'Prix correcte', 1698053302),(15, 'Jean CHARLES', 5, 'bravo pour le service!', 1697830115),(22, 'Christine', 1, 'je recommande pas', 1698348131),(21, 'Jack', 1, 'je recommande pas ce garage', 1698070181);
CREATE TABLE services (id int NOT NULL AUTO_INCREMENT,titre varchar(50) NOT NULL,description text  NOT NULL,image longblob NOT NULL, PRIMARY KEY (id));
INSERT INTO services (id, titre, description, image) VALUES(37, 'Réparations carrosserie', 'Des jantes éraflées ? Une rayure ou une bosse sur votre carrosserie voiture ? Une griffure sur votre tableau de bord ? Ne vous inquiétez pas, au GarageParrot, nous nous occupons de tout. Nos experts se tiennent à votre disposition pour réparer, protéger et entretenir la carrosserie de votre véhicule. Nous nous engageons à réaliser un redressage de qualité de votre carrosserie.', 0x6361726f757373657269652e6a7067),(21, 'Pare-brise et bris de glace', 'Vous avez constaté un impact sur votre pare-brise ? Il est temps de le faire examiner par nos experts. Au Garage Parrot, nous réalisons toutes vos opérations de réparation et remplacement de pare-brise. Nous vous proposons des solutions vitrage adaptées afin de vous garantir une conduite sereine avec un confort visuel, thermique et acoustique.', 0x706172655f62726973652e6a7067),(23, 'Atelier mécanique', 'Au Garage Parrot, nous disposons d’un atelier mécanique pour entretenir et réparer votre véhicule, quelle que soit sa marque. Nous utilisons les méthodes préconisées par le constructeur, avec les pièces d’origine. Nos techniciens sont expérimentés pour effectuer toutes les opérations nécessaires à la mobilité de votre véhicule, qu’il s’agisse d’interventions courantes ou de mécanique lourde. ', 0x2e2e2f75706c6f6164732f6d6563616e697175652e6a7067),(24, 'Vidange', 'La vidange de votre voiture consiste à remplacer l\'huile moteur usagée par une huile neuve de meilleure qualité.\r\n\r\nLa vidange doit être réalisée entre 10 000 km et 15 000 km si vous avez une essence, tous les 7 000 km si vous conduisez un diesel ou tous les ans si vous roulez moins.', 0x2e2e2f75706c6f6164732f6f696c5f6368616e67652e6a7067),(25, 'Climatisation', 'Le manque d’entretien de votre système de climatisation peut entraîner de graves conséquences mécaniques, sanitaires ou même sécuritaires. En effet, une climatisation mal entretenue peut être à l’origine de défaillances techniques ou de pannes.', 0x2e2e2f75706c6f6164732f636c696d617469736174696f6e2e6a7067),(39, 'Contrôle pneumatiques', '\r\nLes pneumatiques sont essentiels pour votre véhicule, c’est pourquoi il est important d’en prendre soin. Nous vous recommandons de les faire contrôler au moins une fois par an chez un spécialiste et d’en vérifier la pression une fois par mois. Il est déconseillé de laisser ses pneus sous-gonflés ou sur-gonflés car ils consomment plus de carburant et durent moins longtemps.', 0x2e2e2f75706c6f6164732f706e65752e6a7067);
CREATE TABLE details_voitures (id_details int NOT NULL AUTO_INCREMENT,caracteristique varchar(255) NOT NULL,liste_equipements varchar(255) NOT NULL,options_installes varchar(255) NOT NULL,image1 varchar(255) NOT NULL,image2 varchar(255) NOT NULL,image3 varchar(255) NOT NULL, PRIMARY KEY (id_details));
INSERT INTO details_voitures (id_details, caracteristique, liste_equipements, options_installes, image1, image2,`image3`) VALUES
(1, 'Modèle :M4 Coupé\nVersion :3.0 510ch Competition\nCatégorie :Coupé Porte: 4 portes\nEnergie :Essence                ', 'Siège cond. avec réglage- lombaire électr-\nSiège conducteur à mémoire-\nSiège conducteur chauffant-\nSiège conducteur-électriqueLampes de lecture à l\'arrière-\nLampes de lecture à l\'avant-\nMiroir de courtoisie -conducteur éclairé-\nMiroir de courtoisie', 'Pack M Performance Piste\n- GPS Cartographique\n- Affichage tête haute\n- Inserts de porte carbone\n- Inserts de tableau de bord carbone\nSystème Hi-Fi Harman Kardon\n- Radio CD MP3 16HP\n- Système Hi-Fi Surround', 'bmw_1.jpg', 'bmw_2.jpg', 'bmw_3.jpg'),
(2, 'Puissances des moteurs : 110 à 160 ch\nCarrosserie : 5 portes\nTransmission : traction\nBoite de vitesse : manuelle ou automatique\nEnergie : essence et diesel', 'Vitres latérales- arrière et lunette -arrière surteintées-\nPlancher de coffre deux positions-\nJantes alliage 18 -pouces Detroit\' bi-ton diamantées-\nPeugeot Connect SOS & Assistance-\nRéglage lombaire du siège conducteur - Mise en tablette du siège passage', 'Reconnaissance étendue des panneaux de signalisation-\n​Régulateur / limiteur de vitesse avec Préconisation Limitation de Vitesse-​\nAir conditionné automatique bi-zone-\nEcran tactile capacitif 8-\nCompteurs 100% numériques', 'peugeot-2008_1.jpg', 'peugeot-2008_2.jpg', 'peugeot-2008_3.jpg'),
(3, 'Cylindrée : 999 cm3 /\nPuissance : 95 ch 70 kw /\nCarburant : Essence sans plomb /\nCouple : 175 Nm /\nMoteur : 3 cylindres /\nNorme motorisation : Euro 6d', 'Rétroviseur intérieur à réglage jour/nuit automatique, sans cadre / \nClimatiseur automatique confort 2 zones / \nChauffage d\'appoint électrique à air', 'Écrous de roues antivol /\nOutillage de bord /\nContrôle de la pression de pneu /\nRoue de secours compacte /\nPare-brise à vitrage athermique', 'audi_2.jpg', 'audi_3.jpg', 'audi_1.jpg'),
(4, 'Puissance : 160Ch /\nNombre de portes : 5 /\nPuissance fiscale : 8ch /\nVersion du moteur : 250 e 8G-DCT / \nBoite vitesse : automatique /\nEnergie : Hybride', 'Régulateur-limiteur de vitesse /\nSièges avant à réglages électriques /\nBanquette rabattable 40/20/40 /\nJantes en alliage de 17 pouces', 'Stationnement avec smartphone /\nPhares LED adaptatifs Multibeam /\nSystème audio Burmester 13 HP / 590 W /\nChargeur smartphone par induction', 'mrcdes_benz_2.jpg', 'mercedes-1.jpg', 'mecedes_3.jpg'),
(5, 'Energie : Energie /\nBoîte de vitesse : Boîte automatique /\nPuissance fiscale :5 CV /\nNombre de portes : 2 portes', 'Pare-chocs peints couleur carrosserie /\nJantes alliage 17\" bicolores /\nRégulateur de vitesse 6 airbags /\nABS - antiblocage des roues avec répartiteur de freinage EBD', 'Stationnement avec smartphone /\nPhares LED adaptatifs Multibeam /\nSystème audio Burmester 13 HP / 590 W /\nChargeur smartphone par induction', 'fiat-2.jpg', 'fiat-1.jpg', 'fiat-3.jpg'),
(6, 'Energie :Hybride essence électrique /\nBoite de vitesse : Automatique /\nCouleur :Gris /\nNombre de portes :5 /\nNombre de places :5 /\nPuissance fiscale :5 CV', 'Kit téléphone main libre bluetooth /\nPhares adaptatifs /\nPhares av. de jour à LED /\nRadar anti-collision /\nSystème de détection de somnolence', 'Compte tours /\nCuir Alcantara noir GR Sport /\nDémarrage sans clé /\nEclairage au sol /\nEcran multifonction couleur', 'toyota_2.jpg', 'toyota_1.jpg', 'toyota_3.jpg');
CREATE TABLE horaires (id int NOT NULL AUTO_INCREMENT,jour varchar(255) NOT NULL,matin varchar(255)  NULL, apres_midi  varchar(255), PRIMARY KEY (id));
INSERT INTO horaires (id, jour, matin, apres_midi) VALUES(1, 'Lundi', '8h:00-12h:00', '14h:00-19h:00'),(2, 'Mardi', '08h:00 - 12h00', '14h00 - 19h00'),(3, 'Mercredi', '8h:00-12h:00', '14h:00-19h:00'),(4, 'Jeudi', '8h:00-12h:00', '14h:00-19h:00'),(5, 'Vendredi', '8h:00-12h:00', '14h:00-19h:00'),(6, 'Samedi', '08h:00 - 12h00', 'fermé'),(7, 'Dimanche', 'fermé', 'fermé');
CREATE TABLE visiteur (id INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(50) NOT NULL , `prenom` VARCHAR(50) NOT NULL , `adresse_mail` VARCHAR(50) NOT NULL , `portable` INT NOT NULL , `message` TEXT NOT NULL , PRIMARY KEY (`id`))