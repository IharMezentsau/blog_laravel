<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class IndexController extends Controller
{

    private $title = 'Б - Блог';

    public function index(){

        $messages = Message::join('t_user', 't_message.user_id', '=', 't_user.id')
            ->select('t_message.id AS id', 't_message.message AS message', 't_user.name AS name',
                't_user.familyname AS familyname', 't_message.date AS date', 't_user.avatar AS avatar')
            ->orderBy('t_message.id', 'DESC')->skip(3)->take(10)->get();

        //dump($messages);

        return view('layout/blog')->with(['title'=>$this->title, 'messages'=>$messages]);

    }

    public function getPage($page){

        return view('layout/blog')->with(['title'=>$this->title, 'page'=>$page]);

    }

    public function getMessage(){

       // return Message::all();;

    }

}
