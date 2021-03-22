<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }


}
