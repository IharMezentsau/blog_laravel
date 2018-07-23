<?php

namespace App\Http\Controllers;

use App\Like;
use App\Repositories\LikeRepository;
use App\Repositories\MessageServiceProvide;
use App\Repositories\UserRepository;
use App\Services\LikeService;
use App\Services\MessageService;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    protected $messageService;

    private $title = 'Б - Блог';

    private $user;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function index(){

        $messages = $this->messageService->getMessageWithUser();

        $views = array();

        $this->user = Auth::user();

        $users = User::all();

        foreach ($messages as $message){

            $answers = \App\Message::find($message->id)->answer;

            $viewAnswers = array();

            foreach ($answers as $answer){

                $user = $users->find($answer->user_id);

                $url = UserRepository::getUrlAvatar($user->avatar);

                if ($this->user != NULL) {
                    if ($this->user->id == $answer->user_id) {
                        $viewAnswer = view('layout/answerRight')->with(['answer' => $answer, 'user' => $this->user, 'url' => $url]);
                    } else {
                        $viewAnswer = view('layout/answerLeft')->with(['answer' => $answer, 'user' => $user, 'url' => $url]);
                    };
                }
                else{
                    $viewAnswer = view('layout/answerLeft')->with(['answer' => $answer, 'user' => $user, 'url' => $url]);
                }

                $viewAnswers[] = $viewAnswer;

            };

            $viewAns = view('layout/answer')->with(['message' => $message, 'viewAnswers' => $viewAnswers]);

            $user = $users->find($message->user_id);

            $url = UserRepository::getUrlAvatar($user->avatar);

            $likes = \App\Message::find($message->id)->like;

            $countLikes = $likes->count();

            if ($this->user != NULL) {
                $likeByUser = LikeRepository::countLikeByUser($message->id);
            }
            else{
                $likeByUser = NULL;
            }

            $countAnswer = $answers->count();

            $view = view('layout/message')->with(['message' => $message, 'viewAns' => $viewAns, 'user' => $user,
                                'countLikes' => $countLikes, 'url' => $url, 'countAnswer' => $countAnswer, 'likeByUser' => $likeByUser]);
            $views[] = $view;
        };

        if (isset($this->user)) {

            $url = UserRepository::getUrlAvatar($this->user->avatar);

            $viewProfileMenu = view('layout.profileMenu')->with(['user' => $this->user, 'url' => $url]);

            return view('layout/blog')->with(['title' => $this->title, 'views' => $views,
                'messages' => $messages, 'viewProfileMenu' => $viewProfileMenu]);
        }
        else{
            return view('layout/blog')->with(['title' => $this->title, 'views' => $views,
                'messages' => $messages]);
        }

    }

    public function logOut(){
        return redirect('index');
    }

    public function getPage($page){

        return view('layout/blog')->with(['title'=>$this->title, 'page'=>$page]);

    }


}
