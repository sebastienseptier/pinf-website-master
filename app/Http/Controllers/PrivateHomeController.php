<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

class PrivateHomeController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('private-home-title');
    }

    public function main()
    {
        $this->init();
        
        if(!$this->user->getRight('browseBackOffice'))
        {
            return redirect('/home');
        }
        
        $this->initData();
        
        return view('private-home', $this->data);
    }
    
    
}
