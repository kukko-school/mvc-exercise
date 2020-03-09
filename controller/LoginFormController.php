<?php
require_once(__DIR__ . '/AbstractBaseController.php');

class LoginFormController extends AbstractBaseController
{
    public function run()
    {
        return $this->view('loginForm');
    }
}
