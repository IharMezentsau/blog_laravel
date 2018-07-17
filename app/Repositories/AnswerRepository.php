<?php

    namespace App\Repositories;

    use App\Repositories\AnswerInterface as AnswerInterface;
    use App\Answer;

    class AnswerRepository implements AnswerInterface
    {

        public $answer;

        function __construct(Answer $answer)
        {
            $this->answer = $answer;
        }

        public function getAll(){

        }

        public function getCountAnswerByMessageId($id){

        }

    }