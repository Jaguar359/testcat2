<?php

class Cat
{
    public $mood;
    public $position;

    public function __construct()
    {
        if (empty($_SESSION['mood'])){
            $this->mood = 50;
        } else {
            $this->mood = $_SESSION['mood'];
        }
    }

    /**
     * Погладить
     */
    public function stroke()
    {
        $this->mood = $this->mood + 20;

        $_SESSION['mood'] = $this->mood;

        return $this->mood;
    }

    /**
     * Испугать
     */
    public function scare()
    {
        $this->position = "лежит";

        $_SESSION['mood'] = $this->mood;

        return $this->mood;
    }
}