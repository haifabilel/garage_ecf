--CREATE TABLE ecf;
--CREATE TABLE admin (id INT NOT NULL AUTO_INCREMENT , name VARCHAR(50) NOT NULL , email VARCHAR(255) NOT NULL , user_type VARCHAR(255) NOT NULL,PRIMARY KEY (id));
--INSERT INTO admin (id, name, email, password, user_type) VALUES (1, 'admin', 'vinccentparrot@gmail.com', '$2y$10$jl0sD4kkctvSaLGKy5DPKOkl2Z.PwiSh608UdnTOY7msBePeBkCFm', 'admin'),(6, 'second_user', 'second_user@gmail.com', '$2y$10$8p5HunD7Y9Fy8djX3gQWwOmBVEfR9PAdYibXoPlVsRnMpdzjw490i', 'employé');
--CREATE TABLE employé (id INT NOT NULL AUTO_INCREMENT , name VARCHAR(50) NOT NULL , email VARCHAR(255) NOT NULL , user_type VARCHAR(255) NOT NULL,PRIMARY KEY (id)) ;
--INSERT INTO employé (id, name, email, password, user_type) VALUES (5, 'second_user', 'second_user@gmail.com', '$2y$10$8p5HunD7Y9Fy8djX3gQWwOmBVEfR9PAdYibXoPlVsRnMpdzjw490i', 'employé');
--CREATE TABLE voitures (id int NOT NULL AUTO_INCREMENT,id_details int NOT NULL,brand varchar(255) NOT NULL,prix int NOT NULL, kilométrage int NOT NULL, année int NOT NULL,image longblob NOT NULL,PRIMARY KEY (id));
--INSERT INTO voitures (id, id_details, brand, prix, kilométrage, année, image) VALUES (1, 1, 'BMW M4', 25000, 187000, 2008, 0x2e2e2f75706c6f6164732f626d772d6d342e6a7067),(2, 2, 'Peugeot 2008', 27000, 115000, 2011, 0x2e2e2f75706c6f6164732f70657567656f742d323030382e6a7067),(3, 3, 'Audi', 28000, 125000, 2010, 0x2e2e2f75706c6f6164732f617564692e6a7067),(4, 4, 'Mercedes benz', 22900, 145000, 2017, 0x2e2e2f75706c6f6164732f6d657263656465732d62656e7a2d313337303533365f3634302e6a7067),(5, 5, 'Fiat 500', 7500, 85000, 2017, 0x2e2e2f75706c6f6164732f53352d466961742d34303432392e6a7067),(6, 6, 'Toyota yaris cross', 25900, 95000, 2018, 0x2e2e2f75706c6f6164732f746f796f74612d79617269732e6a7067);
CREATE TABLE IF NOT EXISTS `review_table` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_rating` int NOT NULL,
  `user_review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datetime` int NOT NULL,
  PRIMARY KEY (`review_id`));
--ALTER TABLE `review_table` CHANGE `review_id` `review_id` INT NOT NULL AUTO_INCREMENT, CHANGE `user_rating` `user_rating` INT NOT NULL, CHANGE `user_review` `user_review` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL, CHANGE `datetime` `datetime` INT NOT NULL;
--CREATE TABLE`services` (id INT NOT NULL AUTO_INCREMENT , `card_titre` VARCHAR(100) NOT NULL , `card_description` TEXT NOT NULL , `image` VARCHAR(255) NOT
--CREATE TABLE ecf.details_voitures (`id_details` INT NOT NULL AUTO_INCREMENT , `fiche_techniques` TEXT NOT NULL , `image` LONGBLOB NOT NULL , PRIMARY KEY (`id_details`))
--SELECT * FROM details_voitures JOIN voitures ON voitures.id = details_voitures.id_details WHERE id = $id;
--CREATE TABLE visiteur (id INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(50) NOT NULL , `prenom` VARCHAR(50) NOT NULL , `adresse_mail` VARCHAR(50) NOT NULL , `portable` INT NOT NULL , `message` TEXT NOT NULL , PRIMARY KEY (`id`))