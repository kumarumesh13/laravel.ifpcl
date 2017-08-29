<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function project(){
       
        $this->getProjectGlimpse();
        $this->getProjectLocation();
        $this->getLocationImage();
        $this->getCoreTeamMembers();
        $this->getLatestNews();
        $this->getGalleryImages();
        
        return view('about.project',['project_glimpse'=>$this->project_glimpse,'project_location'=>$this->project_location,'gallery_images'=>$this->gallery_images,'location_images'=>$this->location_images,'team_members'=>$this->core_team_members,'latest_news'=>$this->latest_news]);
    }
            
    
    public function location(){
        $this->getProjectLocation();
        $this->getLocationImage();
        $this->getCoreTeamMembers();
        $this->getLatestNews();
        return view('about.locations',['project_location'=>$this->project_location,'location_images'=>$this->location_images,'team_members'=>$this->core_team_members,'latest_news'=>$this->latest_news]);
    }
    
}
