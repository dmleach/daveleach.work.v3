<?php

namespace App\Http\Controllers\Home;

class HomeController extends \App\Http\Controllers\Base\BaseController
{
    public function __construct()
    {
        $this->output['content'] = 'Home controller content';
        $this->view = 'home.home';
    }
}
