@extends('layouts.app')

@section('title','ホーム')

@section('header')
<header-component :authcheck="@auth true @endauth @guest false @endguest" :logout="'{{route('logout')}}'">
</header-component>
@endsection

@section('content')
<div class="p-home">
    <h2>販売中の商品</h2>
    <div class="u-two-column">
        <div class="p-home__searchbox">
            <!-- 絞り込み用サイドバー -->
            @component('components.searchbox-sidebar')@endcomponent('components.searchbox-sidebar')
            <!-- keyword, price, pref, bestdate -->
        </div>
        <div class="p-home__items">
            <div class="c-item-row">
                @foreach($newitems as $newitems)
                <item-row-component :newitems="{{ $newitems }}"></item-row-component>
                @endforeach
            </div>
            <!-- ページネーション -->
            {{ $pagination->appends(request()->input())->links() }}
            <!-- ページネーション -->
        </div>
    </div>


</div>


@endsection


@section('footer')
<footer-component></footer-component>
@endsection