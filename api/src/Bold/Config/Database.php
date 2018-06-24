<?php

namespace Bold\Config;

class Database {

    private $credentials;

    public function __construct()
    {
        $this->credentials = [
            'dbname' => 'bold-db',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'
        ];
    }

    public function getCredentials() : array
    {
        return $this->credentials;
    }

}