<?php

    namespace App\Services;

    use App\Repositories\MessageRepository;
    use App\Repositories\MessageServiceProvide;

    class MessageService
    {

        protected $messageRepository;

        public function __construct(MessageRepository $messageRepository)
        {

            $this->messageRepository = $messageRepository;

        }

        public function getMessageWithUser(){
            /*$numPost = 1;
            $viewMessage = 10;
            return $this->messageRepository->getAll($numPost, $viewMessage)->get();*/
            return $this->messageRepository->getAll()->get();

        }

    }