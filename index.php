<?php
class Production
{
    public $title;
    public $language;
    public $vote;
    public $release_year;

    function __construct($_title, $_language, $_vote, $_release_year)
    {
        $this->setTitle($_title);
        $this->setLanguage($_language);
        $this->setVote($_vote);
        $this->setReleaseYear($_release_year);
    }



    public function getTitle()
    {
        return $this->title;
    }

    function getLanguage()
    {
        return $this->language;
    }

    function getVote()
    {
        return $this->vote;
    }

    function getReleaseYear()
    {
        return $this->release_year;
    }



    public function setTitle($_title)
    {
        if (is_string($_title) && strlen($_title) >= 1) {
            $this->title = $_title;
        } else {
            $this->title = null;
        }
    }

    function setLanguage($_language)
    {
        if (is_string($_language) && strlen($_language) > 1 && strlen($_language) < 4) {
            $this->language = $_language;
        }
    }

    function setVote($_vote)
    {
        if (is_numeric($_vote) && $_vote >= 0 && $_vote <= 10) {
            $this->vote = $_vote;
        } else {
            $this->vote = null;
        }
    }

    function setReleaseYear($_release_year)
    {
        if (
            is_numeric($_release_year) && is_integer($_release_year)
            && $_release_year >= 1891 && $_release_year < 2024
        ) {
            $this->release_year = $_release_year;
        } else {
            $this->release_year = null;
        }
    }
};


$film_1 = new Production('The Wolf of Wall Street', 'En', 9, 2013);
$film_2 = new Production('Oldboy', 'Kr', 8, 2003);
$film_3 = new Production('Il marchese del Grillo', 'It', 8, 1981);


$films_array = [
    $film_1,
    $film_2,
    $film_3
];


foreach ($films_array as $film) { ?>
    <h2><?php echo $film->getTitle() ?></h2>
    <p>Language: <?php echo $film->getLanguage() ?></p>
    <p>Vote: <?php echo $film->getVote() ?></p>
    <p>Release year: <?php echo $film->getReleaseYear() ?></p>
<?php } ?>