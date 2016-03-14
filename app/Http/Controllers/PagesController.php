<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /**
     * @return string
     */
    public function about(){

        $title = "A propos";



        return view('pages/about', ['title' => $title]);
    }
}
