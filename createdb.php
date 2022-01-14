
<!-- Création de la basse de données -->
<?php
try{
    $pdo = new PDO('mysql:host=localhost;port=3306', 'root', '');
// $pdo = new PDO('mysql:host=localhost;port=3306','root',''); Si PDO n'arrive pas à faire le lien avec la base de données
$sql = "CREATE DATABASE IF NOT EXISTS `eval_Php` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$pdo->exec($sql);
}
catch (PDOException $e)
{
   
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();
}

// exo1

//Création d'une table 1//
try{
    $pdo = new PDO('mysql:host=localhost;dbname=eval_Php;port=3306', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Ligne qui permet d'afficher les erreurs s'il y en a.
    $sql = "CREATE TABLE IF NOT EXISTS `eval_Php`.`produit` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `nom` VARCHAR(255) NOT NULL ,
    `description` TEXT NOT NULL ,
    `bienfaits` TEXT NOT NULL ,
    `prix` FLOAT NOT NULL ,
    `image` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    $pdo->exec($sql);
    echo 'Félicitations, la table a bien été créée !';
  
    //Création d'une table 2//
    $sql = "CREATE TABLE IF NOT EXISTS `eval_Php`.`utilisateur` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `mail` VARCHAR(100) NOT NULL ,
        `password` VARCHAR(100) NOT NULL,PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        $pdo->exec($sql);
        echo 'Félicitations, la table a bien été créée !';
}
    
catch (PDOException $e)
{
   
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();
}



?>


