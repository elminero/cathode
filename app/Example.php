<?php


namespace App;

use App\Employee;

class Example
{
    public $age;
    public $position;
    public $gender;

    public function __construct()
    {
        $this->age = 32;
        $this->position = 'secretary';
        $this->gender = 'female';
    }

}
