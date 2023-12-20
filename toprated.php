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
        "title" => "The Movie Mugen Train",
        "image" => "Popular/Demon Slayer -Kimetsu no Yaiba- The Movie Mugen Train.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "The Phantom of Baker Street",
        "image" => "Popular/Detective Conan The Phantom of Baker Street.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Doraemon The Island of Miracles",
        "image" => "Popular/Doraemon Nobita and the Island of Miracles - Animal Adventure.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "Gintama The Movie Powerfull Gintama",
        "image" => "Popular/Gintama The Movie.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "CGrappler Baki The Ultimate Fighter ",
        "image" => "Popular/Grappler Baki The Ultimate Fighter.jpg",
        "rating" => 4.5,
    ),     array(
        "title" => "The Movie Mugen Train",
        "image" => "Popular/Demon Slayer -Kimetsu no Yaiba- The Movie Mugen Train.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "The Phantom of Baker Street",
        "image" => "Popular/Detective Conan The Phantom of Baker Street.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Doraemon The Island of Miracles",
        "image" => "Popular/Doraemon Nobita and the Island of Miracles - Animal Adventure.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "Gintama The Movie Powerfull Gintama",
        "image" => "Popular/Gintama The Movie.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "CGrappler Baki The Ultimate Fighter ",
        "image" => "Popular/Grappler Baki The Ultimate Fighter.jpg",
        "rating" => 4.5,
    ), 
    array(
        "title" => "The Movie Mugen Train",
        "image" => "Popular/Demon Slayer -Kimetsu no Yaiba- The Movie Mugen Train.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "The Phantom of Baker Street",
        "image" => "Popular/Detective Conan The Phantom of Baker Street.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Doraemon The Island of Miracles",
        "image" => "Popular/Doraemon Nobita and the Island of Miracles - Animal Adventure.jpg",
        "rating" => 4.0,
    ),
    array(
        "title" => "Gintama The Movie Powerfull Gintama",
        "image" => "Popular/Gintama The Movie.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "CGrappler Baki The Ultimate Fighter ",
        "image" => "Popular/Grappler Baki The Ultimate Fighter.jpg",
        "rating" => 4.5,
    ), 
    array(
        "title" => "The Movie Mugen Train",
        "image" => "Popular/Demon Slayer -Kimetsu no Yaiba- The Movie Mugen Train.jpg",
        "rating" => 4.5,
    ),
    array(
        "title" => "The Phantom of Baker Street",
        "image" => "Popular/Detective Conan The Phantom of Baker Street.jpg",
        "rating" => 3.8,
    ),
    array(
        "title" => "Doraemon The Island of Miracles",
        "image" => "Popular/Doraemon Nobita and the Island of Miracles - Animal Adventure.jpg",
        "rating" => 4.0,
    )
);

// Menentukan apakah harus menampilkan pesan "Recommended" dan warna hijau
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
