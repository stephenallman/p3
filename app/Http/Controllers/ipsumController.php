<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Controllers\Controller;




class ipsumController extends Controller
{
 
    public function getIndex(){

            return 'List all the ipsum';
    }

    public function getShow(){

            return view('ipsum.show');

}

    //ipsum/create
    public function getCreate(){

         return view('ipsum.create');
    }

    public function postCreate(Request $request){

          $number = $_POST['number'];

        //instantiate a faker generator
        $faker = Factory::create();

          for ($i=0; $i < $number; $i++) { 
          $text = $faker->paragraph;
        
            return view('ipsum.show', compact('text', $text));
      }

      
    }
   


    /**
     * Display the specified resource.
     *
    */
}
