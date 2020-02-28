<?php
require_once(__DIR__ . '/ControllerInterface.php');

class LoginFormController implements ControllerInterface
{
    public function run()
    {
        return file_get_contents(__DIR__ . '/../view/loginForm.html');
    }
}
