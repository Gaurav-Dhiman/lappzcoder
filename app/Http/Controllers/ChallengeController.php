<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/11/17
 * Time: 3:18 AM
 */

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

class ChallengeController
{


    public function course(){
        return view('front-end.course');
    }


    public function course_detail(){
        return view('front-end.course-detail');
    }

    public function videos()
    {
        return view('front-end.videos');
    }
}