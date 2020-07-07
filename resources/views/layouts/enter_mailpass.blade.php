<?php
//====================================
//用途：メールアドレスとパスワードを入力するときに使う。
//例：ログイン、ユーザー登録
//====================================

// 以下、子テンプレートで定義が必要な変数

// //入力フォーム
// $formCheck:「remember(パスワード保存)」か「show-password(パスワード表示)」
// $user: 「convini」か「user」
// $buttonWord: ボタンの文言

?>


@extends('layouts.app')


@section('header')
<header-component></header-component>
@endsection

@section('content')

<!-- start ページのクラスを指定 -->
<div class="@yield('p-class', 'p-mailpass')">
<!-- end ページのクラスを指定 -->


<!-- start h2 -->
@yield('h2')
<!-- end h2 -->
    
<!-- start 入力フォーム -->
<div class="c-form">
    <!-- start 遷移先指定 -->
    <form method="POST" action="route(@yield('route'))">
        <!-- end 遷移先指定 -->
        @csrf

        <div class="c-form__group">
            <label for="email">メールアドレス</label>
            <div>
                <input id="email" type="email" placeholder="メールアドレス" class="form-control @error('email')   @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <p class="c-form__error">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

            </div>
        </div>

        <div class="c-form__group">
            <label for="password">パスワード</label><label class="c-form__label__char">(英数字8文字以上)</label>

            <div>
                <input id="password" type="password" placeholder="パスワード"
                    class="form-control @error('password')   @enderror" name="password" required
                    autocomplete="current-password">

                @error('password')
                <p class="c-form__error">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>
        </div>

        <div class="c-form__group">
            <div class="form-check">
                <label class="form-check-label" for="{{ $formCheck }}">
                    <input type="checkbox" name="{{ $formCheck }}" id="{{ $formCheck }}" {{ old('$formCheck')
                        ? 'checked' : '' }}>

                    <!-- start チェックボックス横の言葉 -->
                    <!-- 子テンプレートで$formCheckを定義する -->
                    @if($formCheck === 'remember')
                    <span>ログイン情報を記憶</span>
                    @elseif($formCheck === 'show-password')
                    <span>パスワードを表示する</span>
                    @endif
                    <!-- end チェックボックス横の言葉 -->

                </label>
            </div>
        </div>

        <div class="c-form__group">
            <div class="c-single-button-group">
                <!-- <div> TODO:問題なければ削除 -->
                    <button type="submit" class="
                        @if($user === 'user')
                        c-button-main
                        @elseif($user === 'convini')
                        c-button-sub
                        @endif">
                        {{ $buttonWord }}
                    </button>
                <!-- </div> -->
            </div>
        </div>

        <div class="c-link__under-button">
            @if($formCheck === 'remember')
            <a href="{{ route('password.request') }}">
                パスワードを忘れた方はコチラ
            </a>
            @elseif($formCheck === 'show-password')
            <a href="{{ route('agreement') }}">
                利用規約
            </a>
            @endif
        </div>
    </form>
    <!-- end 入力フォーム -->

</div>
</div>

@endsection

<!-- TODO:場所を考える -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    //パスワード表示
    $(function() {
        var pw = document.getElementById('password');
        var pwCheck = document.getElementById('show-password');
        pwCheck.addEventListener('change', function() {
            if (pwCheck.checked) {
                pw.setAttribute('type', 'text');
            } else {
                pw.setAttribute('type', 'password');
            }
        }, false);
    });
</script>


@section('footer')
<footer-component>
</footer-component>
@endsection