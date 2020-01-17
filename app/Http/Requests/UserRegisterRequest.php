<?php

namespace App\Http\Requests;

/**
 * Class UserRegisterRequest
 *
 * $ php artisan make:request UserRegisterRequest コマンドで作成したクラスです
 */
class UserRegisterRequest extends Request
{
    /** @var string */
    protected $redirectRoute = 'get.register';

    /**
     * 認証関係の判定を行う場合はここに処理を記述する。
     * 特にない場合は常にtrueを返しておく。
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'captcha_code' => 'required|captcha'
        ];
    }
}
