<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UsersController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user_id = Auth::id();
        $user_info = User::select('*')->find($user_id);
        return view('user', ['user_info' => $user_info]);
    }
}
