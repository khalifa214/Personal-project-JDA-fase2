<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        $request->session()->regenerate();
        $request->put("isLoged", true);
        $request->put("userId", $admin->id);

        return redirect()->route("dashboard.index");
    }

    public function logout() {
        
    }
}
