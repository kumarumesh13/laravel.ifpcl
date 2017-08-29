<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectManagementController extends Controller
{
    public function coreTeam(){
        $this->getCoreTeamMembers();
        return view('project_management.core-team',['team_members'=>$this->core_team_members]);
    }
    
    public function managementBoard(){
        return view('project_management.management-board');
    }
    
    public function governingCouncil(){
        return view('project_management.governing-council');
    }
    
    public function getCoreTeamMembers() {
        $this->core_team_members= \App\BoardMember::where('board_category','core team')->get();
    }
}
