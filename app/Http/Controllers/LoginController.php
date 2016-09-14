<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
class LoginController extends Controller
{
    public function getLogin (){
        if (!Auth::check()) {
            return view('user.login');
        }
    	else return redirect('home');
    }
    public function postLogin (LoginRequest $request){
    	$user = ['name' => $request->username, 'password' =>$request->password, 'level' => 3];
    	if(Auth::attempt($user)){
    		return redirect('home');
    	}
    	else {
    		return redirect()->back();
    	}
    }
    public function getLogout (){
        Auth::logout();
        return redirect()->route('getLogin');
    }
}