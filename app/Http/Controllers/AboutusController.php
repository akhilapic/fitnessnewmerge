<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $data['active']="aboutus";
     return view('/aboutus',$data);
    }
}
