<?php

namespace App\Http\Controllers\authUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthUserController extends Controller
{

    public function show(){
        return view('welcome');
    }

}
