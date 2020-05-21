<?php

namespace Controller;

class ProfileController extends AbstractBaseController
{
    public function run()
    {
        return $this->view('profile', UserDataService::getDataForUser($_SESSION['user']['id']));
    }
}
