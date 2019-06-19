<?php


namespace App;





class Employee
{
    public $age;
    public $position;
    public $gender;

    public function __construct(Example $example)
    {
        $this->age = $example->age;
        $this->position = $example->position;
        $this->gender = $example->gender;
    }

}
