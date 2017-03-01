<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    protected function initData()
    {
        parent::initData();
        $this->data['title'] = $this->getText('default');
    }

    public function main($id)
    {
        $this->init();
        $this->initData();
        $project = \DB::table('project')->where('id', $id)->first();
        if(isset($project))
        {
            $this->data['project']['title'] = $this->getText('project-'.$id.'-title');
            $this->data['project']['description'] = $this->getText("project-".$id."-description");
            $this->data['project']['thumbnail'] = $project->thumbnail;
            $this->data['project']['date'] = $project->date;
            $pictures = \DB::table('project_picture')->where('projectId', $id)->get();
            if(isset($pictures))
            {
                for ($i=0 ; $i < count($pictures) ; $i++) {
                    $this->data['project']['picture'][$i] = $pictures[$i]->picturePath;
                }
            }
            return view('project', $this->data);
        }
        else
        {
            //Projet n'existe pas
        }
    }

}