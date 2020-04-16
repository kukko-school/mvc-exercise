<?php
require_once(__DIR__ . '/AbstractBaseController.php');
require_once(__DIR__ . '/../service/UserDataService.php');

class ProfileSaveController extends AbstractBaseController
{
    public function run()
    {
        UserDataService::storeDataForUser($_SESSION['user']['id'], $_POST);
        header('location:index.php?page=Profile');
    }
}
