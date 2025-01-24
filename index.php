<?php

class Student
{
    public $name;
    public $age;

    private $password = "passwosasard123";

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function get_name()
    {
        return "Hello " . $this->name . " and your age is " . $this->age;
    }
    function set_password($password)
    {
        $this->password = $password;
    }
    function get_password()
    {
        return $this->password;
    }
}

class Trainer extends Student{
    public function getTrainername(){
        return  $this->name;
    }
}

$trainer1 = new Trainer("mwalimu kenya", age: 45);
// echo $trainer1->getTrainername();
// echo $trainer1->password;
// objects
$student2 = new Student("derrick maina", 25);
echo $student2->get_password();
// echo $student2->set_password("newpassword");
// echo $student2->get_password();

// class Trainer
// {
//     public $name;
//     public $age;


//     function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function get_trainername()
//     {
//         return $this->name;
//     }
// }
// $trainer1 = new Trainer("mwalimu juniro", 45);
// echo $trainer1->get_trainername();