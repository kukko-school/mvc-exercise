<?php
require_once(__DIR__ . '/AbstractBaseController.php');

class WelcomeController extends AbstractBaseController
{
    public function run()
    {
        return $this->view('welcome', $_SESSION['user']);
    }
}
