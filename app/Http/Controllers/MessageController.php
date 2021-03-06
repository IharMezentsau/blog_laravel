<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    protected $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function addMessage(Request $request){

        $newMessage = Message::create(array(
            'date' => date("Y/m/d H.i.s"),
            'user_id' => Auth::user()->id,
            'message' => $request->newMessage
        ));

        return redirect()->route('index');

    }
}
