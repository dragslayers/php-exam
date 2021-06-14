<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Enregistrer un nouveau auteur !</h1>

<form action="./creating"  method="POST">

    <div>
      <label for="name">Entrez un nom d'auteur : </label>
      <input type="text" name="auteur_name" id="auteur_name"  required>
    </div>

    <div>
      <label for="auteur">Entrez son âge : </label>
      <input type="text" name="auteur_age" id="auteur_age" >
    </div>

    <div>
      <input type="submit" name ="submit" value="Enregistrer" >
  </div>
</form>
<a href="./">Revenir à l'index</a>
    
</body>

</html>
