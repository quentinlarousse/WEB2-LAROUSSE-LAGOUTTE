<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

//creation de notre page profile


    public function __construct(){
        $this->middleware('auth');
    }




    public function getEdit(){

        $user = Auth::user();
        return view('users.edit', compact('user'));

    }
}
