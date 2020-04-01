<?php

class Alien {

    private $eyes;
    private $tentacles;
    private $color;


    public function __construct($eyes, $tentacles, $color) {
        $this->eyes = $eyes;
        $this->tentacles = $tentacles;
        $this->color = $color;
    }

    public function getEyes() {
        return $this->eyes;
    }

    public function setEyes($eyes) {
        $this->eyes = $eyes;
    }

    public function getTentacles() {
        return $this->tentacles;
    }

    public function setTentacles($tentacles) {
        $this->tentacles = $tentacles;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

}