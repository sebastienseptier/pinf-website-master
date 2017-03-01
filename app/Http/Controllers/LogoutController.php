<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

class LogoutController extends Controller
{
    public function main()
    {
        $this->init();
        Session::forget('user');
        return redirect('/home');
    }
}

