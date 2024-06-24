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
var_dump($avatar->getGeneri());
?>