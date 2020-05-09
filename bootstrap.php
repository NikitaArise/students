<?php 
mb_internal_encoding('UTF-8');
require_once "../vendor/autoload.php";

use Dump\Config;
use App\StudentGetway;


$pdo = new \PDO("sqlite:../" . Config::$NAME_DB);
$pdo->setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$studentsService = new StudentGetway($pdo);