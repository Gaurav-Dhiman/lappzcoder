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
use Illuminate\Http\Request;

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

	        return redirect('/home');	
    	}catch(Illuminate\Database\QueryException $e){
    		dd($e);
    	}
    	
    }
}