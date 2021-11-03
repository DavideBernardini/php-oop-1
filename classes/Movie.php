<?php

class Movie {
    private $title;
    private $director;
    private $language;
    private $year;
    private $duration;
    private $studio;
    private $genres;
    private $actors;

    public function __construct($_title, $_director, $_language, $_year, $_duration = NULL, $_studio = NULL, $_genres = [],  $_actors = [])
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->language = $_language;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->studio = $_studio;
        $this->genres = $_genres;
        $this->actors = $_actors;
    }

    // get functions

    public function getTitle()
    {
        return $this->title;
    }

    public function getDirector()
    {
        return $this->director;
    }
    public function getLanguage()
    {
        return $this->language;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function getStudio()
    {
        return $this->studio;
    }

    public function getActors()
    {
        return $this->actors;
    }

    // set functions

    public function setActors($_actor)
    {
        $this->actors[] = $_actor;
    }
    public function setGenres($_genere)
    {
        $this->genres[] = $_genere;
    }
}

