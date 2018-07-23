<?php

namespace App\Services;

use App\Like;
use App\Repositories\LikeRepository;
use App\Repositories\LikeServiceProvide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class LikeService
{

    protected $LikeRepository;

    public function __construct(LikeRepository $likeRepository)
    {
        $this->likeRepository = $likeRepository;
    }

    public function likeByUser($request){

        $idMessage = $request->json('id');

        if ($this->likeRepository::countLikeByUser($idMessage) == 0){

            $this->likeRepository->insertLike($idMessage);
        }
        else{
            $this->likeRepository->deleteLike($idMessage);
        }

        return response()->json($this->likeRepository->countLike($idMessage));

    }

}