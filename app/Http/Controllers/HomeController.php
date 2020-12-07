<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
     /*  $user = ['id'=>123, 'name'=> 'Ayon'];
       return view('home.index', $user );*/

       /*
        return view('home.index')-> with('id','17-35111-2')
        ->with('name','Ayon');*/

        return view('home.index')
        ->withid('17-35111-2')
        ->withname('Ayon');
     
    }

    public function create(){
        return view('home.create');

    }
}
