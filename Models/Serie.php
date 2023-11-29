<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production
{
    private $season;

    // CONSTRUCT

    function __construct($title, $language, $vote, $release_year, $season)
    {
        parent::__construct($title, $language, $vote, $release_year);
        $this->setSeason($season);
    }
    // GET

    function getSeason()
    {
        return $this->season;
    }

    // SET

    function setSeason($season)
    {
        if (is_numeric($season)) {
            $this->season = $season;
        }
    }
}
