<?php

namespace App\Http\Controllers\Base;

class BaseController extends \App\Http\Controllers\Controller
{
    protected $output = [
        'content' => 'Base controller content',
        'siteName' => 'Dave Leach',
    ];
    protected $view = 'base.base';

    public function __invoke()
    {
        return view($this->view, $this->output);
    }
}
