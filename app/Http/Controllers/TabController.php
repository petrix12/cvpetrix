<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function portafolio(){
        return view('portafolio');
    }
    
    public function servicios(){
        return view('servicios');
    }
    
    public function formacion(){
        return view('formacion');
    }
    
    public function experiencia(){
        return view('experiencia');
    }
    
    public function contactame(){
        return view('contactame');
    }
    
    public function en_construccion(){
        return view('en_construccion');
    }
}
