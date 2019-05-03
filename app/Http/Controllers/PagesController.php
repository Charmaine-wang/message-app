<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class PagesController extends Controller
{
         public function index()
    {
        $user = User::find(1);
        $messages = Message::all()->where('sender_id', $user->id);
        return view('index')->with(['name' => $user->name, 'messages' => $messages]);
    }

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('home');
    }

}


