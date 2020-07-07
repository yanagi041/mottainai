<?php
//====================================
//用途：プロフィール・商品の登録・編集に使う
//====================================
//子テンプレートでinput要素を指定する

// 以下、子テンプレートで定義が必要な変数
//$buttonWord:ボタンの文言
?>

@extends('layouts.app')


@section('header')
<header-component :authcheck="@auth true @endauth @guest false @endguest"></header-component>
@endsection

@section('content')
<!-- start ページのクラスを指定。-->
<div class="@yield('p-class', 'p-mailpass')">
<!-- end ページのクラスを指定。-->

<!-- start h2 -->
@yield('h2')
<!-- end h2 -->
<div class="c-form">

<!-- start 入力フォーム -->
    <!-- start 遷移先指定 -->
    <form method="POST" action="@yield('route')">
    <!-- end 遷移先指定 -->
        @csrf

        <!-- content -->
        @yield('input')
        <!-- content end -->

        <div class="c-form__group">
            <div class="c-single-button-group">
                <div>
                    <button type="submit" class="c-button-main">
                        {{ $buttonWord }}
                    </button>
                </div>
            </div>
        </div>

        <div class="c-link__under-button">
        @yield('link__under-button')
        </div>
        
    </form>
    <!-- end 入力フォーム -->
</div>

</div>
@endsection

@section('footer')
<footer-component>
</footer-component>
@endsection