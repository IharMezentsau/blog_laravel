<?php

    namespace App\Repositories;

    use App\Repositories\MessageInterface as MessageInterface;
    use App\Message;

    class MessageRepository implements MessageInterface
    {

        protected $message;


        function __construct(Message $message)
        {
            $this->message = $message;
        }

        public function getAll()
        {
            return $this->message::select()->orderBy('id', 'DESC');
            //->skip(0)->take(10)
        }

    }