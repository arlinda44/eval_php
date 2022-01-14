<?php
try {
   $pdo = new PDO('mysql:host=localhost;dbname=eval_Php;port=3306', 'root', '');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   //$sth appartient à la classe PDOStatemen
   $sth = $pdo->prepare("
   INSERT INTO utilisateur(mail,password)
   VALUES (:mail, :password)
   ");
   $sth->execute(array(
   ':mail' => $mail,
   ':password' => $password,


   ));
   echo "Entrée ajoutée dans la table";
   } catch (PDOException $e) {
   echo "Erreur : " . $e->getMessage();
   }
   header('location:index.php');
   
   ?>


<?php
$mail = $_POST['mail'];
$password =$_POST['password'];var_dump($password);
?><!-- afficher la basse de donnés -->

<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=eval_Php;port=3306', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
 *users pour chaque entrée de la table*/
    $sth = $pdo->prepare("SELECT* FROM utilisateur");
    $sth->execute();

    /*Retourne un tableau associatif pour chaque entrée de notre table
PHP Avancé 2
OUTIL | SUPPORT DE COURS
18 / 19
 *avec le nom des colonnes sélectionnées en clefs*/
    $resultat = $sth->fetchAll();

    /*Je regarde ce qu'il y a dans ma variable $resultat*/
    //  var_dump($resultat);
    /*J'affiche mes données*/
    foreach ($resultat as $key => $value) {
        echo 'Bonjour \' ' . $value['mail'] . ',' . $value['password'] . '<br>';
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>