<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{

    protected $request;

    public function __construct(Request $request){

        $this->request = $request;

    }



    public function addMessage(){

        //return print_r($this->request->all());
        //return view('/');
        return redirect()->route('index');

    }
}
