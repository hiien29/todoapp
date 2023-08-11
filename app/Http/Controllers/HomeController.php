<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view('login.home');
    }

    public function send() {
        return view('guest.send_mail');
    }
}
