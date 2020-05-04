<?php

/**
 * 
 * controller for list info
 */

require_once "../bootstrap.php";

$sort = array_key_exists('sort', $_GET) ? $_GET['sort'] : 'useResult';
$students = new Student(); // conteiner for list
echo $sort;
$students = $studentsService->getStudents($sort);
require_once "../views/studentList.phtml";
// echo "<pre>";
// var_dump($students);

