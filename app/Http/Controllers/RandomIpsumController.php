<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class RandomIpsumController extends Controller
{
    //


    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

  
    /**
     * Responds to requests to GET 
    */
    public function getShow() {
        

        return view('ipsum.show');
		return view('address.show');
		return view('image.show');
		return view('contact.show');
	}
	 public function getCreate() {
        

        return view('ipsum.create');
		return view('address.create');
		return view('image.create');
		return view('contact.create');
	}
	
	    public function show($nb)
    {
       
        return view('ipsum.show')
          
    }
	
	
	
 
    }



