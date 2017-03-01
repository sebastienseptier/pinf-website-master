<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AddJobController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('add-job');
    }

    public function main()
    {
        $this->init();
        if(!$this->user->getRight('manageMembers'))
        {
            return redirect('/home');
        }
        $this->initData();
        return "Success ! ";
        //return view('default', $this->data);
    }
}

