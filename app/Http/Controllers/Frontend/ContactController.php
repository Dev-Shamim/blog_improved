<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function index()
    // {
    //     return view('app/http/controllers/frontend/contactcontroller.php');
    // }
    public function index()
    {
        return view('frontend.contact.index');
    }
}
