<?php

namespace App\Http\Controllers\Projects;

class ProjectsController extends \App\Http\Controllers\Base\BaseController
{
    public function __construct()
    {
        $this->output['content'] = 'Projects controller content';
        $this->view = 'projects.projects';
    }
}
