<?php

namespace App\Http\Controllers;

class HomeController extends App\Http\Controllers\Controller
{
    public function __invoke()
    {
        echo "Hello, world!";
    }
}
