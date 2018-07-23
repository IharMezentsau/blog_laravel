<?php

    namespace App\Repositories;

    use App\User;

    interface UserInterface {

        function __construct(User $user);

        function getAll();

        function getGender();

        public function updateName($request);

        public function updateFamilyname($request);

        public function updateGender($request);

        public function updateAvatar($link);

        public static function getUrlAvatar($link);

        public function deleteFileAvatar();

        public function issetAvatar();

    }