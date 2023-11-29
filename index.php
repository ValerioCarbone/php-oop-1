<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$movie_1 = new Movie('The Wolf of Wall Street', 'En', 9, 2013, 180, 406.9);
$movie_2 = new Movie('Oldboy', 'Kr', 8, 2003, 116, 17.1);
$movie_3 = new Movie('Il marchese del Grillo', 'It', 8, 1981, 139, 6.2);
$movie_4 = new Movie('Star Wars: Episode III - Revenge of the Sith', 'En', 7.5, 2005, 140, 113);
$movie_5 = new Movie('Interstellar', 'En', 8.5, 2014, 169, 165);

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

foreach ($production_array as $item) { ?>
    <h2><?php echo $item->getTitle(); ?></h2>
    <p>Language: <?php echo $item->getLanguage(); ?></p>
    <p>Vote: <?php echo $item->getVote(); ?></p>
    <p>Release year: <?php echo $item->getReleaseYear(); ?></p>
    <?php if ($item->getProfit() && $item->getDuration()) { ?>
        <p>Box Office: <?php echo $item->getProfit(); ?> milions</p>
        <p>Duration:<?php echo $item->getDuration(); ?> min.</p>
    <?php }
    if ($item->getSeason()) { ?>
        <p>N° of seasons: <?php echo $item->getSeason(); ?></p>
<?php }
} ?>