<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Schema;

class AdminController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('admin');
        
        $jobs = DB::table('jobs')->get();
        $jobs = json_decode(json_encode($jobs), True);
        foreach($jobs as $key => $job) {
            $jobs[$key]['textId'] = $this->getText($jobs[$key]['textId']);
        }
        $this->data['jobs'] = $jobs;
        $this->data['rights'] = [] ;
        $columns = Schema::getColumnListing('jobs');
        unset($columns[0]);
        foreach($columns as $column) {
            array_push($this->data['rights'], $this->getText('rights-'.$column));
        }
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('admin', $this->data);
    }
}

