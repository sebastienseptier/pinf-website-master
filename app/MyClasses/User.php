<?php

namespace App\MyClasses;

use DB;
use App\MyClasses\Job;

class User
{
    protected $rights;
    protected $email;
    protected $name;
    protected $firstname;
    protected $jobId;
    protected $id;
    protected $job;
    protected $mobile;
    
    protected function __construct() {
        
    }
    
    public static function create() {
        $instance = new self();
        $instance->job = new Job('guest');
        return $instance;
    }
    
    public static function createFromEmailHash($email, $hash) {
        $instance = new self();
        $instance->email = $email;
        $instance->id = DB::table('members')->where('email', $email)->value('id');
        $instance->name = DB::table('members')->where('email', $email)->value('name');
        $instance->firstname = DB::table('members')->where('email', $email)->value('firstname');
        $instance->jobId = DB::table('members')->where('email', $email)->value('jobId');
        $instance->mobile = DB::table('members')->where('email', $email)->value('mobile');
        $instance->job = new Job($instance->jobId);
        return $instance;
    }
    
    public static function createFromId($id) {
        $instance = new self();
        $instance->id = $id;
        $instance->email = DB::table('members')->where('id', $id)->value('email');
        $instance->name = DB::table('members')->where('id', $id)->value('name');
        $instance->firstname = DB::table('members')->where('id', $id)->value('firstname');
        $instance->jobId = DB::table('members')->where('id', $id)->value('jobId');
        $instance->mobile = DB::table('members')->where('id', $id)->value('mobile');
        $instance->job = new Job($instance->jobId);
        return $instance;
    } 
    
    public function getRight($id)
    {
        return $this->job->getRight($id);
    }
    
    public function getName() {
        return $this->name;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getMobile() {
        return $this->mobile;
    }
    public function getJobTextId() {
        return $this->job->getTextId();
    }
    public function getJobId() {
        return $this->jobId;
    }
}
