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

        function getAll()
        {
            return $this->message::select('id', 'message', 'date')->orderBy('id', 'DESC')->skip(0)->take(10);
        }

        /*function orderBy($query)
        {
            return $query->orderBy('t_message.id', 'DESC');
        }

        function skip($query, $numPost)
        {
            return $query->skip($numPost);
        }

        function take($query, $viewMessage)
        {
            return $query->take($viewMessage);
        }
*/
    }