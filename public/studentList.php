<?php

/**
 * 
 * controller for list info
 */

require_once "../bootstrap.php";


$students = new Student(); // conteiner for list

$students = $studentsService->getStudents();
require_once "../views/studentList.phtml";
// echo "<pre>";
// var_dump($students);