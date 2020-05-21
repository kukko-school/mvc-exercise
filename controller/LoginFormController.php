<?php

namespace Controller;

class LoginFormController extends AbstractBaseController
{
    public function run()
    {
        return $this->view('loginForm');
    }
}
