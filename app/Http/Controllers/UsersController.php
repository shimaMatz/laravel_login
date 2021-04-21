<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $user_info = User::select('*')->find($user_id);
        return view('users.index', ['user_info' => $user_info]);
    }
}
