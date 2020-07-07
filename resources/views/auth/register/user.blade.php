@extends('layouts.enter_mailpass')

@section('title','ユーザー登録')

@section('p-class', 'p-regist-user')

@section('h2')
<h2>ユーザー登録</h2>
@endsection('h2')

<!-- start 入力form -->
<!-- 変数宣言 -->
@php
$formCheck = 'show-password';
$user = 'user';
$buttonWord = '利用規約に同意して登録する';
@endphp

<!-- 遷移先指定 -->
@section('route', 'register/user')