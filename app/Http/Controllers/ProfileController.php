<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    protected $title = 'Б - Профиль';

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function profile(){

        $gender = array( 'U'=>'Скрыт', 'M'=>'Мужской', 'F'=>'Женский');

        $user = Auth::user();

        $url = UserRepository::getUrlAvatar($user->avatar);

        $viewProfileMenu = view('layout.profileMenu')->with(['user' => $user, 'url' => $url]);

        return view('layout/viewProfile')->with(['title' => $this->title, 'user' => $user,
            'viewProfileMenu' => $viewProfileMenu, 'url' => $url, 'gender' => $gender[$user->sex]]);

    }

    public function edit(){

        $user = Auth::user();

        $url = UserRepository::getUrlAvatar($user->avatar);

        $buttonDeleteAvatar = $this->userService->getButtonEditAvatar();

        $viewSelectOptions = $this->userService->viewSelectGender();

        $viewProfileMenu = view('layout.profileMenu')->with(['user' => $user, 'url' => $url]);

        return view('layout/editProfile')->with(['title' => $this->title, 'user' => $user,
            'viewProfileMenu' => $viewProfileMenu, 'url' => $url, 'deleteAvatar' => $buttonDeleteAvatar,
            'selectOptions' => $viewSelectOptions]);

    }

    public function update(Request $request){

        $this->userService->updateName($request);
        $this->userService->updateFamilyname($request);
        $this->userService->updateGender($request);
        $this->userService->updateAvatar($request);

        return redirect('profile');

    }

    public function delAva(Request $request){

        $this->userService->deleteAvatar($request);
        return redirect('profile');

    }

}
