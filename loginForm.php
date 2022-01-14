<!-- loginForm.php -->
<?php
try {
$pdo = new PDO(
'mysql:host=localhost;dbname=eval_Php;port=3306',
'root',
'',
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);
$pseudo = $_POST['mail'];
// Récupération de l'utilisateur et de son pass hashé
$req = $pdo->prepare('SELECT * FROM utilisateur WHERE mail = :mail');
$req->execute(array(
'mail' => $pseudo
));
$resultat = $req->fetch();
// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
if (!$resultat) {
echo 'Mauvais identifiant ou mot de passe !';
} else {
if ($isPasswordCorrect) {

    session_start();
$_SESSION['id utilisateur'] = $resultat['id utilisateur'];
$_SESSION['pseudo'] = $pseudo;
header("location:admin.php");
} else {
header("location:login.php");
}
}
} catch (PDOException $e) {
echo "Erreur : " . $e->getMessage();
}
    ?>