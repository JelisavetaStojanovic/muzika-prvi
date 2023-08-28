<?php
/** @var DatabaseConnection $db */
$db = require '../init.php';

$db->delete(Track::TABLE_NAME, ' id = ' . $_POST['track_delete']);
header('Location: ../index.html');