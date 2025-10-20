@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('/css/thanks.css') }}" />
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__message">お問い合わせありがとうございました</div>
    <div class="home">
        <a class="home__button" href="/">HOME</a>
@endsection