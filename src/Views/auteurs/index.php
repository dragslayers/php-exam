<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Liste des auteurs</h1>
    <ul>
        <?php foreach ($auteurs as $auteur) : ?>
            
<li><a href="./update/<?= $auteur->id ?>"><?= $auteur->name ?></a></li>
        <?php endforeach; ?>
    </ul>
    <a href="./create">Ajouter un nouveau auteur</a>
    <br>
    <a href="./delete">Effacer un nouveau auteur</a>
    
</body>

</html>
