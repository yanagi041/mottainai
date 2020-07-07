@extends('layouts.enter_mailpass')

@section('title','コンビニ会員登録')

@section('p-class', 'p-regist-convini')


@section('h2')
<h2>コンビニ会員登録</h2>
@endsection('h2')

<!-- start 入力フォーム -->

<!-- 変数宣言 -->
@php
$formCheck = 'show-password';
$user = 'convini';
$buttonWord = '利用規約に同意して登録する';
@endphp

<!-- 遷移先指定 -->
@section('route', 'register/convini')

<!-- end 入力フォーム -->