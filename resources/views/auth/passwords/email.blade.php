@extends('layouts.app')

@section('title','パスワードリセット')

@section('header')
<header-component></header-component>
@endsection('header')

@section('content')
<div class="p-password__email">
    <h2>パスワードリセット</h2>

    <div class="p-password__email__lead">
        <p>登録しているメールアドレスにパスワード再設定の案内が送信されます。</p>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="c-form">

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="c-form__group">
                <label for="email">メールアドレス</label>
                <div>
                    <input id="email" type="email" placeholder="メールアドレス" class="@error('email')   @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <p class="c-form__error">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror

                </div>
            </div>

            <div class="c-form__group">
                <div class="c-single-button-group">
                    <div>
                        <button type="submit" class="c-button-main">
                            送信する
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection

@section('footer')
<footer-component>
</footer-component>
@endsection