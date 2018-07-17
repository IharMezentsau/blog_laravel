<?php

    namespace App\Repositories;

    interface UserInterface {


        public function getAll();


        public function find($id);


        public function delete($id);

    }