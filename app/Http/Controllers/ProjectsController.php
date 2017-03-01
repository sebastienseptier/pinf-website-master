<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
        $this->data['img']['profil'] = array(
            'src' => $this->BASE_URL.'/ressources/profil.jpeg',
            'alt' => 'DEFAULT');
        $this->data['title'] = 'Home';
        $projects = \DB::table('project')->orderBy('project.date','DESC')->get();
        if(isset($projects))
        {
            for ($i=0 ; $i < count($projects) ;$i++) {
                if($projects[$i]->visible == 1)
                {
                    $this->data['projects'][$i]['title'] = $this->getText("project-".($i+1)."-title");
                    $this->data['projects'][$i]['description'] = $this->getText("project-".($i+1)."-description");
                    $this->data['projects'][$i]['thumbnail'] = $projects[$i]->thumbnail;
                }
            }
        }
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('projects', $this->data);
    }
    
    
}
