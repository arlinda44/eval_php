
<?php
$nom = $_POST['nom'];
$description = $_POST['description'];
$bienfaits = $_POST['bienfaits'];
$image = $_FILES['image']['name'];
$prix =$_POST['prix'];var_dump($prix);
?>
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=eval_Php;port=3306', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //$sth appartient à la classe PDOStatemen
    $sth = $pdo->prepare("
 INSERT INTO produit(nom,description,bienfaits,prix,image)
 VALUES (:nom, :description, :bienfaits, :prix, :image)
 ");
    $sth->execute(array(
        ':nom' => $nom,
        ':description' => $description,
        ':bienfaits' => $bienfaits,
        ':prix' => $prix,
        ':image' => $image,
    ));
    echo "Entrée ajoutée dans la table";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
} ?>

<!-- Sythème pour afficher une image -->
<?php
//----------------SYSTEME D'UPLOAD D'IMAGES----------------------/
$target_dir = "ressources/images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// On vérifie si le fichier image est une image réelle ou une fausse image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check !== false) {
echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "File is not an image.";
$uploadOk = 0;
}
}
// On vérifie si le fichier existe déjà
if (file_exists($target_file)) {
echo "Désolé, ce fichier existe déjà.";
$uploadOk = 0;
}
// On vérifie la taille de l'image
if ($_FILES["image"]["size"] > 500000) {
echo "Désolé, ce fichier dépasse la limite de taille autorisée.";
$uploadOk = 0;
}
// On vérifie le type de fichier
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
$uploadOk = 0;
}
// On vérifie si $uploadOk est à 0 à cause d'une erreur
if ($uploadOk == 0) {
echo "Désolé, votre fichier n'a pas été uploader";
// Si tout est ok on essaye d'uploader le fichier
} else {
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
echo "Le fichier ". basename( $_FILES["image"]["name"]). " a bien été uploader."
;
} else {
echo "Sorry, there was an error uploading your file.";
}
}
//---------------------FIN SYSTEME D'UPLOAD D'IMAGES-----------------------------
?>