<?php
/** @var DatabaseConnection $db */
$db = require '../init.php';

$authors = $db->select(Author::TABLE_NAME);
echo json_encode($authors);