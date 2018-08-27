<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
    	return view('home_pages.home');
    }
    public function player_registration(){
    	return view('home_pages.player_registration');
    }
}
