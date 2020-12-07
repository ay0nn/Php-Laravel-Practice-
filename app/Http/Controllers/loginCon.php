<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class loginCon extends Controller{
    public function index(){
        return view('login.index');
    }
    public function verify(Request $req){
        if($req->email == "m1@gmail.com" &&  $req->password== "1234"){
            return redirect('/home');
        }
        else{
            return redirect('/login');
        }
        
    }
}