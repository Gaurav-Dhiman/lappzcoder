<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/11/17
 * Time: 3:18 AM
 */

namespace App\Http\Controllers;


use App\Cl;
use App\Competetive_exam;
use App\Http\Requests;
use Illuminate\Http\Request;

class SchoolingController
{


    public function classes(){
        $classes = Cl::all();
        return view('front-end.classes', compact('classes'));
    }


    public function subjects($classTitle){
        $subjects = Cl::where('title', $classTitle)->firstOrFail()->subjects;
        return view('front-end.subjects', compact('subjects', 'classTitle'));
    }

    public function chapters($classTitle, $subjectTitle){
        $chapters = Cl::where('title', $classTitle)->firstOrFail()->subjects()->where('title', $subjectTitle)->firstOrFail()->chapters;
        return view('front-end.chapters', compact('chapters', 'classTitle', 'subjectTitle'));
    }

    public function exams(){
        $exams = Competetive_exam::all();
        return view('front-end.exams', compact('exams'));
    }
}