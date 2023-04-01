<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit()
    {
        // 編集画面のビューを表示する
        return view('profiles.edit');
    }
}


