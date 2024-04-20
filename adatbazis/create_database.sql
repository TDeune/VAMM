CREATE DATABASE comment_section_db;

DROP TABLE IF EXISTS `comment_section_db`.`users`;
CREATE TABLE IF NOT EXISTS `comment_section_db`.`users` (
                                       `id` int NOT NULL AUTO_INCREMENT,
                                       `username` text NOT NULL,
                                       `password` text NOT NULL,
                                       `teljesnev` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
                                       `lakcim` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
                                       `email` text NOT NULL,
                                       PRIMARY KEY (`id`)
    );
INSERT INTO `comment_section_db`.`users` (`id`, `username`, `password`, `teljesnev`, `lakcim`, `email`) VALUES
            (1, 'Palacsinta5', 'rozmaring', 'Eddie Klinger', 'Jozsef Attila 28', 'rozmaring22@gmail.com');

DROP TABLE IF EXISTS `comment_section_db`.`comments`;
CREATE TABLE IF NOT EXISTS `comment_section_db`.`comments` (
                                        `id` int NOT NULL AUTO_INCREMENT,
                                        `username` varchar(255) NOT NULL,
                                        `comment` text NOT NULL,
                                        `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                                        `szekcio` text NOT NULL,
                                        PRIMARY KEY (`id`)
    )
