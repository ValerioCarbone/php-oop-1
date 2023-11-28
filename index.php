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
};
