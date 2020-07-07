@extends('layouts.profile-and-item')

<!-- ページのクラス -->
@section('p-class', 'p-mypage__item')

<!-- h2 -->
@section('h2')
<h2>{{ __('regist_item') }}</h2>
@endsection('h2')


<!-- 入力フォーム -->
<!-- 変数宣言 -->
@php
$buttonWord = '更新する';
@endphp

<!-- 遷移先指定 -->
@section('route')
{{ route("mypage.item") }}
@endsection('route')

<!-- content -->
<!-- TODO:categoryはラジオ、picはimg -->
@section('input')
<div class="u-textalign-center">
    <photo-form-component></photo-form-component>
</div>
<input-component title="item_name" ja-title="{{ __('item_name') }}"></input-component>
<input-component title="category" ja-title="{{ __('category') }}"></input-component>
<input-component title="regular_price" ja-title="{{ __('regular_price') }}"></input-component>
<input-component title="discount_price" ja-title="{{ __('discount_price') }}"></input-component>
<input-component title="best_before" ja-title="{{ __('best_before') }}"></input-component>
@endsection('input')

<!-- ボタン下のリンク -->
@section('link__under-button')
<a href="{{ route('item.delete') }}">
    この商品を削除する
</a>
@endsection('link__under-button')