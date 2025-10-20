@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('/css/login.css') }}" />
@endsection

@section('content')
<form class="form" action="{{ route('login') }}" method="post">
@csrf
    <div class="login__content">
        <div class="login__title">
            <h2>Login</h2>
        </div>
        <div class="login__area">
            <div class="login__area--email">
                <h3 class="login__area--email-title">メールアドレス</h3>
                <input type="email" name="email" placeholder="例: test@example.com">
                @error('email') <span>{{ $message }}</span> @enderror
            </div>
            <div class="login__area--password">
                <h3 class="login__area--password-title">パスワード</h3>
                <input type="password" placeholder="例: coachtech1106">
                @error('password') <span>{{ $message }}</span> @enderror
            </div>
            <button class="login__button" type="submit">ログイン</button>
        </div>
    </div>
</form>

@endsection