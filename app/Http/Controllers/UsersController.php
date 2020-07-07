<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //コンビニ会員登録ページ表示
    public function showProfile()
    {
        return view('mypage/profile');
    }
}
