--CREATE TABLE ecf;
--CREATE TABLE `ecf`.`admin` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(255) NOT NULL , `user_type` VARCHAR(255) NOT NULL DEFAULT , PRIMARY KEY (`id`)) 
--CREATE TABLE `ecf`.`employé` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(255) NOT NULL , `user_type` VARCHAR(255) NOT NULL DEFAULT , PRIMARY KEY (`id`)) 
--CREATE TABLE `ecf`.`voitures` (`id` INT NOT NULL AUTO_INCREMENT , `brand` VARCHAR(50) NOT NULL , `prix` DECIMAL(100) NOT NULL , `kilométrage` DECIMAL(255) NOT NULL , `année` INT NOT NULL , `photo` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`))
--INSERT INTO `voitures` (`id`, `brand`, `prix`, `kilométrage`, `année`, `photo`, `carburant`) VALUES ('1', 'BMW', '55000', '214000', '2016', 'image1', 'diasel')
--,('2', 'FORD', '35000', '187000', '2015', 'image2', 'diasel'),('3', 'MERCESED', '65500', '80000', '2017', 'image3', 'diasel'),('5', 'TESLA', '27000', '110000', '2014', 'image5', 'diasel'),('6', 'PEGEAOT', '27000', '115000', '2014', 'image5', 'ESSENCE')
--,('8', 'AUDI', '36000', '125000', '2014', 'image6', 'DIASEL');;