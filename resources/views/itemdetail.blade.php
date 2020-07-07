@extends('layouts.app')

@section('title','商品詳細')

@section('header')
<header-component :authcheck="@auth true @endauth @guest false @endguest" :logout="'{{route('logout')}}'">
</header-component>
@endsection

@section('content')
<h2>{{ __('itemdetail') }}</h2>

<itemdetail-component :item="{{ $item }}" :category="{{ $category }}" :shop="{{ $shop }}"></itemdetail-component>

<div class="u-textalign-center">
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="｢Haiki Share｣でお得に商品GET！" data-hashtags="haikishare" data-lang="ja" data-show-count="false">Tweet</a>
</div>

@endsection
@section('footer')
<footer-component></footer-component>
@endsection