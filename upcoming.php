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
        "title" => "Grisaia Phantom Trigger",
        "image" => "Popular/Toriko Jump Super Anime Tour 2009 Special.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "The Movie The End and the Beginning",
        "image" => "Popular/Haikyuu!! The Movie The End and the Beginning.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Jujutsu Kaisen 0 The last Kenjaku",
        "image" => "Popular/Jujutsu Kaisen 0.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "My Hero Academia Heroes Rising",
        "image" => "Popular/My Hero Academia Heroes Rising.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Street Fighter II The Animated Movie ",
        "image" => "Popular/Street Fighter II The Animated Movie.jpg",
        "rating" => 4.5,
    ),     array(
        "title" => "Violet Evergarden The Movie",
        "image" => "Popular/Violet Evergarden The Movie.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "Weathering with You The Movie",
        "image" => "Popular/Weathering with You.jpg",
        "rating" => 3.8,
    ),    array(
        "title" => "Grisaia Phantom Trigger",
        "image" => "Popular/Toriko Jump Super Anime Tour 2009 Special.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "The Movie The End and the Beginning",
        "image" => "Popular/Haikyuu!! The Movie The End and the Beginning.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Jujutsu Kaisen 0 The last Kenjaku",
        "image" => "Popular/Jujutsu Kaisen 0.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "My Hero Academia Heroes Rising",
        "image" => "Popular/My Hero Academia Heroes Rising.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Street Fighter II The Animated Movie ",
        "image" => "Popular/Street Fighter II The Animated Movie.jpg",
        "rating" => 4.5,
    ),     array(
        "title" => "Violet Evergarden The Movie",
        "image" => "Popular/Violet Evergarden The Movie.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "Weathering with You The Movie",
        "image" => "Popular/Weathering with You.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Grisaia Phantom Trigger Animation",
        "image" => "Popular/Toriko Jump Super Anime Tour 2009 Special.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "The Movie The End and the Beginning",
        "image" => "Popular/Haikyuu!! The Movie The End and the Beginning.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Jujutsu Kaisen 0 The last Kenjaku",
        "image" => "Popular/Jujutsu Kaisen 0.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "My Hero Academia Heroes Rising",
        "image" => "Popular/My Hero Academia Heroes Rising.jpg",
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
