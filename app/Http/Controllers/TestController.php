<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MyClasses\Job;

class TestController extends Controller
{
    public function main()
    {
        $this->init();
        $job = new Job('admin');
        //echo '<pre>'; print_r($this); echo '</pre>';
        return "Test";
    }
}
