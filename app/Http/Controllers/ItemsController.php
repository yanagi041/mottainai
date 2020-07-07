<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App;
use App\Item;
use App\User;
use App\Category;

//用途：商品関連、マイページ用
class ItemsController extends Controller
{

    //home(商品検索ページ)
    public function showHome(Request $request)
    {
        //　絞り込み条件がある場合
        $price = $request->input('discount_price');
        switch($price){
            case 0:
                break;
            case 'date_yet':

        }
        $bestby = $request->input('bestby');


        $newitems = Item::select('items.id', 'user_id', 'pic', 'item_name', 'regular_price', 'discount_price', 'best_before', 'users.prefecture', 'users.shop_name', 'users.branch_name')
            ->leftjoin('users', 'user_id', '=', 'users.id')->where('is_sold', '0')->where('items.is_deleted', '0')
            ->when($price, function($query) use($price){
                return $query->where()
            })
            ->latest('items.updated_at')->paginate(24);



        // if (request()) {
        //     // 価格
        //     // 賞味期限
        //     // 販売地域
        //     // 
        //     // 

        //     $newitems = Item::select('items.id', 'user_id', 'pic', 'item_name', 'regular_price', 'discount_price', 'best_before', 'users.prefecture', 'users.shop_name', 'users.branch_name')
        //         ->leftjoin('users', 'user_id', '=', 'users.id')->where('is_sold', '0')->where('items.is_deleted', '0')
        //         ->latest('items.updated_at')->paginate(24);
        // }
        $pagination = $newitems;
        $prefs = config('pref');
        return view('home')->with(['prefs' => $prefs, 'newitems' => $newitems, 'pagination' => $pagination]);
    }

    //マイページ表示
    public function showMypage()
    {
        $allItems = Auth::user()->items()->latest('updated_at')->paginate(5);
        $soldItems = Auth::user()->items()->where('is_sold', '1')->latest('updated_at')->paginate(5);
        return view('mypage/index', ['items' => $allItems, 'soldItems' => $soldItems]);
    }

    //商品登録ページ表示
    public function newItem()
    {
        return view('mypage/item');
    }

    //商品登録ページ表示
    public function editItem()
    {
        //TODO: 編集コード書く
        return view('mypage/item');
    }

    //商品削除
    public function deleteItem()
    {
        // TODO:削除するコード書く
        return view('mypage/item');
    }

    //出品した商品表示
    public function showItemlist()
    {
        //コンビニユーザーは登録している商品を表示
        //TODO:userの場合は？
        $allItems = Auth::user()->items()->latest('updated_at')->paginate(10);
        $title = '出品した商品一覧';
        return view('mypage/itemlist', ['items' => $allItems, 'title' => $title]);
    }

    //売り切れた商品表示
    public function showItemlistSoldOut()
    {
        //コンビニユーザーは登録している商品を表示
        $allItems = Auth::user()->items()->where('is_sold', '1')->latest('updated_at')->paginate(10);
        $title = '購入された商品一覧';
        return view('mypage/itemlist', ['items' => $allItems, 'title' => $title]);
    }

    //商品詳細
    public function showItemdetail($id)
    {
        if (!ctype_digit($id)) {
            return redirect('/mypage')->with('flash_message', __(('Invalid opration was performed.')));
        }

        //TODO:JOINで繋げよう
        //商品情報はgetで受け取ったidのもの
        $item = Item::select('user_id', 'pic', 'item_name', 'category_id', 'regular_price', 'discount_price', 'best_before', 'is_sold', 'customer_id', 'is_deleted')->find($id);
        //カテゴリーの名を商品情報のcategory_idを使って取得
        $category = Category::select('category_name')->find($item['category_id']);
        //出品者情報をUserから取得
        $shop = User::select('id', 'shop_name', 'branch_name', 'address', 'is_deleted')->find($item['user_id']);


        return view('itemdetail', ['item' => $item, 'shop' => $shop, 'category' => $category]);
    }
}
