<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Mansory!';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title'=>'Services',
            'services'=> ['Web Design','Programming','Operating Systems','Embedded Systems','Web Development','Full-Stack Development','Front-End Development','Back-End Development','Client Server Applications']
        );
        return view('pages.services')->with($data);
    }
}
