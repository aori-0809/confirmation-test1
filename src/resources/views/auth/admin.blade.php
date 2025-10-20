@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('content')
<div class="register__content">
    <div class="search-area">

    </div>
    <!-- <div class="export-button"> エクスポートボタン　</div> -->
    <!-- <div class="pagenation">ページネーションを実装</div> -->
    <table class="search">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th>　</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->status ?? 'Active' }}</td>
                <td>
                    <button class="btn btn-sm btn-primary">編集</button>
                    <button class="btn btn-sm btn-danger">削除</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection