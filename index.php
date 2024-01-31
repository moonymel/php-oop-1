<?php 

 class Movie {
    public $title;
    public $director;
    public $year;
    public $rating;
    public $stars = 0;
    public $genre;

    function __construct($_title, $_director, $_year, $_rating, $_genre){
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->rating = $_rating;
        $this->genre = $_genre;
    }

    public function setStars($rating){
        $this->stars = round($rating / 2);
    }

    public function getStars(){
        return $this->stars;
    }

    public function getGenre() {
        return implode('/', $this->genre);
    }
 }   

 
    $movie_1 = new Movie('The Secret Life of Walter Mitty', 'Ben Stiller', 2013, 7, ['Commedia', 'Avventura']);
    $movie_1->setStars($movie_1->rating);

    $movie_2 = new Movie('Her', 'Spike Jonze', 2013, 8, ['Drammatico']);
    $movie_2->setStars($movie_2->rating);

    $movie_3 = new Movie('Unbroken', 'Angelina Jolie', 2014, 7, ['Autobiografico', 'Drammatico']);
    $movie_3->setStars($movie_3->rating);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <h1>Films</h1>
    <ul>
        <li>
            <?php 
                echo $movie_1->title.' è un film del '.$movie_1->year.' diretto da '.$movie_1->director.', valutato a '.$movie_1->getStars().' stelle su 5. Il genere è '.$movie_1->getGenre()
            ?>
        </li>
        <li>
            <?php 
                echo $movie_2->title.' è un film del '.$movie_2->year.' diretto da '.$movie_2->director.', valutato a '.$movie_2->getStars().' stelle su 5. Il genere è '.$movie_2->getGenre()
            ?>
        </li>
        <li>
            <?php 
                echo $movie_3->title.' è un film del '.$movie_3->year.' diretto da '.$movie_3->director.', valutato a '.$movie_3->getStars().' stelle su 5. Il genere è '.$movie_3->getGenre()
            ?>
        </li>
    </ul>

</body>

</html>