<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected $project_glimpse;
    protected $project_location;
    protected $pressmedia;
    protected $location_images;
    protected $core_team_members;
    protected $latest_news;
    protected $challenges;
    protected $gallery_images;
    
    public function getProjectGlimpse(){
        $this->project_glimpse=\App\ProjectGlimpse::all();
    }
    
    public function getLocationImage(){
       $this->location_images= \App\LocationImage::all();
    }
    
    public function getPressMedia(){
        $this->pressmedia= \App\PressMedia::all();
    }
    
    public function getCoreTeamMembers(){
        $this->core_team_members= \App\BoardMember::where('board_category','core team')->take(3)->get();
    }
    
    public function getLatestNews(){
        $this->latest_news= \App\LatestNews::orderBy('publish_at','DESC')->take(3)->get();
    }
    
    public function getProjectLocation(){
        $this->project_location=\App\ProjectLocation::all();
    }
    
    public function getChallenges(){
        $this->challenges= \App\ProjectChallenge::all();
    }
    
    public function getGalleryImages(){
            $this->gallery_images= \App\GalleryImage::all();
    }
}
