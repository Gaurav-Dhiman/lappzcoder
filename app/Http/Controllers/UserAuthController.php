<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/11/17
 * Time: 1:00 AM
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class UserAuthController
{


    public function login(){
        return view('front-end.login');
    }

    public function register(){
        return view('front-end.register');
    }
}