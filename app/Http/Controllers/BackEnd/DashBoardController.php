<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
     
     function __construct() {
        
     }

    

    public function index()
    {
        $template = "BackEnd.Components.home.index"; 
        return view("BackEnd.layout", compact('template'));  
    }
}
