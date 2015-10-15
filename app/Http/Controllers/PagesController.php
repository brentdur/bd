<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home(){

        $url = url('lists');
    	return view('pages.static.welcome', compact('url'));
    }

    public function lists(){

    	return view('pages.lists');
    }
}
