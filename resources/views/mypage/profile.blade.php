@extends('layouts.profile-and-item')

<!-- ページのクラス -->
@section('p-class', 'p-profile')

<!-- h2 -->
@section('h2')
<h2>{{ __('profile') }}</h2>
@endsection('h2')


<!-- 入力フォーム -->
<!-- 変数宣言 -->
@php
$buttonWord = '更新する';
@endphp

<!-- 遷移先指定 -->
@section('route')
{{ route("mypage.profile") }}
@endsection('route')

<!-- content -->
@section('input')
<input-component title="shop_name" ja-title="{{ __('shop_name') }}"></input-component>
<input-component title="branch_name" ja-title="{{ __('branch_name') }}"></input-component>
<input-component title="address" ja-title="{{ __('address') }}"></input-component>
<input-component title="email" ja-title="{{ __('email') }}"></input-component>
@endsection('input')

<!-- ボタン下のリンク -->
@section('link__under-button')
<a href="{{ route('password.request') }}">
    パスワード変更はコチラ
</a>
@endsection('link__under-button')