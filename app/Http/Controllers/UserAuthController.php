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
use App\Cl;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserAuthController extends Controller
{


    public function login(Request $request){
        return view('front-end.login', ['params'=>$request->query()]);
    }

    public function register(){
        $classOptions = Cl::all()->pluck('title', 'id');
        return view('front-end.register', compact('classOptions'));
    }

    public function sign_up(Request $request)
    {
    	try {
    		$this->validate($request, [
    		    'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required|confirmed',
                'phone_no' => 'required|digits:10',
                'class' => 'required',
            ]);

	        $data = $request->except(['password', 'password_confirmation']);
	        $data['password'] = bcrypt($request->password);
	        $user = User::create($data);
			$user->assignRole(['user']);
	        $this->send_register_email($user);
	        Session::flash('flash_message', 'Welcome !!');
            Auth::loginUsingId($user->id);
	        return redirect('/home');	
    	}catch(QueryException $e){
    	    $login_link = route('front_login');
            Session::flash('flash_message', "User Already Exists !! Click <a href='$login_link'>here</a> to Login");
            return back()->withInput();
    	}
    	
    }

    private function send_register_email($user){
        // TODO: Send email TO user
        return True;
    }
}