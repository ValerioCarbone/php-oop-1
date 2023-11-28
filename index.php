<?php class Production
{
    public $title;
    public $language;
    public $vote;
    public $release_year;

    public function setTitle($_title)
    {
        if (is_string($_title) && strlen($_title) >= 1) {
            $this->$title = $_title;
        } else {
            $this->$title = null;
        }
    }

    public function getTitle()
    {
        return $this->$title;
    }

    function getLang()
    {
        return $this->$language;
    }

    function getVote()
    {
        return $this->$vote;
    }

    function setVote($_vote)
    {
        if (is_numeric($_vote) && $_vote >= 0 && $_vote <= 10) {
            $this->$vote = $_vote;
        } else {
            $this->$vote = null;
        }
    }

    function setRelY($_release_year)
    {
        if (
            is_numeric($_release_year) && is_integer($_release_year)
            && $release_year >= 1891 && $release_year < 2024
        ) {
            $this->$release_year = $_release_year;
        } else {
            $this->$release_year = null;
        }
    }

    function __construct($_title, $_language, $_vote, $_release_year)
    {

        $this->$title = setTitle($_title);
        $this->$language = $_language;
        $this->$vote = setVote($_vote);
        $this->$release_year = setRelY($_release_year);
    }
};

$film_1 = new Production('The Wolf of Wall Street', 'En', 8.5, 2013);
$film_2 = new Production('Oldboy', 'Kr', 8, 2003);
$film_3 = new Production('Il marchese del Grillo', 'It', 8, 1981);


$films_array = [
    $film_1,
    $film_2,
    $film_3
];


var_dump($film_1);
