<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests;
use App\User;
use App\Http\Requests\UserAddRequest;
class UserController extends Controller
{
    public function getUserAdd()
    {
    	return view('user.signup');
    }
    public function postUserAdd(UserAddRequest $request)
    {
    	$user = new User;
    	$user->name = $request->username;
    	$user->password = bcrypt($request->password);
    	$user->bankname = $request->bankname;
    	$user->level = $request->level;
    	$user->fullname = $request->fullname;
    	$user->email = $request->email;
    	$user->phone = $request->phone;
    	$user->address = $request->address;
    	$user->save();
    	return redirect('home')->with('thêm thành công');
    }
    public function getUserList()
    {
    	$data = User::select('id','name','level')->get()->toArray();
    	return view('User.list',['data' => $data]);
    }
    public function profile()
    {
    	return view('user.profile');
    }
    public function changepass()
    {
    	return view('user.changepass');
    }
    public function forgotpassword()
    {
    	return view('user.quen-mat-khau');
    }

}
