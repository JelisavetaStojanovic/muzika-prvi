<?php
/** @var DatabaseConnection $db */
$db = require '../init.php';

$tracks = $db->select(Track::TABLE_NAME);
echo json_encode($tracks);