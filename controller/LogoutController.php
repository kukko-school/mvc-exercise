<?php
require_once(__DIR__ . '/AbstractBaseController.php');
require_once(__DIR__ . '/../service/AuthenticationService.php');

class LogoutController extends AbstractBaseController
{
    public function run()
    {
        AuthenticationService::logout();
        header('location:index.php');
    }
}
