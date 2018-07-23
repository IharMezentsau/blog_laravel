<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Repositories\UserServiceProvide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserService
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getMessageWithUser(){
        return $this->userRepository->getAll();
    }

    public function updateName($request){
        if (!empty($request->name)) {
            $this->userRepository->updateName($request);
        }
    }

    public function updateFamilyname($request){
        if (!empty($request->familyname)) {
            $this->userRepository->updatefamilyname($request);
        }
    }

    public function updateGender($request){
        $this->userRepository->updateGender($request);
    }

    public function uploadAvatar($request){

        $path = $request->file('avatar')->store('public/avatars');

        return $path;

    }

    public function updateAvatar($request)
    {

        if (!empty($request->file())) {

            $this->userRepository->deleteFileAvatar();

            $link = $this->uploadAvatar($request);

            $this->userRepository->updateAvatar($link);

        }
    }

    public function deleteAvatar(){

        $this->userRepository->deleteFileAvatar();

        $gender = $this->userRepository->getGender();

        $this->userRepository->deleteFileAvatar();

        switch ($gender){
            case 'M':
                $link = "img/male.jpg";
                break;
            case 'F':
                $link = "img/female.jpg";
                break;
            case 'U':
                $link = "img/unknow.jpg";
                break;
        }

        $this->userRepository->updateAvatar($link);

    }

    public function getButtonEditAvatar(){

        if ($this->userRepository->issetAvatar() == true){
            return view('layout.buttonDeleteAvatar');
        }
        else{
            return view('layout.buttonAvatar');
        }

    }

    public function viewSelectGender(){

        $views = array();

        $options = array( 'U'=>'Скрыт', 'M'=>'Мужской', 'F'=>'Женский');

        foreach($options as $value=>$name) {

            if($value == Auth::user()->sex) {
                $view = view('layout.optionGenderSelect')->with(['value' => $value, 'name' => $name]);
            }
            else {
                $view = view('layout.optionGender')->with(['value' => $value, 'name' => $name]);
            };

            $views[] = $view;

        }

        return $views;

    }

}