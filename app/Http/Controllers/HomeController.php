<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\DatabaseNotification;
use App\User;
use Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware(array('auth','auth.verify'));
        $this->middleware(array('auth','auth.verify'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

//         public function notify(){


// $users=User::all();
// $letter=collect(['title'=>'New Policy Update','body'=>'we have updated over tos privacy policy, kindly read it!']);

// Notification::send($users,new DatabaseNotification($letter));

// return view('home');

// }

    public function notify(){

        $users = User::all();

        $letter = collect(['title'=>'New Policy Update','body'=>'we have updated over tos privacy policy kindly read it!']);

        Notification::send($users,new DatabaseNotification($letter));

        return view('home');
    }



}
