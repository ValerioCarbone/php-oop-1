<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$movie_1 = new Movie('The Wolf of Wall Street', 'En', 9, 2013, 406.9, 180);
$movie_2 = new Movie('Oldboy', 'Kr', 8, 2003, 17.1, 116);
$movie_3 = new Movie('Il marchese del Grillo', 'It', 8, 1981, 6.2, 139);
$movie_4 = new Movie('Star Wars: Episode III - Revenge of the Sith', 'En', 7.5, 2005, 113, 140);
$movie_5 = new Movie('Interstellar', 'En', 8.5, 2014, 165, 169);

$serie_1 = new Serie('Games of Thrones', 'En', 7.5, 2011, 8);
$serie_2 = new Serie('Breaking Bad', 'En', 9.5, 2008, 5);
$serie_3 = new Serie('Gomorra - La serie', 'It', 7.5, 2014, 5);
$serie_4 = new Serie('Friends', 'En', 8, 1994, 10);
$serie_5 = new Serie('The X-Files', 'En', 9, 1993, 11);

$production_array = [
    $movie_1,
    $movie_2,
    $movie_3,
    $movie_4,
    $movie_5,
    $serie_1,
    $serie_2,
    $serie_3,
    $serie_4,
    $serie_5
];

var_dump($production_array);

foreach ($production_array as $item) { ?>
    <h2><?php echo $item->getTitle(); ?></h2>
    <p>Language: <?php echo $item->getLanguage(); ?></p>
    <p>Vote: <?php echo $item->getVote(); ?></p>
    <p>Release year: <?php echo $item->getReleaseYear(); ?></p>
    <?php if ($item instanceof Movie) { ?>
        <p>Duration:<?php echo $item->getDuration(); ?> min.</p>
    <?php }
    if ($item instanceof Serie) { ?>
        <p>N° of seasons: <?php echo $item->getSeason(); ?></p>
<?php }
} ?>