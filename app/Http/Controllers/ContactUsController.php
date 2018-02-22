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
use Illuminate\Support\Facades\Mail;
use Session;

class ContactUsController extends Controller
{

    public function form(){
        return view('front-end.contact-us');
    }

    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required|digits:10',
            'msg' => 'required',
        ]);
        $site_admin_email = env('SITE_ADMIN_EMAIL');
        if ($site_admin_email != '')
            Mail::to($site_admin_email)->send(new SubmitQuery($request->input()));
        Session::flash('flash_message', 'Your query has been submitted. You will receive a reply from admin soon !!');
        return redirect(route('front_contact_us'));
    }

}