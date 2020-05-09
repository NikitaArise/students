<?php

use Dump\Config;

require_once "config.php";



if (is_file("../" . Config::$NAME_DB)){
    unlink("../" . Config::$NAME_DB);
}

$pdo = new PDO("sqlite:../" . Config::$NAME_DB);

$sql = "CREATE TABLE students (
        id INTEGER PRIMARY KEY,
        name TEXT,
        lastname TEXT,
        gender TEXT,
        group_ TEXT,
        email TEXT UNIQUE,
        useResult INTEGER,
        birthYear INTEGER
)";

$result = $pdo->query($sql);

var_dump($result);