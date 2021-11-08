<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Config{
    public $dsn = 'mysql:host=localhost;dbname=projeto_loja';
    public $username = 'root';
    public $pass = '';
}