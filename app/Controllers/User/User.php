<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        return view ('user/home');
    }
}