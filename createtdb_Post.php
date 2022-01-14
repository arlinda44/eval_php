




<?php

 $titre=$_POST['titre'];
 $contenu=$_POST['contenu'];
 $datePoste=$_POST['datePost'];var_dump($datePoste);
?>
<?php


try {
   $pdo = new PDO('mysql:host=localhost;dbname=blog;port=3306', 'root', '');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   //$sth appartient à la classe PDOStatemen
   $sth = $pdo->prepare("
   INSERT INTO posts(titre,contenu,datePost)
   VALUES (:titre, :contenu, :datePost)
   ");
   $sth->execute(array(
   ':titre' => $titre,
   ':contenu' => $contenu,
   ':datePost' => $datePoste,

   ));
   echo "Entrée ajoutée dans la table";
   } catch (PDOException $e) {
   echo "Erreur : " . $e->getMessage();
   }
   header('location:index.php');
   
   ?>
  