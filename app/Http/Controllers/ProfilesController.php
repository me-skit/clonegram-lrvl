<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index($id)
    {
        //dd($user);
        $user = User::findOrFail($id);
        return view('home', ['user' => $user]);
    }    
}
