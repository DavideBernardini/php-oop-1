<?php

class Actor {
    private $nome;
    private $cognome;
    private $data_nascita;
    private $luogo_nascita;

    public function __construct($_nome, $_cognome, $_data_nascita, $_luogo_nascita)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->data_nascita = $_data_nascita;
        $this->luogo_nascita = $_luogo_nascita;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
    public function getDataNascita()
    {
        return $this->data_nascita;
    }
    public function getLuogoNascita()
    {
        return $this->luogo_nascita;
    }
}