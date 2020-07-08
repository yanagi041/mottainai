<div class="c-sidebar">

    <!-- start 入力フォーム -->
    <div class="c-form">
        <!-- start 遷移先指定 -->
        <form method="GET" action="">
            <!-- end 遷移先指定 -->
            @csrf

            <span><i class="fas fa-yen-sign"></i> 価格</i></span>
            <select class="c-sidebar__menu-item" name="discount_price">
                @foreach(config('price') as $index => $name)
                <option value="{{ $index }}" @if(old('discount_price')==$index) selected @endif>
                    {{$name}}
                </option>
                @endforeach
            </select>

            <span><i class="far fa-calendar-alt"></i> 賞味期限</i></span>
            <select class="c-sidebar__menu-item" name="bestby">
                <option value="0">指定なし</option>
                <option value="date_yet">賞味期限前</option>
                <option value="date_over">賞味期限切れ</option>
            </select>

            <span><i class="fas fa-location-arrow"></i> 販売地域</span>
            <select class="c-sidebar__menu-item" name="pref">
                @foreach(config('pref') as $index => $name)
                <option value="{{ $index }}" @if(old('pref')==$index) selected @endif>{{$name}}</option>
                @endforeach
            </select>

            <div class="c-form__group">
                <div class="c-single-button-group">
                    <!-- <div> TODO:問題なければ削除 -->
                    <button type="submit" class="c-button-main">
                        検索する
                    </button>
                    <!-- </div> -->
                </div>
            </div>
        </form>

    </div>


</div>
<!-- end 入力フォーム -->