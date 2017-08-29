<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index(){
        return view('sponsor_us.index');
    }
    
    public function create(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:email',
            'contact_no'=>'required',
            'message'=>'required'
        ]);
        $data=array('full_name'=>$request->get('name'),'phone_no'=>$request->get('contact_no'),'email_id'=>$request->get('email'),'message'=>$request->get('message'));
        try{
            \App\Sponsor::create($data);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
}
