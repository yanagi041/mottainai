@extends('layouts.app')

@section('title','ホーム')

@section('header')
<header-component :authcheck="@auth true @endauth @guest false @endguest" :logout="'{{route('logout')}}'">
</header-component>
<div class="p-index__hero">
    <img srcset="/img/hero@2x.png, /img/hero.png 1x" src="/img/hero@2x.png" alt="hero">

    <div class="p-index__hero__lead">
        <p>賞味期限が切れると廃棄されてしまうコンビニの食品。</p>
        <br>
        <p>コンビニの「まだ食べられるのに、このまま廃棄はもったいない…」、<br>
            お客さんの「安くしてくれるなら気にせず食べるのに！」、
        </p>
        <br>
        <p>そんな双方の想いを叶えるサービス、それが</p>
        <br>
        <div class="p-index__bigchar">Haiki Share</div>
        <div class="p-index__smallchar">(はいき シェア)</div>
    </div>
</div>
@endsection

@section('content')
<div class="p-index">
    <div class="p-index__lead">
        <p>登録して、廃棄食品を減らしましょう！</p>
    </div>
    <div class="c-double-button-group">
        <!-- TODO: aタグにc-button-subを統合するかどうか -->
        <div class="c-wrapper-button">
            <a href="{{ route('register.convini') }}">
                <div class="c-button-sub">
                    コンビニ会員<br>
                    登録
                </div>
            </a>
        </div>
        <div class="c-wrapper-button">
            <a href="{{ route('register.convini') }}">
                <div class="c-button-main">
                    ユーザー<br>
                    登録
                </div>
            </a>
        </div>
    </div>
</div>

@endsection

@section('footer')
<footer-component></footer-component>
@endsection