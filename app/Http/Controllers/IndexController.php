<?php

namespace App\Http\Controllers;

use App\Repositories\MessageServiceProvide;
use App\Services\MessageService;
use App\Widgets\MessageWidget;
use App\Widgets\Widget;
use Illuminate\Http\Request;
use App\Message;
use App\Widgets\Widget;

class IndexController extends Controller
{

    protected $messageService;

    private $title = 'Б - Блог';

    public function __construct(/*MessageService $messageService*/)
    {
        //$this->messageService = $messageService;
    }

    public function index(){

        //$message = $this->messageService;
        /*$messages = $this->messageService->getMessageWithUser();
        //foreach ()
        foreach ($messages as $message) {
            $answer = \App\Message::find($message->id)->answer;

        }
        dump($answer);
        //$view = view('greetings', ['name' => 'Victoria']);
        return view('layout/blog')->with(['title'=>$this->title/*, 'messages'=>$messages]);
*/
        $widgets = Widget::;
        return view('layout/blog')->with($widgets);
    }

    public function getPage($page){

        return view('layout/blog')->with(['title'=>$this->title, 'page'=>$page]);

    }


}
