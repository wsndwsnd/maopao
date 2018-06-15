<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PowerInsertRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'username' => 'required|unique:users,user_name|regex:/^[a-zA-Z]{1}[\w]{5,17}$/',
            'password' => 'required|regex:/[\w]{6,18}/',
            'conpassword' => 'required|same:conpassword'
        ];
    }

    public function messages()
        {
            return [
                'username.unique' => '用户已存在',
                'username.required' => '用户是必填的',
                'username.regex' => '用户名格式不正确',
                'password.required' => '密码是必填的',
                'password.regex' => '密码格式不对',
                'conpassword.required' => '确认密码是必填的',
                'conpassword.same' => '两次密码不一致'
            ];
        }
}
