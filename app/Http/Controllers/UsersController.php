<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

//    public function edit()
//    {
//        return "hello edit";
//    }
//
//    public function update()
//    {
//        return "hello update";
//    }
}
