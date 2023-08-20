<?php

require 'domain/Author.php';
require 'domain/Genre.php';
require 'domain/Track.php';
require 'db/DatabaseConnection.php';

$db = new DatabaseConnection('localhost', 'root', '', 'djsaveta');

return $db;