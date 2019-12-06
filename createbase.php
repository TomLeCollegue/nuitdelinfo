<?php
$bdd  = get_pdo();
$bdd->query("CREATE TABLE IF NOT EXISTS `questions` (
    `id_question` int NOT NULL AUTO_INCREMENT,
    `texte` varchar(400) NOT NULL,
    `tag` int NOT NULL,
    `date` DATE NOT NULL,
    `valid` boolean,
    PRIMARY KEY (`id_question`)
  );");