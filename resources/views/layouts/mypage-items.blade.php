<?php
//====================================
//用途：マイページでアイテムリストがある場合の２カラムテンプレート
//====================================
?>

@extends('layouts.app')


@section('header')
<header-component :authcheck="@auth true @endauth @guest false @endguest"></header-component>
@endsection

@section('content')
<div class="@yield('p-class')">

    <div class="c-mypage__header-banner">
        ローソン新宿駅二号店
    </div>
    @yield('h2')

    <div class="u-two-column">
        <!-- サイドバーのメニュー -->
        <div class="c-sidebar">
            @component('components.menu-sidebar')@endcomponent('components.menu-sidebar')
        </div>

        <!-- 商品一覧 -->
        <div class="c-itemlist">
            @yield('itemlist-mypage')
        </div>
    </div>

</div>
@endsection('content')

@section('footer')
<footer-component>
</footer-component>
@endsection