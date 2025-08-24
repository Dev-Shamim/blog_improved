<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     return view('app/http/controllers/admin/dashboardcontroller.php');
    // }
    public function index()
    {
        return view("admin.dashboard");
    }
}
