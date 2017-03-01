<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MyClasses\User;

class ProfilController extends Controller
{
    protected function initDataUser($user)
    {
        $this->data['title'] = $user->getFirstname() . " " . $user->getName();
        $this->data['user']['firstname'] = $user->getFirstname();
        $this->data['user']['name'] = $user->getName();
        $this->data['user']['job'] = $this->getText($user->getJobTextId());
        $this->data['user']['email'] = $user->getEmail();
        $this->data['user']['mobile'] = $user->getMobile();
        echo '<pre>'; print_r($this->data['user']); echo '</pre>';
    }

    public function main($id)
    {
        $this->init();
        $this->initData();
        $user = User::createFromId($id);
        
        
        $this->initDataUser($user);
        return view('profil', $this->data);
    }
}

