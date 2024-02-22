<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function add()
    {
        return view('users/add');
    }
}
