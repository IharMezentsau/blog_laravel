<?php

    namespace App\Repositories;

    use App\Like;

    interface LikeInterface {

        function __construct(Like $like);

        public function insertLike($idMessage);

        public function deleteLike($id);

        public function countLike($id);

        public function likeByUser($id);


    }