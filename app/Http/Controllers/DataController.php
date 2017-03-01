<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Session;

class DataController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('data-title');
        $texts = DB::table('texts')->get();
        $this->data['texts'] = json_decode(json_encode($texts), True);
        
    }

    public function main()
    {
        $this->init();
        
        if(!$this->user->getRight('editPublicTexts'))
        {
            return redirect('/home');
        }
        
        $this->initData();
        return view('data', $this->data);
    }
}

