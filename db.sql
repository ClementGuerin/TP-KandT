/* 
    DB Name : KandT_GUERIN
    Host : localhost
    Password :
    
    Path : Controller/connexion.php
    
*/

DROP TABLE IF EXISTS `lapin`;
CREATE TABLE IF NOT EXISTS `lapin` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
    `color` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
    `img` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `lapin` (`id`, `name`, `color`, `img`) VALUES
(1, 'Noisette', 'Marron', 'https://i.imgur.com/YpR3kZP.jpg'),
(2, 'Boule de neige', 'Blanc', 'https://i.imgur.com/py3MlVG.jpg'),
(3, 'Printemps', 'Roux', 'https://i.imgur.com/XQ0GzMO.jpg'),
(4, 'Grisouille', 'Gris', 'https://i.imgur.com/4OMpeM3.jpg'),
(5, 'Plumo', 'Blanc', 'https://i.imgur.com/xEi5XQW.jpg');
COMMIT;