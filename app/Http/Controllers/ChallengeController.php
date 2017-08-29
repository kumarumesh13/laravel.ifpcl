<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index(){
        $this->getChallenges();
        $this->getLatestNews();
        return view('challenges.index',['challenges'=>$this->challenges,'latest_news'=>$this->latest_news]);
    }
}
