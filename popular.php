<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="popular.css">
</head>
<body>

<nav class="container">
    <div class="wrapper">
      <div class="logo">
        <img src="nemplox.png" alt="">
      </div>
      <ul class="nav_2">
        <li><a href="home.php">Home</a></li>
        <li><a href="Popular.php">Popular</a></li>
        <li><a href="toprated.php">Top Rated</a></li>
        <li><a href="Upcoming.php">Upcoming</a></li>
        <li><a href="comentar.php">Comentar</a></li>
      </ul>
      </div>
    </div>
  </nav>

<?php
$movies = array(
    array(
        "title" => "Attack on Titan Wings of Freedom",
        "image" => "Popular/Attack on Titan Wings of Freedom.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "Black Clover Sword of the Wizard King",
        "image" => "Popular/Black Clover Sword of the Wizard King.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Bleach the Movie Hell Verse",
        "image" => "Popular/Bleach the Movie Hell Verse.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "Boruto Naruto the Movie",
        "image" => "Popular/Boruto Naruto the Movie.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Captain Tsubasa Movie 05 ",
        "image" => "Popular/Captain Tsubasa Movie 05 The most powerful opponent Holland Youth.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "Death Note Relight 1 Visions of a God",
        "image" => "Popular/Death Note Relight 1 Visions of a God.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Attack on Titan Wings of Freedom",
        "image" => "Popular/Attack on Titan Wings of Freedom.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "Black Clover Sword of the Wizard King",
        "image" => "Popular/Black Clover Sword of the Wizard King.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Bleach the Movie Hell Verse",
        "image" => "Popular/Bleach the Movie Hell Verse.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "Boruto Naruto the Movie",
        "image" => "Popular/Boruto Naruto the Movie.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Captain Tsubasa Movie 05 ",
        "image" => "Popular/Captain Tsubasa Movie 05 The most powerful opponent Holland Youth.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "Death Note Relight 1 Visions of a God",
        "image" => "Popular/Death Note Relight 1 Visions of a God.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Attack on Titan Wings of Freedom",
        "image" => "Popular/Attack on Titan Wings of Freedom.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "Black Clover Sword of the Wizard King",
        "image" => "Popular/Black Clover Sword of the Wizard King.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Bleach the Movie Hell Verse",
        "image" => "Popular/Bleach the Movie Hell Verse.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "Boruto Naruto the Movie",
        "image" => "Popular/Boruto Naruto the Movie.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Captain Tsubasa Movie 05 ",
        "image" => "Popular/Captain Tsubasa Movie 05 The most powerful opponent Holland Youth.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "Death Note Relight 1 Visions of a God",
        "image" => "Popular/Death Note Relight 1 Visions of a God.jpg",
        "rating" => 3.8,
    )
);

for ($i = 0; $i < count($movies); $i++) {
    $movie = $movies[$i];
    $title = $movie["title"];
    $image = $movie["image"];
    $rating = $movie["rating"];

    echo "<div class='card'>";
    echo "<h2>$title</h2>";
    echo "<img src='$image' alt='$title'>";
    echo "<p>Rating: $rating</p>";

    if ($rating < 4.0) {
        echo "<p class='not-recommended'>Not Recommended</p>";
    } else {
        echo "<p class='recommended'>Recommended</p>";
    }

    echo "</div>";
}
?>

</body>
</html>
