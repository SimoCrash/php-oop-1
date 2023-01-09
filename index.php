<?php
    class Movie {
        public $title;
        public $year;
        public $genre;
        public $eta;

        public function __construct($title, $year, $genre, $eta)
        {
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
            $this->eta = $eta;
        }

        public function setEta(){
            $this->eta = 2023 - $this->year;
        }

        public function getEta(){
            return $this->eta;
        }
    }

    $up = new Movie('Up', 2009, 'animation', getEta());
    $non_aprire_quella_porta = new Movie ('Non aprire quella porta', 2006, 'horror', getEta());
    $parto_col_folle = new Movie ('Parto col folle', 2010, 'comedy', getEta());
    var_dump($up, $non_aprire_quella_porta, $parto_col_folle);
    echo $up, $non_aprire_quella_porta, $parto_col_folle;
?>