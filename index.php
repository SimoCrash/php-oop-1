<?php
    class Movie {
        public $title;
        public $year;
        public $genre;
        public $eta;
        public function __construct($title, $year, $genre)
        {
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
            $this->setEta();
        }

        public function setEta(){
            $this->eta = 2023 - $this->year;
        }

        public function getEta(){
            return $this->eta;
        }
    }
	$matrix = new Movie('The Matrix', 1999, 'Sci-Fi');
    $up = new Movie ('Up', 2009, 'animation');
    $non_aprire_quella_porta = new Movie ('Non aprire quella porta', 2006, 'horror');
    $parto_col_folle = new Movie ('Parto col folle', 2010, 'comedy');
	
    $movie_matrix = array("Title: " . $matrix->title, "Year: " . $matrix->year, "Genre: " . $matrix->genre, "Age: " . $matrix->getEta());
    for ($i = 0; $i < count($movie_matrix); $i++){
        echo $movie_matrix[$i] . "<br>";
    }
    echo "<br>";

    $movie_up = array("Title: " . $up->title, "Year: " . $up->year, "Genre: " . $up->genre, "Age: " . $up->getEta());
    for ($i = 0; $i < count($movie_up); $i++){
        echo $movie_up[$i] . "<br>";
    }
    echo "<br>";

    $movie_non_aprire_quella_porta = array("Title: " . $non_aprire_quella_porta->title, "Year: " . $non_aprire_quella_porta->year, "Genre: " . $non_aprire_quella_porta->genre, "Age: " . $non_aprire_quella_porta->getEta());
    for ($i = 0; $i < count($movie_non_aprire_quella_porta); $i++){
        echo $movie_non_aprire_quella_porta[$i] . "<br>";
    }
    echo "<br>";

    $movie_parto_col_folle = array("Title: " . $parto_col_folle->title, "Year: " . $parto_col_folle->year, "Genre: " . $parto_col_folle->genre, "Age: " . $parto_col_folle->getEta());
    for ($i = 0; $i < count($movie_parto_col_folle); $i++){
        echo $movie_parto_col_folle[$i] . "<br>";
    }


	// echo "Titolo: ". $matrix->title;
    // echo "Anno: ". $matrix->year . "(" . $matrix->getEta() . " anni)";
    // echo "Genere: ". $matrix->genre;
?>