@extends('layouts.app')

@section('title','パスワード再設定')

@section('header')
<header-component></header-component>
@endsection


@section('content')

<div class="password-reset">
    <h2>パスワード再設定</h2>
    <div class="c-form">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="c-form-group">
                <label for="email">{{ __('E-Mail Address')
                    }}</label>

                <div>
                    <input id="email" type="email" class="@error('email') @enderror" name="email"
                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <p class="c-form__error">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>
            </div>

            <div class="c-form-group">
                <label for="password">{{ __('Password')
                    }}</label>

                <div>
                    <input id="password" type="password" class="@error('password')   @enderror" name="password" required
                        autocomplete="new-password">

                    @error('password')
                    <p class="c-form__error">
                        <strong>{{ $message }}</strong>
                    </p>
                    @enderror
                </div>
            </div>

            <div class="c-form__group">
                <label for="password-confirm">{{ __('Confirm Password')
                    }}</label>

                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>

            <div class="c-form__group">
                <div class="c-single-button-group">
                    <button type="submit" class="button-dark">再設定する</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection


@section('footer')
<footer-component></footer-component>
@endsection