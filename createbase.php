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

$bdd->query("CREATE TABLE IF NOT EXISTS `reponses` (
    `id_reponse` int NOT NULL AUTO_INCREMENT,
    `texte` varchar(400) NOT NULL,
    `date` Date NOT NULL,
    `id_question` int,
    PRIMARY KEY (`id_reponse`),
    FOREIGN KEY (`id_question`) REFERENCES questions(`id_question`)
  );");