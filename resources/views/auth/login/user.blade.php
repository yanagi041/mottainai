@extends('layouts.enter_mailpass')

@section('title','ユーザーログイン')

@section('p-class', 'p-login-user')

@section('h2')
<h2>ユーザーログイン</h2>
@endsection('h2')

<!-- start 入力form -->
<!-- 変数宣言 -->
@php
$formCheck = 'remember';
$user = 'user';
$buttonWord = 'ログイン';
@endphp

<!-- 遷移先指定 -->
@section('route', 'login/user')