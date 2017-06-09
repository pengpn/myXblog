<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($name)
    {
        $user = User::where('name',$name)->firstOrFail();
        return view('user.show',compact('user'));
    }
}
