<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\auth\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Crypt;


class LoginController extends Controller
{
    function index()
    {
        return view('admin.auth.login');
    }

    function authenticate(REQUEST $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $admin_user = new Register;
        $admin_key = $admin_user->checkAuthencation($credentials);
        if ($admin_key) {
            $request->session()->regenerate();
            $request->session()->put('admin_id', Crypt::encrypt($admin_key));
            return redirect()->route('admin-dashboard')->withSuccess('You have successfully logged in!');
        }
        return back()->withErrors('Your provided credentials do not match in our records.');
    }

    public function register()
    {
        return view('admin.auth.register');
    }

    public function registerStore(REQUEST $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'name' => 'required',
            'password' => 'required|confirmed|max:6'
        ]);
        $register = new Register();
        $register->email = $request->input('email');
        $register->name = $request->input('name');
        $register->password = Hash::make($request->password);
        $register->is_allowed = 1;
        $register->save();
        return redirect()->route('login')->withSuccess('You have successfully registered & logged in!');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login')
            ->withSuccess(['You have logged out successfully!']);
    }
}
