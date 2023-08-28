<?php
/** @var DatabaseConnection $db */
$db = require '../init.php';

$trackName = $_POST['track_name'];
$duration = $_POST['duration'];
$authorId = $_POST['author'];
$genreId = $_POST['genre'];
$track_location = basename($_FILES["track_location"]["name"]);

$target_dir = "../music-files/";

$target_file = $target_dir . basename($_FILES["track_location"]["name"]);

if(move_uploaded_file($_FILES["track_location"]["tmp_name"], $target_file)) {
    $db->insert(Track::TABLE_NAME, [
        'track_name' => $trackName,
        'duration' => $duration,
        'author_id' => $authorId,
        'genre_id' => $genreId,
        'track_location' => $track_location
    ]);
    header('Location: ../index.html');
} else {
    header('Location: ../adminpage.php?message=Error uploading track.&magic=music');
}
