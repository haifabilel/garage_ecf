--CREATE TABLE ecf;
--CREATE TABLE admin (id INT NOT NULL AUTO_INCREMENT , name VARCHAR(50) NOT NULL , email VARCHAR(255) NOT NULL , user_type VARCHAR(255) NOT NULL DEFAULT);
--INSERT INTO admin (id, name, email, password, user_type) VALUES (1, 'admin', 'vinccentparrot@gmail.com', '$2y$10$jl0sD4kkctvSaLGKy5DPKOkl2Z.PwiSh608UdnTOY7msBePeBkCFm', 'admin'),(6, 'second_user', 'second_user@gmail.com', '$2y$10$8p5HunD7Y9Fy8djX3gQWwOmBVEfR9PAdYibXoPlVsRnMpdzjw490i', 'employé');
--CREATE TABLE employé (id INT NOT NULL AUTO_INCREMENT , name VARCHAR(50) NOT NULL , email VARCHAR(255) NOT NULL , user_type VARCHAR(255) NOT NULL) ;
--CREATE TABLE voitures (id INT NOT NULL AUTO_INCREMENT , `brand` VARCHAR(50) NOT NULL , `prix` DECIMAL(100) NOT NULL , `kilométrage` DECIMAL(255) NOT NULL , `année` INT NOT NULL , `photo` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`))
--INSERT INTO voitures (id, `brand`, `prix`, `kilométrage`, `année`, `photo`, `carburant`) VALUES ('1', 'BMW', '55000', '214000', '2016', 'image1', 'diasel')
--,('2', 'FORD', '35000', '187000', '2015', 'image2', 'diasel'),('3', 'MERCESED', '65500', '80000', '2017', 'image3', 'diasel'),('5', 'TESLA', '27000', '110000', '2014', 'image5', 'diasel'),('6', 'PEGEAOT', '27000', '115000', '2014', 'image5', 'ESSENCE')
--,('8', 'AUDI', '36500', '125000', '2015', 'image6', 'DIASEL');
--CREATE TABLE `review_table` (review_id INT NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(50) NOT NULL , `user_rating` VARCHAR(5) NOT NULL , `user_review` VARCHAR(255) NOT NULL , `datetime` DATETIME NOT NULL , PRIMARY KEY (`review_id`));
--ALTER TABLE `review_table` CHANGE `review_id` `review_id` INT NOT NULL AUTO_INCREMENT, CHANGE `user_rating` `user_rating` INT NOT NULL, CHANGE `user_review` `user_review` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL, CHANGE `datetime` `datetime` INT NOT NULL;
--CREATE TABLE`services` (id INT NOT NULL AUTO_INCREMENT , `card_titre` VARCHAR(100) NOT NULL , `card_description` TEXT NOT NULL , `image` VARCHAR(255) NOT
--CREATE TABLE ecf.details_voitures (`id_details` INT NOT NULL AUTO_INCREMENT , `fiche_techniques` TEXT NOT NULL , `image` LONGBLOB NOT NULL , PRIMARY KEY (`id_details`))
--SELECT * FROM details_voitures JOIN voitures ON voitures.id = details_voitures.id_details WHERE id = $id;
--CREATE TABLE visiteur (id INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(50) NOT NULL , `prenom` VARCHAR(50) NOT NULL , `adresse_mail` VARCHAR(50) NOT NULL , `portable` INT NOT NULL , `message` TEXT NOT NULL , PRIMARY KEY (`id`))