<?php

namespace App\Http\Controllers;

use App\User as AppUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new AppUser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }
}
