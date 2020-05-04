<?php 
mb_internal_encoding('UTF-8');
require_once "dump/config.php";
require_once "app/Student.php";
require_once "app/StudentGetway.php";
require_once "app/Validator.php";

$pdo = new PDO("sqlite:../" . NAME_DB);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$studentsService = new StudentGetway($pdo);