<?php

namespace App\Http\Controllers;

use App\Question;
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
            return [
                'success' => true,
                'message' => "success"
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' =>  $e->getMessage()
            ];
        }
    }
    public function questions(Request $request)
    {
        try {
            $user = new Question();
            $user->username = $request->username;
            $user->type = $request->type;
            $user->chronometer = $request->chronometer;
            $user->question = $request->question;
            $user->response = $request->response;
            $user->save();
            return [
                'success' => true,
                'message' => "success"
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' =>  $e->getMessage()
            ];
        }
    }
}
