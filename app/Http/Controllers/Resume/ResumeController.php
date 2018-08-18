<?php

namespace App\Http\Controllers\Resume;

class ResumeController extends \App\Http\Controllers\Base\BaseController
{
    public function __construct()
    {
        $this->output['content'] = 'Resume controller content';
        $this->view = 'resume.resume';
    }
}
