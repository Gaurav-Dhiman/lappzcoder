<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/11/17
 * Time: 12:33 AM
 */

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

class StaticPagesController
{

    public function about_us(){
        return view('front-end.about_us');
    }


    public function privacy_policy(){
        return view('front-end.privacy_policy');
    }

    public function terms_cond(){
        return view('front-end.terms_cond');
    }
}