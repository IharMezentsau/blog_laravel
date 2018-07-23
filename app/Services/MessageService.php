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
            return $this->messageRepository->getAll()->paginate(10);
            //get();
        }

    }