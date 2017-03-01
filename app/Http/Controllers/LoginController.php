<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MyClasses\User;
use Session;
use DB;

class LoginController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = 'Home';
    }

    public function main()
    {
        $this->init();
        $this->initData();
        if(isset($_POST['email'])
            && isset($_POST['password'])
            )
        {
            return $this->checkAuth($_POST['email'], $_POST['password']);
        }
        return view('login', $this->data);
    }
    
    public function checkAuth($email, $password)
    {
        $hash = DB::table('members')->where('email', $email)->value('hash');
        if (password_verify ($password , $hash ))
        {
            Session::put('user', User::createFromEmailHash($email , $hash));
            return redirect('private-home');
        }
    }
}
