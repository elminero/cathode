<?php


namespace App\Services;


class Twitter
{

    public $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }


}
