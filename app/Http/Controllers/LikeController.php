<?php

namespace App\Http\Controllers;

use App\Services\LikeService;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    private $likeService;

    public function __construct(LikeService $likeService)
    {
        $this->likeService = $likeService;
    }

    public function like(Request $request){
        return $this->likeService->likeByUser($request);
    }
}
