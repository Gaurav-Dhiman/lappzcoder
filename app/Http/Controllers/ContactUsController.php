<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/11/17
 * Time: 2:57 AM
 */

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Mail\SubmitQuery;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;
use Session;

class ContactUsController extends Controller
{

    public function form(){
        return view('front-end.contact-us');
    }

    public function submit(Request $request){
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone_no' => 'required|digits:10',
        //     'msg' => 'required',
        // ]);

        $messages = [
            'name.required' => 'Please provide your Name.',
            'email.required' => 'Please provide your Email Address.',
            'email.email' => 'Invalid Email Address.',
            'phone_no.required' => 'Please provide your Phone Number.',
            'phone_no.digits' => 'Phone Number must be of 10 digits.',
            'msg.required' => 'Please enter you message.',
        ];


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required|digits:10',
            'msg' => 'required',
        ],  $messages );
        if($validator->fails()){
            return redirect(route('front_contact_us'))->withErrors($validator)->withInput();
        }
        $site_admin_email = env('SITE_ADMIN_EMAIL');
        if ($site_admin_email != '')
            Mail::to($site_admin_email)->send(new SubmitQuery($request->input()));
        Session::flash('flash_message', 'Your query has been submitted successfully and our team will reply you soon..!!');
        return redirect(route('front_contact_us'));
    }

}