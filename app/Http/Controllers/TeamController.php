<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\MyClasses\User;

class TeamController extends Controller
{
    private $pageId;

    protected function initData()
    {
        parent::initData();
	//Titles
	$this->data['h'][3][1] = 'DEFAULT'; // "Notre equipe"
	$this->data['h'][3][2] = 'DEFAULT'; // name of member
	$this->data['h'][3][3] = 'DEFAULT'; // name of category (ex: "Presidence")
	

	//Paragraphes
	$this->data['p'][1] = 'DEFAULT'; // "Voici notre equipe toujours prete a vous aider pour"....

	//Span
	$this->data['span'][1] = 'DEFAULT'; //job of member

	//img
        $this->data['img']['profil'] = array(
                    'src' => $this->BASE_URL.'/ressources/profil.jpeg',
                    'alt' => 'DEFAULT'); 

        $this->data['title'] = 'Home';
        $this->data['members'] = [];
        
        $members = DB::table('members')->select('id')->distinct()->get();
        $members = json_decode(json_encode($members), True);
        foreach($members as $member)
        {
            $user = User::createFromId($member['id']);
            $m = [];
            $m['name'] = $user->getName();
            $m['firstname'] = $user->getFirstname();
            $m['jobId'] = $user->getJobId();
            $m['jobText'] = $this->getText($user->getJobTextId());
            array_push($this->data['members'], $m);
        }
        echo '<pre>'; print_r($this->data['members']); echo '</pre>';
        
        
        
    }

    public function main()
    {
        $this->init();
        $this->initData();
        return view('team', $this->data);
    }
    
    
}
