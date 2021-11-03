<?php

require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Actor.php';

// movie 1

$ritorno_al_futuro = new Movie("Ritorno Al Futuro", "Robert Zemeckis", "it", 1985, 116, "Universal");

$ritorno_al_futuro->setGeneri("avventura");
$ritorno_al_futuro->setGeneri("commedia");
$ritorno_al_futuro->setGeneri("fantascienza");

$lloyd = new Actor("Christopher", "Lloyd", 1938, "Stamford");
$j_fox = new Actor("Michael J.", "Fox", 1961, "Edmonton");

$ritorno_al_futuro->setAttori($j_fox);
$ritorno_al_futuro->setAttori($lloyd);

// movie 2

$porco_rosso = new Movie("Porco Rosso", "Hayao Miyazaki", "j", 1992, 92, "Studio Ghibli");

$porco_rosso->setGeneri("animazione");
$porco_rosso->setGeneri("storico");
$porco_rosso->setGeneri("fantastico");

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
            <?php echo $ritorno_al_futuro->getTitolo() ?>
         </h2>
         <p>
            <strong>Regista:</strong>
            <?php echo $ritorno_al_futuro->getRegista() ?>
         </p>
         <p>
            <strong>Anno:</strong>
            <?php echo $ritorno_al_futuro->getAnno() ?>
         </p>
         <p>
            <strong>Lingua:</strong>
            <?php echo $ritorno_al_futuro->getLingua() ?>
         </p>
         <p>
            <strong>Generi:</strong>
            <?php 
               foreach($ritorno_al_futuro->getGeneri() as $genere) {
                  echo "<span>{$genere}, </span>";
               }
            ?>
         </p>
         <p>
            <strong>Durata:</strong>
            <?php echo $ritorno_al_futuro->getDurata() ?>
         </p>
         <p>
            <strong>Casa di produzione:</strong>
            <?php echo $ritorno_al_futuro->getCasaProduttrice() ?>
         </p>
         <p>
            <strong>Attori:</strong>
            <?php 
               foreach($ritorno_al_futuro->getAttori() as $attore) {
                  echo "<span>{$attore->getNome()} {$attore->getCognome()}, </span>";
               }
            ?>
         </p>
      </li>
      <li style="margin-top: 50px">
         <h2>
            <?php echo $porco_rosso->getTitolo() ?>
         </h2>
         <p>
            <strong>Regista:</strong>
            <?php echo $porco_rosso->getRegista() ?>
         </p>
         <p>
            <strong>Anno:</strong>
            <?php echo $porco_rosso->getAnno() ?>
         </p>
         <p>
            <strong>Lingua:</strong>
            <?php echo $porco_rosso->getLingua() ?>
         </p>
         <p>
            <strong>Generi:</strong>
            <?php 
               foreach($porco_rosso->getGeneri() as $genere) {
                  echo "<span>{$genere}, </span>";
               }
            ?>
         </p>
         <p>
            <strong>Durata:</strong>
            <?php echo $porco_rosso->getDurata() ?>
         </p>
         <p>
            <strong>Casa di produzione:</strong>
            <?php echo $porco_rosso->getCasaProduttrice() ?>
         </p>
      </li>
   </ul>

</body>

</html>