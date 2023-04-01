<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // ログインリクエストは誰でも送信可能であるため、常にtrueを返す
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //ログイン画面用
            'email' => 'required|email',
            'password_hash' => 'required',

            //新規登録画面用

            //プロフィール登録画面用
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //ログイン画面用
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => '正しい形式でメールアドレスを入力してください。',
            'password.required' => 'パスワードを入力してください。',

            //新規登録画面用

            //プロフィール登録画面用
        ];
    }
}
