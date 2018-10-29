<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function about(){
        $links = [
            "Uno"=>"http://www.google.com",
            "Dos"=>"http://www.facebook.com",
            "Tres"=>"http://www.eluniverso.com",
        ];
        return view('about',['links'=>$links]);
    }
}
