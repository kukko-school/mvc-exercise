<?php

namespace Controller;

class RegisterFormController extends AbstractBaseController
{
    public function run()
    {
        return $this->view('registerForm');
    }
}
