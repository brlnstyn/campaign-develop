<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function formRegister()
    {
        return view('auth.register');

    }

    public function formlogin()
    {
        return view('auth.login');

    }

    public function storeRegister(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => ['required', 'min:5'],
            'email' => ['required','email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
        ]);

       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/form-login')->with('success','Registration is successfully, Please Login');
        }

    }

    public function storeLogin(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success','Congratulations, Login successfully !');
        };

        return back()->with('error','Credentials Email or Password not match our records.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('form-login');
    }
}
