<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return UserService::cekVerifiedAllUsers();
    }
}
