<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function index()
    // {
    //     return view('app/http/controllers/admin/profilecontroller.php');
    // }

     public function me()
    {
        return view('admin.profile.show');
    }
    public function edit()
    {
        return view('admin.profile.edit');
    }

}
