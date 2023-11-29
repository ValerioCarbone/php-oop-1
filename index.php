<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';


$film_1 = new Production('The Wolf of Wall Street', 'En', 9, 2013);
$film_2 = new Production('Oldboy', 'Kr', 8, 2003);
$film_3 = new Production('Il marchese del Grillo', 'It', 8, 1981);


$films_array = [
    $film_1,
    $film_2,
    $film_3,
    new Production('Star Wars: Episode III - Revenge of the Sith', 'En', 7.5, 2005)
];


foreach ($films_array as $film) { ?>
    <h2><?php echo $film->getTitle() ?></h2>
    <p>Language: <?php echo $film->getLanguage() ?></p>
    <p>Vote: <?php echo $film->getVote() ?></p>
    <p>Release year: <?php echo $film->getReleaseYear() ?></p>
<?php } ?>