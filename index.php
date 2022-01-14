<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evalphp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<!-- formulaire de produit -->

<h1>formulaire produit</h1>
   <form method="post" action="formProduit.php" enctype="multipart/form-data">
   <input type="text" name="nom" placeholder="nom"> 
      <input type="text" name="description" placeholder="description">
      <input type="text" name="bienfaits" placeholder="bienfaits">
      <input type="text" name="prix" placeholder="prix">
      <input type="file" name="image">
      <input type="submit" value="ajouter unproduit">
   </form>


<!-- formulaire utilisateur -->
   <h1>formulaire utilisateur</h1>
   <form method="post" action="formUtilisateur.php" enctype="multipart/form-data">
      <input type="text" name="mail" placeholder="mail">
     <input type="text" name="password" placeholder="password">
     <input type="submit" value="ajouter unproduit">
      </form>


   </body>
</html>