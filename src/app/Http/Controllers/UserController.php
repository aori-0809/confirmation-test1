<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        return view('register');
    }

    public function store(UserRequest $request)
    {
        $user=$request->only(['name','email','password']);
        User::create($user);
        return redirect('/login');
    }
    
    public function showLoginForm(Request $request)
    {
        return view('login');
    }

    public function login(UserRequest $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => '提供された認証情報が正しくありません。',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
        ])->onlyInput('email');
    }
}
