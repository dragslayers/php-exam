<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Liste des livres</h1>
    <ul>
        <?php foreach ($livres as $livre) : ?>
            <li><?= $livre->auteur_nom ?></li>
        <ul>
            <li><?= $livre->livre_titre ?></li>
        </ul>
        <?php endforeach; ?>
    </ul>
    
</body>

</html>
