<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //admin direct page
    public function adminHomePage(){
        return view('admin.home');
    }
}
