<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function index()
    // {
    //     return view('app/http/controllers/frontend/profilecontroller.php');
    // }
    public function index()
    {
        return view("frontend.profile.show");
    }
}
