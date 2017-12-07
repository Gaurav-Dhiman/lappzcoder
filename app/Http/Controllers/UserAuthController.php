<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/11/17
 * Time: 1:00 AM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserAuthController extends Controller
{


    public function login(){
        return view('front-end.login');
    }

    public function register(){
        return view('front-end.register');
    }

    public function sign_up(Request $request)
    {
    	try {
    		$this->validate($request, ['name' => 'required', 'email' => 'required', 'password' => 'required']);

	        $data = $request->except('password');
	        $data['password'] = bcrypt($request->password);
	        $user = User::create($data);
			$user->assignRole(['user']);
	       
	        Session::flash('flash_message', 'Welcome !!');
            Auth::loginUsingId($user->id);
	        return redirect('/home');	
    	}catch(QueryException $e){
    	    $login_link = route('front_login');
            Session::flash('flash_message', "User Already Exists !! Click <a href='$login_link'>here</a> to Login");
            return back()->withInput();
    	}
    	
    }
}