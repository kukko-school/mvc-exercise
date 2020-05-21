<?php

namespace Controller;

class LogoutController extends AbstractBaseController
{
    public function run()
    {
        AuthenticationService::logout();
        header('location:index.php');
    }
}
