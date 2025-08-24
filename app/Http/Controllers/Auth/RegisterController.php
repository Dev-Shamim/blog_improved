<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    // public function index()
    // {
    //     return view('app/http/controllers/auth/registercontroller.php');
    // }

    public function register(Request $request)
    {
        return view("auth.register");
    }

  public function store(Request $request)
{


    // 🧪 Dump all incoming form data for debugging
    // dd($request->all());

    // ✅ Validate incoming request data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    if ($validator->fails()) {
        // 🔁 Validation failed — redirect back with errors
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // 👤 Create new user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // 🔐 Log the user in (optional)
    // auth()->login($user);

    // 🌟 Redirect to dashboard or welcome page
    return redirect()->route('admin.dashboard')->with('success', 'রেজিস্ট্রেশন সফল হয়েছে!');
}

}
