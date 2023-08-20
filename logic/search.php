<?php
/** @var DatabaseConnection $db */
$db = require '../init.php';

$searchString = $_GET['search'];

$sql = "SELECT * FROM tracks t JOIN authors a ON t.author_id = a.id JOIN genres g on t.genre_id = g.id WHERE t.track_name LIKE '%$searchString%' OR a.name LIKE '%$searchString%'";

$result = $db->executeQuery($sql);

echo json_encode($result);