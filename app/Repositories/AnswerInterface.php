<?php

    namespace App\Repositories;

    interface AnswerInterface {

        public function getAll();

        public function getCountAnswerByMessageId($id);

    }