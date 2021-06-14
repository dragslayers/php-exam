<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Liste des animaux</h1>
    <ul>
        <?php foreach ($animals as $animal) : ?>
            <li><?= var_dump($animal); $animal->name ?></li>
        <?php endforeach; ?>
    </ul>
    <p><?php 
    var_dump($animals[1]->name);
    echo '<pre>';
    var_dump($animals);
    echo '<pre>';
     ?></p>
</body>

</html>
