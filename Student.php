<?php

class Student{

private $name;
public $surname;
public $age;
public $gender;

// function __construct(){
//     $this->name = "Petras";
//     $this->surname = "Arlauskas";
// }

// function __construct($name, $surname, $age, $gender){
//     $this->name = $name;
//     $this->surname = $surname;
//     $this->age = $age;
//     $this->gender = $gender;
// }

function __construct($name = null, $surname = null, $age = null, $gender = null){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->gender = $gender;
}

public function getName()
{
    return $this->name;
}

public function setName($name)
{
    $this->name = $name;
}

public function introduction()
{
    echo "Sveiki aš esu ".$this->name . " ".$this->surname. ".";
}
}








?>