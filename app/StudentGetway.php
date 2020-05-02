<?php

class StudentGetway
{

    private $pdo;


    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    function __destruct()
    {
        unset($this->pdo);
    }

    /***
     * SELECT ALL STUDENTS
     */
    function getStudents(Student $students)
    {
    }
    function insertStudent($name, $lastName, $email, $gender, $group, $useResult, $birthYear)
    {
        $sql = ' INSERT INTO students(name, lastName, email, gender, group_, useResult, birthYear) 
            VALUES(
            :name, 
            :lastName, 
            :email, 
            :gender, 
            :group, 
            :useResult, 
            :birthYear)
        ';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":lastName", $lastName);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":gender", $gender);
        $stmt->bindParam(":group", $group);
        $stmt->bindParam(":useResult", $useResult);
        $stmt->bindParam(":birthYear", $birthYear);
        try {
            $res = $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
        return $res;
    }
}
