<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Enregistrer un nouveau livre !</h1>

<form action="./creating"  method="POST">

    <div>
      <label for="name">Entrez un nom de livre : </label>
      <input type="text" name="livre_name" id="livre_name"  required>
    </div>

    <div>
      <label for="auteur">Entrez son editeur : </label>
      <input type="text" name="editeur" id="editeur" >
    </div>

    <div>
      <input type="submit" name ="submit" value="Enregistrer" >
  </div>
  </form>
    
</body>

</html>
