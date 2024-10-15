<?php
$directors = [
    "James Cameron" => [
        ["title" => "Avatar", "year" => 2009],
        ["title" => "Titanic", "year" => 1997],
        ["title" => "Terminator 2: Judgment Day", "year" => 1991]
    ], 
    "Christopher Nolan" => [
        ["title" => "Inception", "year" => 2010],
        ["title" => "The Dark Knight", "year" => 2008],
        ["title" => "Interstellar", "year" => 2014]
    ], 
    "Steven Spielberg" => [
        ["title" => "Jurassic Park", "year" => 1993],
        ["title" => "Schindler's List", "year" => 1993],
        ["title" => "E.T. the Extra-Terrestrial", "year" => 1982]
    ]
    ]; 
    echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Director</th><th>Movie</th><th>Year</th></tr>";

foreach($directors as $director => $movies) {
    foreach($movies as $movie) {
        echo "<tr>";
        echo "<td>$director</td>";
        echo "<td>{$movie['title']}</td>";
        echo "<td>{$movie['year']}</td>";
        echo "</tr>";
    }
}
echo "</table>";
?>