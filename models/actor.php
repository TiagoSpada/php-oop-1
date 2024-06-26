<?php

class Actor {

    /***** VARIABILI ******/
    private string $nome;
    private string $cognome;
    private string $ruolo;

    /***** COSTRUTTORE ******/
    public function __construct(string $nome, string $cognome) {
        $this -> setNome($nome);
        $this -> setCognome($cognome);
    }

    /***** SET NOME ******/
    public function setNome(string $nome): void{
        if(!strlen($nome)) {
            throw new Exception('Nome non valido');
        }
        $this -> nome = $nome;
    }

    /***** SET NOME ******/
    public function getNome(): string{
        return $this -> nome;
    }
    /***** SET COGNOME ******/
    public function setCognome(string $cognome): void{
        if(strlen($cognome) < 1) {
            throw new Exception('Cognome non valido');
        }
        $this -> cognome = $cognome;
    }

    /***** SET COGNOME ******/
    public function getCognome(): string{
        return $this -> cognome;
    }

    /***** SET RUOLO ******/
    public function setRuolo(string $ruolo): void{
        if(strlen($ruolo) < 1) {
            throw new Exception('Ruolo non valido');
        }
        $this -> ruolo = $ruolo;
    }
    /***** GET RUOLO ******/
    public function getRuolo(): string{
        return $this -> ruolo;
    }
}