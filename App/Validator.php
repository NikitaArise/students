<?php
namespace App;
class Validator
{
    private function __construct()
    {
    }

    static function validForm($name, $lastName, $email, $gender, $group, $useResult, $birthYear)
    {

        if (empty($name) or empty($lastName) or empty($email) or empty($gender) or empty($group) or empty($useResult) or empty($birthYear)) {
            throw new \Exception("fill in all form fields");
            return;
        }
        if (mb_strlen($name) > 120) {
            throw new \Exception("Too match symbols for your name");
            return;
        }
        if (mb_strlen($lastName) > 120) {
            throw new \Exception("Too match symbols for your last name");
            return;
        }
        if (!(preg_match("/.+@.+\..+/i", $email))) {
            throw new \Exception("Incorrent email adress");
            return;
        }
        if ($gender != 'woman' and $gender != 'man') {
            throw new \Exception("Incorect data about gender");
            return;
        }
        //$useResult = (int) $useResult;
        if($useResult > 300 and $useResult < 0){
            throw new \Exception("Enter the correct about points");
        }
        //$birthYear = (int) $birthYear;
        if($birthYear > 2020 and $birthYear < 1920){
            throw new \Exception("Enter the correct about your age");
            return;
        }
    }

    static function validStudent($email){
        
    }
}
