<?php

/**
 * 
 * controller for list info
 */





require_once "../bootstrap.php";
use App\Student;

$students = new Student(); // conteiner for list
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $sort = array_key_exists('sort', $_GET) ? $_GET['sort'] : 'useResult';
    $jsort = array_key_exists('jsort', $_GET) ? $_GET['jsort'] : null;
    if ($jsort != null){   
        // if($jsort == "name+desc"){
        //     exit;
        // }
        $students = $studentsService->getStudents($jsort);  
        echo json_encode($students);
        exit;
    }
    $students = $studentsService->getStudents($sort);
    require_once "../views/studentList.phtml";
    echo "<pre>";
    // var_dump($_SERVER);
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sort = array_key_exists('sort', $_POST);
    $students = $studentsService->getStudents($sort);
}
else{
    exit;
}


