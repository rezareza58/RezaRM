CREATE SCHEMA `exercise3` ;
CREATE TABLE `movie` (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255),
	actor VARCHAR(255),
	director VARCHAR(255),
	producer VARCHAR(255),
	year_of_prod YEAR,
	lang VARCHAR(255),
    category TEXT,
	storyline TEXT
)ENGINE = INNODB CHARACTER SET utf8 COLLATE utf8_bin;