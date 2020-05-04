<?php
require_once "app/Student.php";
$student = new Student();
$pdo = new PDO("sqlite:student.db");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $sql = "SELECT * FROM students";
    $stmt = $pdo->query($sql);
    $student = $stmt->fetchAll(PDO::FETCH_CLASS, "Student");
    echo "<pre>";
    var_dump($student);
} catch (PDOException $e) {
    echo $e->getMessage();
}
