<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class UserController extends Controller
{
    public function test() //cek donag
    {
        return "sukses";
    }

    public function withoutemail()
    {
        return "email sudah verifikasi masuk sini";
    }

    public function withoutadmin()
    {
        return "email dan admin verifikasi masuk sini";
    }
}
