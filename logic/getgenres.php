<?php
/** @var DatabaseConnection $db */
$db = require '../init.php';
$genres = $db->select(Genre::TABLE_NAME);

echo json_encode($genres);
