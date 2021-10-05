<?php
//Creo una classe Movie
class Movie
{
    //Variabili d'istanza (proprietà)
    public $title;
    public $genre;
    public $year;
    //construct
    public function __construct()
    {
    }
    //getTitle function
    public function getTitle()
    {
        return $this->title;
    }
    //getGenre function
    public function getGenre()
    {
        return $this->genre;
    }
    //getYear function
    public function getYear()
    {
        return $this->year;
    }
}

//Istanza 1
$movie = new Movie();
$movie->title = 'The Lord of the Rings: The Fellowship of the Ring';
$movie->genre = 'Fantasy';
$movie->year = 2001;
//Istanza 2
$movie2 = new Movie();
$movie2->title = 'The Lord of the Rings: The Two Towers';
$movie2->genre = 'Fantasy';
$movie2->year = 2002;


echo "Il titolo del primo film è: <strong>" . $movie->getTitle() . "</strong><br>Della categoria: <strong>" . $movie->getGenre() . "</strong><br>Uscito nell'anno: <strong>" . $movie->getYear() . "</strong>";

echo "<br><hr>";

echo "Il titolo del secondo film è: <strong>" . $movie2->getTitle() . "</strong><br>Della categoria: <strong>" . $movie2->getGenre() . "</strong><br>Uscito nell'anno: <strong>" . $movie2->getYear() . "</strong>";
