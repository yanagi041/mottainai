@extends('layouts.app')

@section('title','ホーム')

@section('header')
<header-component :authcheck="@auth true @endauth @guest false @endguest" :logout="'{{route('logout')}}'">
</header-component>
@endsection

@section('content')
<div class="p-home">
    <item-row-component :newitems="{{ $newitems1 }}" :category="{{ $category1 }}"></item-row-component>
    <item-row-component :newitems="{{ $newitems2 }}" :category="{{ $category2 }}"></item-row-component>
    <item-row-component :newitems="{{ $newitems3 }}" :category="{{ $category3 }}"></item-row-component>
    <item-row-component :newitems="{{ $newitems4 }}" :category="{{ $category4 }}"></item-row-component>
</div>

@endsection

@section('footer')
<footer-component></footer-component>
@endsection