@extends('layouts.app')

@section('title','検索ページ')

@section('header')
<header-component :authcheck="@auth true @endauth @guest false @endguest" :logout="'{{route('logout')}}'">
</header-component>
@endsection

@section('content')
<div class="p-search">
    <search-sidebar-component></search-sidebar-component>
</div>

@endsection

@section('footer')
<footer-component></footer-component>
@endsection