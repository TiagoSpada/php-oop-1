<?php 
class Movie {
    private string $titolo;
    private array $generi;
    private string $data_di_uscita;

    public function __construct(string $titolo) {
        $this->titolo = $titolo;
    }

    public function getTitolo(){
        return $this -> titolo;
    }

    public function setGeneri(array $generi){
        $this -> generi = $generi;
    }

    public function getGeneri(){
        return $this -> generi;
    }

    public function setData(string $data){
        $this -> data_di_uscita = $data;
    }

    public function getData(){
        return $this -> data_di_uscita;
    }

}
$avatar = new Movie('Avatar');
$avatar->setGeneri(['avventura','azione','fantastico']);
$avatar->setData('18/12/2009');
// var_dump($avatar->getGeneri());


$titanic = new Movie('Titanic');
$titanic->setGeneri(['drammatico','sentimentale']);
$titanic->setData('16/01/1998');
// var_dump($avatar);

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

        <h2><?php echo $avatar -> getTitolo(); ?></h2>
        <ul class="list-group">
            <li class="list-group-item">generi: 
                <ul> 
                    <?php foreach($avatar -> getGeneri() as $generi):?>
                        <li><?php echo $generi;  ?></li>
                    <?php endforeach; ?>
                </ul>
            </li >
            <li class="list-group-item">data di uscita: <?php echo $avatar -> getData();  ?></li>
        </ul>

        <h2><?php echo $titanic -> getTitolo(); ?></h2>
        <ul  class="list-group">
            <li class="list-group-item">generi: 
                <ul>
                    <?php foreach($titanic -> getGeneri() as $generi):?>
                        <li><?php echo $generi;  ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="list-group-item">data di uscita: <?php echo $titanic -> getData();  ?></li>
        </ul>

    </div>
</body>
</html>