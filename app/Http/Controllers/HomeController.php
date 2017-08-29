<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectGlimpse;

class HomeController extends Controller
{   
    public function index(){
        $this->getProjectglimpse();
        $this->getProjectLocation();
        $this->getPressMedia();
        $this->getLocationImage();
        $this->getCoreTeamMembers();
        $this->getLatestNews();
        return view('home.index',['project_glimpse'=>$this->project_glimpse,'project_location'=>$this->project_location,'pressmedia'=>$this->pressmedia,'location_images'=>$this->location_images,'team_members'=>$this->core_team_members,'latest_news'=>$this->latest_news]);
    }
    
}
