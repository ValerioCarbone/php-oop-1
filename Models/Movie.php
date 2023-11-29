<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production
{
    private $profit;
    private $duration;

    // CONSTRUCT

    function __construct($title, $language, $vote, $release_year, $profit, $duration)
    {
        parent::__construct($title, $language, $vote, $release_year);
        $this->setProfit($profit);
        $this->setDuration($duration);
    }

    // GET

    function getProfit()
    {
        return $this->profit;
    }

    function getDuration()
    {
        return $this->duration;
    }

    // SET

    function setProfit($profit)
    {
        if (is_numeric($profit) && $profit > 1) {
            $this->profit = $profit;
        } else {
            $this->profit = null;
        }
    }

    function setDuration($duration)
    {
        if (is_numeric($duration)) {
            $this->duration = $duration;
        } else {
            $this->profit = null;
        }
    }
}
