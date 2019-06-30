<?php


namespace App;


class Address
{
    public $street;
    public $city;
    public $state;
    public $postalCode;

    public function __construct()
    {
        $this->street = config('address.personnel.street');
        $this->city = config('address.personnel.city');
        $this->state = config('address.personnel.state');
        $this->postalCode = config('address.personnel.postalCode');
    }


}
