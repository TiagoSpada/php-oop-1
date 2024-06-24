<?php 
class Movie {
    public $titolo;
    public $generi;
    public $data_di_uscita;

    public function __construct(string $_titolo) {
        $this->titolo = $_titolo;
    }
}
$avatar = new Movie('Avatar');
echo $avatar -> titolo  ;
?>