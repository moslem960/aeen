<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function __Construct(){
        $this->middleware('auth')->only('index');
    }
    public function index()
    {
        return 'hi moslemi jon';
    }

}
