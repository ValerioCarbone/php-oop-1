<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production
{
    private $profit;
    private $duration;


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
