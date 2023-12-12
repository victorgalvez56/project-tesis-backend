<?php

namespace App\Http\Controllers;

use App\User as AppUser;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {



        try {
            $user = new AppUser();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' =>  $e->getMessage()
            ];
        }
    }
}
