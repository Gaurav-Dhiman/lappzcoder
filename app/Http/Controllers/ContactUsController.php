<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/11/17
 * Time: 2:57 AM
 */

namespace App\Http\Controllers;



use App\Http\Requests;
use Illuminate\Http\Request;

class ContactUsController
{

    public function form(){
        return view('front-end.contact-us');
    }

}