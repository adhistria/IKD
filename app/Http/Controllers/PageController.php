<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\User;
class PageController extends Controller
{
    public function register(){
        $users = User::all();
        return view('admin-addadmin')->with('users',$users);
    }
    public function welcome(){
        $cars = Car::all();
        return view('welcome')->with('cars',$cars);
    }
}
