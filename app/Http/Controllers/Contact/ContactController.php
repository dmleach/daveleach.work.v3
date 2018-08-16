<?php

namespace App\Http\Controllers\Contact;

class ContactController extends \App\Http\Controllers\Base\BaseController
{
    public function __construct()
    {
        $this->output['content'] = 'Contact controller content';
        $this->view = 'contact.contact';
    }
}
