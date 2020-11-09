<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{
    // public function __construct(){
    //     $this->middleware('dateMiddleware');
    // }
    public function test(){
        return 'berhasil masuk';
    }

    public function test1(){
        return 'Berhasil masuk ke test 1';
    }

    public function admin(){
        return 'Admin Berhasil Masuk';
    }
}
