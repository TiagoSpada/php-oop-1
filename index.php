<?php 
include_once __DIR__.'/models/actor.php';
include_once __DIR__.'/models/movie.php';

try {
    $avatar = new Movie('Avatar','18/12/2009');
    $avatar->setGeneri(['avventura','azione','fantastico']);
    $avatar -> setAttori(new Actor('Sam', 'Worthington'));

    $list_film[]= $avatar;
    // var_dump($avatar);

    $titanic = new Movie( 'Titanic' , '16/01/1998');
    $titanic->setGeneri(['drammatico','sentimentale']);
    $titanic -> setAttori(new Actor('Kate', 'Winslet'));
    $titanic -> setAttori(new Actor('Leonardo', 'Di Caprio'));

    // var_dump($avatar);
    $list_film[]= $titanic;

} catch (Exception $error) {
    echo  $error -> getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php foreach($list_film as $movie): ?>
            <h2><?php echo $movie -> getTitolo(); ?></h2>
            <ul class="list-group mb-4">
                <li class="list-group-item">generi: 
                    <ul> 
                        <?php foreach($movie -> getGeneri() as $generi):?>
                            <li><?php echo $generi;  ?></li>
                        <?php endforeach; ?>
                    </ul>
                </li >
                <li class="list-group-item">data di uscita: <?php echo $movie -> getData();  ?></li>
                <li class="list-group-item">Attori:
                    <ul> 
                        <?php foreach($movie->getAttori() as $attore):?>
                            <li><?php echo $attore?->getNome() .' '. $attore?->getCognome();  ?></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                
            </ul>
        <?php endforeach ?>
    </div>
</body>
</html>