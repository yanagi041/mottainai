<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//用途：ログイン前のページ遷移全般
class TopController extends Controller
{
    //コンビニ会員登録ページ表示
    public function showConviniRegister()
    {
        return view('auth/register/convini');
    }

    //ユーザー登録ページ表示
    public function showUserRegister()
    {
        return view('auth/register/user');
    }
    
    //コンビニ会員ログインページ表示
    public function showConviniLogin()
    {
        return view('auth/login/convini');
    }

    //ユーザーログインページ表示
    public function showUserLogin()
    {
        return view('auth/login/user');
    }

    //利用規約表示
    public function showAgreement()
    {
        return view('agreement');
    }
}
