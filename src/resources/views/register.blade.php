@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('/css/register.css') }}" />
@endsection

@section('content')
<header class="header">
    <div class="header__inner">
        <a class="header-nav__link" href="/login">login</a>
    </div>
</header>
<form class="form" action="{{ route('register') }}" method="post">
@csrf
    <div class="register__content">
            <div class="register__title">
                <h2>Register</h2>
            </div>
            <div class="register__area">
                <div class="register__area--name">
                    <h3 class="register__area--name-title">お名前</h3>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="例: 山田　太郎">
                    @error('name') <span>{{ $message }}</span> @enderror
                </div>
                <div class="register__area--email">
                    <h3 class="register__area--email-title">メールアドレス</h3>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">
                    @error('email') <span>{{ $message }}</span> @enderror
                </div>
                <div class="register__area--password">
                    <h3 class="register__area--password-title">パスワード</h3>
                    <input type="password" name="password" value="{{ old('email') }}" placeholder="例: coachtech1106">
                    @error('password') <span>{{ $message }}</span> @enderror
                </div>
                <button class="register__button" type="submit">登録</button>
            </div>
    </div>
</form>

@endsection