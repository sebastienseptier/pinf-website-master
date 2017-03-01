<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('default');
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('default', $this->data);
    }
}

