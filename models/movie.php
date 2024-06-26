<?php
class Movie {

    /***** VARIABILI ******/
    private string $titolo;
    private array $generi;
    private string $data_di_uscita;
    public ?Actor $attore=null;

    /***** COSTRUTTORE ******/
    public function __construct(string $titolo, string $data_di_uscita) {
        $this -> setTitolo($titolo);
        $this -> setData($data_di_uscita);
    }

    /***** SET TITOLO ******/
    public function setTitolo(string $titolo): void{
        if(!strlen($titolo)) {
            throw new Exception('Titolo non valido');
        }
        $this -> titolo = $titolo;
    }
    /***** GET TITOLO ******/
    public function getTitolo(): string{
        return $this -> titolo;
    }

    /***** SET GENERI ******/
    public function setGeneri(array $generi): void{
        if(count($generi) < 1) {
            throw new Exception('Nessun genere trovato');
        }
        $this -> generi = $generi;
    }
    /***** GET GENERI ******/
    public function getGeneri(): array{
        return $this -> generi;
    }

    /***** SET DATA ******/
    public function setData(string $data) :void{
        if(strlen($data) < 6 || strlen($data) > 20) {
            throw new Exception('Data inserita non valida');
        }
        $this -> data_di_uscita = $data;
    }
    /***** GET DATA ******/
    public function getData(): string{
        
        return $this -> data_di_uscita;
    }

    /***** SET ATTORI ******/
    public function setAttore(Actor $attore) :void{
        $this -> attore = $attore;
    }
    /***** GET ATTORI ******/

    public function getAttore(): ?Actor{
        
        return $this -> attore;
    }
    

}

