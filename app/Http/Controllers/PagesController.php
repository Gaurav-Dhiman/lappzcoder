<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pages;

class PagesController extends Controller
{
    public function__construct(){

    }

	/**
	 * Default Method
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Render the view and pass required data
        return view('pages.index', $data);
    }


    /**
	* Method for about us page.
     * @return \Illuminate\Http\Response
    */
    public function aboutUs(){

    }

    /**
	* Method for contact us page.
     * @return \Illuminate\Http\Response
    */
    public function contactUs(){
    	
    }


    /**
	* Method for send a query page.
     * @return \Illuminate\Http\Response
    */
    public function sendAQuery(){
    	
    }


    /**
	* Method for our team page.
     * @return \Illuminate\Http\Response
    */
    public function ourTeam(){
    	
    }


    /**
	* Method for Privacy Policy page.
     * @return \Illuminate\Http\Response
    */
    public function privacyPolicy(){
    	
    }


    /**
	* Method for terms and conditions page.
     * @return \Illuminate\Http\Response
    */
    public function termsAndConditions(){
    	
    }

	/**
	 * Default Method
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Set columns for fetching
        $columns = ['pages.id',
                    'pages.code',
                    'pages.is_active',
                   ];

        //Get all testimonials details
        $data['pages'] = Pages::paginate(10,$columns);

        //Render the view and pass required data
        return view('pages.index', $data);
    }


}
