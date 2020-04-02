<?php
require_once(__DIR__ . '/AbstractBaseController.php');

class WelcomeController extends AbstractBaseController
{
    public function run()
    {
        return 'Üdv ' . $_SESSION['user']['email'] . '!';
    }
}
