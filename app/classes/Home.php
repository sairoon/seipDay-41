<?php


namespace App\classes;


class Home
{
    public function index ()
    {
        header('location: route.php?page=login');
    }
}