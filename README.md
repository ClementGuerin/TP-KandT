# TP-KandT

TP-KandT est un projet scolaire qui consiste à réaliser un CRUD en PHP et SQL. Celui-ci permet de voir, d'ajouter, modifier et supprimer des petits lapins. 🐰

### Démonstration

![Demo](https://i.imgur.com/5ZDma4V.gif)

### Base de donnée

- DB Name : KandT_GUERIN
- Host : localhost
- Password :
- Path : Controller/connexion.php
    
<br>

La base de donnée est constitué d'une seule table : **`lapin`**

##### Structure de : **`lapin`**

| Nom | Type | Attributs | Null | Extra |
| --- | --- | --- | --- | --- |
| id | int(10) | unsigned | Non | AUTO_INCREMENT |
| name | varchar(100) |  .| Non |  .|
| color | varchar(100) | . | Non | . |
| img | varchar(100) | . | Non | . |

<br>

##### Voici la table avec quelques lapins :

```SQL
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
```

