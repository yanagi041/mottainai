<?php
//====================================
//用途：マイページのサイドバーメニュー
//====================================
?>

<a href="{{ route('mypage.profile') }}"><div class="c-sidebar__menu-item">{{ __('profile') }} <i class="fas fa-angle-right"></i></div></a>
<a href="{{ route('mypage.item') }}"><div class="c-sidebar__menu-item">{{ __('regist_item') }} <i class="fas fa-angle-right"></i></div></a>
<a href="{{ route('mypage.itemlist') }}"><div class="c-sidebar__menu-item">{{ __('itemlist_registed') }} <i class="fas fa-angle-right"></i></div></a>
<a href="{{ route('mypage.itemlist-soldout') }}"><div class="c-sidebar__menu-item">{{ __('itemlist_soldout') }} <i class="fas fa-angle-right"></i></div></a>

