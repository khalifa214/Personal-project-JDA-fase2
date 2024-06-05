<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginPage() {
        return view("login");
    }

    public function login(Request $request) {
        $admin = Admin::where("username", $request->username)->first();

        if ($admin == null) {
            return redirect()->back()->with("error", "Username yang anda masukkan salah!.");
        }
        if (!($request->password == $admin->password)) {
            return redirect()->back()->with("error", "Password yang anda masukkan salah!.");
        }
    
        Session::put(["isLoged" => true]);
        Session::put(["token" => "124fj154KL132cI06P541pP20541"]);

        return redirect()->route("dashboard.index");
    }

    public function logout() {
        session()->forget("isLogged");
        session()->forget("token");

        return redirect()->route("auth.loginPage");
    }
}
