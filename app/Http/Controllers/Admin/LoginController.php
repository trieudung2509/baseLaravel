<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.administrator.login');
    }
    public function postLogin(Request $req)
    {
        $login = [
            'name'     => $req->name,
            'password' => $req->password,
            'role'     => 1,
            'status'    => 1
        ];
        if (Auth::attempt($login)) {
            return redirect()->route('admin.dashboard');
        }else {
            return redirect()->back()->with('message', 'Tên hoặc mật khẩu không đúng');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.dashboard');
    }

}
