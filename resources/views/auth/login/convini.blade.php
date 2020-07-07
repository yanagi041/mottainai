@extends('layouts.enter_mailpass')

@section('title','コンビニ会員ログイン')

@section('p-class', 'p-login-convini')

@section('h2')
<h2>コンビニ会員ログイン</h2>
@endsection('h2')

<!-- start 入力form -->
<!-- 変数宣言 -->
@php
$formCheck = 'remember';
$user = 'convini';
$buttonWord = 'ログイン';
@endphp

<!-- 遷移先指定 -->
@section('route', 'login/convini')