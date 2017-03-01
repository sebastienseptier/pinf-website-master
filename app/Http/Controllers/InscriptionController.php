<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class InscriptionController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = 'Inscription';
    }

    public function main()
    {   
        $this->init();
        if(!$this->user->getRight('manageMembers'))
        {
            return redirect('/home');
        }
        
        $go = true;
        $connected = true;
        $this->initData();
        if($go &&
            !(isset($_POST['email'])
                && isset($_POST['password'])
                && isset($_POST['password2'])
                && isset($_POST['name'])
                && isset($_POST['firstname'])))
        {
            $go = false;
        }
        if($go
            && !(strlen($_POST['email'])
            && strlen($_POST['password'])
            && strlen($_POST['password2']) 
            && strlen($_POST['name']) 
            && strlen($_POST['firstname']) ))
        {
            $go = false;
            echo 'Error : il faut remplir tous les champs !';
        }
        if($go && $_POST['password']!==$_POST['password2'])
        {
            $go = false;
            echo 'Error : mots de passe différents';
        }
        if($go)
        {
            $this->addMember($_POST['email'], $_POST['password'], $_POST['name'], $_POST['firstname'], 'member');
        }
        if($connected)
            return view('inscription', $this->data);
        else
            return "not connected";
    }
    
    private function addMember($email, $password, $name, $firstname, $jobId)
    {
        $hash = password_hash($password,  PASSWORD_DEFAULT);
        echo(DB::table('members')->insert(
            ['email' => $email, 'hash' => $hash, 'name' => $name, 'firstname' => $firstname, 'jobId' => $jobId]
        ));
        echo "Inscription ok :)";
    }
    
    
}
