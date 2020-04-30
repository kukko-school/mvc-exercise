<?php
require_once(__DIR__ . '/AbstractBaseController.php');
require_once(__DIR__ . '/../service/UserDataService.php');

class ProfileSaveController extends AbstractBaseController
{
    public function run()
    {
        $data = $_POST;
        if (!empty($_FILES)){
            $userId = $_SESSION['user']['id'];
            $profilePicturesDirectory = "images/profile_pictures";
            if (!file_exists(__DIR__ . "/../" . $profilePicturesDirectory)){
                var_dump(mkdir(__DIR__ . "/../" . $profilePicturesDirectory, 0777, true));
            }
            $profilePicturePath = "$profilePicturesDirectory/user_$userId.jpeg";
            move_uploaded_file($_FILES['profile-picture']['tmp_name'], __DIR__ . "/../$profilePicturePath");
            $data['profile-picture'] = $profilePicturePath;
        }
        UserDataService::storeDataForUser($_SESSION['user']['id'], $data);
        header('location:index.php?page=Profile');
    }
}
