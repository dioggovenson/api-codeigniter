<?php

namespace App\Controllers;
use App\Models\UserModel;
class Users extends BaseController
{
    
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();
        echo $users;
    }


}
