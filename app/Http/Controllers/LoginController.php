<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function login(LoginRequest $request)
    {   
        //dbより既存ユーザーの最初の行を取得する
       $auth_user = $this->getAuthUser($request->email, $request->password_hash);
        // 既存ユーザーかどうかの判定
        if ($auth_user == null) { return redirect()->route('login'); }
        //要調査
        $request->validated();
        // 既存ユーザーならログイン済みでトップ画面に遷移
        return redirect('/top');
        
    }

    // ログイン時のユーザーデータを取得しユーザーデータを返す
    public function getAuthUser(string $email, string $password_hash): ?User
    {
        return User::where([
            ['email', '=' ,$email],
            ['password_hash', '=', $password_hash]]
        )->first();
    }

}

    
