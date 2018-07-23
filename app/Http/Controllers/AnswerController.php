<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AnswerController extends Controller
{
    protected $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function addAnswer(Request $request){

        $newMessage = Answer::create(array(
            'date' => date("Y/m/d H.i.s"),
            'user_id' => Auth::user()->id,
            'message_id' => $request->message_id,
            'answer' => $request->newAnswer

        ));

        return redirect()->route('index');

    }
}
