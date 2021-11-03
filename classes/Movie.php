<?php

class Movie {
    private $titolo;
    private $regista;
    private $lingua;
    private $anno;
    private $durata;
    private $casaProduttrice;
    private $generi;
    private $attori;

    public function __construct($_titolo, $_regista, $_lingua, $_anno, $_durata = NULL, $_casaProduttrice = NULL, $_generi = [],  $_attori = [])
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->lingua = $_lingua;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->casaProduttrice = $_casaProduttrice;
        $this->generi = $_generi;
        $this->attori = $_attori;
    }

    // get functions

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function getRegista()
    {
        return $this->regista;
    }
    public function getLingua()
    {
        return $this->lingua;
    }

    public function getAnno()
    {
        return $this->anno;
    }

    public function getDurata()
    {
        return $this->durata;
    }

    public function getGeneri()
    {
        return $this->generi;
    }

    public function getCasaProduttrice()
    {
        return $this->casaProduttrice;
    }

    public function getAttori()
    {
        return $this->attori;
    }

    // set functions

    public function setAttori($_attore)
    {
        $this->attori[] = $_attore;
    }
    public function setGeneri($_genere)
    {
        $this->generi[] = $_genere;
    }
}

