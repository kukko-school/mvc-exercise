<?php
require_once(__DIR__ . '/AbstractBaseController.php');

class RegisterFormController extends AbstractBaseController
{
    public function run()
    {
        return $this->view('registerForm');
    }
}
