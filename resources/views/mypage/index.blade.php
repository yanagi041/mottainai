@extends('layouts.mypage-items')

<!-- ページのクラス -->
@section('p-class', 'p-mypage__index')

<!-- h2 -->
@section('h2')
<h2>マイページ</h2>
@endsection('h2')

<!-- コンテンツ -->
@section('itemlist-mypage')

<div class="p-mypage__index__items">

    <h3>出品した商品</h3>
    @foreach($items as $item)
    <item-in-list-component :items="{{ $item }}"></item-in-list-component>
    @endforeach
    <div class="p-mypage__index__itemlist">
        <a class="p-mypage__index__itemlist__button" 　href="{{ route('mypage.itemlist') }}"> すべてを表示</a>
    </div>
</div>


<div class="p-mypage__index__items">
    <h3>購入された商品</h3>
    @foreach($soldItems as $soldItem)
    <item-in-list-component :items="{{ $soldItem }}"></item-in-list-component>
    @endforeach
    <div class="p-mypage__index__itemlist">
        <a class="p-mypage__index__itemlist__button" href="{{ route('mypage.itemlist-soldout') }}"> すべてを表示</a>
    </div>
</div>

@endsection('itemlist-mypage')