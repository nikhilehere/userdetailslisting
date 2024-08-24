<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDetailsController extends Controller
{
    public function userDetails() {
        $users = User::with('department', 'designation')->get();
        return view('userdetails',compact('users')); 
    }
}
