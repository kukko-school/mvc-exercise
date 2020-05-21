<?php

namespace Controller;

class WelcomeController extends AbstractBaseController
{
    public function run()
    {
        return $this->view('welcome', $_SESSION['user']);
    }
}
