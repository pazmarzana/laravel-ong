<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json($users, 200);
    }
    public function destroy(User $user){
    $user->delete();
    }
}
