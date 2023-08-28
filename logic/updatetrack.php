<?php
/** @var DatabaseConnection $db */
$db = require '../init.php';

$trackName = $_POST['new_track_name'];
$db->update(Track::TABLE_NAME, [
    'track_name' => $trackName
], ' id = ' . $_POST['track']);
header('Location: ../index.html');