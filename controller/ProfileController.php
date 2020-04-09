<?php
require_once(__DIR__ . '/AbstractBaseController.php');
require_once(__DIR__ . '/../service/UserDataService.php');

class ProfileController extends AbstractBaseController
{
    public function run()
    {
        return $this->view('profile', UserDataService::getDataForUser($_SESSION['user']['id']));
    }
}
