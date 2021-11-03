<?php

require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Actor.php';

// movie 1

$ritorno_al_futuro = new Movie("Ritorno Al Futuro", "Robert Zemeckis", "it", 1985, 116, "Universal");

$ritorno_al_futuro->setGenres("avventura");
$ritorno_al_futuro->setGenres("commedia");
$ritorno_al_futuro->setGenres("fantascienza");

$lloyd = new Actor("Christopher", "Lloyd", 1938, "Stamford");
$j_fox = new Actor("Michael J.", "Fox", 1961, "Edmonton");

$ritorno_al_futuro->setActors($j_fox);
$ritorno_al_futuro->setActors($lloyd);

// movie 2

$porco_rosso = new Movie("Porco Rosso", "Hayao Miyazaki", "j", 1992, 92, "Studio Ghibli");

$porco_rosso->setGenres("animazione");
$porco_rosso->setGenres("storico");
$porco_rosso->setGenres("fantastico");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php-oop-1</title>
</head>

<body>
   <h1 style="text-align: center">Movies</h1>
   <ul style="list-style: none">
      <li>
         <h2>
            <?php echo $ritorno_al_futuro->getTitle() ?>
         </h2>
         <p>
            <strong>Regista:</strong>
            <?php echo $ritorno_al_futuro->getDirector() ?>
         </p>
         <p>
            <strong>Anno:</strong>
            <?php echo $ritorno_al_futuro->getYear() ?>
         </p>
         <p>
            <strong>Lingua:</strong>
            <?php echo $ritorno_al_futuro->getLanguage() ?>
         </p>
         <p>
            <strong>Generi:</strong>
            <?php 
               foreach($ritorno_al_futuro->getGenres() as $genre) {
                  echo "<span>{$genre}, </span>";
               }
            ?>
         </p>
         <p>
            <strong>Durata:</strong>
            <?php echo $ritorno_al_futuro->getDuration() ?>
         </p>
         <p>
            <strong>Casa di produzione:</strong>
            <?php echo $ritorno_al_futuro->getStudio() ?>
         </p>
         <p>
            <strong>Attori:</strong>
            <?php 
               foreach($ritorno_al_futuro->getActors() as $actor) {
                  echo "<span>{$actor->getNome()} {$actor->getCognome()}, </span>";
               }
            ?>
         </p>
      </li>
      <li style="margin-top: 50px">
         <h2>
            <?php echo $porco_rosso->getTitle() ?>
         </h2>
         <p>
            <strong>Regista:</strong>
            <?php echo $porco_rosso->getDirector() ?>
         </p>
         <p>
            <strong>Anno:</strong>
            <?php echo $porco_rosso->getYear() ?>
         </p>
         <p>
            <strong>Lingua:</strong>
            <?php echo $porco_rosso->getLanguage() ?>
         </p>
         <p>
            <strong>Generi:</strong>
            <?php 
               foreach($porco_rosso->getGenres() as $genre) {
                  echo "<span>{$genre}, </span>";
               }
            ?>
         </p>
         <p>
            <strong>Durata:</strong>
            <?php echo $porco_rosso->getDuration() ?>
         </p>
         <p>
            <strong>Casa di produzione:</strong>
            <?php echo $porco_rosso->getStudio() ?>
         </p>
      </li>
   </ul>

</body>

</html>