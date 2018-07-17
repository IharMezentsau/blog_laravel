<?php
namespace App\Widgets;

use App\Services\MessageService;
use App\User;
use App\Widgets\Contract\ContractWidget;
use App\Message;
use Illuminate\Support\Facades\App;

class MessageWidget implements ContractWidget
{
    public function test(){

    }

    public function execute(){
        $message = Message::find(1);
        return view('Widgets::message', [
            'message' => $message
        ]);
    }
}