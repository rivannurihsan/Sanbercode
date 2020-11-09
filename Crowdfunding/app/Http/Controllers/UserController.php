<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function user()
    {
        return "Halo Anda ini adalah data anda";
    }
    public function admin()
    {
        return "anda adalah admin !";
    }
}
