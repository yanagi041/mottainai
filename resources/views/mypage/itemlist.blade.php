@extends('layouts.mypage-items')

<!-- ページのクラス -->
@section('p-class', 'p-mypage__itemlist')

<!-- h2 -->
@section('h2')
<h2>{{ $title }}</h2>
@endsection('h2')

<!-- コンテンツ -->
@section('itemlist-mypage')


@foreach($items as $item)
<item-in-list-component :items="{{ $item }}"></item-in-list-component>
@endforeach

<!-- ページネーションここから -->
{{ $items->links() }}
<!-- ページネーションここまで -->

@endsection('itemlist-mypage')