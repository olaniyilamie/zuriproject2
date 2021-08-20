<?php

namespace App\Http\Controllers;

// use App\Feedback as AppFeedback;
use Illuminate\Http\Request;
use App\Feedbacks;
  

class TakeMessage extends Controller
{
    
    function loadpage(Request $req){
    	return view('stage2project');
    }
    
    function contactMessages(Request $req){
       
    
        $msg= new Feedbacks;
        $msg->name=$req->name;
        $msg->email=$req->email;
        $msg->number=$req->number;
        $msg->subject=$req->subject;
        $msg->detail=$req->detail;
        $msg->save();
        return redirect('zuristage2olamiee') ;
         
    }

    function displayMessage(){
        $getback= Feedbacks::all();
        return view('allmessages',['getback'=>$getback])
        ;
    }
}
